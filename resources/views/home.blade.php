<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    </head>
    <body>
        @include('partials.navbar')
        <br>

        <div id="app">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="row">
                    <weather-main :defaultcities="2344116"></weather-main>
                    <weather-main :defaultcities="638242"></weather-main>
                    <weather-main :defaultcities="44418"></weather-main>
                    <weather-main :defaultcities="565346"></weather-main>
                    <weather-main :defaultcities="560743"></weather-main>
                    <weather-main :defaultcities="9807"></weather-main>
                  </div>
                </div>
            </div>
          </div>

        </div>

    </body>

    <script src="{{asset('js/app.js')}}"></script>
</html>
