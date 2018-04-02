

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles  <div class="valid-feedback">
        Looks good!
      </div> -->
       
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>
        <section>
            @include('layouts.indicateurcard')
        </section>
         <PageComponent></PageComponent>
    </body>
   
     <script src="{{ asset('js/app.js') }}"></script>
</html>
