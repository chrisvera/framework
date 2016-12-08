<h2>Tipos</h2>

<div class="table-responsive">
	<table class="table table-striped"> 
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Action</th>
	</tr>

<?php foreach ($types as $type): ?>
<tr>
	<td><?php echo $type["types"]["id"]; ?></td>
	<td><?php echo $type["types"]["name"]; ?></td>
	<td>

			<?php
				echo $this->Html->link(
					"<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>", "/types/edit/".$type["types"]["id"],
					array(
						"title"=>"Editar tipo",
						"target"=>"_blank"
					)
				);
			?>
			<?php
				echo $this->Html->link(
					"Delete", 
					"/types/delete/".$type["types"]["id"]
					
				);
			?>
			
	</td>

	
</tr>
<?php endforeach; ?>

	</table>
</div>


