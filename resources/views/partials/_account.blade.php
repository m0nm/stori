<div class="w-full md:w-1/2">
  <!-- change password -->
  <div>
    <h3 class="text-xl font-bold mt-2 mb-6">Change Password</h3>
    <!-- current password -->
    <div class="mb-6">
      <label class="block mb-2 text-md font-medium text-gray-900"
        >Current Password</label
      >
      <input
        type="password"
        name="oldPassword"
        class="bg-gray-50 border border-gray-300 text-sm font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      />
    </div>
    <!-- new password -->
    <div class="mb-6">
      <label class="block mb-2 text-md font-medium text-gray-900"
        >New Password</label
      >
      <input
        type="password"
        name="password"
        class="bg-gray-50 border border-gray-300 text-sm font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      />
    </div>
    <!-- confirm password -->
    <div class="mb-6">
      <label class="block mb-2 text-md font-medium text-gray-900"
        >Confirm Password</label
      >
      <input
        type="password"
        name="password_confirmation"
        class="bg-gray-50 border border-gray-300 text-sm font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      />
    </div>

    <button
      class="my-6 w-full md:w-fit rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
    >
      Save New Password
    </button>
  </div>

  <!-- danger zone -->
  <div>
    <div
      class="w-full md:w-fit bg-red-600 text-white font-bold text-2xl text-center md:text-left rounded mt-20 px-4 py-2"
    >
      Warning: Danger Zone!
    </div>
    <div class="py-4">
      <button
        type="button"
        class="w-full md:w-fit text-white bg-red-600 hover:bg-red-700 font-bold text-lg rounded-lg px-5 py-2.5 mr-2 mb-2"
      >
        Delete My Account
      </button>
    </div>
  </div>
</div>
