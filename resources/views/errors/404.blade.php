<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Not Found | Shri Gajanan Maharaj Sansthan</title>
    <meta name="description" content="The page you are looking for was not found. Return to Shri Gajanan Maharaj Sansthan to find Shegaon Bhakta Niwas booking, darshan timings, and travel guides." />
    <meta name="robots" content="noindex, follow" />
    <link rel="canonical" href="{{ url('/') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <style>
        body { background: #fdf8f0; min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; font-family: 'Segoe UI', sans-serif; padding: 20px; }
        .err-box { text-align: center; max-width: 540px; }
        .err-code { font-size: 6rem; font-weight: 800; color: #800000; line-height: 1; }
        .err-title { font-size: 1.5rem; font-weight: 700; color: #222; margin: 10px 0 5px; }
        .err-desc { color: #666; margin-bottom: 30px; line-height: 1.6; }
        .err-links { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; }
        .err-links a { padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: 600; font-size: 14px; transition: 0.3s; }
        .btn-home { background: #800000; color: #fff; }
        .btn-home:hover { background: #6a0000; color: #fff; }
        .btn-book { background: #ff6600; color: #fff; }
        .btn-book:hover { background: #e65c00; color: #fff; }
        .btn-wa { background: #25d366; color: #fff; }
        .btn-wa:hover { background: #128c7e; color: #fff; }
    </style>
</head>
<body>
    <div class="err-box">
        <div class="err-code" aria-hidden="true">404</div>
        <h1 class="err-title">Page Not Found</h1>
        <p class="err-desc">
            The page you are looking for may have moved or no longer exists.
            Use the links below to find Shegaon Bhakta Niwas booking, darshan timings, or travel information.
        </p>
        <div class="err-links">
            <a href="{{ url('/') }}" class="btn-home"><i class="fas fa-home me-1"></i> Home</a>
            <a href="{{ route('booking') }}" class="btn-book"><i class="fas fa-bed me-1"></i> Book a Room</a>
            <a href="{{ route('locations') }}" class="btn-home"><i class="fas fa-map-marker-alt me-1"></i> Locations</a>
            <a href="{{ route('how-to-reach') }}" class="btn-home"><i class="fas fa-route me-1"></i> How to Reach</a>
            <a href="{{ route('darshan-timings') }}" class="btn-home"><i class="fas fa-clock me-1"></i> Darshan Timings</a>
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('seo.phone')) }}?text=Hi%2C%20I%20was%20looking%20for%20a%20page%20on%20your%20website%20and%20got%20a%20404%20error." target="_blank" rel="noopener noreferrer" class="btn-wa"><i class="fab fa-whatsapp me-1"></i> WhatsApp Help</a>
        </div>
    </div>
</body>
</html>
