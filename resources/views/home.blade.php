<x-app>
  <x-slot name="title">
    Home
  </x-slot>
  <div class="flex w-full h-full flex-col">
    <div class="flex-none text-white h-1/3 grid place-items-center w-full">
      <p class="text-7xl"> Seus projetos</p>
    </div>
    <div class="flex w-full h-full grid place-items-center">
      <div class="flex h-3 w-3/4 gap-x-2 px-4 text-white">
          <div class="flex justify-between w-1/6">
            <p>Title</p>
            <p>| </p>
          </div>
          <div class="flex justify-between w-1/6">
            <p>Created by</p>
            <p>| </p>
          </div>
          <div class="flex justify-between w-1/2">
            <p>Actions</p>
            <p>| </p>
          </div>
          <div class="flex justify-between w-1/6">
            <p>Access level</p>
            <p>|</p>
          </div>
      </div>
      @foreach ($projects as $proj)
        <p>{{$proj['title']}}</p>
      @endforeach
      <div class="font-bold row-span-6 h-full rounded-lg text-xl font-qsand py-2 px-4 text-white w-3/4 bg-gray-800">
        @for($id = 0; $id <5;$id++)
        <div class="flex bg-gray-700 rounded-lg h-12 mb-2">
          <div class="flex grid place-items-center justify-items-start w-1/6 pl-1">
            <p class="">Projeto 1</p>
          </div>
          <div class="grid place-items-center justify-items-start w-1/6">
            <p>João</p>
          </div>
          <div class="flex items-center gap-x-2  w-1/2">
            <a href="/app/{{$id}}/planning">
              <button class="flex gap-2 items-center justify-aro text-center px-3 border rounded-lg bg-theme-green">
                <p>Open</p>
                <i class="fas fa-folder-open fa-sm"></i>
              </button>
            </a>
            <a  href="">
              <button class="flex gap-x-2 text-center px-3 border rounded-lg bg-red-500">
                <p>
                  Delete
                </p>
                <i class="transform translate-y-2 fas fa-times fa-sm fill-current"></i>
              </button>
            </a>
            <a href="">
              <button class="flex gap-x-2 text-center px-3 border rounded-lg bg-yellow-400">
                <p>
                  Add member
                </p>
                <i class="transform translate-y-2 fas fa-users fa-sm fill-current"></i>
              </button>
            </a>
          </div>
          <div class="flex grid place-items-center justify-items-start w-1/6">
            <p>Admin</p>
          </div>
        </div>
        @endfor
        <div class="absolute bottom-8">
          <a href="">
            <button class="flex gap-x-2 text-center px-10 py-2 border rounded-lg bg-theme-green">
              <p>
                Add project
              </p>
              <i class="transform translate-y-2 fas fa-plus fa-sm fill-current"></i>
            </button>
          </a>
        </div>
      </div>
    </div>
</div>
</x-app>
