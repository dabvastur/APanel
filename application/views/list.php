<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="contenido">
        <?php 
        foreach ($results as $data) 
        {
            echo $data->ID; 
        }
        ?>
    </div>
  </div>
</main>