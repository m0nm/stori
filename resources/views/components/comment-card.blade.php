<div class="w-full md:w-[90%] min-h-[200px] mx-auto mb-10 md:py-4 flex flex-col md:flex-row rounded border bg-white shadow-xl">
    
    {{-- user --}}
    <div class="w-full md:w-1/5 md:mx-8 h-full flex flex-col justify-center md:justify-start items-center">
        @if ($user->profile->avatar)
        <img src="{{ asset('/storage/' . $user->profile->avatar) }}" alt="user avatar" class="rounded-full w-12 h-12">
        @else
        <img src="{{ asset('images/user.png') }}" alt="user avatar" class="rounded-full w-12 h-12">
        @endif
        
        <a href="/authors/{{ $user->username }}" class="text-lg text-center font-semibold mt-2">{{ $user->profile->name ?? $user->username }}</a>
    </div>
    
    {{-- comment --}}
    <div class="w-full h-full mt-4 md:mt-0 pt-4 pl-2 md:pl-0 pb-12">
        <p>{{ $comment->comment }}</p>
    </div>
    
    {{-- like comment --}}
    @auth
    <form action="/comments/{{ $comment->id }}/toggleLike" method="post" class="ml-auto pr-4 mb-4 md:mb-0 md:mt-auto cursor-pointer">
        @csrf
        @if (auth()->user()->hasLiked($comment))
        <button class="flex items-center">
            <i class="fa-solid fa-heart text-2xl text-red-500"></i>
            <span class="ml-2 text-red-600">{{'+' . $comment->likers->count() }}</span>
        </button>
        @else
        <button class="flex items-center">
            <i class="fa-regular fa-heart text-2xl"></i>
            <span class="ml-2">{{'+' . $comment->likers->count() }}</span>
        </button>
        @endif
    </form>
    @endauth
    
</div>