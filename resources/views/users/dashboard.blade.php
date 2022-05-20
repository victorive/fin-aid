@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<section class="px-4 py-10 relative top-[65px] min-h-screen">
  <div class="w-full mx-auto">
    <a href="{{ route('askfordonation') }}" class="w-full md:w-auto bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-3 px-3 leading-relaxed">Ask for donation 
      <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
    </a>
    <img class="mx-auto mt-16 mb-4 w-6/12 sm:w-3/12" src="{{ asset('images/illustration2.svg') }}">
    <h2 class="text-lg font-medium text-gray-500 text-center">Nothing here yet!</h2>
  </div>
</section>

@endsection

