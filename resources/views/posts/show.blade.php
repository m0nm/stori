<x-layout>
  <div class="w-full">
    <div class="w-full md:w-4/5 bg-white rounded border mx-auto">
        {{-- bg image --}}
        <div 
            style="background-image: url('{{ $post->bg_img ? asset('/storage/' . $post->bg_img) : asset('images/bg_img.png') }}')" 
            class="w-full h-[420px] bg-center bg-cover bg-no-repeat">
        </div>
        
        {{-- post content --}}
        <div class="w-full p-4">
            <h1 class="font-bold text-3xl">{{ $post->title }}</h1>
            
            <p class="float-right text-sm text-gray-700 mb-8">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</p>
            
            @if ($post->tags)
             @foreach ( json_decode($post->tags) as $tag )
                <span class="rounded px-1 py-0.5 bg-active text-sm text-white font-bold mr-1">
                    {{ $tag }}
                </span>
             @endforeach
            @endif
            
            <div class="mt-8 mx-auto .ck-image">
                {!! $post->body !!}
            </div>
            
        </div>
        
    </div>
  </div>    
    
</x-layout>