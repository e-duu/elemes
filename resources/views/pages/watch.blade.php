@extends('layouts.watch')
@section('title')
  e - Learning Watch Pages
@endsection
@push('prepend-style')
  <style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .example::-webkit-scrollbar {
        display: none;
    }
  </style>
@endpush
@section('content')
  <div class="flex-col mx-auto pr-32">
    <div class="flex justify-between items-center mt-20 mb-7">
      <div class="flex-col">
        <h1 class="font-bold text-2xl text-gray-800">Static Apps and Dynamic Apps </h1>
        <p class="text-gray-800 mt-2">API Testing and Integration with REST API</p>
      </div>
      <div class="flex space-x-2">
        <a href="#" class="bg-purple-600 text-white rounded-md px-6 py-2">Send Review</a>
        <a href="#" class="bg-purple-600 text-white rounded-md px-6 py-2">Mark Finish & Next Video</a>
      </div>
    </div>
    <iframe class="w-full rounded-lg" height="620" src="https://www.youtube.com/embed/BXqHHCssXPc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <h2 class="text-xl mt-16 rounded-full w-60 font-semibold mb-8 bg-gray-800 px-5 py-2 text-center text-white">Discussion Session</h2>
    <div class="overflow-y-auto h-96 example">
      <div class="flex-col my-16">
        <div class="flex space-x-2 items-center">
          <img src="{{ asset('images/elearning.png') }}" class="w-16 rounded-full">
          <div class="flex-col">
            <h3 class="text-gray-800 text-lg font-bold">Member Username</h3>
            <p class="text-gray-600">Member Category</p>
          </div>
        </div>
        <p class="mt-3">Idgitaf is a musician well known by TikTok. She has a unique style and strong character in the way that she sings. She started to share her singing videos in 2019 and proceeded to get huge recognition in 2020. She went viral not only on TikTok but across multiple platforms with a lot of her videos. She released her first single in December 2020, titled: Hal Indah Butuh Waktu Untuk Datang, and currently collaborated with TikTok Indonesia released her second single titled: Terpikat Senyummu.</p>
      </div>
      <div class="flex-col my-16">
        <div class="flex space-x-2 items-center">
          <img src="{{ asset('images/elearning.png') }}" class="w-16 rounded-full">
          <div class="flex-col">
            <h3 class="text-gray-800 text-lg font-bold">Member Username</h3>
            <p class="text-gray-600">Member Category</p>
          </div>
        </div>
        <p class="mt-3">Idgitaf is a musician well known by TikTok. She has a unique style and strong character in the way that she sings. She started to share her singing videos in 2019 and proceeded to get huge recognition in 2020. She went viral not only on TikTok but across multiple platforms with a lot of her videos. She released her first single in December 2020, titled: Hal Indah Butuh Waktu Untuk Datang, and currently collaborated with TikTok Indonesia released her second single titled: Terpikat Senyummu.</p>
      </div>
      <div class="flex-col my-16">
        <div class="flex space-x-2 items-center">
          <img src="{{ asset('images/elearning.png') }}" class="w-16 rounded-full">
          <div class="flex-col">
            <h3 class="text-gray-800 text-lg font-bold">Member Username</h3>
            <p class="text-gray-600">Member Category</p>
          </div>
        </div>
        <p class="mt-3">Idgitaf is a musician well known by TikTok. She has a unique style and strong character in the way that she sings. She started to share her singing videos in 2019 and proceeded to get huge recognition in 2020. She went viral not only on TikTok but across multiple platforms with a lot of her videos. She released her first single in December 2020, titled: Hal Indah Butuh Waktu Untuk Datang, and currently collaborated with TikTok Indonesia released her second single titled: Terpikat Senyummu.</p>
      </div>
    </div>
    <div>
      <form class="flex justify-between mb-20">
        <input class="rounded-l-lg p-4 w-full border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="Insert your comment here..."/>
        <button class="px-16 rounded-r-lg bg-purple-600 text-gray-800 font-bold py-4 uppercase border-purple-600 border-t border-b border-r"><i class="fas fa-paper-plane text-2xl"></i></button>
      </form>
    </div>
  </div>
@endsection