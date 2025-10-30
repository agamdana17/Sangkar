<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link rel="icon" type="image/png" href="img/raf1.png">
</head>


<body>
    <nav x-data="{ open: false }" x-on:click.outside="open = false"
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center h-16 justify-between mx-auto p-4">

            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="img/raf1.png" class="h-8" alt="RAF Logo">
                <span class="hidden md:inline self-center text-2xl font-semibold whitespace-nowrap dark:text-white">RAF
                    Sangkar</span>
            </a>

            <!-- Tombol kanan + toggle mobile -->
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login
                </button>

                <!-- Tombol toggle navbar -->
                <button x-on:click="open = !open" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 border-1 rounded-lg md:hidden 
                       hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 
                       dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" :aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- Menu navbar -->
            <div id="navbar-sticky" class="items-center justify-between w-full md:flex md:w-auto md:order-1"
                :class="{ 'hidden': !open }">

                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 
                       md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white 
                       dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2  rounded-sm md:p-0 border-b-2 border-transparent
                            {{ request()->routeIs('home')
                                ? 'text-blue-700 font-semibold border-blue-700 dark:text-blue-500'
                                : 'text-gray-900 hover:border-blue-700  dark:text-white ' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product') }}"
                            class="block py-2 rounded-sm md:p-0 border-b-2 border-transparent
                            {{ request()->routeIs('product')
                                ? 'text-blue-700 font-semibold border-blue-700 dark:text-blue-500'
                                : 'text-gray-900 hover:border-blue-700  dark:text-white ' }}">
                            Product
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 rounded-sm md:p-0 border-b-2 border-transparent
                            {{ request()->routeIs('about')
                                ? 'text-blue-700 font-semibold border-blue-700 dark:text-blue-500'
                                : 'text-gray-900 hover:border-blue-700 dark:text-white ' }}">
                            About Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="pt-15">
        @yield('content')
    </main>

    <footer class="bg-white shadow-sm dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="#"
                    class="hover:underline">RAF Sangkar™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Product</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About Us</a>
                </li>
            </ul>
        </div>
    </footer>


</body>





</html>
