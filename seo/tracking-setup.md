# GA4 & Search Console Tracking Setup Guide

## 1. GA4 Custom Conversion Events
Wired directly via `config('seo.ga4_id')` in `seo.blade.php`:

```js
// Triggered on WhatsApp CTA click
window.trackWhatsApp = function() {
    gtag('event', 'whatsapp_click', { event_category: 'engagement', event_label: window.location.pathname });
};

// Triggered on Call Helpline click
window.trackCall = function() {
    gtag('event', 'call_click', { event_category: 'engagement', event_label: window.location.pathname });
};

// Triggered on Booking Request form submission
window.trackBookingForm = function() {
    gtag('event', 'booking_form_submit', { event_category: 'conversion', event_label: window.location.pathname });
};
```

## 2. Marking Events as Conversions in GA4
1. Go to **GA4 Admin** -> **Data Display** -> **Events**.
2. Locate `whatsapp_click`, `call_click`, and `booking_form_submit`.
3. Toggle **Mark as conversion** to ON for all three.

## 3. Google Search Console Verification
1. Add Domain Property in Google Search Console using TXT record DNS verification or HTML tag.
2. Enter HTML verification token into `.env` as `GSC_VERIFICATION=your_token_here`.
3. Submit `APP_URL/sitemap.xml` in GSC Sitemap menu.
