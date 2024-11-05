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
                    @csrf

                    @if ($user ?? '' && $user->id)
                        @if ($edit == 1)
                            {{ method_field('patch') }}
                        @endif
                    @endif
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <label for="validationServer">{{ 'الاسم بالكامل' }}</label>
                                    <input type="text" name="name"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        id="validationServer" placeholder="{{ 'الاسم بالكامل' }}"
                                        value='{{ old('name', $user->name ?? '') }}'>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="validationServer">{{ 'البريد الالكتروني' }}</label>
                                    <input type="email" name="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        id="validationServer" placeholder="{{ 'البريد الالكتروني' }}"
                                        value='{{ old('email', $user->email ?? '') }}'>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="validationServer">{{ 'رقم الهاتف' }}</label>
                                    <input type="number" name="phone"
                                        class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                        id="validationServer" placeholder="{{ 'رقم الهاتف' }}"
                                        value='{{ old('phone', $user->phone ?? '') }}'>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="validationServer">{{ 'كلمة المرور' }}</label>
                                    <input type="password" name="password"
                                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        id="validationServer" placeholder="{{ 'كلمة المرور' }}">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="validationServer">{{ 'صورة الغلاف' }}
                                    </label>
                                    <input type="file" name="photo"
                                        class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}"
                                        id="validationServer" placeholder="{{ 'صورة الغلاف' }}"
                                        value='{{ old('photo') }}'>
                                </div>
                                <div class="col-md-6 mb-4">
                                    @if ($user ?? '' && $user->id)
                                        <img src="{{ asset($user->photo) }}" style="height:10pc">
                                    @endif
                                </div>

                                <div class="col-lg-12 mb-4">
                                    <label>{{ 'اجزاء لوحه التحكم' }} </label>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        @foreach ($modules as $key => $row)
                                            <div class="col-sm-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                        {{ in_array($row['id'], $user_modules) ? 'checked' : '' }}
                                                        value="{{ $row['id'] }}" class="custom-control-input"
                                                        id="module_{{ $key }}" name="modules[]">
                                                    <label class="custom-control-label" for="module_{{ $key }}">
                                                        {{ __($row['path'] . '.index') }} </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-md rounded font-sm hover-up">{{ __('dashboard.submit') }}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section>


@section('inner_js')
@endsection

@endsection
