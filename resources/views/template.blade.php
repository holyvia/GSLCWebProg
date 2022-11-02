<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>GSLC</title>
</head>

<body>
    <div class="relative bg-white ">
        <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">

            </div>
            <div class="my-2">

            </div>
            <div class="md:flex items-center justify-end flex-1 lg:w-0">
                <a href="/"
                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-teal-500 hover:bg-teal-700">
                    Exit
                </a>
            </div>
        </div>

    </div>
    <hr>
    <div class="pt-4"></div>
    @yield('content')
</body>

</html>
