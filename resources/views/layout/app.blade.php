<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!--
            used basic style from
            view-source:https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/
        -->
        <title>Next5</title>
        @component('components.header')
        @endcomponent
    </head>
    <body>
        @yield('content')

        @component('components.footer')
        @endcomponent
        @component('jquery.timer')
        @endcomponent

        @yield('page-scripts')        
    </body>
</html>
