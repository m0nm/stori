<nav
  class="align-center flex min-h-[35px] w-full justify-between bg-primary mb-4 p-4 shadow-md"
>
  <a href="/" class="m-auto font-bold md:m-0 outline-0">
    <img src="{{ asset('svg/Stori.svg') }}" width="75px" height="75px" alt="" />
  </a>
  <div class="flex items-center">
    @auth
    <div x-data="{open: false}" class="relative md:mr-4">
      <i @click="open = !open" class="fa-solid fa-user text-xl cursor-pointer text-gray-600"></i>

      <div x-show="open" @click.outside="open = false" class="absolute top-10 right-8 translate-x-1/2 z-10 bg-white divide-y divide-gray-200 rounded shadow-lg">
        
        <div class="py-1">
          <a href="/users/{{ auth()->user()->id }}" class="block px-4 py-2 font-bold text-center text-sm text-gray-900 hover:underline hover:bg-gray-100">{{ '@' . auth()->user()->username }}</a>
        </div>
       
        <ul class="py-1 text-sm text-gray-900">
 
          <li>
            <a href="/dashboard" class="px-4 py-2 flex items-center hover:underline hover:bg-gray-100 ">
              <img src="{{ asset('/svg/dashboard.svg') }}" class="w-3.5 h-3.5 mr-1" alt="">  
              Dashboard
            </a>
          </li>
 
          <li>
            <a href="/settings" class="px-4 py-2 flex items-center hover:underline hover:bg-gray-100 ">
              <img src="{{ asset('/svg/settings.svg') }}" class="w-3.5 h-3.5 mr-1" alt="">  
              Settings
            </a>
          </li>
 
          <li>
            <a href="/logout" class="px-4 py-2 flex items-center hover:underline hover:bg-gray-100 ">
            <img src="{{ asset('/svg/logout.svg') }}" class="w-3.5 h-3.5 mr-1" alt="">  
              Logout
            </a>
          </li>

        </ul>
        
       
  </div>
    @endauth
    
    @guest
    <a href="/login" class="hidden text-gray-800 md:inline-block font-semibold"
      >Make a story</a
    >
    @endguest
  </div>
</nav>
