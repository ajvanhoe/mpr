
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

         <!--    
         <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </li> 
            -->

            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i>&nbsp;&nbsp;Naslovna</a>
            </li>

             <li>
                <a href="{{route('categories')}}"><i class="fa fa-edit fa-fw"></i>&nbsp;&nbsp;Kategorije</a>
            </li>
   

            <!-- Albumi -->
            <li>
               <a href="#"><i class="fa fa-th"></i>&nbsp;&nbsp;Albumi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.index.albuma') }}"><i class="fa fa-th-list"></i> Pregled albuma</a>
                    </li>
                    <li>
                        <a href="{{ route('create.album') }}"><small><i class="fa fa-plus-circle"></i> Dodaj novi album</small></a>
                    </li>

                    <li>
                        <a href="{{route('albumi.index.kategorija')}}"><i class="fa fa-edit fa-fw"></i>&nbsp;&nbsp;Pregled kategorija</a>
                    </li>

          
                </ul>
                 <!-- /.nav-second-level -->
            </li> 
             <!-- // Albumi -->


            <!-- Knjige -->
            <li>
               <a href="#"><i class="fa fa-book"></i>&nbsp;&nbsp;Knjige<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.index.knjiga') }}"><i class="fa fa-th-list"></i> Pregled knjiga</a>
                    </li>
                    <li>
                        <a href="{{route('create.knjiga') }}"><small><i class="fa fa-plus-circle"></i> Dodaj novu knjigu</small></a>
                    </li>

                      <li>
                        <a href="{{route('knjige.index.kategorija')}}"><i class="fa fa-edit fa-fw"></i>&nbsp;&nbsp;Pregled kategorija</a>
                    </li>

                </ul>
                 <!-- /.nav-second-level -->
            </li> 
             <!-- // Knjige -->


             <!-- Stripovi -->
            <li>
               <a href="#"><i class="fa fa-book"></i>&nbsp;&nbsp;Stripovi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.index.stripova')}}"><i class="fa fa-th-list"></i> Pregled stripova</a>
                    </li>
                    <li>
                        <a href="{{route('create.strip')}}"><small><i class="fa fa-plus-circle"></i> Dodaj novi strip</small></a>
                    </li>

                      <li>
                        <a href="{{route('stripovi.index.kategorija')}}"><i class="fa fa-edit fa-fw"></i>&nbsp;&nbsp;Pregled kategorija</a>
                    </li>

                </ul>
                 <!-- /.nav-second-level -->
            </li> 
             <!-- // Knjige -->

          
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->


              