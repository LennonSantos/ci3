<ul><?php foreach($artigos as $row){ ?>
	<li>
		<article>
			<h2><?php echo $row->titulo_artigo; ?></h2>
			<p><?php echo $row->texto_artigo; ?></p>
			<footer><?php echo $row->autor_artigo; ?></footer>
			<a href="<?php echo base_url('home/delete'); ?>/<?php echo $row->id_artigo; ?>">Deletar artigo</a> &bull;	
			<a href="<?php echo base_url('home/update'); ?>/<?php echo $row->id_artigo; ?>">Atualizar artigo</a>
		</article>
	</li> <hr> <?php } ?>
</ul>
	