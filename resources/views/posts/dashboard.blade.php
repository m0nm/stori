<x-layout>
  <div class="w-full px-12 mt-12">
    <h1 class="text-3xl font-extrabold mb-14">Dashboard</h1>

    <div class="w-full h-screen flex border rounded shadow-xl relative">
      <div class="mt-10 w-full flex">
        {{-- stats --}}
        <aside class="w-1/6 h-full px-1 relative bg-primary rounded">
          <div
            class="w-full h-9 py-1 items-center bg-gray-800 absolute -top-10 left-0 rounded-tl text-center text-white"
          >
            <h3 class="font-semibold text-xl mb-8">Stats</h3>
          </div>

          {{-- total posts --}}
          <div
            class="py-2 mt-10 border-b border-b-gray-200 rounded grid place-items-center"
          >
            <i class="fa-solid fa-newspaper text-4xl"></i>
            <span class="text-sm text-gray-500"> Total Stories</span>
            <p class="text-2xl">13265</p>
          </div>

          {{-- total reactions --}}
          <div
            class="py-2 mt-10 border-b border-b-gray-200 rounded grid place-items-center"
          >
            <i class="fa-solid fa-heart text-red-500 text-4xl"></i>
            <span class="text-sm text-gray-500"> Total Reactions</span>
            <p class="text-2xl">13265</p>
          </div>

          {{-- total comments --}}
          <div
            class="py-2 mt-10 border-b border-b-gray-200 rounded grid place-items-center"
          >
            <i class="fa-solid fa-comment-dots text-4xl text-gray-500"></i>
            <span class="text-sm text-gray-500"> Total Comments</span>
            <p class="text-2xl">13265</p>
          </div>
        </aside>

        {{-- posts --}}
        <div class="w-full relative">
          <div
            class="w-full h-9 py-1 items-center bg-gray-800 absolute -top-10 left-0 rounded-tr text-center text-white"
          >
            <h3 class="font-semibold text-xl mb-8">Stories</h3>
          </div>

          <table class="w-full">
            <thead>
              <tr>
                {{-- post title --}}
                <td class="w-3/4"></td>

                {{-- post stats --}}
                <td></td>

                {{-- post actions --}}
                <td></td>
              </tr>
            </thead>

            <tbody>
              @foreach ($posts as $post)
              <div class="odd:bg-primary w-full h-10 pl-2 py-4 mb-4 border-b">
                <div class="w-full flex items-center">
                  {{-- post title --}}
                  <div class="font-semibold text-lg w-3/4 truncate">
                    {{ $post->title }}
                  </div>
                  {{-- post stats --}}
                  <div class="mr-auto">
                    12
                    <i class="fa-solid fa-heart text-red-500 text-sm"></i>
                    12
                    <i
                      class="fa-solid fa-comment-dots text-sm text-gray-500"
                    ></i>
                  </div>
                  {{-- post actions --}}
                  <div
                    x-data="{modal: false}"
                    class="relative flex items-center justify-center gap-3 mr-2"
                  >
                    <a href="#" class="font-semibold">edit</a>
                    <button @click="modal = true" class="font-semibold text-red-500">delete</button>

                    <form action="/posts/{{ $post->id }}" method="POST">
                      @csrf @method('delete')
                      <x-delete-modal title="Are you sure you want to delete this post ?" msg1="This action cannot be undone" />
                    </form>
                  </div>
                </div>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-layout>
