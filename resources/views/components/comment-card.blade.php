<div class="w-[90%] h-[250px] mx-auto mb-10 p-8 flex rounded border bg-white shadow-lg">
    
    {{-- user --}}
    <div class="w-1/4 h-full px-4 flex flex-col items-center">
        @if ($user->profile->avatar)
        <img src="{{ asset('/storage/' . $user->profile->avatar) }}" alt="user avatar" class="rounded-full w-12 h-12">
        @else
        <img src="{{ asset('images/user.png') }}" alt="user avatar" class="rounded-full w-12 h-12">
        @endif
        
        <h4 class="text-lg font-semibold mt-2">{{ $user->profile->name ?? $user->username }}</p>
    </div>
    
    {{-- comment --}}
    <div class="w-3/5 h-full p-4">
        <p>{{ $comment }}</p>
    </div>
</div>