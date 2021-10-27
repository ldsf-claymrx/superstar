<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid container">
        <a class="navbar-brand" href="#"><img src="<?=base_url();?>/images/letrero-ss.png" alt="Super Star Oficial" class="img-navbar"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url(); ?>">Pagina Oficial SS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/dashboard');?>">Pagina Inicio Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/dashboard');?>#configuracion">Configuracion del negocio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/dashboard');?>#productos">Catalogo de Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/dashboard');?>#preguntas">Catalogo de Preguntas</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>