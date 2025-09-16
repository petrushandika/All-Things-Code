import { MetadataRoute } from 'next'

// Interface untuk data blog posts (simulasi)
interface BlogPost {
  slug: string
  title: string
  publishedAt: string
  updatedAt: string
  category: string
}

// Interface untuk data products (simulasi)
interface Product {
  id: number
  slug: string
  name: string
  updatedAt: string
  category: string
}

// Simulasi data blog posts (dalam implementasi nyata, ambil dari database/CMS)
async function getBlogPosts(): Promise<BlogPost[]> {
  // Simulasi delay API call
  await new Promise(resolve => setTimeout(resolve, 100))
  
  return [
    {
      slug: 'getting-started-nextjs-sitemaps',
      title: 'Getting Started with Next.js Sitemaps',
      publishedAt: '2024-01-15T10:00:00.000Z',
      updatedAt: '2024-01-16T12:00:00.000Z',
      category: 'tutorial'
    },
    {
      slug: 'seo-best-practices',
      title: 'SEO Best Practices for Modern Web Apps',
      publishedAt: '2024-01-10T09:00:00.000Z',
      updatedAt: '2024-01-14T15:30:00.000Z',
      category: 'seo'
    },
    {
      slug: 'dynamic-sitemap-implementation',
      title: 'Dynamic Sitemap Implementation Guide',
      publishedAt: '2024-01-12T14:00:00.000Z',
      updatedAt: '2024-01-16T11:45:00.000Z',
      category: 'development'
    }
  ]
}

// Simulasi data products (dalam implementasi nyata, ambil dari database)
async function getProducts(): Promise<Product[]> {
  // Simulasi delay API call
  await new Promise(resolve => setTimeout(resolve, 100))
  
  return [
    {
      id: 1,
      slug: 'nextjs-sitemap-generator',
      name: 'Next.js Sitemap Generator',
      updatedAt: '2024-01-15T08:00:00.000Z',
      category: 'tools'
    },
    {
      id: 2,
      slug: 'seo-optimization-tool',
      name: 'SEO Optimization Tool',
      updatedAt: '2024-01-14T16:00:00.000Z',
      category: 'seo'
    },
    {
      id: 3,
      slug: 'website-performance-monitor',
      name: 'Website Performance Monitor',
      updatedAt: '2024-01-13T12:30:00.000Z',
      category: 'monitoring'
    },
    {
      id: 4,
      slug: 'xml-sitemap-validator',
      name: 'XML Sitemap Validator',
      updatedAt: '2024-01-16T09:15:00.000Z',
      category: 'validation'
    }
  ]
}

// Fungsi untuk menentukan priority berdasarkan path
function getPriority(path: string): number {
  if (path === '/') return 1.0
  if (path.startsWith('/products')) return 0.9
  if (path.startsWith('/blog')) return 0.8
  if (path.startsWith('/contact')) return 0.7
  if (path.startsWith('/about')) return 0.6
  return 0.5
}

// Fungsi untuk menentukan changeFrequency berdasarkan path
function getChangeFrequency(path: string): 'always' | 'hourly' | 'daily' | 'weekly' | 'monthly' | 'yearly' | 'never' {
  if (path === '/') return 'daily'
  if (path.startsWith('/blog')) return 'weekly'
  if (path.startsWith('/products')) return 'weekly'
  if (path.startsWith('/contact')) return 'monthly'
  if (path.startsWith('/about')) return 'monthly'
  return 'monthly'
}

// Main sitemap function
export default async function sitemap(): Promise<MetadataRoute.Sitemap> {
  const baseUrl = process.env.SITE_URL || 'https://sitemap-testing.vercel.app'
  
  try {
    // Ambil data dinamis
    const [blogPosts, products] = await Promise.all([
      getBlogPosts(),
      getProducts()
    ])

    // Static pages dengan metadata dinamis
    const staticPages: MetadataRoute.Sitemap = [
      {
        url: `${baseUrl}/`,
        lastModified: new Date(),
        changeFrequency: 'daily',
        priority: 1.0,
      },
      {
        url: `${baseUrl}/about`,
        lastModified: new Date('2024-01-15T10:00:00.000Z'),
        changeFrequency: 'monthly',
        priority: 0.6,
      },
      {
        url: `${baseUrl}/contact`,
        lastModified: new Date('2024-01-14T15:00:00.000Z'),
        changeFrequency: 'monthly',
        priority: 0.7,
      },
      {
        url: `${baseUrl}/products`,
        lastModified: new Date(),
        changeFrequency: 'weekly',
        priority: 0.9,
      },
      {
        url: `${baseUrl}/blog`,
        lastModified: new Date(),
        changeFrequency: 'weekly',
        priority: 0.8,
      }
    ]

    // Dynamic blog posts
    const blogEntries: MetadataRoute.Sitemap = blogPosts.map((post) => ({
      url: `${baseUrl}/blog/${post.slug}`,
      lastModified: new Date(post.updatedAt),
      changeFrequency: 'weekly',
      priority: 0.7,
    }))

    // Dynamic product pages
    const productEntries: MetadataRoute.Sitemap = products.map((product) => ({
      url: `${baseUrl}/products/${product.slug}`,
      lastModified: new Date(product.updatedAt),
      changeFrequency: 'weekly',
      priority: 0.8,
    }))

    // Dynamic category pages untuk blog
    const blogCategories = Array.from(new Set(blogPosts.map(post => post.category)))
    const blogCategoryEntries: MetadataRoute.Sitemap = blogCategories.map((category) => ({
      url: `${baseUrl}/blog/category/${category}`,
      lastModified: new Date(),
      changeFrequency: 'weekly',
      priority: 0.6,
    }))

    // Dynamic category pages untuk products
    const productCategories = Array.from(new Set(products.map(product => product.category)))
    const productCategoryEntries: MetadataRoute.Sitemap = productCategories.map((category) => ({
      url: `${baseUrl}/products/category/${category}`,
      lastModified: new Date(),
      changeFrequency: 'weekly',
      priority: 0.6,
    }))

    // Gabungkan semua entries
    const allEntries = [
      ...staticPages,
      ...blogEntries,
      ...productEntries,
      ...blogCategoryEntries,
      ...productCategoryEntries
    ]

    // Sort berdasarkan priority (tertinggi dulu)
    return allEntries.sort((a, b) => (b.priority || 0) - (a.priority || 0))

  } catch (error) {
    console.error('Error generating sitemap:', error)
    
    // Fallback ke static pages jika ada error
    return [
      {
        url: `${baseUrl}/`,
        lastModified: new Date(),
        changeFrequency: 'daily',
        priority: 1.0,
      },
      {
        url: `${baseUrl}/about`,
        lastModified: new Date(),
        changeFrequency: 'monthly',
        priority: 0.6,
      },
      {
        url: `${baseUrl}/contact`,
        lastModified: new Date(),
        changeFrequency: 'monthly',
        priority: 0.7,
      },
      {
        url: `${baseUrl}/products`,
        lastModified: new Date(),
        changeFrequency: 'weekly',
        priority: 0.9,
      },
      {
        url: `${baseUrl}/blog`,
        lastModified: new Date(),
        changeFrequency: 'weekly',
        priority: 0.8,
      }
    ]
  }
}

// Export untuk type checking
export type { MetadataRoute }