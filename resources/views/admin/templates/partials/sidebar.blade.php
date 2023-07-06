<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/ticket') ? 'active' : '' }}"
                    href="{{ route('ticket.admin') }}"><span data-feather="book"></span>
                    Ticket
                </a>
                <a class="nav-link {{ request()->is('admin/ticketclass') ? 'active' : '' }}"
                    href="{{ route('ticketclass.admin') }}"><span data-feather="award"></span>
                    Ticket Class
                </a>
            </li>
        </ul>
    </div>
</nav>
