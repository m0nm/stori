<x-layout>
    <div class="w-full min-h-screen flex flex-col-reverse md:flex-row">
        {{-- user posts --}}
        <div class="w-full md:w-4/5 px-10">
            @forelse ($user->posts->sortByDesc('created_at') as $post)
                <x-card :post="$post" />
            @empty
                <p class="text-lg text-gray-700">This author has no stories yet </p>
            @endforelse
        </div>
        
        {{-- user info --}}
        <aside class="w-full md:w-1/4 md:h-screen p-8 border-l-2">
            
            <div class="mt-8 flex flex-col justify-center items-center">
                <div class="w-32 h-32 rounded-full">
                    <img src="{{ $user->profile->avatar ? asset('storage/' . $user->profile->avatar) : asset('images/user.png') }}" class="rounded-full w-full h-full " alt="author avatar">
                </div>
                
                <h2 class="mt-2 mb-4 font-semibold text-2xl">{{ $user->profile->name ?? $user->username }}</h2>
                
                <p class="text-sm text-gray-700">Joined at: {{ \Carbon\Carbon::parse($user->created_at)->format('F j, Y') }}</p>
                
                @if ($user->profile->birthday_visible)
                    <div class="flex items-center mt-4">
                        <i class="fa-solid fa-cake-candles text-slate-400"></i>    
                        <p class="ml-2">{{ $user->profile->birthday }}</p>
                    </div>
                @endif
                
                @if ($user->profile->email_visible)
                    <div class="flex items-center mt-4">
                        <i class="fa-solid fa-envelope text-slate-400"></i>    
                        <p class="ml-2">{{ $user->email }}</p>
                    </div>
                @endif
                
                
                <p class="text-gray-600 mt-8"> {{ $user->profile->bio }}</p>
            </div>
            
        </aside>
        
    </div>    
    
</x-layout>