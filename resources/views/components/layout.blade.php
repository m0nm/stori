<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Stori | Where stories come to life</title>
    <meta name="description" content="A place to share thoughts and ideas." />
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    {{-- tailwind and font-awesome --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <style>
      body {
        font-family: "Nunito", sans-serif;
        color: #111;
      }
    </style>
    
        <!-- alpine js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body class="h-screen w-full">
    {{-- navbar --}}
    @include('partials._navbar')

    <main>
      {{ $slot }}
    </main>

    {{-- footer --}}
    @include('partials._footer')
  </body>
</html>
