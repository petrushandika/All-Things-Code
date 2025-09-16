/** @type {import('next').NextConfig} */
const nextConfig = {
  // App directory is now stable in Next.js 13+
  async headers() {
    return [
      {
        // Apply headers to sitemap files
        source: '/sitemap.xml',
        headers: [
          {
            key: 'Content-Type',
            value: 'application/xml',
          },
          {
            key: 'Cache-Control',
            value: 'public, max-age=3600, s-maxage=3600',
          },
        ],
      },
      {
        // Apply headers to sitemap-0.xml
        source: '/sitemap-0.xml',
        headers: [
          {
            key: 'Content-Type',
            value: 'application/xml',
          },
          {
            key: 'Cache-Control',
            value: 'public, max-age=3600, s-maxage=3600',
          },
        ],
      },
      {
        // Apply headers to robots.txt
        source: '/robots.txt',
        headers: [
          {
            key: 'Content-Type',
            value: 'text/plain',
          },
          {
            key: 'Cache-Control',
            value: 'public, max-age=86400, s-maxage=86400',
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
