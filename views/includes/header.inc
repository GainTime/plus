    <header>
        <img src="../vendors/gainTime/dist/img/logo-gT.png" alt="GainTime" class="menu-logo">
        <div id="me">
            <img src="../vendors/gainTime/dist/img/logo-gT.png" alt="Me" class="professor-image">
            <ul id="me-menu">
                <a href="../helpers/session?logout"><li>Sair</li></a>
            </ul>
        </div>
        <input type="checkbox" id="menu" class="toggle">
        <label id="menu-toggle" for="menu" onclick><i class="fa fa-bars"></i></label>
        <nav class="menu">
            <ul>
                <a href="home"><li<?php Session::is_active('home'); ?>><i class="fa fa-home"></i> Início</li></a>
                <a href="users"><li<?php Session::is_active('users'); ?>><i class="fa fa-user"></i> Usuários</li></a>
                <a href="projects"><li<?php Session::is_active('projects'); ?>><i class="fa fa-anchor"></i> Projetos</li></a>
                <a href="services"><li<?php Session::is_active('services'); ?>><i class="fa fa-cubes"></i> Serviços</li></a>
                <a href="partners"><li<?php Session::is_active('partners'); ?>><i class="fa fa-star-half-full"></i> Parceiros</li></a>
                <a href="contact"><li<?php Session::is_active('contact'); ?>><i class="fa fa-envelope"></i> Contato</li></a>
            </ul>
        </nav>
    </header>
