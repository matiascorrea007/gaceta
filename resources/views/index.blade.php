<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>App la Gaceta - Reparto de Diarios</title>
  



      <link rel="stylesheet" href="css/login/login.css">
      <link rel="stylesheet" href="css/login/icon.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      

</head>

<body>
  
  @include('flash::message')
@include('alerts.request')
@include('alerts.success') 

<div class="signin cf">
  <div class="avatar"><img src="storage/login.svg" alt=""></div>
   <form action="{{ url('/login') }}" method="post">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="inputrow">
      <input type="text" id="name" placeholder="email" name="email" />
      <label class="ion-person" for="name"></label>
    </div>
    <div class="inputrow">
      <input type="password" id="pass" placeholder="Password" name="password" />
      <label class="ion-locked" for="pass"></label>
    </div>
    <input type="checkbox" name="remember" id="remember"/>
    <label class="radio" for="remember">Permanecer Logueado</label>
    <input type="submit" value="Login"/>
  </form>



</div>
 

    <script src="js/login.js"></script>

</body>
</html>
