<!DOCTYPE html>
<html lang="en">

    @include('partials.head')

    <body>

        @include('partials.navbar')
        <div class="all-code-container ">

            @yield('content')

        </div>

        @include('partials.scripts')

        @yield('indexcripts')

    </body>
</html>
