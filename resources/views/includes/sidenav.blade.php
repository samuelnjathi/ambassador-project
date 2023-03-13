
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        My Dashboard
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                        Chat Box
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('blog.create') }}">Compose message</a>
                            <a class="nav-link" href="{{ route('blog.index') }}">Inbox</a>
                            <a class="nav-link" href="{{ route('blog.store') }}">Sent</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="{{route('events')}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                        Events
                    </a>
                    <a class="nav-link" href="{{route('members')}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        Members
                    </a>

                </div>
            </div>

        </nav>
    </div>
