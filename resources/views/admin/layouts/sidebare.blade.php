<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info text-capitalize">
          <p>{{Auth::user()->name}}</p> 
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
      
            <li class=""><a href="{{ route('admin.gratuit.index') }}"><i class="fa fa-circle-o"></i> Formation Gratuit</a></li>
            <li><a href="{{ route('admin.initial.index') }}"><i class="fa fa-circle-o"></i>Formation Initiale</a></li>
            <li><a href="{{ route('admin.personnelle.index') }}"><i class="fa fa-circle-o"></i>Developpement Personnel</a></li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-rss"></i>
                <span>Developpement WEb</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('web.initial') }}"><i class="fa fa-circle-o"></i>Niveau Initiale</a></li>
                <li><a href="{{ route('web.intermediare') }}"><i class="fa fa-circle-o"></i>Niveau intermediare</a></li>
                <li><a href="{{ route('web.avancer') }}"><i class="fa fa-circle-o"></i>Niveau Avance</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-rss"></i>
                <span>Multimediat</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('multimediat.initial') }}"><i class="fa fa-circle-o"></i>Niveau Initiale</a></li>
                <li><a href="{{ route('multimediat.intermediare') }}"><i class="fa fa-circle-o"></i>Niveau intermediare</a></li>
                <li><a href="{{ route('multimediat.avancer') }}"><i class="fa fa-circle-o"></i>Niveau Avance</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-rss"></i>
                <span>Bureautique</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('bureautique.initial') }}"><i class="fa fa-circle-o"></i>Niveau Initiale</a></li>
                <li><a href="{{ route('bureautique.avancer') }}"><i class="fa fa-circle-o"></i>Niveau Avance</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-rss"></i>
                <span>Maintenance & Reseau</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('maintenance.initial') }}"><i class="fa fa-circle-o"></i>Niveau Initiale</a></li>
                <li><a href="{{ route('maintenance.intermediare') }}"><i class="fa fa-circle-o"></i>Niveau intermediare</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Niveau Avance</a></li>
              </ul>
            </li>

            <li class=""><a href=""><i class="fa fa-circle-o"></i> Membres De EMPRO</a></li>
            <li><a href="{{ route('admin.contact.index') }}"><i class="fa fa-circle-o"></i>Mailbox</a></li>

        </li>
   
    
     
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 


