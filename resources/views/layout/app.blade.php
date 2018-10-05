<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title') | {{ config('app.name') }}</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <!-- As a heading -->
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">@yield('title')</span>
  </nav>

  @yield('content')
</body>
</html>
