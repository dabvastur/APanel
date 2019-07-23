<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="contenido">
        <table class="table table-striped table-dark table-bordered">
           <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Detalle</th>
                  <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $data) { ?>
                <tr>
                    <td><?php echo $data->id ?></td>
                    <td><?php echo $data->Usuario ?></td>
                    <td><?php echo $data->tipo ?></td>
                    <td><?php echo $data->Cadena ?></td>
                    <td><?php echo $data->fechahora ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php 
        if (isset($links)) 
            { 
                echo $links;
            }
        ?>
    </div>
  </div>
</main>