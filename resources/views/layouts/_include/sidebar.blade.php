<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background-color: #A52B7B; color:white;">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            @if (Auth::user()->hasRole(['program director', 'program manager', 'online instructor']))
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Benefiaciariries</span>
                    </a>
                </li>
            @endif
            @if (Auth::user()->hasRole(['program director']))
                <li>
                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                    </a>
                    <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="{{ route('users.create') }}" class="nav-link px-0"> <span
                                    class="d-none d-sm-inline">Create</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.list') }}" class="nav-link px-0"> <span
                                    class="d-none d-sm-inline">List</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if (Auth::user()->hasRole(['program director', 'program manager', 'online instructor']))
                <li>
                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Courses</span></a>
                    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="{{ route('courses.list') }}" class="nav-link px-0"> <span
                                    class="d-none d-sm-inline">List</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('courses.create') }}" class="nav-link px-0"> <span
                                    class="d-none d-sm-inline">Create</span>
                            </a>
                        </li>

                    </ul>
                </li>
            @endif
            @if (Auth::user()->hasRole(['benericiary']))
                <li class="nav-item">
                    <a href="{{ route('courses.list') }}" class="nav-link px-0"> <span
                            class="d-none d-sm-inline">Courses</span>
                    </a>
                </li>
            @endif
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                    class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">loser</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                {{-- <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li> --}}
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
