<form
  action="users/{{ auth()->user()->id }}"
  method="POST"
  class="w-full md:w-1/2"
>
  @csrf @method('PUT')

  <!-- change password -->
  <div>
    <h3 class="text-xl font-bold mt-2 mb-6">Change Password</h3>
    <!-- current password -->
    <div class="mb-6">
      <label
        for="oldPassword"
        class="block mb-2 text-md font-medium text-gray-900"
        >Current Password</label
      >

      @error('oldPassword')
        <p class="text-sm text-red-500 mb-1">{{ $message }}</p>
      @enderror

      <input
        type="password"
        name="oldPassword"
        id="oldPassword"
        class="bg-gray-50 border border-gray-300 text-sm font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      />
    </div>
    <!-- new password -->
    <div class="mb-6">
      <label for="password" class="block mb-2 text-md font-medium text-gray-900"
        >New Password</label
      >

      @error('password')
      <p class="text-sm text-red-500 mb-1">{{ $message }}</p>
      @enderror

      <input
        type="password"
        name="password"
        id="password"
        class="bg-gray-50 border border-gray-300 text-sm font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      />
    </div>

    <!-- confirm password -->
    <div class="mb-6">
      <label
        for="password_confirmation"
        class="block mb-2 text-md font-medium text-gray-900"
        >Confirm Password</label
      >
      <input
        type="password"
        name="password_confirmation"
        id="password_confirmation"
        class="bg-gray-50 border border-gray-300 text-sm font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      />
    </div>

    <button
      class="my-6 w-full md:w-fit rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
    >
      Save New Password
    </button>
  </div>
</form>

  <!-- danger zone -->
  <form 
    action="users/{{ auth()->user()->id }}"
    method="POST"
    >
    @csrf @method('delete')
    
    <div
      class="w-full bg-red-500 text-white font-bold text-2xl text-center md:text-left rounded mt-20 px-4 py-2"
    >
      Warning: Danger Zone!
    </div>
    
    
    <div
      x-data="{modal: false}"    
    >
      <div class="py-4">
        <button
          @click="modal = true"
          type="button"
          class="w-full md:w-fit text-white bg-red-600 hover:bg-red-700 outline-none font-bold text-lg rounded-lg px-5 py-2.5 mr-2 mb-2"
        >
          Delete My Account
        </button>
      </div>
      
      {{-- modal --}}
      <div
        x-cloak
        x-show="modal"
        class="fixed top-0 left-0 overflow-y-auto w-full h-full grid place-items-center bg-[rgba(0,0,0,0.4)]">
      
        <div 
          @click.outside="modal = false" 
          class="relative w-3/5 p-4 h-[320px] bg-primary rounded-lg">
          
          <div class="w-full text-center text-6xl text-red-500">
            <i class="fa-solid fa-triangle-exclamation"></i>
          </div>
      
          <div class="text-center mt-8">
            <h1 class="text-3xl font-bold">Delete Account</h1>
            <p class="text-lg mt-3">Are you sure you want to delete your account? This action cannot be undone.</p>
            <p class="text-gray-800 text-sm">(Note: You're posts will still exist but without your profile information, Delete them manually if you wish not.)</p>
          </div>
      
          <div class="absolute bottom-5 right-4 flex items-center">
            <button @click="modal = false" type="button" class="rounded mr-4 px-5 py-1.5 text-lg font-semibold border">Cancel</button>
            <button class="rounded px-5 py-1.5 text-lg text-white font-semibold border bg-red-600 hover:bg-red-700">Delete</button>
          </div>
        </div>
      </div>
    </div>
    
  </form>
