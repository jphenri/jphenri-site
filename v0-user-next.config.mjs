/** @type {import('next').NextConfig} */
const nextConfig = {
  output: 'export',
  images: {
    unoptimized: true,
  },
  // Ajout du basePath pour GitHub Pages
  basePath: '/jphenri-site',
  assetPrefix: '/jphenri-site',
}

export default nextConfig
