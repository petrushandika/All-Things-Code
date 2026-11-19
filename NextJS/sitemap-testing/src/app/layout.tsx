import type { Metadata } from 'next'
import { Inter } from 'next/font/google'
import './globals.css'

const inter = Inter({ subsets: ['latin'] })

export const metadata: Metadata = {
  title: 'Sitemap Testing App',
  description: 'A Next.js app for testing sitemap generation',
  // Test deployment: keep this demo out of search indexes.
  robots: { index: false, follow: false, googleBot: { index: false, follow: false } },
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <body className={inter.className}>{children}</body>
    </html>
  )
}
