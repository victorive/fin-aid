@extends('layouts.guest')
@section('title', 'Home')
@section('content')

<section class="px-4 py-10 relative top-[65px]">
    <div class="w-full mx-auto grid grid-cols-1 gap-0 md:grid-cols-12 lg:grid-cols-11 lg:gap-24 xl:w-11/12">
        <div class="col-auto text-left self-center md:col-span-6 lg:text-left">
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight md:tracking-normal leading-normal md:leading-none">Sapa is Real!</h1>
            <p class="text-md md:text-lg text-gray-600 mb-5">So, here's a financial aid platform to support students going through financial hell. Kindly support this cause to help these students achieve their financial goals.</p>
            <a href="#donate" class="w-full sm:w-auto bg-black hover:bg-[#24207f] rounded-lg font-medium text-white text-lg text-center align-middle py-2 px-6 leading-relaxed">Donate Now</a>
        </div>
        <div class="col-auto md:col-span-5">
            <img src="{{ asset('images/fin-aid2.svg') }}">
        </div>
</div>
</section>

<section id="donate" class="px-4 py-10 mt-[65px] mx-auto">
    <h1 class="mb-1 text-3xl font-extrabold leading-normal">Active donation campaigns</h1>
    <p class="mb-12 text-lg text-gray-500">Simply donate by clicking the button next to the person</p>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-16 lg:gap-x-24 gap-y-20">
        <div class="rounded-lg shadow-lg shadow-gray-500/50">
            <img class="object-cover w-full h-20" src="{{ asset('images/illustration.png') }}" alt="campaign image"/>
            <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-700">Anon Test</h4>
                <p class="leading-normal text-gray-700 text-sm line-clamp-3">Sapa is at work. Send help please! Send help please! Send help please! Send help please!</p>
                <p class="leading-normal font-semibold text-sm">Amount Needed: ₦</p>
            </div>
        </div>

        <div class="rounded-lg shadow-lg shadow-gray-500/50">
            <img class="object-cover w-full h-20" src="{{ asset('images/illustration.png') }}" alt="campaign image"/>
            <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-700">Anon Test</h4>
                <p class="leading-normal text-gray-700 text-sm line-clamp-3">Sapa is at work. Send help please! Send help please! Send help please! Send help please!</p>
                <p class="leading-normal font-semibold text-sm">Amount Needed: ₦</p>
            </div>
        </div>

        <div class="rounded-lg shadow-lg shadow-gray-500/50">
            <img class="object-cover w-full h-20" src="{{ asset('images/illustration.png') }}" alt="campaign image"/>
            <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-700">Anon Test</h4>
                <p class="leading-normal text-gray-700 text-sm line-clamp-3">Sapa is at work. Send help please! Send help please! Send help please! Send help please!</p>
                <p class="leading-normal font-semibold text-sm">Amount Needed: ₦</p>
            </div>
        </div>

        <div class="rounded-lg shadow-lg shadow-gray-500/50">
            <img class="object-cover w-full h-20" src="{{ asset('images/illustration.png') }}" alt="campaign image"/>
            <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-700">Anon Test</h4>
                <p class="leading-normal text-gray-700 text-sm line-clamp-3">Sapa is at work. Send help please! Send help please! Send help please! Send help please!</p>
                <p class="leading-normal font-semibold text-sm">Amount Needed: ₦</p>
            </div>
        </div>

        <div class="rounded-lg shadow-lg shadow-gray-500/50">
            <img class="object-cover w-full h-20" src="{{ asset('images/illustration.png') }}" alt="campaign image"/>
            <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-700">Anon Test</h4>
                <p class="leading-normal text-gray-700 text-sm line-clamp-3">Sapa is at work. Send help please! Send help please! Send help please! Send help please!</p>
                <p class="leading-normal font-semibold text-sm">Amount Needed: ₦</p>
            </div>
        </div>

        <div class="rounded-lg shadow-lg shadow-gray-500/50">
            <img class="object-cover w-full h-20" src="{{ asset('images/illustration.png') }}" alt="campaign image"/>
            <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-700">Anon Test</h4>
                <p class="leading-normal text-gray-700 text-sm line-clamp-3">Sapa is at work. Send help please! Send help please! Send help please! Send help please!</p>
                <p class="leading-normal font-semibold text-sm">Amount Needed: ₦</p>
            </div>
        </div>
    </div>

    <div class="py-4 flex justify-center" aria-label="page navigation">
        <ul class="inline-flex items-center">
            <li><button class="h-10 px-5 text-[#24207F] transition-colors duration-150 bg-white rounded-l-lg focus:shadow-outline hover:bg-[#c9c8eb]">Prev</button></li>
            <li><button class="h-10 px-5 text-white transition-colors duration-150 bg-[#24207F] focus:shadow-outline">1</button></li>
            <li><button class="h-10 px-5 text-[#24207F] transition-colors duration-150 bg-white focus:shadow-outline hover:bg-[#c9c8eb]">2</button></li>
            <li><button class="h-10 px-5 text-[#24207F] transition-colors duration-150 bg-white focus:shadow-outline hover:bg-[#c9c8eb]">3</button></li>
            <li><button class="h-10 px-5 text-[#24207F] transition-colors duration-150 bg-white rounded-r-lg focus:shadow-outline hover:bg-[#c9c8eb]">Next</button></li>
        </ul>
    </div>
</section>
@endsection