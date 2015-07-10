<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - @yield('title')</title>

    <!-- bootstrap   -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <!-- bootstrap   -->

    <!-- custom  -->
    <link href="{{asset('css/my.css')}}" rel="stylesheet">
    <!-- custom  -->

    <!-- Custom Fonts -->
    <!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- bootstrap   -->
    <script src="{{asset('js/bootstrap.min.js')}}" type="javascript"></script>
    <!-- bootstrap   -->

</head>

<body data-spy="scroll" data-target=".mynavbar" id="dashboard">
    <!-- header -->
    @include('admin/includes/header')
    <!-- header -->
    <div class="content">
        <div class="col-md-2">
            <!-- sidebar -->
            @include('admin/includes/sidebar')
            <!-- sidebar -->
        </div>
        <div class="col-md-10">
            <!-- content -->
            @include('admin/includes/message')
            @yield('content')
            <!-- content -->
        </div>
    </div>
    <div class="col-md-12">
        <!-- footer -->
        @include('admin/includes/footer')
        <!-- @yield('footer') -->
        <!-- footer -->
    </div>
</body>

<!-- script -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
</script>
<!-- script -->
</html>
