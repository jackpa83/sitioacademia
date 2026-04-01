<?php $session = session(); ?>
<header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-center">
        <div class="container   position-relative d-flex align-items-center justify-content-end">
            <a href="<?php echo base_url('/');?>" class="logo d-flex align-items-center me-auto">
                <img src="<?php echo base_url('assets/img/logo_oscuro.png')?>" alt="" >
            </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?php echo base_url('/');?>" class="active" style="color: #023E7D ;">Inicio</a></li>
                <li class="dropdown"><a href="#"><span>Logos</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?php echo base_url('logo');?>">Logo Menu</a></li>  
                        <li><a href="<?php echo base_url('banner');?>">Banner Principal</a></li>
                        <li><a href="<?php echo base_url('logo_q');?>">Logo Quienes Somos </a></li>
                        <li><a href="#">Neurociencia y Tecnología</a></li>
                        <li><a href="#">Formaciones Internas</a></li>
                    </ul>
                </li>
    <!----------------------------------------------------------------------------------------------------------------->            
                <li class="dropdown"><a href="#"><span>Junta Directiva <span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?php echo base_url('jdirectiva');?>">Junta Directiva</a></li>
                        <li><a href="starter-page.html">Modelos 3D-AR</a></li>
                        <li><a href="#">Robótica</a></li>
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
                   
                <li class="dropdown"><a href="#"><span>Configuración</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?php echo base_url("user");?>">Usuarios</a></li>  
                  
                    </ul>
                </li>
               
                <li><a href="<?php echo base_url('directiva');?>">Junta Directiva</a></li>
                 <li><a href="<?php echo base_url('directiva');?>"> Bienvenido: <?= session()->get('nombre') ?></li>
            
           
        </nav>
           <a class="cta-btn" href="<?php echo base_url('logout');?>" style="background: #0353A4;
            background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);
            " >Salir</a>
        </div>
    </div>
<!--ff914d-->
</header>
