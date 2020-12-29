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
		<a class="navbar-brand" href="#">
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
					<a class="nav-link active" aria-current="page" href="#">Inicio</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
					   data-bs-toggle="dropdown" aria-expanded="false">
						Categorias
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Aplicaiones Web</a></li>
						<li><a class="dropdown-item" href="#">Aplicaciones Moviles</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Plantillas HTML5</a></li>
						<li><a class="dropdown-item" href="#">Plantillas BOOTSTRAP</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Iniciar Sesión</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
					                                  fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
							<path
								d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
						</svg></a>
				</li>
			</ul>
		</div>
	</div>
</nav>