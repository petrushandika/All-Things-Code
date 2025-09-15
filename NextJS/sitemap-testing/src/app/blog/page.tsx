import Link from 'next/link'

export default function Blog() {
  return (
    <main className="flex min-h-screen flex-col items-center justify-center p-24">
      <div className="max-w-4xl">
        <h1 className="text-4xl font-bold mb-8 text-center">Blog</h1>
        <div className="grid gap-6 md:grid-cols-2">
          <div className="border rounded-lg p-6 hover:shadow-lg transition-shadow">
            <h2 className="text-xl font-semibold mb-2">Getting Started with Next.js Sitemaps</h2>
            <p className="text-gray-600 mb-4">Learn how to implement sitemaps in your Next.js application using next-sitemap.</p>
            <span className="text-blue-500">Read more →</span>
          </div>
          <div className="border rounded-lg p-6 hover:shadow-lg transition-shadow">
            <h2 className="text-xl font-semibold mb-2">SEO Best Practices</h2>
            <p className="text-gray-600 mb-4">Discover the best practices for SEO optimization in modern web applications.</p>
            <span className="text-blue-500">Read more →</span>
          </div>
        </div>
        <div className="text-center mt-8">
          <Link 
            href="/" 
            className="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
          >
            Back to Home
          </Link>
        </div>
      </div>
    </main>
  )
}
