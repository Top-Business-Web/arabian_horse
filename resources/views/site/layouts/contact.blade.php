<section class="contact pt-5 pb-5" id="contact">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5 col-12">
             <div class="text-contact">
              <h1 class="fw-bold">{{ trans('site.contact_us') }}</h1>
              <p>{{ trans('site.We_can_answer_all_your_concerns_and_provide_all_the_entertainment') }}</p>
             </div>
             <div class="card-contact d-flex align-items-center mt-5">
              <div class="fs-3 ms-3 me-3">
                <i class="fa-solid fa-house-chimney color-second"></i>
              </div>
              <div>
                <h4 class="fw-bold mt-3">{{ trans('site.address') }}</h4>
                <p class="text-end">{{ $settings->address }}</p>
              </div>
             </div>
             <div class="card-contact d-flex align-items-center  mt-5">
              <div class="fs-3 ms-3 me-3">
                <i class="fa-regular fa-envelope-open color-second"></i>
              </div>
              <div>
                <h4 class="fw-bold mt-3">{{ trans('site.email') }}</h4>
                <a href="mailto: {{ $settings->email }}" class="text-decoration-none">
                  {{ $settings->email }}
              </a>
              </div>
             </div>
             <div class="card-contact d-flex align-items-center  mt-5">
              <div class="fs-3 ms-3 me-3">
                <i class="fa-solid fa-phone-volume color-second"></i>
              </div>
              <div class="mb-3">
                <h4 class="text-end fw-bold mt-3">{{ trans('site.phone') }}</h4>
                <a href="tel: {{ $settings->phone }}" class="text-decoration-none">
                  {{ $settings->phone }}
              </a>
              </div>
             </div>
            </div>
            <div class="col-lg-7 col-12">
              <form class="row form-contact">
                <div class="col-md-6 col-sm-12 mb-4">
                  <input type="text" class="w-100 edit-input" placeholder="{{ trans('site.name') }}" required>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                  <input type="email" class="w-100 edit-input" placeholder="{{ trans('site.email') }}" required>
                </div>
                  <div class="col-12 mb-4">
                    <input type="email" class="w-100 edit-input" placeholder="{{ trans('site.subject') }}" required>
                  </div>
                <div class="col-12">
                  <textarea class="w-100 edit-input" placeholder="{{ trans('site.message') }}" required></textarea>
                </div>
                <div class="col-12 mt-5">
                    <button type="submit" class="btn">
                      <a class="btn-start">
                        <span>{{ trans('site.contact_us') }}</span>
                    </a>
                    </button>
                </div>
              </form>
            </div>
        </div>
        <div class="copyright mt-5">
          <div class="d-flex flex-wrap justify-content-between">
            <p> {{ trans('site.all_rights_are_save') }} © Top Business 2024 </p>
            <div class="social-link">
             <ul class="list-unstyled d-flex">
              <li>
                <a href="{{ $settings->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="{{ $settings->twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                <a href="{{ $settings->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="{{ $settings->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              </li>
             </ul>
            </div>
          </div>
        </div>
    </div>
  </section>