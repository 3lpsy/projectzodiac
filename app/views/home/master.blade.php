<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>James Edward's Portfolio</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.
css')}}">
<link rel="stylesheet" href="{{asset('css/projectzodiac.css')}}">
     </head>
     <body>
     
        <div class="page-header">
        @include('home.navbar')
        @yield('header')
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success">
              {{Session::get('message')}}
            </div>
        @endif
        @if(Session::has('error'))
           <div class="alert alert-warning">
              {{Session::get('error')}}
           </div>
￼￼￼￼￼￼￼￼@endif

        @yield('content') 
     

<script src="https://code.jquery.com/jquery-2.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
     </body>
   </html>