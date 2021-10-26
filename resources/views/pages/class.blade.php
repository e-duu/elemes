@extends('layouts.sub')
@section('title')
  e - Learning Class
@endsection
@section('content')
  <div class="container mx-auto">
    <div class="flex-col mt-20">
      <h1 class="text-4xl text-gray-800 font-bold text-center mb-7">Class by Category</h1>
      <p class="text-center text-lg text-gray-700 leading-relaxed mb-16">Learn the latest knowledge from mentors who <br> experienced in the field</p>
    </div>

    <div class="grid grid-cols-12 gap-12 mt-10">
      <div class="col-span-2">
        <div class="flex-col">
          <div class="block">
            <h1 class="font-bold text-xl text-gray-700">Sort & Filter</h1>
            <div class="mt-2">
              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="1" checked>
                  <span class="ml-2 text-lg">Latest Release</span>
                </label>
              </div>
              <div class="my-3">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="2">
                  <span class="ml-2 text-lg">Populers</span>
                </label>
              </div>
              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="3">
                  <span class="ml-2 text-lg">On Promo</span>
                </label>
              </div>
            </div>
          </div>
          <div class="block my-10">
            <h1 class="font-bold text-xl text-gray-700">Difficulty</h1>
            <div class="mt-2">
              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="1" checked>
                  <span class="ml-2 text-lg">Easy</span>
                </label>
              </div>
              <div class="my-3">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="2">
                  <span class="ml-2 text-lg">Medium</span>
                </label>
              </div>
              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="3">
                  <span class="ml-2 text-lg">Hard</span>
                </label>
              </div>
            </div>
          </div>
          <div class="block">
            <h1 class="font-bold text-xl text-gray-700">Type</h1>
            <div class="mt-2">
              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="1" checked>
                  <span class="ml-2 text-lg">Free</span>
                </label>
              </div>
              <div class="my-3">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="2">
                  <span class="ml-2 text-lg">Premium</span>
                </label>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-span-10">
        <div class="grid grid-cols-9 gap-5 mx-5 mb-40">
        {{-- @foreach ($popularClass as $popular) --}}
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
              <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            </a>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_ez.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_med.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_med.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Enroll Now <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_hard.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_hard.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_hard.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
        {{-- @endforeach --}}
      </div>
      </div>
    </div>
    
  </div>
@endsection