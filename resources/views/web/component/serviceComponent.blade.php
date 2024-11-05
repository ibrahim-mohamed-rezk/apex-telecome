<div class="col-md-6 col-lg-4">
    <div class="box-after">
        <div class="service-box hadding hadding-p">
            <a href="{{ route('web.service_details', $service->slug) }}">
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
            </a>
            <div class="space20"></div>
            <h2><a href="{{ route('web.service_details', $service->slug) }}">{!! $service->title !!}</a></h2>
            <div class="space20"></div>
            <div class="read-more-btn">
                <a href="{{ route('web.service_details', $service->slug) }}">{{ __('web.see_details') }} <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
