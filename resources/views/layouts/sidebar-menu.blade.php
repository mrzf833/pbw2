<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        
        <li
            class="sidebar-item  {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li
            class="sidebar-item  {{ request()->routeIs('employee.index') ? 'active' : '' }}">
            <a href="{{ route('employee.index') }}" class='sidebar-link'>
                <i class="bi  bi-person-badge-fill"></i>
                <span>Employee</span>
            </a>
        </li>

        <li
            class="sidebar-item">
            <a href="{{ route('logout') }}" class='sidebar-link'>
                <i class="bi  bi-person-badge-fill"></i>
                <span>Log Out</span>
            </a>
        </li>
        
        
        <li class="sidebar-title">Raise Support</li>
        
        <li
            class="sidebar-item  ">
            <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                <i class="bi bi-life-preserver"></i>
                <span>Documentation</span>
            </a>
        </li>
        
        <li
            class="sidebar-item  ">
            <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                <i class="bi bi-puzzle"></i>
                <span>Contribute</span>
            </a>
        </li>
        
        <li
            class="sidebar-item  ">
            <a href="https://github.com/zuramai/mazer#donation" class='sidebar-link'>
                <i class="bi bi-cash"></i>
                <span>Donate</span>
            </a>
        </li>
        
    </ul>
</div>