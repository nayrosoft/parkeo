<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php print(URL); ?>public/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo "Username";//print($this->user->getNombre()); ?></p>
        <span><i class="fa fa-user-circle text-red"></i>	&nbsp;User Rol</span>
      </div>
    </div>
    <!-- search form -->
    <!--form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form-->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        
        <!-- treeview -->
      <li class="active treeview">
        <!-- treeview Title -->
        <a href="#">
          <i class="fa fa-money"></i> <span>Cajas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>          
        </a>
        <!-- /treeview Content -->
        <ul class="treeview-menu">
          <!-- treeview content elment -->
          <li class="active">
            <a class="asyncLink" href="<?php print(URL); ?>Cajas/crear/" >
              <i class="fa fa-circle-o"></i> Crear Caja
            </a>
          </li>
          <!-- /treeview content elment -->
          <!-- treeview content elment -->
          <li>
            <a class="asyncLink" href="<?php print(URL); ?>Cajas/" >
              <i class="fa fa-circle-o"></i> Listar Cajas
            </a>
          </li>
          <!-- /treeview content elment -->
        </ul>
      </li>
      <!--/treeview -->
      
      <!-- treeview -->
      <li class="treeview">
        <!-- treeview Title -->
        <a href="#">
          <i class="fa fa-users"></i> <span>Usuarios</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <!-- /treeview Title -->
        <!-- treeview Content -->
        <ul class="treeview-menu">
          <!-- treeview content elment -->
          <li class="active">
            <a class="asyncLink" href="<?php print(URL); ?>Example/dummyData" >
              <i class="fa  fa-user"></i> Crear Usuario
            </a>
          </li>
          <!-- /treeview content elment -->
          <!-- treeview content elment -->
          <li>
            <a class="asyncLink" href="<?php print(URL); ?>Example/dummyData" >
              <i class="fa  fa-users"></i> Listar Usuarios
            </a>
          </li>
          <!-- /treeview content elment -->
        </ul>
        <!-- /treeview Content -->
      </li>
      <!--/treeview -->
      
      
      
        </ul>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
