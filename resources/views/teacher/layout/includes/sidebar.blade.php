<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class=" active">
                    <a href="{{route('teacher.dashboard')}}"><i class="fas fa-home"></i> <span> Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Class</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('teacher.class.show')}}">Assigned Class</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('teacher.subjects.index')}}">Subjects List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('logout')}}"><i class="fas fa-lock"></i> <span>Logout</span></a>
                </li>
                          
            </ul>
        </div>
    </div>
</div>