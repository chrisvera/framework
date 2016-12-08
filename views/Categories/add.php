<h2>Agregar Categoría</h2>

<form action="<?php echo APP_URL."/categories/add"; ?>"
	method="POST">
	<p>
		<label for="name">Name</label>
		<input type="text" name="name">
	</p>
	
	
	<p>
		<input type="submit" >
	</p>
</form>