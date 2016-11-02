<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class ="img-circle" src="{{URL::asset('img/profile_small.jpg')}}"/>
                </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Welcome {{$name}}</strong>
                    </span> <span class="text-muted text-xs block"></span> </span> </a>
                    
                </div>
                <div class="logo-element">
                   Training And Placement</div>
               </li>
               @if(Request::path() == 'dashboard')

               <li class="active">
                <a href="{{URL::route('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            @else

            <li >
                <a href="{{URL::route('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            @endif
            @if(strlen(strpos(Request::path(),'students'))>0)
            <li class="active">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Students</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                  @if(Request::path() == 'students')
                  <li class="active"><a href="{{URL::route('students.index')}}">View All Students Data</a></li>
                  @else
                  <li><a href="{{URL::route('students.index')}}">View All Students Data</a></li>
                  @endif
                  @if(Request::path() == 'students')
                  <li><a href="{{URL::route('students.create')}}">Insert Student Data</a></li>
                  @else
                  <li><a href="{{URL::route('students.create')}}">Insert Student Data</a></li>
                  @endif
              </ul>
          </li>
          @else
          <li>
            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Students</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
              <li><a href="{{URL::route('students.index')}}">View All Students Data</a></li>
              <li><a href="{{URL::route('students.create')}}">Insert Student Data</a></li>
          </ul>
      </li>
      @endif
  </ul>

</div>
</nav>
