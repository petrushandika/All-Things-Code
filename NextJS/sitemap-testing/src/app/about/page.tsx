import Link from 'next/link'

export default function About() {
  return (
    <main className="flex min-h-screen flex-col items-center justify-center p-24">
      <div className="max-w-2xl text-center">
        <h1 className="text-4xl font-bold mb-6">About Us</h1>
        <p className="text-lg text-gray-600 mb-8">
          This is a Next.js application created to test sitemap generation using next-sitemap.
          The application demonstrates how to automatically generate sitemaps for your Next.js routes.
        </p>
        <Link 
          href="/" 
          className="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        >
          Back to Home
        </Link>
      </div>
    </main>
  )
}
