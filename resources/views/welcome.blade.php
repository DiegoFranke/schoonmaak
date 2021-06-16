<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Schoonmaak maasvalei</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header id="site-header" >    
            <nav class="navbar navbar-expand-lg navbar-dark  shadow fixed-top" >
                <div class="container" >
                  <a class="navbar-brand" href="index.html">Camping maasvalei</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link active" href="">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/openbareschoonmaak">Schoonmaak overzicht</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/huurpleks">Schoonmaak huurplekken edit</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>





        <footer id="site-footer">
            <div class="row" style="padding-top: 10px!important;padding-left: 0px;padding-right: 0px;">
              <div class="col-md-6">
                <a class="footer-brand" >Gemaakt door Bartek en Diego</a>
              </div>
            </div>
          </footer>
    </body>
</html>
