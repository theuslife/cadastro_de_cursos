<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    <style>
      .img{
        max-height: 60px;
      }
    </style>
</head>
<body class="bg-dark">
    <header class="pb-3">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand h1" href="{{ route('site') }}">Crud</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="{{ route('site') }}">Inicio <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="{{ route('admin.cursos') }}">Cursos</a>
            </div>
            <span class="navbar-text ml-auto">
                Feito por: <a target="_blank" href="https://github.com/theuslife">Matheus Rodrigues</a> 
            </span>
          </div>
        </div>
      </nav>
    </header>