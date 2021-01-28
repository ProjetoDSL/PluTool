@extends('layout.app')

@section('content')
<div class="flex h-full flex-col text-white ">
  <div class="flex-none w-full text-white">
    <p class="text-2xl text-left mb-20">Elicitate Performance Requirements</p>
  </div>
  <div class="flex flex-col justify-between w-full h-full">
    <div class="flex flex-wrap justify-center">
      <table class="table-fixed border-collapse w-10/12">
        <thead>
          <tr class="h-12">
            <th class="w-12 h-5 text-center">ID</th>
            <th class="w-1/2 h-5 text-left">Description</th>
            <th class="w-24 h-5 text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="h-12">
            <td class="border border-theme-contrast text-center"><p>12</p></td>
            <td class="border border-theme-contrast pl-5">This is the description</td>
            <td class="border border-theme-contrast">
              <div class="flex flex-row">
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-pencil-alt"></i>
                  </p>
                </button>
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-eye"></i>
                  </p>
                </button>
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-times"></i>
                  </p>
                </button>
              </div>
            </td>
          </tr>
          <tr class="h-12">
            <td class="border border-theme-contrast text-center">16</td>
            <td class="border border-theme-contrast pl-5">This is the description</td>
            <td class="border border-theme-contrast">
            <div class="flex flex-row">
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-pencil-alt"></i>
                  </p>
                </button>
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-eye"></i>
                  </p>
                </button>
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-times"></i>
                  </p>
                </button>
              </div>
            </td>
          </tr>
          <tr class="h-12">
            <td class="border border-theme-contrast text-center">18</td>
            <td class="border border-theme-contrast pl-5">This is the description</td>
            <td class="border border-theme-contrast">
            <div class="flex flex-row">
                <button class="flex flex-auto">
                  <p class="text-center w-full color-red">
                    <i class="fas fa-pencil-alt"></i>
                  </p>
                </button>
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-eye"></i>
                  </p>
                </button>
                <button class="flex flex-auto">
                  <p class="text-center w-full">
                    <i class="fas fa-times"></i>
                  </p>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex justify-between w-full">
      <a href="">
        <p class="ml-6"> View elicitation techniques </p>
      </a>
      <div class="flex justify-between w-1/5">
        <a href="">
          <button class="flex items-center h-12 w-36 text-sm bg-blue-400 focus:outline-none transition duration-200 ease-in-out hover:bg-green-200 focus:bg-theme-contrast">
            <div class="flex-auto">
              <p class="text-center text-xl font-semibold">Add New</p>
            </div>
          </button>
        </a>

        <a href="">
          <button class="flex items-center h-12 w-36 text-sm bg-green-300 focus:outline-none transition duration-200 ease-in-out hover:bg-green-200 focus:bg-theme-contrast">
            <div class="flex-auto">
              <p class="text-center text-xl font-semibold">Next</p>
            </div>
          </button>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
