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
                <span class="rounded px-1 py-0.5 bg-active text-sm text-white font-bold mt-1 mr-1">
                    {{ $tag }}
                </span>
             @endforeach
            @endif
            
            <div class="mt-8 mx-auto .ck-image">
                {!! $post->body !!}
            </div>
            
            {{-- like post --}}
            @auth
            <form action="/posts/{{ $post->id }}/toggleLike" method="post" class="float-right p-4 cursor-pointer">
                @csrf
                @if (auth()->user()->hasLiked($post))
                <button class="flex items-center">
                    <i class="fa-solid fa-heart text-2xl text-red-500"></i>
                    <span class="ml-2 text-red-600">{{'+' . $post->likers->count() }}</span>
                </button>
                @else
                <button class="flex items-center">
                    <i class="fa-regular fa-heart text-2xl"></i>
                    <span class="ml-2">{{'+' . $post->likers->count() }}</span>
                </button>
                @endif
            </form>
        @endauth
        </div>
        
        {{-- comment section --}}
        <div class="w-full p-4">
            <h2 class="font-semibold text-3xl mt-12 mb-8">Discussion</h2>
            {{-- post comment --}}
            @auth
            <div class="w-full mx-auto flex justify-center">
                <div class="h-full p-2">
                    @if (auth()->user()->profile->avatar)
                    <img src="{{ asset('/storage/' . auth()->user()->profile->avatar) }}" alt="your avatar" class="rounded-full w-12 h-12">
                    @else
                    <img src="{{ asset('images/user.png') }}" alt="your avatar" class="rounded-full w-12 h-12">
                    @endif
                </div>
                
                <form action="/posts/{{ $post->id }}/comments" method="POST" class="w-4/5 flex flex-col px-4 mb-14">
                    @csrf
                    
                    @error('comment')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                    <textarea name="comment" placeholder="Add to discussion" class="resize-none w-full p-2 outline-none border focus:border-gray-600"></textarea>
                    <button class="px-4 py-1.5 w-fit ml-auto mt-4 font-bold rounded bg-gray-800 hover:bg-gray-900 text-white">Post</button>
                </form>
            </div>
            @endauth
            
            @guest
            <a href="/login" class="underline">Sign in to comment.</a>
            @endguest
            
            {{-- comments --}}
            @forelse ($post->comments as $comment)
            <x-comment-card :user="$comment->user" :comment="$comment"/>
                @empty
                <p class="text-lg text-center mt-8">No comments yet, Be the first.</p>
                @endforelse
            </div>
            
        </div>
    
    </div>    
</x-layout>