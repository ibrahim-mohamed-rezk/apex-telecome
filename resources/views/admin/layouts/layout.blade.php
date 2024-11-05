<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset(settings('url_icon')) }}"> --}}
    <link href="{{ url('') }}/assets/admin/assets/css/style.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{'لوحة التحكم' }} | {{ $title ?? ' ' }}</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <style>


        .ck-editor__editable[role="textbox"] {
            /* editing area */
            color: black;
            min-height: 300px;

        }
    </style>
    @yield('styles')

</head>

<body class="{{ $theme == 'dark' ? 'dark' : 'light' }}">

    @yield('container_content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="{{ url('') }}/assets/admin/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="{{ url('') }}/assets/admin/assets/js/vendors/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{url('')}}/assets/admin/assets/js/vendors/select2.min.js"></script> --}}
    <script src="{{ url('') }}/assets/admin/assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="{{ url('') }}/assets/admin/assets/js/vendors/jquery.fullscreen.min.js"></script>
    {{-- <script src="{{url('')}}/assets/admin/assets/js/vendors/chart.js"></script> --}}
    <script src="{{ url('') }}/assets/admin/assets/js/main.js?v=1.0.0"></script>
    <script src="{{ url('') }}/assets/admin/assets/js/custom-chart.js" type="text/javascript"></script>

    <script>
        function deleteRow(elem) {
            var urls = $(elem).attr('href');
            $.ajax({
                url: urls,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}",
                }
            })
            setTimeout(
                function() {
                    location.reload();
                }, 100);
        }
    </script>
    <script>
        function confirmDelete(elem) {
            var urls = $(elem).attr('href');
            var message = "هل أنت متأكد أنك تريد حذف هذا العنصر؟";
            if (confirm(message)) {
                $.ajax({
                    url: urls,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                });
                setTimeout(
                    function() {
                        location.reload();
                    }, 100);
            }
        }
    </script>

    @yield('inner_js')

</body>

</html>
