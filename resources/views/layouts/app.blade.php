<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ToDos List</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    @include('inc.messages')
      <div class="container">
        @yield('content')
      </div>

      <footer class="text-center">Copyright 2020</footer>
  </body>
</html>
