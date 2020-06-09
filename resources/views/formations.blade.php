<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
        @include('partials.header')
    
        


<div class="container">
    <center>  <h3>Notre offre de formation</h3> </center> <br><br>
  




    
    
    <p>Nos formations aux métiers du numérique sont gratuites, professionnalisantes, intensives, sans pré-requis mais nécessitent une bonne dose de motivation ! </p>
  
    
    <h3>Developpement Web</h3>

    <img src="assets/img/web1.jpg" alt="" width="100%"> <br>
    <br>
    <h3>
        Actuellement la seule formation disponible est le <span style="color:red;">Developpement Web</span>. <br>
        D'autres Formations verront le jour 
    </h3>
    
    
    
    
    
    
    
    
    @include('partials.footer')

        <script>
        $('.carousel').carousel()
        </script>
    </body>
</html>
