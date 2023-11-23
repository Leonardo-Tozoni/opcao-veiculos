<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

<!-- É SÓ USAR A ID E AS CLASSES PARA ESTILIZAR -->
<div id="erro404" class="text-center">
	<div class="titulo">Ops! Página não encontrada.</div>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="voltar">IR PARA A PÁGINA INICIAL</a>	
</div>

<?php
get_footer();