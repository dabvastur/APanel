<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="contenido">
<br>
    	<table class="table table-striped table-dark table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Usuario</th>
		      <th scope="col">Kills</th>
		      <th scope="col">Deaths</th>
		      <th scope="col">Cash</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach ($results as $data) { ?>
        		<tr>
            		<td><?php echo $data->ID ?></td>
            		<td><?php echo $data->USERNAME ?></td>
            		<td><?php echo $data->KILLS ?></td>
            		<td><?php echo $data->DEATHS ?></td>
            		<td><?php echo $data->CASH ?></td>
        		</tr>
   			<?php } ?>
		  </tbody>
		</table>

		<?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
    </div>
  </div>
</main>