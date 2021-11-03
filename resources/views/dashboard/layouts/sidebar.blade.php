<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
	<div class="position-sticky pt-3">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">
					<span data-feather="home"></span>
					Home
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
					<span data-feather="home"></span>
					Dashboard
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ Request::is('dashboard/lecturers_act*') ? 'active' : '' }}" href="/dashboard/lecturers_act">
					<span data-feather="file-text"></span>
					Lecturers Activities
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ Request::is('dashboard/networks*') ? 'active' : '' }}" href="/dashboard/networks">
					<span data-feather="file-text"></span>
					Networks
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ Request::is('dashboard/students_ach*') ? 'active' : '' }}" href="/dashboard/students_ach">
					<span data-feather="file-text"></span>
					Students Achievement
				</a>
			</li>
		</ul>
	</div>
</nav>