<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Stori | Where stories come to life</title>
    <meta name="description" content="A place to share thoughts and ideas." />
    
    {{-- favicon --}}
    <link rel="icon" href="{{ url('favicon.ico') }}">
    
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    {{-- tailwind and font-awesome --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    {{-- basic styles --}}
    <style>
      body {
        font-family: "Nunito", sans-serif;
        color: #111;
      }
      
      /* to not display account settings modal when alpinejs is still loading */
      [x-cloak] { display: none !important; }
    </style>
    
    {{-- select2 for tags --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <!-- Alpine Plugins -->
    <script
      defer
      src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"
    ></script>

    <!-- alpine js -->
    <script
      defer
      src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
  </head>
  <body class="h-screen w-full">
    
    {{-- flash message notification --}}
    @if (session('status'))
    <div
         x-data="{ show: true }" 
         x-show="show" 
         x-init="setTimeout(() => show = false, 3000)"  
         class="absolute top-0 left-0 w-full px-4 py-0.5 bg-gray-800 text-white text-center font-semibold z-50">
      <p>{{ session('status') }}</p>
    </div>
      
    @endif
    
    {{-- navbar --}}
    @include('partials._navbar')

    <main>
      {{ $slot }}
    </main>

    {{-- footer --}}
    @include('partials._footer')
  </body>
</html>
