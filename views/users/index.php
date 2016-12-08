<div class="row">
	<div class="col-xs-12">
		
	</div>
</div>
<h2>Usuarios</h2>
<div class="table-responsive">
	<table class="table table-striped"> 
		<tr>
			<th>ID</th>
			<th>username</th>
			<th>Password</th>
			<th>Type</th>
			<th>Action</th>
		</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user["users"]["id"]; ?></td>
		<td><?php echo $user["users"]["username"]; ?></td>
		<td><?php echo $user["users"]["password"]; ?></td>
		<td><?php echo $user["types"]["name"]; ?></td>
		<td>

			<?php
				echo $this->Html->link(
					"<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>", "/users/edit/".$user["users"]["id"],
					array(
						"title"=>"Editar usuario",
						"target"=>"_blank"
					)
				);
			?>
			<?php
				echo $this->Html->link(
					"Delete", 
					"/users/delete/".$user["users"]["id"]
					
				);
			?>
			
		</td>
	</tr>
	<?php endforeach; ?>

	</table>

	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="G2PVB4MPTCK8Q">
		<table>
		<tr><td><input type="hidden" name="on0" value="balones">balones</td></tr><tr><td><select name="os0">
			<option value="Nike">Nike $250.00 MXN</option>
			<option value="Adidas">Adidas $200.00 MXN</option>
			<option value="Voit">Voit $150.00 MXN</option>
		</select> </td></tr>
		</table>
		<input type="hidden" name="currency_code" value="MXN">
		<input type="image" src="https://www.sandbox.paypal.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
		<img alt="" border="0" src="https://www.sandbox.paypal.com/es_XC/i/scr/pixel.gif" width="1" height="1">
	</form>



</div>
