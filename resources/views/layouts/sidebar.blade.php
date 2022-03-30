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

                <li>
                    <a href="{{ route('feature') }}">
                        <i data-feather="framer"></i>
                        <span data-key="t-authentication">Feature</span>
                    </a>

                </li>
                @endif

                @if (auth()->user()->role == 1)
                <li class="menu-title mt-2" data-key="t-components">Undangan</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">Website</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li>
                            <a href="{{ route('customer.tema.index') }}">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Tema</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ route('customer.bride.index') }}">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Mempelai</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.event.index') }}">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Acara</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.gallery.index') }}">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.story.index') }}">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Cerita</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.setting.index') }}">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Settings</span>
                            </a>
                        </li>


                    </ul>

                </li>
                <li>
                    <a href="{{ route('customer.send-invitation.index') }}">
                        <i data-feather="send"></i>
                        <span data-key="t-apps">Kirim Undangan</span>
                    </a>
                </li>

                @endif

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>