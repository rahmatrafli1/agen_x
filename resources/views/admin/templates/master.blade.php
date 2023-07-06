<!doctype html>
<html lang="en">

@include('admin.templates.partials.header')

<body>

    @include('admin.templates.partials.navbar')

    <div class="container-fluid">
        <div class="row">
            @include('admin.templates.partials.sidebar')

            @yield('content')
        </div>
    </div>


    @include('admin.templates.partials.footer')
</body>

</html>
