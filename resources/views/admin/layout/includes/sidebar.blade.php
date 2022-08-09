<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class=" active">
                    <a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i> <span> Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('admin.students.create')}}">Add Student</a></li>
                        <li><a href="{{route('admin.students.index')}}">Students List</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('admin.teachers.create')}}">Add Teacher</a></li>
                        <li><a href="{{route('admin.teachers.index')}}">Teachers List</a></li>
                    </ul>
                </li>
                {{-- <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('admin.subjects.create')}}">Add Subject</a></li>
                        <li><a href="{{route('admin.subjects.index')}}">Subjects List</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{route('logout')}}"><i class="fas fa-lock"></i> <span>Logout</span></a>
                </li>
                          
            </ul>
        </div>
    </div>
</div>