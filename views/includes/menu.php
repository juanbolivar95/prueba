<?php
	/**
	 *
	 * @About:
	 * @File:        menu.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="/">
			<img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/views/assets/img/tecnology.jpg" alt="" width="40" height="40" class="d-inline-block align-top">
			Prueba
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
		        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="/">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo \Tissini\Models\utils\LinksHelper::getLink('cart') ?>">Carrito</a>
				</li>
			</ul>
		</div>
	</div>
</nav>