<x-layout>
  <div class="py-8 grid place-items-center">
    <form
      action="/users"
      method="POST"
      class="w-4/5 md:w-1/3 p-2 md:p-8 mt-auto bg-primary border rounded-lg"
    >
      @csrf

      <h1 class="text-center font-bold text-4xl mb-4">Join Stori</h1>

      {{-- social --}}
      <div class="w-full flex justify-center items-center">
        {{--  google --}}
        <a
          href="/auth/google/redirect"
          class="inline-flex px-3 mr-4 w-12 h-12 items-center justify-center rounded-[50%] border border-gray-300 hover:border-gray-800 text-gray-600 hover:text-inherit text-sm font-semibold transition-colors delay-50"
        >
          <i class="fa-brands fa-google text-center text-2xl"></i>
        </a>

        {{--  github --}}
        <a
          href="/auth/github/redirect"
          class="inline-flex px-3 w-12 h-12 items-center justify-center rounded-[50%] border border-gray-300 hover:border-gray-800 text-gray-600 hover:text-inherit text-sm font-semibold transition-colors delay-50"
        >
          <i class="fa-brands fa-github text-center text-2xl"></i>
        </a>
      </div>

      <p class="text-center text-gray-600 mt-2">__________ or __________</p>

      {{-- username --}}
      <div class="mx-auto max-w-lg">
        <div class="py-1">
          <label for="username" class="px-1 text-sm text-gray-600">Username</label>

          @error('name')
          <p class="px-1 text-sm text-red-500">{{ $message }}</p>
          @enderror

          <input
            name="username"
            id="username"
            value="{{ old('username') }}"
            type="text"
            class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 shadow-sm focus:border-gray-600 focus:bg-white focus:outline-none"
          />
        </div>

        {{-- email --}}
        <div class="py-1">
          <label for="email" class="px-1 text-sm text-gray-600">Email</label>

          @error('email')
          <p class="px-1 text-sm text-red-500">{{ $message }}</p>
          @enderror

          <input
            name="email"
            id="email"
            value="{{ old('email') }}"
            type="email"
            class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 shadow-sm focus:border-gray-600 focus:bg-white focus:outline-none"
          />
        </div>

        {{-- password --}}
        <div class="py-1">
          <label for="password" class="px-1 text-sm text-gray-600">Password</label>

          @error('password')
          <p class="px-1 text-sm text-red-500">{{ $message }}</p>
          @enderror

          <input
            type="password"
            name="password"
            id="password"
            value="{{ old('password') }}"
            class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 shadow-sm focus:border-gray-600 focus:bg-white focus:outline-none"
          />
        </div>

        {{-- password confirm --}}
        <div class="py-1">
          <label for="password_confirmation" class="px-1 text-sm text-gray-600">Password Confirm</label>

          @error('password_confirmation')
          <p class="px-1 text-sm text-red-500">{{ $message }}</p>
          @enderror

          <input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            value="{{ old('password_confirmation') }}"
            class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 shadow-sm focus:border-gray-600 focus:bg-white focus:outline-none"
          />
        </div>

        <button
          class="my-4 block w-full rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
        >
          Register
        </button>
      </div>

      <a href="/login" class="border-gray-200 font-normal text-black">
        You're already a member?
        <span class="font-semibold text-black"> Login </span>
      </a>
    </form>
  </div>
</x-layout>
