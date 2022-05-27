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
            <h1 class="text-3xl font-bold">{{ $title }}</h1>
            <p class="text-lg mt-3">{{ $msg1 }}</p>
            <p class="text-gray-800 text-sm">{{ $msg2 }}</p>
          </div>
      
          <div class="absolute bottom-5 right-4 flex items-center">
            <button @click="modal = false" type="button" class="rounded mr-4 px-5 py-1.5 text-lg font-semibold border">Cancel</button>
            <button class="rounded px-5 py-1.5 text-lg text-white font-semibold border bg-red-600 hover:bg-red-700">Delete</button>
          </div>
        </div>
      </div>