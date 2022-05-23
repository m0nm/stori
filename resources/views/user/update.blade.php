<x-layout>
  <div
    x-data="{ tab: $persist('profile') }"
    class="w-full text-center md:text-left md:w-4/5 mx-auto mt-16 px-2 md:px-8"
  >
    <h1 class="mb-4 text-3xl font-[800]">Settings</h1>

    <ul
      class="flex flex-wrap justify-center md:justify-start text-md font-medium text-gray-500 mb-6"
    >
      <li class="ml-4 md:ml-0 mr-2">
        <a
          href="#"
          aria-current="page"
          @click="tab = 'profile'"
          :class="tab === 'profile' && 'underline underline-offset-[12px] text-slate-700'"
          class="inline-block decoration-slate-400 bg-gray-100 py-4"
          >Profile</a
        >
      </li>
      <li class="mr-2">
        <a
          href="#"
          @click="tab = 'account'"
          :class="tab === 'account' && 'underline underline-offset-[12px] text-slate-700'"
          class="inline-block p-4 hover:bg-gray-50"
          >Account</a
        >
      </li>
    </ul>

    <!-- show profile -->
    <div x-show="tab === 'profile' ">@include('partials._profile')</div>

    <!-- show account -->
    <div x-show="tab === 'account' ">@include('partials._account')</div>
  </div>
</x-layout>
