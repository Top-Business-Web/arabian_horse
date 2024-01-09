@extends('site.layout')

@section('content')
    <!-- details project -->
    <div class="details-project pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="main-slider" style="direction: ltr;">
                        @foreach ($product->images as $image)
                            <div class="school-img">
                                <img class="img-fluid" src="{{ asset('storage/' . $image) }}" alt="no image" />
                            </div>
                        @endforeach
                    </div>
                    <div class="small-slider" style="direction: ltr;">
                        @foreach ($product->images as $image)
                            <img class="img-fluid" src="{{ asset('storage/' . $image) }}" alt="no image" />
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div>
                        <h3 class="fw-bold mb-4 mt-3 color-second">{{ app()->getLocale() == 'ar' ? $product->title_ar : $product->title_en }}</h3>
                        <p class="lh-lg">{{ app()->getLocale() == 'ar' ? $product->desc_ar : $product->desc_en }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
