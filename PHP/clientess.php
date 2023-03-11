<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <main>
<section>
    <nav>
    <nav class="navbar bg-light">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2 " data-bs-toggle="modal" data-bs-target="#comando1-modal"  type="button">Main button  </button>
  </form>
</nav>
    </nav>
</section>


<form class="m-auto container" action="./formulario.php" method="POST">

<div class="modal" id="comando1-modal"  tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3 container">
          
          <div class="mb-3 container">
              <label for="nombre" class="form-label text-black">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
          
          </div>
          
          
          
          <div class="mb-3 container">
              <label for="Apellido" class="form-label text-black">Apellido</label>
              <input type="text" class="form-control" id="Apellido" require name="apellido" placeholder="apellido">
          
          </div>
          
          <div class="mb-3 container">
              <label for="username" class="form-label text-black">NIT/CC</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="username">
          
          </div>
          
          
          
          <div class="mb-3 container">
              <label for="exampleInputEmail1" class="form-label text-black">Dirección</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email">
          
          </div>
          
          
          <div class="mb-3 container">
              <label for="password" class="form-label text-black">Ciudad</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
          
          </div>

          <div class="mb-3 container">
              <label for="password" class="form-label text-black">Telefono</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
          
          </div>

          <div class="mb-3 container">
              <label for="password" class="form-label text-black">Cupo Disponible</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
          
          </div>

          <div class="mb-3 container">
              <label for="password" class="form-label text-black">Estado</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
          
          </div>
          
          
          
          
          </div>
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary"   name="enviar">Enviar</button>
      
        </div>
        </div>
    </div>
    </div>
</form>















<main class="card-body m-auto">

<div class="table-responsive m-auto">
    <table class="table table-sm align-middle  table-success table-striped table-hover table-bordered">
        <thead class="align-middle  justify-content-center flex-direction">
            <tr>
                <th class="text-black text-center">Nombre</th>
                <th class="text-black text-center">Apellido</th>
                <th class="text-black text-center">NIT/CC</th>
            
                <th class="text-black text-center">Dirección</th>
                <th class="text-black text-center">Ciudad</th>
                <th class="text-black text-center">Teléfono</th>
                <th class="text-black text-center">Cupo Disponible</th>


                <th colspan="2" class="text-black text-center">Estado</th>


            </tr>
        </thead>
        <tbody class="text-center" >
          
<?php





include './conexion.php';
include './eliminar.php';
//include './editar.php';

include './login.php';


include './consulta.php';

while ($file = mysqli_fetch_row($consul)) {
  echo "<tr >
    <td class='text-black'>$file[0]</td>
    <td class='text-black'>$file[2]</td>
    <td class='text-black'>$file[3]</td>
    <td class='text-black'>$file[4]</td>
    <td class='text-black'>$file[5]</td>
    <td class='text-black'>$file[6]</td>";



    ?>

  <?php 

    // if () {
    //   # code...
    // }


  ?>









    <td>
        

      <a href=" editar.php?editar=<?php echo $file[0] ?>" class="btn btn-primary">editar</a>

            </td class="align-bottom">
<?php

    // echo "<td>
    // <form action='./editar.php' method='POST'>
    // <button class='btn btn-info' name='editar' value='$file[0]'>editar</button>
    // </form>
    // </td>";
   

   echo "<td>
    <form  method='POST'>
    <button class='btn btn-danger' name='id' value='$file[0]'>eliminar</button>
    </form>
    </td>
    
</tr>

";

};
?>

</tbody>
</table>
</div>

</form>


    </main>
</body>
</html>