<x-layout>
  <form method="post" action="/posts" enctype="multipart/form-data" class="w-full mt-10">
      @csrf
      <div class="w-4/5 px-2 mx-auto border rounded shadow-md">
        {{-- bg image --}}
        <div style="background-image: url('/images/bg_img.png')" id="cover" class="bg-cover bg-no-repeat grid place-items-center w-full h-[300px] mb-8">
            <input
            type="file"
            accept="image/*"
            name="bg_img"
            id="bg_img"
            class="hidden"
            />
            
            <label
            for="bg_img"
            class="cursor-pointer px-2 py-1.5 bg-white text-gray-800 font-bold mr-1 border-2 rounded-sm"
            >Add a background image</label
            >
        </div>
        
        {{-- tags, title nad body --}}
        <div class="w-full flex flex-col items-center">
            <div class="w-4/5">
                <label for="tags">tags</label>
                <select class="multiple w-full rounded border-gray-400" name="tags[]" multiple="multiple">
                  <option value="tech">tech</option>
                  <option value="productivity">productivity</option>
                  <option value="health">health</option>
                  <option value="travel">travel</option>
                </select>
            </div>
            
            <div class="flex flex-col w-4/5 mx-auto my-8">
                <label for="title">title*</label>
                @error('title') 
                    <p class="text-sm text-left text-red-500">{{ $message }}</p>
                @enderror
                <input value="{{ old('title') }}" type="text" name="title" id="title" class="px-2 py-1.5 rounded border-gray-400 border-2 w-full font-bold">
            </div>
            
            <div class="flex flex-col w-4/5 mx-auto">
                <label for="editor">body*</label>
                @error('body') 
                    <p class="text-sm text-left text-red-500">{{ $message }}</p>
                @enderror
                <textarea value="{{ old('body') }}" id="editor" type="text" name="body" class="ck-content">
                    
                </textarea>
            </div>
        </div>
        
        {{-- submit --}}
        <div class="mt-8 float-right">
            <button type="button" class="px-4 py-1.5 mr-2 font-bold rounded bg-gray-300 hover:bg-gray-200 text-gray-500 hover:text-gray-600" >Preview</button>
            <button type="submit" class="px-4 py-1.5 font-bold rounded bg-gray-800 hover:bg-gray-900 text-white">Submit</button>
        </div>
    </div>
</form>

{{-- preview background image --}}
<script>
    const cover = document.getElementById("cover");
    const input = document.getElementById("bg_img");
    
    input.addEventListener("change", function () {
        // access the uploaded image file and generate URL
        const image = input.files[0];
        const bgUrl = window.URL.createObjectURL(image);
        // set background image of frame
        cover.style.backgroundImage = `url(${bgUrl})`;
});
</script>

{{-- select2 --}}
<script>
   $(document).ready(function() {
        $('.multiple').select2();
    });
</script>

{{-- ckeditor --}}
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    ClassicEditor
	.create( document.querySelector( '#editor' ), {
		ckfinder: {
            uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
		},
		toolbar: [ 'heading', '|', 'bold', 'italic', '|', 'imageUpload', '|', 'undo', 'redo' ]
	} )
	.catch( error => {
		console.error( error );
	} ); 
</script>

</x-layout>
