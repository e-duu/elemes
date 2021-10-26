@extends('layouts.app')
@section('title')
  e - Learning Cart
@endsection
@section('content')
  <div class="container mx-auto px-40">
   <nav class="bg-grey-light rounded font-sans w-full mt-20">
      <ol class="list-reset flex text-grey-dark">
        <li><a href="/" class="font-bold text-xl"><i class="fas fa-home"></i> Home</a></li>
        <li><span class="mx-2 text-xl">></span></li>
        {{-- <li><a href="#" class="font-bold">Library</a></li>
        <li><span class="mx-2">></span></li> --}}
        <li class="text-xl">Cart</li>
      </ol>
    </nav>
    <div class="border-b-2 border-gray-300 mt-3 mb-20"></div>
    <div class="grid grid-cols-12 gap-5 items-start">
      <div class="col-span-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
          <div class="-my-2">
            <div class="py-2">
              <div class="shadow border-b border-gray-200">
                <table class="w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        COVER
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        TITLE
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        PRICE
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        ACTION
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset('images/vue.png') }}" class="w-40">
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-md text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-md text-gray-500">Optimization</div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-md leading-5 font-semibold rounded-full">
                          $20.00
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md">
                        <div class="flex items-center space-x-3">
                          <button class="font-bold text-xl bg-red-500 text-white rounded-full px-2">-</button>
                          <p class="text-lg font-semibold">20</p>
                          <button class="font-bold text-xl bg-green-500 text-white rounded-full px-2">+</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset('images/vue.png') }}" class="w-40">
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-md text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-md text-gray-500">Optimization</div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-md leading-5 font-semibold rounded-full">
                          $20.00
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md">
                        <div class="flex items-center space-x-3">
                          <button class="font-bold text-xl bg-red-500 text-white rounded-full px-2">-</button>
                          <p class="text-lg font-semibold">20</p>
                          <button class="font-bold text-xl bg-green-500 text-white rounded-full px-2">+</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset('images/vue.png') }}" class="w-40">
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-md text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-md text-gray-500">Optimization</div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-md leading-5 font-semibold rounded-full">
                          $20.00
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md">
                        <div class="flex items-center space-x-3">
                          <button class="font-bold text-xl bg-red-500 text-white rounded-full px-2">-</button>
                          <p class="text-lg font-semibold">20</p>
                          <button class="font-bold text-xl bg-green-500 text-white rounded-full px-2">+</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset('images/vue.png') }}" class="w-40">
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-md text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-md text-gray-500">Optimization</div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-md leading-5 font-semibold rounded-full">
                          $20.00
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md">
                        <div class="flex items-center space-x-3">
                          <button class="font-bold text-xl bg-red-500 text-white rounded-full px-2">-</button>
                          <p class="text-lg font-semibold">20</p>
                          <button class="font-bold text-xl bg-green-500 text-white rounded-full px-2">+</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset('images/vue.png') }}" class="w-40">
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-md text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-md text-gray-500">Optimization</div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-md leading-5 font-semibold rounded-full">
                          $20.00
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-md">
                        <div class="flex items-center space-x-3">
                          <button class="font-bold text-xl bg-red-500 text-white rounded-full px-2">-</button>
                          <p class="text-lg font-semibold">20</p>
                          <button class="font-bold text-xl bg-green-500 text-white rounded-full px-2">+</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="flex-col mt-16">
                <h1 class="text-2xl mb-7">Buyer Information &nbsp;:</h1>
                <form action="">
                  <label class="text-gray-700">Full Name</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-2 mb-5 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Input your name">
                  <label class="text-gray-700">Full Name</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-2 mb-5 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Input your name">
                  <label class="text-gray-700">Full Name</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-2 mb-5 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Input your name">
                  <label class="block text-left">
                    <span class="text-gray-700">Textarea</span>
                    <textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter some long form content."></textarea>
                  </label>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-4 bg-gray-100 rounded-t-sm">
        <div class="p-3">
          <div class="flex justify-between items-center mb-5 mt-2">
            <p class="text-lg">ID Transaction</p>
            <p class="text-lg font-semibold">#SH1200</p> 
          </div>
          <div class="border-b-2 border-white mb-5"></div>
          <div class="flex justify-between items-center mb-5">
            <p class="text-lg">ID Transaction</p>
            <p class="text-lg font-semibold">#SH1200</p> 
          </div>
          <div class="border-b-2 border-white mb-5"></div>
          <div class="flex justify-between items-center mb-5">
            <p class="text-lg">ID Transaction</p>
            <p class="text-lg font-semibold">#SH1200</p> 
          </div>
          <div class="border-b-2 border-white mb-5"></div>
          <div class="flex justify-between items-center mb-5">
            <p class="text-lg">ID Transaction</p>
            <p class="text-lg font-semibold">#SH1200</p> 
          </div>
          <div class="border-b-2 border-white mb-5"></div>
          <div class="flex justify-between items-center mb-5">
            <p class="text-lg">ID Transaction</p>
            <p class="text-lg font-semibold">#SH1200</p> 
          </div>
        </div>
        <div class="bg-black text-center text-white text-xl py-4 rounded-b-sm">CHECKOUT NOW</div>
      </div>
    </div>
    
  </div>
@endsection