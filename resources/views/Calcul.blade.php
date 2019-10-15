<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Calculator</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script>
    <style>
    body{
        background:#fff;
        font-family: sans-serif;
    }
    .calculator{
        width:375px;
        background:#00bbbf;
        margin:100px auto;
        padding:10px 15px 40px 15px;
        border-radius:5px;
        box-shadow: 0px 5px 15px 0px #E1E1E1;
    }
    .num{
        width:320px;
        margin:5px;
        border:none;
        font-size:14px;
        border-radius:5px;
        padding:10px;
    }
    .opt{
        font-size:14px;
        margin:5px;
        border:none;
        width:245px;
        border-radius:5px;
        padding:10px;
    }
    .button{
        background:#ec5055;
        border-top:none;
        border-right:none;
        border-left:none;
        border-radius:5px;
        padding:10px 15px;
        color:#eee;
        font-size:13px;
        border-bottom:4px solid #bf203d;
        margin-left:255px;
        margin-top:-20px;
    }
    .title{
        text-align:center;
        color:#eee;
        font-weight:normal;
    }
    </style>
  </head>
  <body>  
  @if(Session::Has('serverError'))
   <p class="alert alert-danger">{{Session::get('serverError')}}</p> 
  @endif
  <div class="calculator">
     <h1 class="title">CALCULATOR</h1>
     <form method="post" action="Calcul">
     {{csrf_field()}}
     <input type="text" name="num1" class="num" autocomplete="off" placeholder="Entrer le premier nombre" require>
     <input type="text" name="num2" class="num" autocomplete="off" placeholder="Entrer le second nombre" require>
     <select class="opt" name="operation">
     <option value="Addition">+</option>
     <option value="Soustraction">-</option>
     <option value="Multiplication">*</option>
     <option value="Division">:</option>
     </select>
     <input type="submit" name="Calcul" class="button">
     </form>
        <input type="text" value="{{$res}}" class="num">
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
</html>

