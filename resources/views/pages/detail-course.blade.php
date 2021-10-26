@extends('layouts.app')
@section('title')
  e - Learning Course Detail
@endsection
@section('content')
  <div class="container mx-auto px-20">
    <div class="flex-col mt-14">
      <p class="mx-auto text-purple-700 py-1 bg-purple-200 text-center rounded-full w-44">Private Course</p>
      <h1 class="text-4xl text-gray-800 font-bold text-center mb-7 mx-auto mt-14 w-2/5">Mastering Blender 3D: Character Set ( Title )</h1>
      <p class="text-center text-lg text-gray-700 leading-relaxed mb-16">Learn the latest knowledge from mentors who <br> experienced in the field ( Excerpt )</p>
    </div>

    <div class="mx-auto">
      <img src="{{ asset('images/vue.png') }}" class="h-full w-full rounded-xl mb-20 shadow-xl">
    </div>

    <div class="rounded">
      <!-- Tabs -->
      <ul id="tabs" class="inline-flex w-full">
        <li class="px-12 py-2 -mb-px font-semibold text-lg mr-2 text-gray-700 bg-gray-300 rounded-full"><a id="default-tab" href="#first">About</a></li>
        <li class="px-12 py-2 font-semibold text-lg mx-2 text-gray-700 bg-gray-300 rounded-full"><a href="#second">Subscribe</a></li>
        <li class="px-12 py-2 font-semibold text-lg mx-2 text-gray-700 bg-gray-300 rounded-full"><a  href="#third">Reviews</a></li>
      </ul>

      <!-- Tab Contents -->
      <div id="tab-contents" class="mt-12">
        <div id="first">
          <h1 class="font-bold text-2xl text-gray-800 mb-5">
            Develop Your Skills
          </h1>
          <p class="leading-loose w-3/5">
            Karakter 3 dimensi banyak digunakan diberbagai industri antara lain film, animasi, iklan dan game. Karakter 3 dimensi juga banyak digunakan dalam dunia medis sebagai representasi interaktif anatomi manusia. Semakin berkembang zaman, karakter 3 dimensi sekarang digunakan untuk kebutuhan desain, seperti poster, desain UI, Website, dan lain sebagainya.
            Dikelas kali ini kita akan mempelajari bagaimana cara membuat karakter 3 dimensi dengan menggunakan software Blender. Dari menyiapkan konsep, mencari referensi, dan membuat sketsa. Kemudian sketsa itu akan kita realisasikan dengan modeling 3 dimensi di software blender. Kita juga akan menambahkan rigging, membuat pose dan menambahkan objek tambahan agar karakter 3 dimensi yang kita buat akan menjadi lebih hidup. Karakter yag kita buat ini sifatnya universal, sehingga dapat digunakan untuk kebutuhan animasi, desain, game dan lain sebagainya.
          </p>
          <h1 class="font-bold text-2xl text-gray-800 mb-5 mt-14">
            What Students Will Learn
          </h1>
          <div class="grid grid-cols-4 justify-between w-3/5">
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Menambahkan rigging dan membuat pose</p>
            </div>
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Menambahkan rigging dan membuat pose</p>
            </div>
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Menambahkan rigging dan membuat pose</p>
            </div>
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Menambahkan rigging dan membuat pose</p>
            </div>
          </div>
          <h1 class="font-bold text-2xl text-gray-800 mb-5 mt-14">
            Participation Terms
          </h1>
          <div class="grid grid-cols-4 justify-between w-3/5">
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Cocok bagi yang ingin membuat asset karakter 3 dimensi untuk dijual</p>
            </div>
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Cocok bagi yang ingin membuat 3D karakter untuk kebutuhan desain</p>
            </div>
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Menambahkan rigging dan membuat pose</p>
            </div>
            <div class="flex col-span-2 space-x-3 mb-10 items-baseline">
              <img src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="icon">
              <p>Menambahkan rigging dan membuat pose</p>
            </div>
            <div class="flex-col">
              <h1 class="font-bold text-2xl text-gray-800 mb-5 mt-14 w-max">
                Learn With Expert
              </h1>
              <div class="grid grid-cols-4 items-start gap-10">
                <div class="flex-col bg-white rounded-lg p-7 shadow-xl w-max">
                  <div class="flex justify-between mb-10">
                    <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Clipart.png" class="h-20 border-2 p-1 border-purple-700 rounded-full mr-10">
                    <div class="flex item-center">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                    </div>
                  </div>
                  <h1 class="font-bold text-lg text-gray-700 mb-1">Mentors Name</h1>
                  <p class="text-md text-gray-400">Full-Stack Developer</p>
                </div>
                <div class="flex-col bg-white rounded-lg p-7 ml-80 shadow-xl w-max">
                  <div class="flex justify-between mb-10">
                    <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Clipart.png" class="h-20 border-2 p-1 border-purple-700 rounded-full mr-10">
                    <div class="flex item-center">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                      <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                    </div>
                  </div>
                  <h1 class="font-bold text-lg text-gray-700 mb-1">Mentors Name</h1>
                  <p class="text-md text-gray-400">Full-Stack Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="second" class="hidden">
          <div class="grid grid-cols-9 gap-7 justify-between">
            <div class="col-span-3 flex-col bg-white rounded-b-xl shadow-lg relative">
              <div class="absolute top-0 bg-purple-600 py-12 rounded-t-xl w-full">
                <h1 class="font-bold text-3xl text-center text-white">Starter Package</h1>
              </div>
              <div class="flex-col mb-20">
                <h1 class="text-center text-5xl text-purple-600 font-bold mt-40 relative"><sup class="left-24 text-base absolute ">Rp </sup>250.000</h1>
                <h2 class="text-purple-600 text-center text-xl">1 Session</h2>
              </div>
              <div class="px-7 flex-col">
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">1 Session of Placement Test</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">IDR 200.000 per session</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Basic to advanced material</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Up to 30 minutes per session</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Consultation via Whatsapp group</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <button class="bg-purple-600 rounded-lg py-4 text-xl font-bold text-white mb-10 mt-5 w-full">Buy Now</button>
              </div>
            </div>
            <div class="col-span-3 flex-col bg-white rounded-b-xl shadow-lg relative">
              <div class="absolute top-0 bg-purple-600 py-12 rounded-t-xl w-full">
                <h1 class="font-bold text-3xl text-center text-white">Starter Package</h1>
              </div>
              <div class="flex-col mb-20">
                <h1 class="text-center text-5xl text-purple-600 font-bold mt-40 relative"><sup class="left-24 text-base absolute ">Rp </sup>250.000</h1>
                <h2 class="text-purple-600 text-center text-xl">1 Session</h2>
              </div>
              <div class="px-7 flex-col">
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">1 Session of Placement Test</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">IDR 200.000 per session</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Basic to advanced material</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Up to 30 minutes per session</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Consultation via Whatsapp group</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <button class="bg-purple-600 rounded-lg py-4 text-xl font-bold text-white mb-10 mt-5 w-full">Buy Now</button>
              </div>
            </div>
            <div class="col-span-3 flex-col bg-white rounded-b-xl shadow-lg relative">
              <div class="absolute top-0 bg-purple-600 py-12 rounded-t-xl w-full">
                <h1 class="font-bold text-3xl text-center text-white">Starter Package</h1>
              </div>
              <div class="flex-col mb-20">
                <h1 class="text-center text-5xl text-purple-600 font-bold mt-40 relative"><sup class="left-24 text-base absolute ">Rp </sup>250.000</h1>
                <h2 class="text-purple-600 text-center text-xl">1 Session</h2>
              </div>
              <div class="px-7 flex-col">
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">1 Session of Placement Test</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">IDR 200.000 per session</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Basic to advanced material</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Up to 30 minutes per session</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <div class="flex items-center space-x-2">
                  <img src="{{ asset('/images/verified.png') }}" class="w-10">
                    <p class="text-lg text-purple-800 mb-2">Consultation via Whatsapp group</p>
                </div>
                <div class="border-b-4 border-gray-200 w-74 ml-12 mb-8"></div>
                <button class="bg-purple-600 rounded-lg py-4 text-xl font-bold text-white mb-10 mt-5 w-full">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div id="third" class="hidden">
          <div class="flex-col">
            <h1 class="font-bold text-2xl text-gray-800 mb-3 w-max">
              332 Happy Members ( Count ember who enroll this class )
            </h1>
            <p class="text-lg mb-5">Review after joining the Mastering Blender 3D class: Design Icon Set</p>
            <div class="grid grid-cols-9 gap-10 mt-20">
              <div class="col-span-3">
                <div class="flex-col bg-white rounded-xl p-7 shadow">
                  <h1 class="font-bold text-lg text-gray-700 mb-1">Members Name</h1>
                  <p class="text-md text-gray-400">Full-Stack Developer</p>
                  <p class="mt-10">The class is easy to learn, the delivery is also very communicative and the material is quite complete. Great!!</p>
                  <div class="flex items-center mt-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                  </div>
                </div>
              </div>
              <div class="col-span-3">
                <div class="flex-col bg-white rounded-xl p-7 shadow">
                  <h1 class="font-bold text-lg text-gray-700 mb-1">Members Name</h1>
                  <p class="text-md text-gray-400">Full-Stack Developer</p>
                  <p class="mt-10">The class is easy to learn, the delivery is also very communicative and the material is quite complete. Great!!</p>
                  <div class="flex items-center mt-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                  </div>
                </div>
              </div>
              <div class="col-span-3">
                <div class="flex-col bg-white rounded-xl p-7 shadow">
                  <h1 class="font-bold text-lg text-gray-700 mb-1">Members Name</h1>
                  <p class="text-md text-gray-400">Full-Stack Developer</p>
                  <p class="mt-10">The class is easy to learn, the delivery is also very communicative and the material is quite complete. Great!!</p>
                  <div class="flex items-center mt-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                  </div>
                </div>
              </div>
              <div class="col-span-3">
                <div class="flex-col bg-white rounded-xl p-7 shadow">
                  <h1 class="font-bold text-lg text-gray-700 mb-1">Members Name</h1>
                  <p class="text-md text-gray-400">Full-Stack Developer</p>
                  <p class="mt-10">The class is easy to learn, the delivery is also very communicative and the material is quite complete. Great!!</p>
                  <div class="flex items-center mt-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                  </div>
                </div>
              </div>
              <div class="col-span-3">
                <div class="flex-col bg-white rounded-xl p-7 shadow">
                  <h1 class="font-bold text-lg text-gray-700 mb-1">Members Name</h1>
                  <p class="text-md text-gray-400">Full-Stack Developer</p>
                  <p class="mt-10">The class is easy to learn, the delivery is also very communicative and the material is quite complete. Great!!</p>
                  <div class="flex items-center mt-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" class="w-10">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('addon-script')
  <script>
    let tabsContainer = document.querySelector("#tabs");
    let tabTogglers = tabsContainer.querySelectorAll("a");
    console.log(tabTogglers);
    tabTogglers.forEach(function(toggler) {
      toggler.addEventListener("click", function(e) {
        e.preventDefault();
        let tabName = this.getAttribute("href");
        let tabContents = document.querySelector("#tab-contents");
        for (let i = 0; i < tabContents.children.length; i++) {
          tabTogglers[i].parentElement.classList.remove("text-gray-700",  "-mb-px");  tabContents.children[i].classList.remove("hidden");
          tabTogglers[i].parentElement.classList.remove("text-white",  "-mb-px");  tabContents.children[i].classList.remove("hidden");
          tabTogglers[i].parentElement.classList.remove("bg-purple-600",  "-mb-px");  tabContents.children[i].classList.remove("hidden");
          if ("#" + tabContents.children[i].id === tabName) {
            continue;
          }
          tabContents.children[i].classList.add("hidden");
        }
        e.target.parentElement.classList.add("text-white", "-mb-px");
        e.target.parentElement.classList.add("bg-purple-600", "-mb-px");
      });
    });
    document.getElementById("default-tab").click();
  </script>
@endpush