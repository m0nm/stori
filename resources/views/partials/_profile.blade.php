<form method="post" class="grid" action="users/{{ auth()->user()->id }}/update">
  <!-- name -->
  <div
    x-data="{readonly: true}"
    type="button"
    @click.outside="readonly = true"
    class="grid md:grid-cols-8 py-5 border-b border-gray-100"
  >
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Name</h3>
    </div>

    <div class="col-span-4 text-lg">
      <input
        type="text"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="px-2 font-semibold outline-0"
        name="name"
        x-ref="name"
        x-bind:readOnly="readonly"
      />
    </div>

    <div class="col-span-4 md:col-span-2 grid justify-end">
      <button
        class="px-2 text-gray-800 font-bold"
        type="button"
        @click="readonly = false ;$refs.name.focus();"
      >
        Update
      </button>
    </div>
  </div>

  <!-- Avatar -->
  <div
    x-data="{readonly: true}"
    type="button"
    @click.outside="readonly = true"
    class="grid grid-cols-8 py-5 border-b border-gray-100"
  >
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Avatar</h3>
    </div>

    <div class="col-span-4 font-semibold text-lg">
      <img
        src="{{ asset('/images/user.png') }}"
        class="w-8 h-8 ml-3 md:ml-2 rounded-full"
        alt=""
      />
    </div>
    <div class="col-span-4 md:col-span-2 flex ml-auto justify-end items-center">
      <button
        type="button"
        @click="readonly = false ;$refs.name.focus();"
        class="px-1 text-gray-800 font-bold mr-1"
      >
        Update
      </button>
      <button class="pl-4 pr-2 text-gray-800 font-bold">Remove</button>
    </div>
  </div>

  <!-- email -->
  <div
    x-data="{readonly: true}"
    type="button"
    @click.outside="readonly = true"
    class="grid grid-cols-8 py-5 border-b border-gray-100"
  >
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Email</h3>
    </div>

    <div class="col-span-4 font-semibold text-lg">
      <input
        type="email"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="px-2 font-semibold outline-0"
        name="email"
        x-ref="email"
        x-bind:readOnly="readonly"
      />
    </div>
    <div class="col-span-4 md:col-span-2 flex justify-end items-center">
      <button
        type="button"
        @click="readonly = false ;$refs.email.focus();"
        class="px-2 text-gray-800 font-bold"
      >
        Update
      </button>
    </div>
  </div>

  <!-- job -->
  <div
    x-data="{readonly: true}"
    type="button"
    @click.outside="readonly = true"
    class="grid grid-cols-8 py-5 border-b border-gray-100"
  >
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Job</h3>
    </div>

    <div class="col-span-4 font-semibold text-lg">
      <input
        type="text"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="px-2 font-semibold outline-0"
        name="job"
        x-ref="job"
        x-bind:readOnly="readonly"
      />
    </div>
    <div class="col-span-4 md:col-span-2 flex justify-end items-center">
      <button
        type="button"
        @click="readonly = false ;$refs.job.focus();"
        class="px-1 text-gray-800 font-bold mr-1"
      >
        Update
      </button>
    </div>
  </div>

  <!-- location -->
  <div
    x-data="{readonly: true}"
    type="button"
    @click.outside="readonly = true"
    class="grid grid-cols-8 py-5 border-b border-gray-100"
  >
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Location</h3>
    </div>

    <div class="col-span-4 font-semibold text-lg">
      <input
        type="text"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="px-2 font-semibold outline-0"
        name="location"
        x-ref="location"
        x-bind:readOnly="readonly"
      />
    </div>
    <div class="col-span-4 md:col-span-2 flex justify-end items-center">
      <button
        type="button"
        @click="readonly = false ;$refs.location.focus();"
        class="px-1 text-gray-800 font-bold mr-1"
      >
        Update
      </button>
    </div>
  </div>

  <!-- birthday -->
  <div
    x-data="{readonly: true}"
    type="button"
    @click.outside="readonly = true"
    class="grid grid-cols-8 py-5 border-b border-gray-100"
  >
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Birthday</h3>
    </div>

    <div class="col-span-4 font-semibold text-lg">
      <input
        type="text"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="px-2 font-semibold outline-0"
        name="birthday"
        x-ref="birthday"
        x-bind:readOnly="readonly"
      />
    </div>
    <div class="col-span-4 md:col-span-2 flex justify-end items-center">
      <button
        type="button"
        @click="readonly = false ;$refs.birthday.focus();"
        class="px-1 text-gray-800 font-bold mr-1"
      >
        Update
      </button>
    </div>
  </div>

  <!-- bio -->
  <div
    x-data="{readonly: true}"
    type="button"
    @click.outside="readonly = true"
    class="grid grid-cols-8 py-5 border-b border-gray-100"
  >
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Bio</h3>
    </div>

    <div class="col-span-6 font-semibold text-lg">
      <textarea
        type="text"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="w-full min-h-[100px] px-2 font-semibold outline-0 resize-none"
        name="bio"
        x-ref="bio"
        x-bind:readOnly="readonly"
      ></textarea>
    </div>

    <div class="col-span-2 md:col-span-2 flex justify-end items-center">
      <button
        type="button"
        @click="readonly = false ;$refs.bio.focus();"
        class="px-1 text-gray-800 font-bold mr-1"
      >
        Update
      </button>
    </div>
  </div>

  <!-- public settings -->
  <hr class="h-0.5 w-full mb-8 bg-gray-600" />
  <b class="w-full text-2xl">Public settings</b>
  <p class="text-xl text-gray-500 mt-2 mb-8">
    Choose which information should be visible in your profile:
  </p>
  <div class="w-full text-xl">
    <!-- email -->
    <div class="flex items-center mb-4">
      <h3 class="mr-3">Email:</h3>
      <input class="scale-110" type="checkbox" name="email_visible" />
    </div>
    <!-- birthday -->
    <div class="flex items-center">
      <h3 class="mr-3">Birthday:</h3>
      <input class="scale-110" type="checkbox" name="birthday_visible" />
    </div>
  </div>

  <!-- submit button -->
  <button
    type="submit"
    class="mt-10 justify-self-end w-full md:w-fit rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
  >
    Save Changes
  </button>
</form>
