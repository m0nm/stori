<header class="w-full max-h-screen mt-12 px-2 md:px-0 mb-8">
  
  <h1 class="text-2xl font-bold mb-6">Top Rated Stories</h1>
  
  {{-- first section --}}
  <div class="w-full flex flex-col md:flex-row gap-2 mb-2">
    
    {{-- first post --}}
    @if ($topPosts->has(0))
    <a
      href="/posts/{{ $topPosts[0]->id }}"
      style="background-image: url('{{ $topPosts[0]->bg_img ? asset('/storage/' . $topPosts[0]->bg_img) : asset('/images/bg_img.png') }}')" 
      class="w-full md:w-1/2 h-[220px] relative rounded-xl shadow-lg border cursor-pointer overflow-hidden bg-cover bg-no-repeat bg-center">
      
      <div
        class="w-full h-1/2 px-4 pt-6 absolute bottom-0 left-0 bg-gradient-to-b from-transparent to-black-rgba"
      >
        <h3 class="truncate text-ellipsis text-xl text-white font-bold mb-1">
          {{ $topPosts[0]->title }}
        </h3>
        <div class="inline-flex items-center">
          <span class="text-gray-200 font-semibold mr-1">By:</span>
          <div class="inline-flex items-center">
            @if ($topPosts[0]->user->profile->avatar)
            <img
              src="{{ asset('/storage/' . $topPosts[0]->user->profile->avatar) }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @else
            <img
              src="{{ asset('/images/user.png') }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @endif
            <span class="text-gray-200 font-semibold ml-1">{{ $topPosts[0]->user->profile->name ??  $topPosts[0]->user->username}}</span>
          </div>
        </div>
      </div>
    
    </a>
    @endif
    
    
    {{-- second post --}}
    @if ($topPosts->has(1))
    <a
      href="/posts/{{ $topPosts[1]->id }}"
      style="background-image: url('{{ $topPosts[1]->bg_img ? asset('/storage/' . $topPosts[1]->bg_img) : asset('/images/bg_img.png') }}')" 
      class="w-full md:w-1/2 h-[220px] relative rounded-xl shadow-lg border cursor-pointer overflow-hidden bg-cover bg-no-repeat bg-center">
      
      <div
        class="w-full h-1/2 px-4 pt-6 absolute bottom-0 left-0 bg-gradient-to-b from-transparent to-black-rgba"
      >
        <h3 class="truncate text-ellipsis text-xl text-white font-bold mb-1">
          {{ $topPosts[1]->title }}
        </h3>
        <div class="inline-flex items-center">
          <span class="text-gray-200 font-semibold mr-1">By:</span>
          <div class="inline-flex items-center">
            @if ($topPosts[1]->user->profile->avatar)
            <img
              src="{{ asset('/storage/' . $topPosts[1]->user->profile->avatar) }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @else
            <img
              src="{{ asset('/images/user.png') }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @endif
            <span class="text-gray-200 font-semibold ml-1">{{ $topPosts[1]->user->profile->name ??  $topPosts[1]->user->username}}</span>
          </div>
        </div>
      </div>
    
    </a>
    @endif
  </div>
    
  {{-- second section --}}
  <div class="w-full flex flex-col md:flex-row gap-1">
    
    {{-- third post --}}
    @if ($topPosts->has(2)) 
    <a
      href="/posts/{{ $topPosts[2]->id }}"
      style="background-image: url('{{ $topPosts[2]->bg_img ? asset('/storage/' . $topPosts[2]->bg_img) : asset('/images/bg_img.png') }}')" 
      class="w-full md:w-1/3 h-[220px] relative rounded-xl shadow-lg border cursor-pointer overflow-hidden bg-cover bg-no-repeat bg-center">
      
      <div
        class="w-full h-1/2 px-4 pt-6 absolute bottom-0 left-0 bg-gradient-to-b from-transparent to-black-rgba"
      >
        <h3 class="truncate text-ellipsis text-xl text-white font-bold mb-1">
          {{ $topPosts[2]->title }}
        </h3>
        <div class="inline-flex items-center">
          <span class="text-gray-200 font-semibold mr-1">By:</span>
          <div class="inline-flex items-center">
            @if ($topPosts[2]->user->profile->avatar)
            <img
              src="{{ asset('/storage/' . $topPosts[2]->user->profile->avatar) }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @else
            <img
              src="{{ asset('/images/user.png') }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @endif
            <span class="text-gray-200 font-semibold ml-1">{{ $topPosts[2]->user->profile->name ??  $topPosts[2]->user->username}}</span>
          </div>
        </div>
      </div>
    
    </a>
    @endif
    
    {{-- fourth post --}}
    @if ($topPosts->has(3)) 
    <a
      href="/posts/{{ $topPosts[3]->id }}"
      style="background-image: url('{{ $topPosts[3]->bg_img ? asset('/storage/' . $topPosts[3]->bg_img) : asset('/images/bg_img.png') }}')" 
      class="w-full md:w-1/3 h-[220px] relative rounded-xl shadow-lg border cursor-pointer overflow-hidden bg-cover bg-no-repeat bg-center">
      
      <div
        class="w-full h-1/2 px-4 pt-6 absolute bottom-0 left-0 bg-gradient-to-b from-transparent to-black-rgba"
      >
        <h3 class="truncate text-ellipsis text-xl text-white font-bold mb-1">
          {{ $topPosts[3]->title }}
        </h3>
        <div class="inline-flex items-center">
          <span class="text-gray-200 font-semibold mr-1">By:</span>
          <div class="inline-flex items-center">
            @if ($topPosts[3]->user->profile->avatar)
            <img
              src="{{ asset('/storage/' . $topPosts[3]->user->profile->avatar) }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @else
            <img
              src="{{ asset('/images/user.png') }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @endif
            <span class="text-gray-200 font-semibold ml-1">{{ $topPosts[3]->user->profile->name ??  $topPosts[3]->user->username}}</span>
          </div>
        </div>
      </div>
    
    </a>
    @endif
    
    {{-- fifth post --}}
    @if ($topPosts->has(4)) 
    <a
      href="/posts/{{ $topPosts[4]->id }}"
      style="background-image: url('{{ $topPosts[4]->bg_img ? asset('/storage/' . $topPosts[4]->bg_img) : asset('/images/bg_img.png') }}')" 
      class="w-full md:w-1/3 h-[220px] relative rounded-xl shadow-lg border cursor-pointer overflow-hidden bg-cover bg-no-repeat bg-center">
      
      <div
        class="w-full h-1/2 px-4 pt-6 absolute bottom-0 left-0 bg-gradient-to-b from-transparent to-black-rgba"
      >
        <h3 class="truncate text-ellipsis text-xl text-white font-bold mb-1">
          {{ $topPosts[4]->title }}
        </h3>
        <div class="inline-flex items-center">
          <span class="text-gray-200 font-semibold mr-1">By:</span>
          <div class="inline-flex items-center">
            @if ($topPosts[4]->user->profile->avatar)
            <img
              src="{{ asset('/storage/' . $topPosts[4]->user->profile->avatar) }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @else
            <img
              src="{{ asset('/images/user.png') }}"
              alt=""
              class="inline rounded-full w-4 h-4"
            />
            @endif
            <span class="text-gray-200 font-semibold ml-1">{{ $topPosts[4]->user->profile->name ??  $topPosts[4]->user->username}}</span>
          </div>
        </div>
      </div>
    
    </a>
    @endif
    
  </div>
    
</header>
