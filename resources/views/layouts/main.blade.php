<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- JS --}}
  <script src="js/app.js" defer></script>
  <title>{{ env('APP_NAME') }}</title>
</head>
<body>
  {{-- Header --}}
  <header>
    @include('includes.header')
  </header>
  {{-- Main --}}
  <main>
    @yield('main')
  </main>
</body>
</html>