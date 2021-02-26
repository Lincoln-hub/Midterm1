<form action = "inputs" method = "POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<h2> Input fields</h2>
		<table>
			<tr>
				<td>Inputfield1: </td>
				<td><input type = "text" name = "inputa" /></td>
				
			</tr>

			<tr>
				<td>Inputfield2:</td>
				<td><input type = "text" name = "inputb" /></td>
			
				
			</tr>
			<tr>
				<td>Inputfield2: </td>
				<td><input type = "text" name = "inputc" /></td>
			
			</tr>

			<tr>
				<td>Inputfield2:</td>
				<td><input type = "text" name = "inputd" /></td>
				
				
			</tr>
			
			<td colspan = "2" align = "center">
					<button type="submit" name="submit">Submit</button>
				</td>

	
		</table>
	</form>
				<?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
	