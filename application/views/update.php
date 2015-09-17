<form action="<?php echo base_url('home/update'); echo "/{$artigo[0]->id_artigo}" ?>" method="post">
	<input type="text" name="txtAutor" value="<?php echo $artigo[0]->autor_artigo ?>" placeholder="Autor"> <br><br>
	<input type="text" name="txtTitulo" value="<?php echo $artigo[0]->titulo_artigo ?>" placeholder="Titulo"> <br><br>
	<textarea name="txtArtigo" id="" rows="10" placeholder="Artigo"><?php echo $artigo[0]->texto_artigo ?></textarea> <br><br>
	<input type="submit" name="atualizar" value="Atualizar">
</form>
