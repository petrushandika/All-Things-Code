import Link from 'next/link'

export const metadata = {
  title: 'Products - Sitemap Testing App',
  description: 'Explore our range of products and services for sitemap testing.',
}

export default function Products() {
  const products = [
    {
      id: 1,
      name: 'Next.js Sitemap Generator',
      description: 'Automated sitemap generation for Next.js applications',
      price: '$29.99',
      features: ['Auto-generation', 'SEO optimized', 'Multiple formats']
    },
    {
      id: 2,
      name: 'SEO Optimization Tool',
      description: 'Complete SEO analysis and optimization toolkit',
      price: '$49.99',
      features: ['Performance analysis', 'Keyword research', 'Content optimization']
    },
    {
      id: 3,
      name: 'Website Performance Monitor',
      description: 'Real-time monitoring of website performance metrics',
      price: '$39.99',
      features: ['Real-time monitoring', 'Performance alerts', 'Detailed reports']
    },
    {
      id: 4,
      name: 'XML Sitemap Validator',
      description: 'Validate and optimize your XML sitemaps',
      price: '$19.99',
      features: ['XML validation', 'Error detection', 'Optimization tips']
    }
  ]

  return (
    <main className="flex min-h-screen flex-col items-center justify-between p-24">
      <div className="z-10 max-w-5xl w-full items-center justify-between font-mono text-sm lg:flex">
        <p className="fixed left-0 top-0 flex w-full justify-center border-b border-gray-300 bg-gradient-to-b from-zinc-200 pb-6 pt-8 backdrop-blur-2xl dark:border-neutral-800 dark:bg-zinc-800/30 dark:from-inherit lg:static lg:w-auto lg:rounded-xl lg:border lg:bg-gray-200 lg:p-4 lg:dark:bg-zinc-800/30">
          Products &nbsp;
          <code className="font-mono font-bold">Sitemap Testing App</code>
        </p>
      </div>

      <div className="relative flex place-items-center before:absolute before:h-[300px] before:w-[480px] before:-translate-x-1/2 before:rounded-full before:bg-gradient-radial before:from-white before:to-transparent before:blur-2xl before:content-[''] after:absolute after:-z-20 after:h-[180px] after:w-[240px] after:translate-x-1/3 after:bg-gradient-conic after:from-sky-200 after:via-blue-200 after:blur-2xl after:content-[''] before:dark:bg-gradient-to-br before:dark:from-transparent before:dark:to-blue-700 before:dark:opacity-10 after:dark:from-sky-900 after:dark:via-[#0141ff] after:dark:opacity-40 before:lg:h-[360px] z-[-1]">
        <h1 className="text-6xl font-bold">
          Our <span className="text-blue-600">Products</span>
        </h1>
      </div>
        
      <div className="mb-32 grid text-center lg:max-w-5xl lg:w-full lg:mb-0 lg:grid-cols-2 lg:text-left">
        {products.map((product) => (
          <div
            key={product.id}
            className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          >
            <h2 className="mb-3 text-2xl font-semibold">
              {product.name}{' '}
              <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
                →
              </span>
            </h2>
            <p className="m-0 max-w-[30ch] text-sm opacity-50 mb-4">
              {product.description}
            </p>
            
            <div className="mb-4">
              <h3 className="font-semibold mb-2 text-sm">Features:</h3>
              <ul className="space-y-1">
                {product.features.map((feature, index) => (
                  <li key={index} className="text-xs opacity-50">
                    • {feature}
                  </li>
                ))}
              </ul>
            </div>
            
            <div className="mt-4">
              <span className="text-lg font-bold text-blue-600">{product.price}</span>
            </div>
          </div>
        ))}
      </div>
        
      <div className="mb-32 grid text-center lg:max-w-5xl lg:w-full lg:mb-0 lg:grid-cols-4 lg:text-left">
        <Link
          href="/"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
        >
          <h2 className="mb-3 text-2xl font-semibold">
            Home{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              →
            </span>
          </h2>
          <p className="m-0 max-w-[30ch] text-sm opacity-50">
            Return to the main page.
          </p>
        </Link>

        <Link
          href="/contact"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
        >
          <h2 className="mb-3 text-2xl font-semibold">
            Contact{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              →
            </span>
          </h2>
          <p className="m-0 max-w-[30ch] text-sm opacity-50">
            Get in touch with our team.
          </p>
        </Link>

        <Link
          href="/blog"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
        >
          <h2 className="mb-3 text-2xl font-semibold">
            Blog{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              →
            </span>
          </h2>
          <p className="m-0 max-w-[30ch] text-sm opacity-50">
            Read our latest blog posts.
          </p>
        </Link>

        <Link
          href="/about"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
        >
          <h2 className="mb-3 text-2xl font-semibold">
            About{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              →
            </span>
          </h2>
          <p className="m-0 max-w-[30ch] text-sm opacity-50 text-balance">
            Learn more about our company.
          </p>
        </Link>
      </div>
    </main>
  )
}