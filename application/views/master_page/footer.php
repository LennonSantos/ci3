	<!-- scripts -->
	<?php
		//imprimir scripts
		foreach ($scripts as $key => $value) {
			if( $value == true )
				echo " <script src='assets/js/{$key}.js'></script>";
		}
	?>
	</body>
</html>
{elapsed_time}