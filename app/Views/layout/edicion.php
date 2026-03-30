<header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-end">
            <a href="<?php echo base_url('/');?>" class="logo d-flex align-items-center me-auto">
                <img src="<?php echo base_url('assets/img/logo_oscuro.png')?>" alt="" >
            </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?php echo base_url('/');?>" class="active" style="color: #023E7D ;">Inicio</a></li>
                <li class="dropdown"><a href="#"><span>Educación</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Neurociencia Básica</a></li>  
                        <li><a href="#">Neurociencia Aplicada</a></li>
                        <li><a href="#">Neurociencia y Salud Pública</a></li>
                        <li><a href="#">Neurociencia y Tecnología</a></li>
                        <li><a href="#">Formaciones Internas</a></li><!---->
                    </ul>
                </li>
    <!----------------------------------------------------------------------------------------------------------------->            
                <li class="dropdown"><a href="#"><span>Tecnología e Innovación</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Inteligencia artificial</a></li>
                        <li><a href="starter-page.html">Modelos 3D-AR</a></li>
                        <li><a href="#">Robótica</a></li><!--
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>-->
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Modelos 3D-AR</a></li>
                        <li><a href="#">Robótica</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                </li>
            </ul>
            </li>
                <li class="dropdown"><a href="#"><span>Cooperación</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Universidades y Hospitales</a></li>  
                        <li><a href="#">Centros de Ciencia o Tecnología</a></li>
                        <li><a href="#">Organismos Nacionales y Mundiales</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Investigación </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Producción intelectual AVNc</a></li>  
                        <li><a href="#">Editorial AVNc</a></li>
                    </ul>
                </li>
            
                <li class="dropdown"><a href="#"><span>Gestiones</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">2024</a></li>  
                        <li><a href="#">2025</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('directiva');?>">Junta Directiva</a></li>
                <li><a href="#contact">Contáctanos</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
            <a class="cta-btn" href="index.html#appointment" style="background: #0353A4;
background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);" data-bs-toggle="modal" data-bs-target="#exampleModal" >Ingresar</a>
        </div>
    </div>
<!--ff914d-->
</header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background: #0353A4;
                background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Inicio de Sessión</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <form action="<?= base_url('/logear') ?>" method="post">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>       
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn text-white" style="background: #0353A4;
                background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);">Entrar</button>
                    </div>
                    </form>
        </div>
    </div>
</div>