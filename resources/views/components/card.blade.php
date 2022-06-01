<div
  class="w-full min-h-[280px] mb-10 grid grid-cols-1 md:grid-cols-4 shadow-lg border rounded-md cursor-pointer"
>
  <!-- blog image -->
  <div
    class="col-span-1 rounded-t h-[200px] md:h-full bg-cover bg-no-repeat"
    style="
      background-image: url('{{ $post->bg_img }}');
    "
  ></div>

  <!-- blog details -->
  <div class="col-span-3 p-4">
    <h1 class="font-bold text-2xl">
      {{ $post->title }}
    </h1>
    <span
      >{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</span
    >

    <p class="mt-5 text-lg max-h-1/4 line-clamp-3">
     {!! $post->body !!}
    </p>

    <div class="my-3">
      @if($post->tags)  
        @foreach ( json_decode($post->tags) as $tag )
        <span class="rounded px-1 py-0.5 bg-active text-sm text-white font-bold mr-1">
          {{ $tag }}
        </span>
        @endforeach
      @endif
     
    </div>

    <div class="flex items-center justify-between w-full">
      <a href="" class="flex items-center mt-2">
        <img
          src="{{$post->user->profile->avatar ? asset('storage/' . $post->user->profile->avatar) : asset('images/user.png') }}"
          alt=""
          class="rounded-full w-7 h-7"
        />

        <span class="ml-2 font-medium text-lg text-gray-600">{{ $post->user->name ?? $post->user->username }}</span>
      </a>

      <span>3 min read</span>
    </div>
  </div>
</div>
