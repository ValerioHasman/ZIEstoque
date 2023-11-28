<!doctype html>
<html lang="pt-br" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="http://localhost/ZIEstoque/public/" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>@yield('title')</title>
  @stack('icones')
  @stack('style')
  @stack('estilos')
  @stack('script')
  @stack('roteiros')
</head>

<body>
  @yield('conteudo')
</body>

</html>