<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  </head>

<body>
    <x-header :step="$step" :message="$message" />
    @yield('content')
      <script
        src="https://maps.googleapis.com/maps/api/js?key= {{ env("GOOGLE_MAP_API_KEY") }} &callback=initMap&libraries=places&v=weekly&solution_channel=GMP_CCS_autocomplete_v1"
        defer>
      </script>
      <script src="{{ asset('js/google-map-api.js') }}"></script>
  </body>
</html>
