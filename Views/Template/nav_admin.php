  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?=media();?>/images/user3.ico" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Moises Gomez</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/dashboard">
            <i class="app-menu__icon fa fa-dashboard"></i>
            <span class="app-menu__label"> Dashboard</span>
          </a>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-solid fa-users"></i>

            <span class="app-menu__label">Usuarios</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">

            <li>
              <a class="treeview-item" href="<?=base_url(); ?>/usuarios">
              <i class="icon fa fa-circle-o"></i> Usuarios</a>
            </li>

            <li>
              <a class="treeview-item" href="<?=base_url(); ?>/roles">
              <i class="icon fa fa-circle-o"></i> Roles</a>
            </li>
            
              <li>
                <a class="treeview-item" href="<?=base_url(); ?>/permisos">
              <i class="icon fa fa-circle-o"></i> Permisos</a>
            </li>

          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/clientes">
          <i class="app-menu__icon fa fa-user"></i>
           <span class="app-menu__label">Clientes</span>
          </a>
        </li>

        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/proyectos">
            <i class="app-menu__icon fa fa-calendar"></i>
            <span class="app-menu__label">Proyectos</span>
          </a>
        </li>

        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/ventas">
            <i class="app-menu__icon fa fa-money"></i>
            <span class="app-menu__label">Ventas</span>
          </a>
        </li>

        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/existencias">
            <i class="app-menu__icon fa fa-list"></i>
            <span class="app-menu__label">Existencias</span>
          </a>
        </li>
        
        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/herramientas">
            <i class="app-menu__icon fa fa-screwdriver fa-wrench"></i>
            <span class="app-menu__label">Herramintas</span>
          </a>
        </li>

        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/bitacora">
          <i class="app-menu__icon fa fa-book"></i>
            <span class="app-menu__label">Bitacora</span>
          </a>
        </li>
     
        <li>
          <a class="app-menu__item" href="<?=base_url(); ?>/logout">
          <i class="app-menu__icon fa fa-sign-out"></i>
            <span class="app-menu__label">Logout</span>
          </a>
        </li>


      </ul>
    </aside>