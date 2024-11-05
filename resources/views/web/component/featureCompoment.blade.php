
<div style="width: 330px" class="card">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="card-image">
            <img src="{{ $feature->image }}"
                class="" alt="{{ $feature->details->title }}" />
        </div>
        <div class="typography">
            <h4 class="">{{ $feature->details->title }}</h4>
            <p class="">
                {{ $feature->details->description }}
            </p>
        </div>
    </div>
</div>