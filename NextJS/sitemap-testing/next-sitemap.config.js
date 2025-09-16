/** @type {import('next-sitemap').IConfig} */
module.exports = {
  siteUrl: process.env.SITE_URL || 'https://sitemap-testing.vercel.app',
  generateRobotsTxt: true, // Generate robots.txt file
  sitemapSize: 7000, // Split large sitemaps into multiple files
  changefreq: 'daily',
  priority: 0.7,
  autoLastmod: true, // Add lastmod property automatically
  exclude: [
    '/admin/*', // Exclude admin pages
    '/api/*',   // Exclude API routes
    '/private/*', // Exclude private pages
    '/secret'
  ],
  // Additional paths that might not be automatically discovered
  additionalPaths: async (config) => {
    return [
      {
        loc: '/',
        changefreq: 'daily',
        priority: 1.0, // Homepage gets highest priority
        lastmod: new Date().toISOString()
      },
      {
        loc: '/products',
        changefreq: 'weekly',
        priority: 0.9, // Products page is important for business
        lastmod: new Date().toISOString()
      },
      {
        loc: '/blog',
        changefreq: 'weekly',
        priority: 0.8, // Blog gets high priority for SEO
        lastmod: new Date().toISOString()
      },
      {
        loc: '/contact',
        changefreq: 'monthly',
        priority: 0.7,
        lastmod: new Date().toISOString()
      },
      {
        loc: '/about',
        changefreq: 'monthly',
        priority: 0.6,
        lastmod: new Date().toISOString()
      }
    ]
  },
  // Custom transformation function for fine-tuning URLs
  transform: async (config, path) => {
    // Return null to exclude the path from sitemap
    if (path.includes('/temp/') || path.includes('/draft/')) {
      return null
    }

    // Custom priority based on path hierarchy
    let priority = 0.7
    let changefreq = 'weekly'
    
    if (path === '/') {
      priority = 1.0 // Homepage gets highest priority
      changefreq = 'daily'
    } else if (path.startsWith('/products')) {
      priority = 0.9 // Products page is crucial for business
      changefreq = 'weekly'
    } else if (path.startsWith('/blog')) {
      priority = 0.8 // Blog posts get high priority for SEO
      changefreq = 'weekly'
    } else if (path.startsWith('/contact')) {
      priority = 0.7
      changefreq = 'monthly'
    } else if (path.startsWith('/about')) {
      priority = 0.6
      changefreq = 'monthly'
    }

    return {
      loc: path,
      changefreq: changefreq,
      priority: priority,
      lastmod: config.autoLastmod ? new Date().toISOString() : undefined,
      alternateRefs: config.alternateRefs ?? [],
    }
  },
  robotsTxtOptions: {
    policies: [
      {
        userAgent: '*',
        allow: '/',
        disallow: ['/admin', '/api', '/private', '/secret']
      },
      {
        userAgent: 'Googlebot',
        allow: '/',
        disallow: ['/admin', '/private', '/secret']
      },
      {
        userAgent: 'Bingbot',
        allow: '/',
        disallow: ['/admin', '/private', '/secret']
      }
    ],
    additionalSitemaps: [
      'https://sitemap-testing.vercel.app/server-sitemap.xml'
    ],
  },
}
