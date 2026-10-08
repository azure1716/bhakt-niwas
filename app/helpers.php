<?php

if (!function_exists('seo_phone')) {
    function seo_phone(): string
    {
        return (string) config('seo.phone', '9031525548');
    }
}

if (!function_exists('seo_phone_display')) {
    function seo_phone_display(): string
    {
        $phone = seo_phone();
        $clean = preg_replace('/[^0-9]/', '', $phone);
        if (strlen($clean) === 10) {
            return '+91 ' . substr($clean, 0, 5) . ' ' . substr($clean, 5);
        }
        return '+91 ' . $phone;
    }
}

if (!function_exists('seo_phone_tel')) {
    function seo_phone_tel(): string
    {
        $phone = seo_phone();
        $clean = preg_replace('/[^0-9]/', '', $phone);
        if (strlen($clean) === 10) {
            return 'tel:+91' . $clean;
        }
        return 'tel:+' . $clean;
    }
}

if (!function_exists('seo_whatsapp_url')) {
    function seo_whatsapp_url(string $text = ''): string
    {
        $phone = seo_phone();
        $clean = preg_replace('/[^0-9]/', '', $phone);
        if (strlen($clean) === 10) {
            $number = '91' . $clean;
        } else {
            $number = $clean;
        }
        $url = 'https://wa.me/' . $number;
        if (!empty($text)) {
            $url .= '?text=' . urlencode($text);
        }
        return $url;
    }
}

if (!function_exists('seo_schema_phone')) {
    function seo_schema_phone(): string
    {
        $phone = seo_phone();
        $clean = preg_replace('/[^0-9]/', '', $phone);
        if (strlen($clean) === 10) {
            return '+91-' . $clean;
        }
        return '+91-' . $clean;
    }
}

if (!function_exists('seo_email')) {
    function seo_email(): string
    {
        return (string) config('seo.email', 'bhaktnivasujjainbookingmahakal@gmail.com');
    }
}

if (!function_exists('fact')) {
    function fact(string $key, mixed $default = null): mixed
    {
        return config('facts.' . $key, $default);
    }
}
