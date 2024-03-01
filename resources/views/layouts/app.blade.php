<!doctype html>

<html lang="pt-br">

    @include('layouts.header')

    <body class=" color-light ">

        <!-- Wrapper Start -->
        <div class="wrapper">

            @include('layouts.sidebar')

            @include('layouts.navbar')

           <div style="margin-top: -50px">
            @yield('content')
           </div>

        </div>
        <!-- Wrapper End-->

        @include('layouts.footer')

        @include('layouts.scripts')

        @yield('script')

    </body>
    
</html>
        



