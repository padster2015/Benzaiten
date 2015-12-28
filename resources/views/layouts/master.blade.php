<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>


    <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        @include('includes.footer')

</div>
</body>
</html>