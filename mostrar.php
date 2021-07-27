<?php
    include ("cone.php");
    $citas = "SELECT * FROM pizza";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 90%;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }

        button[type="submit"] {
          border: none;
          width: 120px;
          background-color: dodgerblue;
          font-size: 18px;
          font-weight: 500;
          color: #fff;
          margin-top: 25px;
          margin-left: 10px;
          border-radius: 7px;
          border: 2px solid gray;
        }

        .btn-success {
          margin-bottom: 5px;
        }

        .btn-danger {
          margin-bottom: 5px;
        }

        button[type="button"] {
          font-weight: 600;
          width: 110px;
        }

        button > i {
          font-size: 18px;
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-20">
            <div class="page-header clearfix">
                <h2 class="pull-left">PEDIDOS DE PIZZA</h2>
            </div>
            <table class='table table-bordered table-striped' id="tabla">
              <thead>
                <tr>
                 <th scope="col">DNI</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">APELLIDO</th>
                  <th scope="col">CELULAR</th>
                  <th scope="col">TIPO DE PIZZA</th>
                  <th scope="col">PRECIO</th>
                </tr>
              </thead>
              <tbody id="tabla_body">

               <?php $resultado = mysqli_query($conexion, $citas);
                while($row=mysqli_fetch_assoc($resultado)){?>
                    <tr>
                      <td><?= $row["dni"]; ?></td>
                      <td><?= $row["nombre"]; ?></td>
                      <td><?= $row["apellido"]; ?></td>
                      <td><?= $row["celular"]; ?></td>
                      <td><?= $row["tipo"]; ?></td>
                      <td><?= $row["precio"]; ?></td>
                    </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>