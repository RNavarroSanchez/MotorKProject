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
        <h1 class="container text-center text-gray-800 text-2xl font-bold pb-12 ">Search page</h1>
        <section class="flex flex-col md:flex-row space-x-3 ">
            <!--start sidebar filters-->
            <section class="md:w-1/4">
                <div class="w-full p-6 bg-white rounded-md border border-gray-300 flex flex-col justify-start items-start space-y-4">
                    @include('filter')
                </div>
            </section>
            <!--end sidebar filters-->

            <!--start expositor vehicles-->
            <section class="md:w-3/4 w-full flex flex-wrap">
                @include ('vehicles')
            </section>
            <!--end expositor vehicles--> 
        </section>
    </body>
</html>
