<form
  method="post"
  enctype="multipart/form-data"
  action="users/{{ auth()->user()->id }}/profile/update"
>
  @csrf @method('put')

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
        value="{{ $profile->name }}"
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
  <div class="grid grid-cols-8 py-5 border-b border-gray-100">
    <div
      class="col-span-8 md:col-span-2 text-left pl-3 md:pl-0 grid items-center"
    >
      <h3 class="text-gray-500">Avatar</h3>
    </div>

    <div class="col-span-4 font-semibold text-lg">
      <img
        src="{{$profile->avatar ? asset('storage/' . $profile->avatar) : asset('/images/user.png') }}"
        class="w-8 h-8 ml-3 md:ml-2 rounded-full"
        alt=""
      />
    </div>
    <div class="col-span-4 md:col-span-2 flex ml-auto justify-end items-center">
      <input
        type="file"
        accept="image/*"
        name="avatar"
        id="avatar"
        class="hidden"
      />

      <label
        for="avatar"
        class="cursor-pointer px-1 text-gray-800 font-bold mr-1"
        >Upload</label
      >

      <button type="button" class="pl-4 pr-2 text-gray-800 font-bold">
        Remove
      </button>
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
      @error('email')
      <p class="text-red-500 text-sm pl-2">{{ $message }}</p>
      @enderror

      <input
        type="email"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="px-2 font-semibold outline-0 w-full"
        name="email"
        value="{{ $profile->email }}"
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
        value="{{ $profile->job }}"
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
        value="{{ $profile->location }}"
        x-ref="location"
        x-bind:readOnly="readonly"
        alt="ex: Canada, Toronto"
        titlle="ex: Canada, Toronto"
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
        type="date"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="px-2 font-semibold outline-0"
        name="birthday"
        value="{{ $profile->birthday }}"
        x-ref="birthday"
        x-bind:readOnly="readonly"
        placeholder="dd-mm-yyyy"
        pattern="\d{4}-\d{2}-\d{2}"
        alt="Provide a date in the format dd-mm-yyyy"
        title="Provide a date in the format dd-mm-yyyy"
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

    <div class="col-span-6 md:col-span-4 font-semibold text-lg">
      <textarea
        type="text"
        :class="readonly === false && 'border-gray-800 border-2'"
        class="w-full min-h-[100px] px-2 font-semibold outline-0 resize-none"
        name="bio"
        x-text="'{{ $profile->bio }}'"
        x-ref="bio"
        x-bind:readOnly="readonly"
      >
      </textarea>
    </div>

    <div class="col-span-2 flex justify-end items-center">
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
      <input
        class="scale-110"
        type="checkbox"
        value="1"
        name="email_visible"
        {{ $profile->email_visible === 1 ?  'checked' : '' }}
      />
      <h3 class="ml-3">Email</h3>
    </div>
    <!-- birthday -->
    <div class="flex items-center">
      <input
        class="scale-110"
        type="checkbox"
        value="1"
        name="birthday_visible"
        {{ $profile->birthday_visible === 1 ? 'checked' : '' }}
      />
      <h3 class="ml-3">Birthday</h3>
    </div>
  </div>

  <!-- submit button -->
  <button
    type="submit"
    class="mt-10 float-right w-full md:w-fit rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50"
  >
    Save Changes
  </button>
</form>
