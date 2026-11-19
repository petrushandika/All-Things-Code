import { MetadataRoute } from 'next'

// Test deployment: pages carry noindex, so crawling stays allowed and no
// sitemap or host hints are advertised for other domains.
export default function robots(): MetadataRoute.Robots {
  return {
    rules: [{ userAgent: '*', allow: '/' }],
  }
}
