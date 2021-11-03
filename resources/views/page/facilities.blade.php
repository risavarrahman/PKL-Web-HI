@extends('layouts.main')

@section('container')
<section id="home">
	<h2 class="text-center fw-bold mb-3">{{ $title }}</h2>
	
	<div class="row row-cols-1 row-cols-md-2 g-4">
		<div class="col">
			<div class="card">
				<img src="img/lab-hi.jpg" class="card-img-top" alt="Lab HI">
				<div class="card-body">
					<h5 class="card-title">LABIRIN</h5>
					<div class="card-text" style="text-align: justify">Laboratory and Inventory Room of International Relations (LABIRIN). A multi-functional room that can be accessed by the extended family of IR UPNVJT. It contains three sections: the examination room, the diplomatic room, and the server room.
						<ul>
							<li>The examination room is used as a place for conducting academic examinations, be it proposal examinations, thesis defense, and final assignments.</li>
							<li>The diplomatic room is used as a social space to develop IR scientific skills. First, diplomacy is learning how to speak in public, write scientific content, to communicate with fellow students, lecturers, and staff. Second, growing analytical skills, namely discussing policy analysis, market analysis, to discussing what issues are currently hot.</li>
							<li>The server room is used as a data center container; both managerial data for study programs, as well as student, student, and alumni data. Not only that, LABIRIN can also be used as a Freelance Platform, where students are able to accommodate their talented talents, such as data entry, graphic design, translation, to assist in completing surveys or research.</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<img src="img/perpus.jpg" class="card-img-top" alt="Perpustakaan">
				<div class="card-body">
					<h5 class="card-title">Library</h5>
					<p class="card-text" style="text-align: justify;">The Central Library provides subscription access to two well-known academic publishers: Springer and Emerald Publishing. In addition, literature access is also connected to the National Library of the Republic of Indonesia (Perpusnas) which also subscribes to various academic publishers; e-books; and thousands of literatures that can be accessed freely by registering using a Resident Identity Card (KTP) or Population Identification Number (NIK). Not only that, the faculty also has a Reading Room facility located in front of the HI UPNVJT Lecturer Room. The IR UPNVJT mini library is also available at the LABIRIN, the literature is diverse, especially the limited collection of books and theses for alumni which can be accessed free of charge for IR students.</p>
					<p class="card-text" style="text-align: justify;">The students can also find the Language Center which is managed directly by the Technical Implementation Unit of the Language Center (UPT Pusbahasa) UPNVJT, students can develop foreign language skills, both contained in the curriculum and extracurricular.</p>
					<p class="card-text" style="text-align: justify;">Schedules, programs, and further information can be accessed directly on the page : <a href="http://pusbasa.upnjatim.ac.id/" class="link-primary">http://pusbasa.upnjatim.ac.id/</a></p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<img src="img/kantin.jpg" class="card-img-top" alt="Kantin">
				<div class="card-body">
					<h5 class="card-title">Canteen</h5>
					<div class="card-text" style="text-align: justify;">Offering various clean and healthy meals and beverages at affordable prices. </div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<img src="img/ukm.jpg" class="card-img-top" alt="UKM">
				<div class="card-body">
					<h5 class="card-title">Student Activities Unit</h5>
					<div class="card-text" style="text-align: justify;">As a place to care off various student activities outside the classroom. The Student Activities Unit (UKM) is able to help facilitate students to develop their interests and talents, both related to sports; art; to special activities such as religious gatherings and mountaineering. Many available UKM at UPNVJT can be seen completely at : <a href="https://www.upnjatim.ac.id/category/ukm/">https://www.upnjatim.ac.id/category/ukm/.</a></div>
					<p class="card-text" style="text-align: justify;">The students can also find the Entrepreneurship Unit, providing a platform for students' abilities and creativity, where students can apply grant schemes for various programs that are planned and are needed to be developed.The grant scheme such as follows :</p>
					<p class="card-text" style="text-align: justify;">
						<ul>
							<li>Indonesian Student Entrepreneurship Program</li>
							<li>Student Creativity Program</li>
							<li>Internal Student Entrepreneurship Competition</li>
							<li>External Student Entrepreneurship Competition</li>
						</ul>
					</p>
					<p class="card-text" style="text-align: justify;">Further information and grant procedures can be accessed directly on the page : <a href="https://uptpkk.upnjatim.ac.id/">https://uptpkk.upnjatim.ac.id/</a></p>
				</div>
			</div>
		</div>
	</div>


</section>

@endsection