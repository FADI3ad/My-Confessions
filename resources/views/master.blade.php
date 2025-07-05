<!DOCTYPE html>
<html lang="en">

    @include('partials.head')

    <body>

        @include('partials.header')
        <div class="all-code-container ">

            @yield('content')

        </div>

        @include('partials.scripts')

        @yield('chartscripts')

    </body>
</html>
