<div class="col-md-6 col-lg-4 fade show active">
    <div class="shop-page-box">
        <div class="shop-box-img-area">
            <a href="{{ route('web.product_details', ['slug' => $product->slug]) }}">
                <div class="shop-page-box-img text-center">
                    <img src="{{ asset($product->imageUrl) }}" width="100%" alt="{{ $product->title }}">
                </div>
            </a>
        </div>
        <div class="shop-page-haddings">
            <div class="shop-page-hadding  text-center">
                <h4 class="shop-main-h"><a href="">{{ $product->title }}</a></h4>
            </div>
            <div class="shop-page-hadding">
                <h6 class="shop-main-h">{{ $product->description }}</h6>
            </div>
            <div class="shop-bottom-all">
                </br>
                <div class="button btn-after contact-form-btn text-center ">
                    <button onclick="window.location='{{ route('web.product_details', ['slug' => $product->slug]) }}'">
                        {{ __('web.see_details') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
