<header>
       <div class="menu-navbar">
       <a href="http://localhost/wordpress"><img src=<?php echo get_template_directory_uri() . '/img/horizontal-branco.png'?> alt=""></a>

       <nav id="nav">
        <button id="btn-menu-mobile">
        <span id="hamburguer-btn"></span>
        </button>
       <ul id="menu" class="options-menu">
           <li class="separatorli"><a href="#quemsomos">Quem somos</a></li>
          <!-- <li class="projsubmenu"><a href="">Projetos</a> -->
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projetos
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Arquitetura</a></li>
            <li><a class="dropdown-item" href="#">Interiores</a></li>
          </ul>
        </li><!--dropdown-item-->
        </li>
           <li><a href="http://localhost/wordpress/blog/">Blog</a></li>
       </ul>
       </nav>
    </div><!--menu-navbar-->
   </header>