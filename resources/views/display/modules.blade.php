<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Affichage des Modules</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="module" data-module="meteo">
      @include('modules.module1')
    </div>
    <div class="module" data-module="planning">
      @include('modules.module2')
    </div>
    <div class="module" data-module="blog">
      @include('modules.module3')
    </div>
    <div class="module" data-module="anniversaire">
      @include('modules.module4')
    </div>

  <script type="text/javascript" src="/js/app.js">

  </script>
  </body>
</html>
