<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Single Page Forum</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <body>
    <div id="app">
      <v-app>
        <app-home></app-home>
      </v-app>

    </div>
    <script src="{{asset('js/app.js')}}"></script>
  </body>


</html>
