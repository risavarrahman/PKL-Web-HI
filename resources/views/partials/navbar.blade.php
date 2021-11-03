<img src="/img/headerbaru.png" alt="Logo HI UPN" class="img-fluid" width="100%">
<nav class="navbar navbar-expand-lg sticky-top navbar-light shadow" style="background-color: #f7ec58;">
	<div class="container">
		<a class="navbar-brand nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="/">
			<img src="/img/logoupn.png" alt="Logo UPN" width="32" height="30" class="d-inline-block align-text-top">
			Home
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">

				{{-- Dropdown About Us --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						About Us
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item {{ Request::is('departments') ? 'active' : '' }}" href="/departments">Department Profile</a></li>
						<li><a class="dropdown-item {{ Request::is('graduates') ? 'active' : '' }}" href="/graduates">Graduate Profile</a></li>
						<li><a class="dropdown-item {{ Request::is('structure') ? 'active' : '' }}" href="/structure">Organizational Structure</a></li>
						<li><a class="dropdown-item {{ Request::is('accreditation') ? 'active' : '' }}" href="/accreditation">Accreditation</a></li>
					</ul>
				</li>

				{{-- Dropdown Academic --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Academic
					</a>
					<ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
						<li><a class="dropdown-item {{ Request::is('lecturers') ? 'active' : '' }}" href="/lecturers">Lecturers</a></li>
						<li><a class="dropdown-item {{ Request::is('lecturer-activities') ? 'active' : '' }}" href="/lecturer-activities">Lecturer Activities</a></li>
						<li><a class="dropdown-item {{ Request::is('journals') ? 'active' : '' }}" href="/journals">Journals</a></li>
						<li><a class="dropdown-item {{ Request::is('networks') ? 'active' : '' }}" href="/networks">Networks</a></li>
						<li><a class="dropdown-item" href="https://siamik.upnjatim.ac.id/images/KALENDER_AKADEMIK.pdf" target="blank">Academic Calendar</a></li>
					</ul>
				</li>

				{{-- Dropdown Student Activities --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Student Activities
					</a>
					<ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
						<li><a class="dropdown-item {{ Request::is('freshmen') ? 'active' : '' }}" href="/freshmen">Freshmen Orientation Program
						</a></li>
						<li><a class="dropdown-item {{ Request::is('debate') ? 'active' : '' }}" href="/debate">Debate Society UPNVJT</a></li>
						<li><a class="dropdown-item {{ Request::is('students-achievement') ? 'active' : '' }}" href="/students-achievement">Students Achievement</a></li>
					</ul>
				</li>

				{{-- Dropdown Curriculum --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Curriculum
					</a>
					<ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
						<li><a class="dropdown-item {{ Request::is('units-study') ? 'active' : '' }}" href="/units-study">Units of Study
						</a></li>
						<li><a class="dropdown-item {{ Request::is('syllabus') ? 'active' : '' }}" href="/syllabus">Syllabus</a></li>
					</ul>
				</li>

				{{-- Page Facilities --}}
				<li class="nav-item me-2">
					<a class="nav-link {{ Request::is('facilities') ? 'active' : '' }}" href="/facilities" id="navbarLight">
						Facilities
					</a>
				</li>

				{{-- Page Gallery --}}
				<li class="nav-item me-2">
					<a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="/gallery" id="navbarLight">
						Gallery
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto">

				{{-- Page Login --}}
				@auth
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Welcome back, {{ auth()->user()->name }}
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
							<li><hr class="dropdown-divider"></li>
							<li>
								<form action="/logout" method="post">
									@csrf
									<button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
								</form>
							</li>
						</ul>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link {{ Request::is('login/admin') ? 'active' : '' }} visible" href="/login/admin">Login</a>
					</li>
			</ul>
				@endauth
		</div>
	</div>
</nav>