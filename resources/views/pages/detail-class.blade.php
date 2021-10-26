@extends('layouts.app')
@section('title')
  e - Learning Class Detail
@endsection
@section('content')
  <div class="container mx-auto px-20">
    <div class="flex-col mt-14">
      <p class="mx-auto text-purple-600 py-1 bg-blue-100 text-center rounded-full w-44">Premium Edition</p>
      <h1 class="text-4xl text-gray-800 font-bold text-center mb-7 mx-auto mt-14 w-2/5">Mastering Blender 3D: Character Set ( Title )</h1>
      <p class="text-center text-lg text-gray-700 leading-relaxed mb-16">Learn the latest knowledge from mentors who <br> experienced in the field ( Excerpt )</p>
    </div>

    <div class="flex justify-around items-center px-80">
      <div class="flex-col">
        <p class="text-lg font-medium text-gray-800 text-center">Member</p>
        <p class="text-lg font-medium text-gray-800 mt-5"><b class="text-black">195</b> enrolled</p>
      </div>
      <div class="flex-col">
        <p class="text-lg font-medium text-gray-800 text-center">Difficulty</p>
        <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_med.svg" class="icon-level mt-5 mx-auto">
      </div>
      <div class="flex-col">
        <p class="text-lg font-medium text-gray-800 text-center">Certificate</p>
        <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="mx-auto mt-5 w-8" data-bs-original-title="Top Community" aria-label="Top Community">
      </div>
      <div class="flex-col">
        <p class="text-lg font-medium text-gray-800 text-center">Consult</p>
        <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_check_blue.svg" class="mx-auto mt-5 w-8" data-bs-original-title="Top Community" aria-label="Top Community">
      </div>
    </div>

    <div class="grid grid-cols-6 gap-7 items-start my-20">
      <div class="col-span-4">
        <iframe class="rounded-lg shadow-lg border w-full border-gray-300" height="500px" src="https://www.youtube.com/embed/Jz2nAmRXMS8" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-span-2">
        <div class="flex-col border-2 border-gray-300 shadow-lg p-5 overflow-auto" style="height: 447px; border-radius: 7px 7px 0px 0px;">
          <h2 class="text-purple-600 font-bold text-lg mb-4">172 lessons (2.23 hours)</h2>
          <div class="flex space-x-5 justify-between items-center rounded-full bg-gray-200 py-4 px-5 hover:shadow-lg mb-4">
            <div class="flex space-x-2 items-center">
              <i class="fas fa-play-circle text-xl text-gray-800"></i>
              <p class="text-md">Membangun portofolio</p>
            </div>
            <p class="text-md">2&nbsp;mins</p>
          </div>
          <div class="flex space-x-5 justify-between items-center rounded-full bg-gray-200 py-4 px-5 hover:shadow-lg mb-4">
            <div class="flex space-x-2 items-center">
              <i class="fas fa-play-circle text-xl text-gray-800"></i>
              <p class="text-md">Membangun portofolio</p>
            </div>
            <p class="text-md">2&nbsp;mins</p>
          </div>
          <div class="flex space-x-5 justify-between items-center rounded-full bg-gray-200 py-4 px-5 hover:shadow-lg mb-4">
            <div class="flex space-x-2 items-center">
              <i class="fas fa-play-circle text-xl text-gray-800"></i>
              <p class="text-md">Membangun portofolio</p>
            </div>
            <p class="text-md">2&nbsp;mins</p>
          </div>
        </div>
        @guest
          <a href="{{ url('watch') }}">
            <button class="bg-purple-600 p-5 w-full text-white text-md font-semibold relative" style="border-radius: 0px 0px 7px 7px; margin-top: -12px;">Login</button>
          </a>
        @endguest
        {{-- @auth
          @if (count($joinsButton) > 0)
            <a href="{{ route('classes.chapter', [$classes->id, $classes->chapter_galleries->first()->id]) }}">
              <button class="bg-purple-600 p-5 w-full text-white relative" style="border-radius: 0px 0px 7px 7px; margin-top: -10px;">Continue Learning</button>
            </a>
          @else
            <form method="POST" action="{{ route('classes.join',[$classes->id, isset($classes->chapter_galleries->first()->id) ? $classes->chapter_galleries->first()->id : $classes->user->id]) }}">
              @csrf
              @method("POST")
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <input type="hidden" name="class_id" value="{{ $classes->id }}">
              <button class="bg-purple-600 p-5 w-full text-white relative" style="border-radius: 0px 0px 7px 7px; margin-top: -10px;">Join Class</button>
            </form>
          @endif
        @endauth --}}
      </div>
    </div>

    <div class="rounded">
      <!-- Tabs -->
      <ul id="tabs" class="inline-flex w-full">
        <li class="px-12 py-2 -mb-px font-semibold text-lg mr-2 text-gray-700 bg-gray-300 hover:shadow-xl transition-all rounded-full"><a id="default-tab" href="#first">About</a></li>
        <li class="px-12 py-2 font-semibold text-lg mx-2 text-gray-700 bg-gray-300 hover:shadow-xl transition-all rounded-full"><a href="#second">Lessons</a></li>
        <li class="px-12 py-2 font-semibold text-lg mx-2 text-gray-700 bg-gray-300 hover:shadow-xl transition-all rounded-full"><a href="#third">Reviews</a></li>
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
            Key Points
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
            Designed For
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
              </div>
            </div>
          </div>
        </div>
        <div id="second" class="hidden">
          <div class="flex-col w-4/6">
            <h1 class="font-bold text-2xl text-gray-800 mb-3 w-max">
              Happy Learning
            </h1>
            <p class="text-lg mb-5">Useful class material for our career</p>
            <div class="bg-white shadow p-8 flex-col rounded-lg mb-8">
              <div class="flex space-x-3 items-center mb-10">
                <div class="bg-gray-200 rounded-full px-6 py-3">
                  <p class="text-gray-800 font-bold text-xl">1</p>
                </div>
                <h1 class="font-bold text-xl text-gray-800">UI Design to Code (Splash Screen)</h1>
              </div>
              <div class="flex-col items-center justify-between ml-2">
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
              </div>
            </div>
            <div class="bg-white shadow p-8 flex-col rounded-lg mb-8">
              <div class="flex space-x-3 items-center mb-10">
                <div class="bg-gray-200 rounded-full px-6 py-3">
                  <p class="text-gray-800 font-bold text-xl">1</p>
                </div>
                <h1 class="font-bold text-xl text-gray-800">UI Design to Code (Splash Screen)</h1>
              </div>
              <div class="flex-col items-center justify-between ml-2">
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
              </div>
            </div>
            <div class="bg-white shadow p-8 flex-col rounded-lg mb-8">
              <div class="flex space-x-3 items-center mb-10">
                <div class="bg-gray-200 rounded-full px-6 py-3">
                  <p class="text-gray-800 font-bold text-xl">1</p>
                </div>
                <h1 class="font-bold text-xl text-gray-800">UI Design to Code (Splash Screen)</h1>
              </div>
              <div class="flex-col items-center justify-between ml-2">
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
                <div class="flex space-x-4 mb-7">
                  <i class="fas fa-play-circle text-gray-800 text-xl"></i>
                  <p class="text-md">Setting Lighting and Rendering Materials</p>
                </div>
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
    function color() {
      document.getElementById("demo").style.color = 'white';
    }
  </script>
@endpush