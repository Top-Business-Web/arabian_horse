@extends('site.layout')

@section('content')
    <!-- about -->
    <section class="about-section pt-5 pb-5" id="about">
        <div class="container pb-5">
            <div class="row mt-5">
                <div class="col-lg-6 col-12">
                    <div class="img-about wow bounceInUp" data-wow-duration="2s">
                        <img src="{{ asset('storage/' . $settings->image) }}" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-3">
                    <div class="text-about">
                        <div class="main-heading mb-3">
                            <div class="d-flex color-second mb-1">
                                <i class="fa-solid fa-horse"></i>
                                <h6 class="ms-2 me-2">{{ trans('site.about_us') }}</h6>
                            </div>
                            <h1 class="color-black fw-bold">{{ trans('site.what_do_you_know_about_us') }}</h1>
                        </div>
                        <p class="lh-lg">
                            {{ $settings->desc_about }}
                        </p>
                        <div class="video-content d-flex flex-wrap">
                            <div class="d-flex">
                                <div>
                                    <button type="button" class="btn-video" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>
                                <h5 class="me-3 d-flex align-items-center fw-bold">{{ trans('site.start_watching_now') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- products -->
    <section class="bg-section pt-5 pb-5 products" id="product">
        <div class="container pt-5">
            <div class="main-heading mb-3 d-flex flex-column align-items-center">
                <div class="d-flex justify-content-center color-second mb-1">
                    <i class="fa-solid fa-horse"></i>
                    <h6 class="ms-2 me-2">{{ trans('site.products') }}</h6>
                </div>
                <h1 class="color-black fw-bold text-center">
                {{ trans('site.We_have_a_wide_range_of_high_quality_products') }}
                </h1>
            </div>
            <div class="owl-carousel owl-theme" style="direction: ltr;">
                @foreach ($products as $product)
                    <div class="card-product">
                        <div class="img-product">
                            <a href="{{ route('product', $product->id) }}">
                                <img class="w-100" src="{{ asset('storage/' . $product->images[0]) }}" alt="no-image">
                            </a>
                        </div>
                        <div class="card-content p-3">
                            <a href="{{ route('product', $product->id) }}" class="text-decoration-none">
                                <h3 class="fw-bold color-black mt-2">{{ $product->title }}</h3>
                            </a>
                            <p class="lh-lg color-text mt-3 mb-4">
                                {{ $product->desc }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    <!-- partner -->
    <section class="pt-5 pb-5 partner" id="partner">
        <div class="container pt-5 pb-5">
            <div class="main-heading mb-3 d-flex flex-column align-items-center">
                <div class="d-flex justify-content-center color-second mb-1">
                    <i class="fa-solid fa-horse"></i>
                    <h6 class="ms-2 me-2">{{ trans('site.partners') }}</h6>
                </div>
                <h1 class="color-black fw-bold text-center">
                     {{ trans('site.success_partners') }}
                </h1>
            </div>
            <div class="owl-carousel owl-theme mt-5">
                @foreach ($partners as $partner)
                    <div class="image-card">
                        <img src="{{ asset('storage/' . $partner->image) }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
