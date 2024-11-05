@extends('admin.layouts.container')

@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">{{ $title }}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <form method="post" enctype="multipart/form-data" action="{{ $action }}">
                    @if ($banner ?? '' && $banner->id)
                        {{ method_field('patch') }}
                    @endif
                    @CSRF
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="validationServerTitle">{{ __('banners.name') }}
                                    </label>
                                    <input type="text" name="title"
                                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        id="validationServerTitle" placeholder="{{ __('banners.title') }} "
                                        value='{{ old('title', $banner->title ?? '') }}'>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="validationServerDescription">{{ __('banners.description') }}
                                    </label>
                                    <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                        placeholder="{{ __('banners.description') }} " rows="4" style="height: 48px;">{{ old('description', $banner->description ?? '') }}</textarea>

                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="validationServerImage">{{ __('banners.image') }}
                                    </label>
                                    <input type="file" name="image"
                                        class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                        id="validationServerImage" placeholder="{{ __('banners.image') }} "
                                        value='{{ old('image') }}'>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="validationServer">{{ __('banners.link') }}</label>
                                    <input type="text" name="link"
                                        class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}"
                                        id="validationServer" placeholder="{{ __('banners.link') }}"
                                        value='{{ old('link', $banner->link ?? '') }}'>
                                </div>

                                <div class="col-md-6 mb-4"></div>
                                <div class="col-md-6 mb-4">
                                    @if ($banner ?? '' && $banner->id)
                                            <img src="{{ asset($banner->image) }}" style="height: 10pc">
                                    @endif
                                </div>

                            </div>
                            <button class="btn btn-md rounded font-sm hover-up">{{ __('dashboard.submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>>


@section('inner_js')
@endsection
@endsection
