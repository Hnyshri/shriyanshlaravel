<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleTwo.css') }}" rel="stylesheet">

    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js//core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/forms/inputs/typeahead/handlebars.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/inputs/alpaca/alpaca.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/inputs/alpaca/price_format.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/ui/prism.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/alpaca_advanced.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

</head>
<body>
    <div id="app">
        @include('header')

        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">
                @include('sidebar')
                @yield('content')
            </div>
        </div>
    </div>
        {{--@include('footer')--}}


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</body>
</html>
