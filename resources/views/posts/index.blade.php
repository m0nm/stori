<x-layout>
  <div class="w-full h-fit md:w-4/5 mx-auto">
    @guest
      <a href="/login" class="md:hidden block underline text-center text-gray-800 font-semibold"
      >Make a story →</a>  
    @endguest
    
    @include('partials._header')

    <div class="w-full md:flex items-center justify-between mt-24 md:mt-0 mb-8">
      <h1 class="text-center md:text-left text-2xl font-bold">Recent Posts</h1>

      @include('partials._search')
    </div>

    <div class="md:px-0 px-4 w-full">
      @forelse($posts as $post)
       <x-card :post="$post" />        
       @empty
        <p class="text-center">There are no stories currently.</p>
      @endforelse
      
      <div class="w-full flex justify-center">
        {{ $posts->links() }}
      </div>
    </div>
  </div>
</x-layout>
