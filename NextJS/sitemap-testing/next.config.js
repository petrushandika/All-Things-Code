/** @type {import('next').NextConfig} */
const nextConfig = {
  // App directory is stable in Next.js 15+
  async headers() {
    return [
      {
        // Apply headers to dynamic sitemap
        source: '/sitemap.xml',
        headers: [
          {
            key: 'Content-Type',
            value: 'application/xml; charset=utf-8',
          },
          {
            key: 'Cache-Control',
            value: 'public, max-age=1800, s-maxage=1800, stale-while-revalidate=3600',
          },
          {
            key: 'X-Robots-Tag',
            value: 'noindex',
          },
        ],
      },

      {
        // Apply headers to dynamic robots.txt
        source: '/robots.txt',
        headers: [
          {
            key: 'Content-Type',
            value: 'text/plain; charset=utf-8',
          },
          {
            key: 'Cache-Control',
            value: 'public, max-age=3600, s-maxage=3600, stale-while-revalidate=7200',
          },
        ],
      },
      {
        // Apply headers to Google verification file
        source: '/google585587097f7e8220.html',
        headers: [
          {
            key: 'Content-Type',
            value: 'text/html',
          },
          {
            key: 'Cache-Control',
            value: 'public, max-age=86400, s-maxage=86400',
          },
        ],
      },
    ];
  },
}

module.exports = nextConfig
