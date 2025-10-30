<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.template')
<!-- Swiper CSS dari CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- File CSS kamu sendiri -->



@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We didn't reinvent the
                    wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough
                    to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough
                    to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                    and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                    alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-gray-900 p-3 dark:bg-white">

        <!-- Swiper -->
        <div class="swiper mySwiper h-full w-full">
            <div class="swiper-wrapper ">
                <div class="swiper-slide relative  flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-zinc-50 shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover w-full "
                            src="img/product/1.jpg"
                            alt="product image" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$449</span>
                                
                            </p>
                            
                        </div>
                        <a href="#"
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            
                            See Product</a>
                    </div>
                </div>
                <div class="swiper-slide relative  flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-zinc-50 shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover w-full "
                            src="img/product/1.jpg"
                            alt="product image" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$449</span>
                                
                            </p>
                            
                        </div>
                        <a href="#"
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            
                            See Product</a>
                    </div>
                </div>
                <div class="swiper-slide relative  flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-zinc-50 shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover w-full "
                            src="img/product/1.jpg"
                            alt="product image" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$449</span>
                                
                            </p>
                            
                        </div>
                        <a href="#"
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            
                            See Product</a>
                    </div>
                </div>
                <div class="swiper-slide relative  flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-zinc-50 shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover w-full "
                            src="img/product/1.jpg"
                            alt="product image" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$449</span>
                                
                            </p>
                            
                        </div>
                        <a href="#"
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            
                            See Product</a>
                    </div>
                </div>
                <div class="swiper-slide relative  flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-zinc-50 shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover w-full "
                            src="img/product/1.jpg"
                            alt="product image" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$449</span>
                                
                            </p>
                            
                        </div>
                        <a href="#"
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            
                            See Product</a>
                    </div>
                </div>
                <div class="swiper-slide relative  flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-zinc-50 shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover w-full "
                            src="img/product/1.jpg"
                            alt="product image" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$449</span>
                                
                            </p>
                            
                        </div>
                        <a href="#"
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            
                            See Product</a>
                    </div>
                </div>

                
            </div>
            
        </div>

    </section>
@endsection
<!-- Swiper JS dari CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- File JS kamu sendiri -->
<script src="{{ asset('js/swiper.js') }}"></script>

</html>
