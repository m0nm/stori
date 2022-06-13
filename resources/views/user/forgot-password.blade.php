<x-layout>
  <div class="py-8 grid place-items-center">
    
  
    
    {{-- submit email form --}}
    <form
      action="/forgot-password"
      method="POST"
      class="w-4/5 md:w-1/3 px-2 md:p-8 mt-auto bg-primary border rounded-lg"
    >
      @csrf

      {{-- lock icon --}}
      <div class="flex justify-center w-full mb-4">
        <p class="fa-solid fa-lock text-gray-800 text-4xl"></p>
      </div>

      <h1 class="mb-2 text-center font-bold text-2xl">
        Forgot your password ?
      </h1>

      <p class="text-center font-semibold text-lg">
        Don't worry, Enter your email
      </p>
      {{-- email --}}
      <div class="mx-auto max-w-lg">
        <div class="py-1">
          <label for="email" class="px-1 text-sm text-gray-600">Email*</label>

          @error ('email')
              @if ($message === "passwords.user")
                <p class="text-sm text-red-500">Email not found</p>
                @else 
                <p class="text-sm text-red-500">Please try again after 5 seconds</p>
                
              @endif
            @enderror
          
          <input
            placeholder="Enter your email..."
            type="email"
            name="email"
            id="email"
            class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none"
          />
        </div>

        <button
          class="my-6 block w-full rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
        >
          Reset Your Password
        </button>
      </div>
    </form>
  </div>
</x-layout>
