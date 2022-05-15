<x-layout>
  <div class="w-4/5 mx-auto mt-16 px-8">
    <h1 class="mb-4 text-3xl font-[800]">Settings</h1>

    <ul class="flex flex-wrap text-md font-medium text-gray-500">
      <li class="mr-2">
        <a
          href="#"
          aria-current="page"
          class="inline-block underline underline-offset-[12px] decoration-slate-400 bg-gray-100 py-4 text-slate-600"
          >Profile</a
        >
      </li>
      <li class="mr-2">
        <a href="#" class="inline-block p-4 hover:bg-gray-50">Account</a>
      </li>
    </ul>

    @include('partials._account')
  </div>
</x-layout>
