<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Jeff Andrew</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- Opciones para dashboards -->
         <!--    <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li> --> 
            <li class="active"><a href="{{'home'}}"><i class="fa fa-puzzle-piece"></i> General Data </a></li>
          </ul>
        </li>
        
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('stadistic_charts')}}"><i class="fa fa-tencent-weibo"></i>Grafica de Barras</a></li>
            {{-- <li><a href="pages/charts/inline.html"><i class="fa fa-tencent-weibo"></i> Inline charts</a></li> --}}
          </ul>
        </li>
       
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-cube"></i> Matriculados</a></li>
            <li><a href="{{route('reporteG')}}"><i class="fa fa-cube"></i> Egresados </a></li>
            <li><a href="{{route('reportecambio')}}"><i class="fa fa-cube"></i> Cambio de Carrera</a></li>
            <li><a href="{{route('reportenacional')}}"><i class="fa fa-cube"></i>Nacionalidad</a></li>
            <li><a href="#"><i class="fa fa-cube"></i>Transferidos</a></li>
            <li><a href="#"><i class="fa fa-cube"></i>Reingreso</a></li>
            <li><a href="#"><i class="fa fa-cube"></i>Aprobaron Examen de Admision</a></li>
            <li><a href="#"><i class="fa fa-cube"></i>Consultar Indice</a></li>
          </ul>
        </li>
        <li>
         <!--  <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a> -->
        </li>
       
     
    </section>