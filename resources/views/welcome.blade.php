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
        <h1 class="container text-center text-gray-800 text-2xl font-bold pb-12 mx-auto max-w-screen-lg ">Search page</h1>
        <section class="flex flex-col md:flex-row mx-auto max-w-screen-lg">
            <!--start sidebar filters-->
            <section class="md:w-1/4 mb-4 mr-3">
                <div class="w-full p-6 bg-white rounded-md border border-gray-300 flex flex-col justify-start items-start space-y-4">
                    @include('filter')
                </div>
            </section>
            <!--end sidebar filters-->

            <!--start expositor vehicles-->
            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @include ('vehicles')
            </section>
            <!--end expositor vehicles--> 
        </section>
    </body>
</html>
