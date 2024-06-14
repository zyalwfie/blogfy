<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
  </head>

  <body class="h-full">

    <div class="min-h-full">

      <x-navbar />

      <x-header>{{ $header }}</x-header>

      <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          {{ $slot }}
        </div>
      </main>

    </div>

  </body>

</html>
