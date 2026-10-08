{{-- Language Switcher Component (hidden unless $translations array is present) --}}
@if (!empty($translations) && count($translations) > 1)
    <div class="dropdown d-inline-block ms-2">
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe me-1"></i> {{ strtoupper(app()->getLocale()) }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            @if(!empty($translations['en']))
                <li><a class="dropdown-link dropdown-item" href="{{ $translations['en'] }}">English</a></li>
            @endif
            @if(!empty($translations['mr']))
                <li><a class="dropdown-link dropdown-item" href="{{ $translations['mr'] }}">मराठी (Marathi)</a></li>
            @endif
            @if(!empty($translations['hi']))
                <li><a class="dropdown-link dropdown-item" href="{{ $translations['hi'] }}">हिंदी (Hindi)</a></li>
            @endif
        </ul>
    </div>
@endif
