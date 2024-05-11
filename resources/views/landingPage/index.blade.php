<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/logo.png') }}" class="h-16" alt="Example Image">
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="section.home" class="block py-2 px-3 text-tcolor bg-tcolor rounded md:bg-transparent md:text-white md:p-0 
                                dark:text-white md:dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-tcolor1 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
                                md:hover:text-tcolor md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700
                                dark:hover:text-white md:dark:hover:bg-transparent">About
                                Us</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-tcolor1 rounded hover:bg-gray-100 md:hover:bg-transparent 
                                md:border-0 md:hover:text-tcolor md:p-0 dark:text-white md:dark:hover:text-blue-500
                                dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-tcolor1 rounded hover:bg-gray-100 md:hover:bg-transparent 
                                md:border-0 md:hover:text-tcolor md:p-0 dark:text-white md:dark:hover:text-blue-500 
                                dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Faq</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-tcolor1 rounded hover:bg-gray-100 md:hover:bg-transparent 
                                md:border-0 md:hover:text-tcolor md:p-0 dark:text-white md:dark:hover:text-blue-500 
                                dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Testimonials</a>
                        </li>
                        <li>
                            <button type="button" class="text-white bg-blue-700 hover:bg-tcolor1 focus:ring-4 focus:outline-none 
                                focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-3 text-center dark:bg-blue-600 
                                dark:hover:bg-blue-700 dark:focus:ring-blue-800">Contact
                                Us</button>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>



    </header>
    <div>

        @yield('content')

    </div>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>