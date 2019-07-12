<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        Categories
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/pharm*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('pharm.index')}}">
              <i class="material-icons">bubble_chart</i>
              <p>pharmacy</p>
            </a>
          </li>
        <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('slider.index')}}">
            <i class="material-icons">language</i>
            <p>Slider</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/area*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('area.index')}}">
            <i class="material-icons">slideshow</i>
            <p>Area</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/subarea*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('subarea.index')}}">
            <i class="material-icons">unarchive</i>
            <p>SubAreas</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/Medecine*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('medecine.index')}}">
            <i class="material-icons">slideshow</i>
            <p>Medecine</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/address*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('address.index')}}">
            <i class="material-icons">notifications</i>
            <p>address</p>
          </a>
        </li>   
        <li class="nav-item ">
          <a class="nav-link" href="./rtl.html">
            <i class="material-icons">language</i>
            <p>RTL Support</p>
          </a>
        </li>
      </ul>
    </div>
  </div>