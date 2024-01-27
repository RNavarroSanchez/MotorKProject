<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <title>MotorK Project</title>
    </head>
    <body>
        <section class="">
            <!--start sidebar filters-->
            <section class="lg:w-1/4">

            </section>
            <!--end sidebar filters-->

            <!--start expositor vehicles-->
            <section class="lg:w-3/4 flex flex-wrap">
                @include ('vehicles')
            </section>
            <!--end expositor vehicles--> 
        </section>
    </body>
</html>
