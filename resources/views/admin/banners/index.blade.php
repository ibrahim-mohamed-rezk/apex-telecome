@extends('admin.layouts.container')

@section('content')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">{{ $title }}</h2>
            </div>
            <div>
                <a class="btn btn-primary btn-sm rounded" href="{{ $action }}">{{ $trashed_title }}</a>
            </div>
        </div>
        <div class="card mb-4">
            <form action="{{ $action }}">
                <header class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                            <input type="text" name="name" placeholder="{{ __($routes . '.name') }}"
                                class="form-control" value="{{ $request->name }}">
                        </div>
                        <div class="col-md-2 col-12 me-auto mb-md-0 mb-3">
                            <input type="text" class="form-control" disabled value="{{isset($count) ? $count : "" }}">

                        </div>
                        <div class="col-md-2 col-6">
                            <input class="form-control" type="date" name="start_date" value="{{ $request->start_date }}">
                        </div>
                        <div class="col-md-2 col-6">
                            <input class="form-control" type="date" name="end_date" value="{{ $request->end_date }}">
                        </div>
                        <div class="col-md-2 col-6">
                            <button type="submit" class="btn btn-primary form-control" style="color:white">
                                {{ __('dashboard.search') }} </button>
                        </div>
                    </div>
                </header>
            </form>
            <!-- card-header end//-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th scope="col">{{ __('banners.photo') }}</th>
                                <th scope="col">{{ __('banners.name') }}</th>
                                <th scope="col">{{ __('banners.created_at') }}</th>
                                <th class="text-end" scope="col"> {{ __('banners.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key => $row)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td><img src="{{ asset($row->image) }}" alt="banner_image" height="75px"></td>
                                    <td><b>{{ $row->title }}</b></td>
                                    <td><b>{{ $row->created_at->format('Y - m - d') }}</b></td>
                                    <td class="text-end">
                                        @if (!$row->deleted_at)
                                            <a class="btn btn-sm font-sm rounded btn-brand mr-5"
                                                href="{{ route($routes . '.edit', $row->id) }}"><i
                                                    class="material-icons md-edit"></i> {{ __('dashboard.edit') }}</a>
                                        @endif
                                        <button class="btn btn-sm font-sm btn-light rounded" onclick="deleteRow(this)"
                                            href="{{ route($routes . '.destroy', $row->id) }}#"><i
                                                class="material-icons md-delete_forever"></i>
                                            {{ __('dashboard.' . $delete_button) }}</button>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- card end//-->
        <div class="pagination-area mt-30 mb-50">
            {!! $banners->appends($_GET)->links() !!}
        </div>
    </section>
@endsection
