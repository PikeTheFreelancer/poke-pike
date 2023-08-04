<ul class="admin-sidebar">
  @guest('admins')
    <li><a href="{{route('admin.navigation')}}">navigation</a></li>
    <li>
      <a href="{{ route('admin.logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          Logout
      </a>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

          <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </div>
    </li>
  @else
    <li>Pike</li>
  @endguest
</ul>