<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/motork.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>MotorK Project</title>
    </head>
    <body class="px-12 pt-12">
        <h1 class="container text-center text-gray-800 text-2xl font-bold pb-12">Search page</h1>
        <section class="flex">
            <!--start sidebar filters-->
            <section class="lg:w-1/4">
                <div class="bg-red-800 px- w-full h-full">
                    @include('filter')
                </div>
            </section>
            <!--end sidebar filters-->

            <!--start expositor vehicles-->
            <section class="w-3/4 flex flex-wrap">
                @include ('vehicles')
            </section>
            <!--end expositor vehicles--> 
        </section>
    </body>
</html>
