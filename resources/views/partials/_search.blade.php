@php 
  // display active tag style if tag query params exist
  $queryExist = isset($_GET['tag']);
  
@endphp

<div class="flex flex-col-reverse md:flex-row md:inline-flex items-center">
  <!-- tags -->
  <div class="pl-1.5 md:px-0" x-data="{activeTab: $persist('')}">
    <a
      x-on:click="activeTab = 1"
      :class="{{ $queryExist }} && activeTab === 1 && 'bg-active text-white' "
      href="/?tag=travel"
      class="border border-gray-400 hover:border-gray-600 text-sm font-bold mb-1 md:mb-0 mr-2 px-3 py-0.5 rounded"
      >travel</a
    >

    <a
      x-on:click="activeTab = 2"
      :class="{{ $queryExist }} && activeTab === 2 && 'bg-active text-white' "
      href="/?tag=health"
      class="border border-gray-400 hover:border-gray-600 text-sm font-bold mb-1 md:mb-0 mr-2 px-3 py-0.5 rounded"
      >health</a
    >

    <a
      x-on:click="activeTab = 3"
      :class="{{ $queryExist }} && activeTab === 3 && 'bg-active text-white' "
      href="/?tag=productivity"
      class="border border-gray-400 hover:border-gray-600 text-sm font-bold mb-1 md:mb-0 mr-2 px-3 py-0.5 rounded"
      >productivity</a
    >
    <a
      x-on:click="activeTab = 4"
      :class="{{ $queryExist }} && activeTab === 4 && 'bg-active text-white' "
      href="/?tag=tech"
      class="border border-gray-400 hover:border-gray-600 text-sm font-bold mb-1 md:mb-0 mr-2 px-3 py-0.5 rounded"
      >tech</a
    >
  </div>

  <!-- search -->
  <form action="/" class="relative text-gray-600 w-full md:w-fit my-8 md:my-0">
    <input
      type="text"
      name="search"
      placeholder="Search"
      class="w-full px-4 pr-10 rounded-full text-sm focus:outline-none"
    />
    <button type="submit" class="absolute right-0 top-0 space-y-1 mr-8 md:mr-4">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
  </form>
</div>
