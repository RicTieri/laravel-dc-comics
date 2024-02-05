<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Template')</title>
  @vite('resources/js/app.js')

  @yield('head-content')
</head>
<body>
  @include('partials.header')
  @include('partials.jumbotron')

  <main>
    @yield('main-content')
  </main>
  @include('partials.banner')
  @include('partials.footer')

  @yield('script-content')
</body>
</html>
