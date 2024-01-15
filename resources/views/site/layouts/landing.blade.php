<div class="landing">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $key => $slider)
                <div class="carousel-item @if($key === 0) active @endif">
                    <img src="{{ asset('storage/' . $slider->image) }}" class="d-block w-100" alt="no image">
                    <div class="carousel-caption d-md-block">
                        <h1 class="heading-one fw-bold mb-4">{{ app()->getLocale() == 'ar' ? $slider->name_ar : $slider->name_en }}</h1>
                        <p class="paragraph-one text-center lh-lg">
                            {{ app()->getLocale() == 'ar' ? $slider->description_ar : $slider->description_en }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <div class="prev-icon">
                <i class="fa-solid fa-angle-left"></i>
            </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <div class="next-icon">
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </button>
    </div>
</div>