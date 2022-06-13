<x-layout>
  
  <div class="w-full px-0 md:px-8 mt-24">
    
    <div class="w-full mb-12 px-4 flex flex-col md:flex-row justify-between items-center ">
      <h1 class="text-center md:text-left text-3xl mr-auto mb-4 md:mb-0">Dashboard</h1>
      
      <a 
        href="/posts/create" 
        class="block w-fit rounded-lg bg-gray-800 px-6 py-1.5 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
        >New Story</a>
    </div>
    
    <div class="w-full md:w-[97%] min-h-[440px] pb-4 mx-auto flex flex-col md:flex-row rounded shadow-xl border">
      {{-- stats --}}
      <div class="relative w-full md:w-1/5 text-center bg-primary">
        <div class="absolute -top-8 bg-gray-800 text-center md:rounded-tl h-8 w-full py-0.5">
          <h3 class="text-white text-lg">Stats</h3>
        </div>
        
        <div class="border-r">
          {{-- total posts --}}
          <div class="mt-6">
            <i class="fa-solid fa-newspaper text-4xl"></i>
            <p class="text-sm text-gray-700 mb-1">Total Stories</p>
            <p class="text-xl font-semibold">{{ $posts->count() }}</p>
          </div>
          
          {{-- total reaction --}}
          <div class="mt-6 mb-8">
            <i class="fa-solid fa-heart text-red-500 text-4xl"></i>
            <p class="text-sm text-gray-700 mb-1">Total ٌReactions</p>
            <p class="text-xl font-semibold">{{ $totalReactions }}</p>
          </div>
        </div>
        
      </div>
      
      {{-- posts --}}
      <div class="relative w-full md:w-4/5 mt-4 md:mt-0 bg-white">
        <div class="absolute -top-8 bg-gray-800 text-center md:rounded-tr h-8 w-full py-0.5 z-10">
          <h3 class="text-white text-lg">Stories</h3>
        </div>
        
        @forelse ($posts as $post)
          <div class="w-full odd:bg-primary pl-4 md:px-1 py-2 grid grid-cols-6">
              {{-- title --}}
              <a href="/posts/{{ $post->id }}" class="text-xl font-semibold col-span-6 md:col-span-4">{{ $post->title }}</a>
              
              {{-- stats and actions --}}
              <div class="col-span-6 md:col-span-2 flex justify-between mt-3 md:mt-0">
                  {{-- stats --}}
                  <div class="flex">
                    <div class="flex items-center text-left mr-2">
                        <i class="fa-solid fa-heart text-red-500 text-md mr-1"></i>
                        <span>{{ $post->likers->count() }}</span>
                    </div>
                    
                    <div class="flex items-center">
                        <i class="fa-solid fa-comment text-gray-600 text-md mr-1"></i>
                        <span>{{ $post->comments->count() }}</span>
                    </div>
                  </div>
                  
                  {{-- actions --}}
                  <div x-data="{modal: false}" class="flex items-center mr-1 md:mr-4">
                    <a href="/posts/{{ $post->id }}/edit">Edit</a>
                    <button @click="modal = true" class="text-red-500 ml-3">Delete</button>
                    
                    <form action="/posts/{{ $post->id }}" method="post">
                      {{-- delete modal --}}
                      @csrf @method('delete')
                      <x-delete-modal title="Are you sure you want to delete this story ?" msg1="This action cannot be undone." msg2=""/>
                    </form>
                  </div>
              </div>
            
          </div>
          
          @empty
          <a href="/posts/create" class="text-lg mx-auto mt-8 block w-fit">No stories yet, Why not make one ?</a>
        @endforelse
        
      </div>
    </div>
    
  </div>
  
</x-layout>