<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/dist/img/default.gif') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info text-capitalize">
          <p>{{Auth::user()->name}}</p> 
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
          @if(Auth::user()->status == 1)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Administration</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="{{ route('admin.membre.index') }}"><i class="fa fa-user-plus"></i> Membres</a></li>
                <li><a href="{{ route('admin.contact.index') }}"><i class="fa fa-envelope"></i>Mailbox</a></li>
                <li><a href="{{ route('admin.devi.index') }}"><i class="fa fa-envelope"></i>Demande de services</a></li>
              </ul>
            </li>
          @endif

            <li class="treeview">
              <a href="#">
                <i class="fa fa-rss"></i>
                <span>Gratuit & Initiale</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
              <li class=""><a href="{{ route('admin.gratuit.index') }}"><i class="fa fa-circle-o"></i> Formation Gratuit</a></li>
              <li><a href="{{ route('admin.initial.index') }}"><i class="fa fa-circle-o"></i>Formation Initiale</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-rss"></i>
                <span>Specialites</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
              <li class=""><a href="{{ route('bureautique.index') }}"><i class="fa fa-file-word-o"></i> Bureatique</a></li>
              <li><a href="{{ route('web.index') }}"><i class="fa fa-code"></i>Developpement web</a></li>
              <!-- <li><a href="{{ route('base.index') }}"><i class="fa fa-database"></i>Base de donnee</a></li> -->
              <li><a href="{{ route('audiovisuel.index') }}"><i class="fa fa-file-video-o"></i>Multimedia</a></li>
              <li><a href="{{ route('maintenance.index') }}"><i class="fa fa-gears"></i>Maintenance</a></li>
              <li><a href="{{ route('reseau.index') }}"><i class="fa fa-rss"></i>Reseau</a></li>
              <li><a href="{{ route('web.create') }}"><i class="fa fa-rss"></i>Wordpress</a></li>
              </ul>
            </li>
          


            

            

        </li>
   
    
     
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 


