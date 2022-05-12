<nav
  class="align-center flex min-h-[35px] w-full justify-between bg-primary mb-4 p-4 shadow-md"
>
  <a href="/" class="m-auto font-bold md:m-0">
    <img src="{{ asset('svg/Stori.svg') }}" width="75px" height="75px" alt="" />
  </a>
  <div class="flex items-center">
    @auth
    <div x-data="{open: false}" @click="open = !open" class="relative md:mr-4">
      <i class="fa-solid fa-user text-xl cursor-pointer text-gray-600"></i>

      <ul
        x-show="open"
        @click.outside="open = false"
        class="absolute top-8 -left-20 z-10 text-md py-4 shadow-lg"
      >
        <li class="flex items-center hover:bg-slate-200 w-full px-2">
          <i class="fa-solid fa-table-columns mr-1"></i>
          <a href="" class="font-bold">Dashboard</a>
        </li>
        <li class="flex items-center hover:bg-slate-200 w-full px-2 my-2">
          <i class="fa-solid fa-gear mr-1"></i>
          <a href="" class="font-bold">Settings</a>
        </li>
        <li class="flex items-center hover:bg-slate-200 w-full px-2">
          <i class="fa-solid fa-right-from-bracket mr-1"></i>
          <a href="/logout" class="font-bold">Logout</a>
        </li>
      </ul>
    </div>
    @endauth @guest
    <a href="/login" class="hidden text-gray-800 md:inline-block font-semibold"
      >Make a story</a
    >
    @endguest
  </div>
</nav>
