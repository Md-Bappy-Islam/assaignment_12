<div class="app-menu navbar-menu">
    {{-- <!-- LOGO --> --}}
    <div class="navbar-brand-box">
        {{-- <!-- Dark Logo--> --}}
        <a href="./" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('asset') }}/images/ostad-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('asset') }}/images/ostad.png" alt="" height="30" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i data-feather="home" class="icon-dual"></i>
                        <span data-key="t-dashboards">User</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('purchase') }}" class="nav-link" data-key="t-analytics">
                                    Purchase Ticket
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i data-feather="grid" class="icon-dual"></i>
                        <span data-key="t-apps">Admin</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    Bus
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCalendar">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('bus.add') }}" class="nav-link" data-key="t-main-calender">
                                                Add Bus
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('seat.add') }}" class="nav-link"
                                                data-key="t-month-grid">
                                                Add Seats
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('line.add') }}" class="nav-link" data-key="t-chat">
                                    Add Line
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('trip.add') }}" class="nav-link" data-key="t-chat">
                                    Add Trip
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>




            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
