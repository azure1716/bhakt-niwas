# Domain Launch Day Checklist

- [x] Purchase Primary Domain — **shegaondharamshala.in** ✅
- [ ] Configure DNS A records pointing to live production server
- [ ] Issue HTTPS / TLS certificate via Let's Encrypt or Cloudflare
- [ ] Update `.env` on production server:
  - `APP_URL=https://www.shegaondharamshala.in`
  - `APP_ENV=production`
  - `APP_DEBUG=false`
  - `SEO_PHONE=9031525548`
  - `SEO_EMAIL=bhaktnivasujjainbookingmahakal@gmail.com`
  - `GSC_VERIFICATION=live_gsc_token`
  - `GA4_ID=live_ga4_id`
- [ ] Run `php artisan config:cache`, `php artisan route:cache`, `php artisan view:cache`
- [ ] Run `php artisan seo:placeholders` (must return exit code 0)
- [ ] Run `php artisan seo:audit` (must return exit code 0)
- [ ] Submit `sitemap.xml` in Google Search Console & Bing Webmaster Tools
- [ ] Claim & verify Google Business Profiles for Shegaon Bhakta Niwas, Anand Vihar, and Visawa
