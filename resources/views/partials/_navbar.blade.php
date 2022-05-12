<nav
  class="align-center flex min-h-[35px] w-full justify-between bg-primary mb-4 p-4 shadow-md"
>
  <a href="/" class="m-auto font-bold md:m-0">
    <img src="{{ asset('svg/Stori.svg') }}" width="75px" height="75px" alt="" />
  </a>
  <div class="flex items-center">
    @auth
    <div x-data="{open: false}" @click="open = !open" class="relative mr-4">
      <i class="fa-solid fa-user text-xl cursor-pointer text-gray-600"></i>

      <div
        x-show="open"
        @click.outside="open = false"
        class="absolute top-8 -left-10 text-md p-4 shadow-md divide-2"
      >
        <a href=""> Profile </a>
        <a href="">Logout</a>
      </div>
    </div>
    @endauth @guest
    <a href="/login" class="hidden text-gray-800 md:inline-block font-semibold"
      >Make a story</a
    >
    @endguest
  </div>
</nav>
