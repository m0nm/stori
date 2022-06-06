<div
  x-data=""
  @click="window.location.href = '/posts/{{ $post->id }}' "
  class="w-full min-h-[220px] mb-10 grid grid-cols-1 md:grid-cols-5 shadow-lg border-2 rounded-md cursor-pointer"
>
  <!-- blog image -->
  <div
    class="col-span-2 rounded-t min-h-[200px] md:h-full bg-center bg-cover bg-no-repeat md:mr-2"
    style="
      background-image: url('{{ $post->bg_img ? asset('storage/' . $post->bg_img) : asset('images/bg_img.png') }}');
    "
  ></div>

  <!-- blog details -->
  <div class="relative col-span-3 pl-2 md:pl-0">
    <h1 class="font-bold text-lg md:text-2xl">
      {{ $post->title }}
    </h1>
    <span>
      {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
      </span>

    <div class="my-3">
      @if($post->tags)  
        @foreach ( json_decode($post->tags) as $tag )
        <span class="rounded px-1 py-0.5 bg-active text-sm text-white font-bold mr-1">
          {{ $tag }}
        </span>
        @endforeach
      @endif
    </div>

    <div class="md:absolute bottom-5 flex items-center justify-between my-4 md:my-0 pr-3 w-full">
      <a href="/authors/{{ $post->user->username }}" class="flex items-center">
        <img
          src="{{$post->user->profile->avatar ? asset('storage/' . $post->user->profile->avatar) : asset('images/user.png') }}"
          alt=""
          class="rounded-full w-7 h-7"
        />

        <span class="ml-2 font-medium text-lg text-gray-600">{{ $post->user->profile->name ?? $post->user->username }}</span>
      </a>

      <span>{{ estimatedReadTime($post->body) }} min read</span>
    </div>
    
  </div>
</div>
