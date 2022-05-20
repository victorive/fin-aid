@extends('layouts.app')
@section('title', 'Profile')
@section('content')

<section class="bg-gray-50">
  <div class="px-4 py-20 mx-auto">
    <div class="w-full mx-auto px-0 md:px-6 pt-5 pb-6 mt-4 mb-0 sm:mt-8 sm:mb-5 space-y-4 bg-transparent md:bg-white border-0 border-gray-300 rounded-lg md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
      <h1 class="mb-5 text-md sm:text-xl font-bold sm:text-center">Profile</h1>
      <form class="pb-1 space-y-4">
        @csrf
        <label class="block text-sm">Full Name
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500" type="text" name="fullname" placeholder="Full name" readonly value="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}">
        </label>
        <label class="block text-sm">Email
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500" type="email" name="email" placeholder="Email address" readonly value="{{ auth()->user()->email }}">
        </label>
        <label class="block text-sm">Phone
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500" type="text" name="phone" placeholder="Phone" readonly value="{{ auth()->user()->phone }}">
        </label>
        <label class="block text-sm">Address
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500" type="text" name="address" placeholder="Address" readonly value="{{ auth()->user()->address }}">
        </label>
        <label class="block text-sm">Account Number
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500" type="text" name="account" placeholder="Address" readonly value="123456789">
        </label>
        <label class="block text-sm">Bank Name
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500" type="text" name="bankname" placeholder="Address" readonly value="Test Bank">
        </label>

        <input type="submit" class="w-full cursor-pointer sm:w-auto mt-5 bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-2 px-6 leading-relaxed sm:mt-0" value="Update">
      </form>
    </div>
  </div>
</section>

@endsection