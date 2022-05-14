<x-layout>
  <div class="w-full h-fit md:w-4/5 mx-auto">
    @include('partials._header')

    <div class="w-full md:flex items-center justify-between mt-24 md:mt-0 mb-8">
      <h1 class="text-center md:text-left text-2xl font-bold">Recent Posts</h1>

      @include('partials._search')
    </div>

    <div class="md:px-0 px-4 w-full">
      @foreach($posts as $post) <x-card :post="$post" /> @endforeach
    </div>
  </div>
</x-layout>
