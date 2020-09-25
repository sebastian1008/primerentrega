<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <link rel="stylesheet" href="stilos.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">


            <a class="navbar-brand" href="index.php">
            <img src="img/icono.jpg" width="30" height="30" alt="imgicono" loading="lazy">
            tienda del verde
            
              </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="">compras<span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                  
                  
                </div>
              </nav>
            
    </header>
    <main class="bg-dark">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" class="d-block w-100" alt="carusel1">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="carusel2">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="conteiner">


<div class="row justify-content-center mt-5">
    <div class="col-4 ">
    <h4 class="text-white text-center-justify"> Factura compra</h4>

    <form action="compra.php" method="POST">

       <div class="row mt-2 ">
         <div class="col">
             <input type="text" class="form-control" placeholder="producto 1" name="producto1">
           </div>
         <div class="col">
             <input type="text" class="form-control" placeholder="precio($)" name="precio1">
         </div>
       </div>
       <div class="row mt-2">
         <div class="col">
             <input type="text" class="form-control" placeholder="producto 2 " name="producto2">
           </div>
         <div class="col">
             <input type="text" class="form-control" placeholder="precio($)" name="precio2">
         </div>
       </div>
       <div class="row mt-2">
         <div class="col">
             <input type="text" class="form-control" placeholder="producto 3" name="producto3">
           </div>
         <div class="col">
             <input type="text" class="form-control" placeholder="precio($)" name="precio3">
         </div>
       </div>
       <div class="row mt-2">
         <div class="col">
             <input type="text" class="form-control" placeholder="producto 4" name="producto4">
           </div>
         <div class="col">
             <input type="text" class="form-control" placeholder="precio($)" name="precio4">
         </div>
       </div>
       <div class="row mt-2">
         <div class="col">
             <input type="text" class="form-control" placeholder="producto 5" name="producto5">
           </div>
         <div class="col">
             <input type="text" class="form-control" placeholder="precio($)" name="precio5">
         </div>
       </div>
       <button type="submit" class="btn btn-primary btn-block mt-2" name=botonCalcular>calcular</button>
     </form> 

    <?php
     if(isset($_POST["botonCalcular"])):
    ?>

  <div class=" fondo2 border mt-5">

      <h5 class="mt-5"> 
      <?php
               
              $precio1=$_POST["precio1"];
              $producto1=$_POST["producto1"];

              $precio2=$_POST["precio2"];
              $producto2=$_POST["producto2"];

              $precio3=$_POST["precio3"];
              $producto3=$_POST["producto3"];

              $precio4=$_POST["precio4"];
              $producto4=$_POST["producto4"];
              
              $precio5=$_POST["precio5"];
              $producto5=$_POST["producto5"];

              $total=$precio1+$precio2+$precio3+$precio4+$precio5;


              echo("el producto 1 es : ".$producto1."------".$precio1);
              echo("<br>");
              echo("el producto 2 es : ".$producto2."------".$precio2);
              echo("<br>");
              echo("el producto 3 es : ".$producto3."------".$precio3);
              echo("<br>");
              echo("el producto 4 es : ".$producto4."------".$precio4);
              echo("<br>");
              echo("el producto 5 es : ".$producto5."------".$precio5);
              echo("<br>");
              echo("<br>");

              echo("**************************");
              echo("<br>");
              echo("el total de la compra es: ".$total)

              
              
      ?>
      </h5>

   </div>   

    <?php endif ?>
    <br><br>


    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>