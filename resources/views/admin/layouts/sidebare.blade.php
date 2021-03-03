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
        

            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Administration</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href=""><i class="fa fa-user-plus"></i> Membres</a></li>
                <li><a href="{{ route('admin.contact.index') }}"><i class="fa fa-envelope"></i>Mailbox</a></li>
              </ul>
            </li>

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
                <i class="fa fa-code"></i>
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
                <i class="fa fa-file-video-o"></i>
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
                <i class="fa fa-file-word-o"></i>
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
                <i class="fa fa-gears"></i>
                <span>Maintenance</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('maintenance.initial') }}"><i class="fa fa-circle-o"></i>Niveau Initiale</a></li>
                <li><a href="{{ route('maintenance.intermediare') }}"><i class="fa fa-circle-o"></i>Niveau intermediare</a></li>
                <li><a href="{{ route('maintenance.avancer') }}"><i class="fa fa-circle-o"></i>Niveau Avance</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-rss"></i>
                <span>Cablage Reseau</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('reseau.initial') }}"><i class="fa fa-circle-o"></i>Niveau Initiale</a></li>
                <li><a href="{{ route('reseau.intermediare') }}"><i class="fa fa-circle-o"></i>Niveau intermediare</a></li>
                <li><a href="{{ route('reseau.avancer') }}"><i class="fa fa-circle-o"></i>Niveau Avance</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-database"></i>
                <span>Base de donnee</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">3</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('base.initial') }}"><i class="fa fa-circle-o"></i>Niveau Initiale</a></li>
                <li><a href="{{ route('base.intermediare') }}"><i class="fa fa-circle-o"></i>Niveau intermediare</a></li>
                <li><a href="{{ route('base.avancer') }}"><i class="fa fa-circle-o"></i>Niveau Avance</a></li>
              </ul>
            </li>


            

            

        </li>
   
    
     
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 


