<x-layout>
  <div class="py-8 grid place-items-center">
    <form
      action="/login"
      method="post"
      class="w-4/5 md:w-1/3 px-2 md:p-8 mt-auto bg-primary border rounded-lg"
    >
      @csrf

      <h1 class="mb-4 text-center font-bold text-3xl">Welcome</h1>

      {{-- social --}}
      <div class="w-full flex justify-center items-center">
        {{--  google --}}
        <button
          class="inline-flex px-3 mr-4 w-12 h-12 items-center justify-center rounded-[50%] border border-gray-300 hover:border-gray-800 text-gray-600 hover:text-inherit text-sm font-semibold transition-colors delay-50"
        >
          <i class="fa-brands fa-google text-center text-2xl"></i>
        </button>

        {{--  facebook --}}
        <button
          class="inline-flex px-3 w-12 h-12 items-center justify-center rounded-[50%] border border-gray-300 hover:border-gray-800 text-gray-600 hover:text-inherit text-sm font-semibold transition-colors delay-50"
        >
          <i class="fa-brands fa-facebook-f text-center text-2xl"></i>
        </button>
      </div>

      <p class="text-center text-gray-600 mt-2">__________ or __________</p>

      {{-- username or email --}}
      <div class="mx-auto max-w-lg">
        <div class="py-1">
          <span class="px-1 text-sm text-gray-600">Username or Email</span>

          @error('login')
          <p class="text-red-500">{{ $message }}</p>
          @enderror

          <input
            name="login"
            value="{{ old('username') ?: old('email') }}"
            type="text"
            class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none"
          />
        </div>

        {{-- password --}}
        <div class="py-1">
          <span class="px-1 text-sm text-gray-600">Password</span>

          @error('password')
          <p class="text-red-500">{{ $message }}</p>
          @enderror

          <input
            type="password"
            name="password"
            value="{{ old('password') }}"
            class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none"
          />
        </div>

        <button
          class="my-6 block w-full rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
        >
          Login
        </button>
      </div>

      <div class="flex justify-between items-center">
        <a href="/register" class="text-sm border-gray-200 text-black">
          Not a member?
          <span class="font-semibold text-black"> Join us! </span>
        </a>

        <a href="/reset-password" class="text-sm border-gray-200 text-black">
          reset password
        </a>
      </div>
    </form>
  </div>
</x-layout>
