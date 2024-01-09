<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">
            <img src="{{ asset('storage/' . $settings->logo) }}" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link p-lg-3 active" aria-current="page" href="{{ route('index') }}">{{ trans('site.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#about">{{ trans('site.about_us') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#product">{{ trans('site.products') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#partner">{{ trans('site.partners') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#contact">{{ trans('site.contact_us') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right mb-2 mb-lg-0 ms-lg-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link btn-language" href="" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @if (LaravelLocalization::getCurrentLocale() == 'ar')
                            <img src="photo/ar.png"> العربية
                        @elseif (LaravelLocalization::getCurrentLocale() == 'en')
                            <img src="photo/en.png"> English
                        @endif
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item btn-language"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img src="photo/{{ $localeCode }}.png"> {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
