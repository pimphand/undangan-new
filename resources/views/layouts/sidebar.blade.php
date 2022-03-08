<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                @if (auth()->user()->role == 0)
                <li>
                    <a href="{{ route('theme') }}">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Theme</span>
                    </a>

                </li>

                <li>
                    <a href="{{ route('user') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">User</span>
                    </a>

                </li>
                @endif

                @if (auth()->user()->role == 1)
                <li class="menu-title mt-2" data-key="t-components">Undangan</li>

                <li>
                    <a href="{{ route('customer.tema.index') }}">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Tema</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('customer.invitation.create') }}">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('customer.invitation.index') }}">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">invitation</span>
                    </a>
                </li>
                @endif

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>