<!-- WRAPPER -->
<div id="wrapper">

    @include('layout.dashboard.navbar')

    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="{{ route('dashboard') }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="{{ route('guru') }}"><i class="lnr lnr-user"></i> <span>Guru</span></a></li>
                    <li><a href="{{ route('nilai') }}"><i class="lnr lnr-book"></i> <span>Nilai</span></a></li>
                    <li><a href="{{ route('kriteria') }}"><i class="lnr lnr-book"></i> <span>kriteria</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
