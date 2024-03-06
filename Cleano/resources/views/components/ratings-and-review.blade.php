<x-app-layout>

	<style>
		.Dashboard_header .user_container {
			margin-top: 110px;
			padding: 0 30px;
		}

		#row-1 {
			width: 100%;

		}

		.review-section-1,
		.review-section-2 {
			flex: 50%;
		}

		.Review {
			margin-top: 10px;
			width: 100%;
		}
	</style>
	<header>
		<div class="d-flex justify-content-between header_box">
			<h3>Ratings and review</h3>
			<div class="header_left_side">
				<span class="first"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36">
						<path class="clr-i-outline clr-i-outline-path-1" fill="currentColor"
							d="M32.51 27.83A14.4 14.4 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93a1 1 0 0 0-.34.75v1.36a1 1 0 0 0 1 1h27.8a1 1 0 0 0 1-1v-1.36a1 1 0 0 0-.34-.75M5.13 28.94a16.17 16.17 0 0 0 2.44-3a14.24 14.24 0 0 0 1.65-5.85v-4.94a8.74 8.74 0 1 1 17.47 0v4.94a14.24 14.24 0 0 0 1.65 5.85a16.17 16.17 0 0 0 2.44 3Z" />
						<path class="clr-i-outline clr-i-outline-path-2" fill="currentColor"
							d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28" />
						<path fill="none" d="M0 0h36v36H0z" />
					</svg>
				</span>
				<span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
					</svg> Download</span>
			</div>
		</div>
	</header>
	{{-- d="M32.51 27.83A14.4 14.4 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0
	1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93a1 1 0 0
	0-.34.75v1.36a1 1 0 0 0 1 1h27.8a1 1 0 0 0 1-1v-1.36a1 1 0 0 0-.34-.75M5.13 28.94a16.17 16.17 0 0 0 2.44-3a14.24 14.24
	0 0 0 1.65-5.85v-4.94a8.74 8.74 0 1 1 17.47 0v4.94a14.24 14.24 0 0 0 1. --}}

	<div class="user_container">
		<div class="Review">
			<ul class="nav nav-underline">
				<li class="nav-item">
					<a class="nav-link active" href="#" aria-current="page" style=" color: red;">Review</a>
				</li>
			</ul>

			<div class="container">
				<div class="row" id="row-1">
					{{-- -------------------------------------section 1 ---------------------------- --}}
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="review-section-1">
							<h6>Vendor Review</h6>

							<div class="lisa">
								<div class="img-section">
									<img src="IMAGES\users\Frame 295 (3).svg">
								</div>
								<div class="content-section">
									<span class="head">Lisa Jerardo</span> <span>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star-half fa-xs" style="color: #FFD43B;"></i></span><br>
									<p class="para">April 10th</p>
								</div>
							</div>

							<div class="text-end">
								<span class="decline">Decline</span>
								<span><button class="Accept-btn">Accept</button></span>
							</div>

							<div class="Orlando">
								<div class="img-section">
									<img src="IMAGES/users/Y Axis (1).svg">
								</div>
								<div class="content-section">
									<span class="head">Orlando Diggs</span><span>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star-half fa-xs" style="color: #FFD43B;"></i></span><br>
									<p class="para">April 14th</p>
								</div>
							</div>

							<div class="text-end">
								<span class="decline">Decline</span>
								<span><button class="Accept-btn">Accept</button></span>
							</div>

							<div class="Andi">
								<div class="img-section">
									<img src="IMAGES/users/Y Axis (2).svg">
								</div>
								<div class="content-section">
									<span class="head">Andi Lane</span><span>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star-half fa-xs" style="color: #FFD43B;"></i></span><br>
									<p class="para">May 16th</p>
								</div>
							</div>

							<div class="text-end">
								<span class="decline">Decline</span>
								<span><button class="Accept-btn">Accept</button></span>
							</div>

							<div class="Eva">
								<div class="img-section">
									<img src="IMAGES/users/Y Axis (3).svg">
								</div>
								<div class="content-section">
									<span class="head">Eva Leroy</span><span>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
										<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									</span><br>
									<p class="para">July 7th</p>
								</div>
							</div>

							<div class="text-end">
								<span class="decline">Decline</span>
								<span><button class="Accept-btn">Accept</button></span>
							</div>
						</div>
					</div>
					<!-----------------------------------------Section-2-------------------------------------------------->

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="review-section-2">
							<div class="rene-wells">
								<div class="img-section">
									<img src="IMAGES/users/Ellipse 128.svg">
								</div>
								<div class="content-section">
									<span class="head">Rene Wells</span><br>
									<p class="para">This is my message to abo</p>
								</div>
							</div>

							<div class="text-end">
								<span class="time">7:21AM</span>

							</div>

							<div class="joshua">
								<div class="img-section">
									<img src="IMAGES/users/Ellipse 128 (1).svg">
								</div>
								<div class="content-section">
									<span class="head">Joshua Wilson</span><br>
									<p class="para">Randomly thought about c.</p>
								</div>
							</div>

							<div class="text-end">
								<span class="time">7:08AM</span>

							</div>

							<div class="joshua">
								<div class="img-section">
									<img src="IMAGES/users/Ellipse 128 (1).svg">
								</div>
								<div class="content-section">
									<span class="head">Joshua Wilson</span><br>
									<p class="para">Randomly thought about c.</p>
								</div>
							</div>

							<div class="text-end">
								<span class="time">7:08AM</span>

							</div>

							<div class="anaiah">
								<div class="img-section">
									<img src="IMAGES/users/Ellipse 128 (2).svg">
								</div>
								<div class="content-section">
									<span class="head">Anaiah Williams</span><br>
									<p class="para">Do you have any heating?</p>
								</div>
							</div>

							<div class="text-end">
								<span class="time">Yesterday</span>

							</div>

						</div>
					</div>


				</div>
				<!-------------------------------------------Section-3------------------------------------------------------------>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="review-section-3">
						<h6>Delivery Agent Review</h6>

						<div class="lisa">
							<div class="img-section">
								<img src="IMAGES\users\Frame 295 (3).svg">
							</div>
							<div class="content-section">
								<span class="head">Lisa Jerardo</span> <span>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star-half fa-xs" style="color: #FFD43B;"></i></span><br>
								<p class="para">April 10th</p>
							</div>
						</div>

						<div class="text-end">
							<span class="decline">Decline</span>
							<span><button class="Accept-btn">Accept</button></span>
						</div>

						<div class="Orlando">
							<div class="img-section">
								<img src="IMAGES/users/Y Axis (1).svg">
							</div>
							<div class="content-section">
								<span class="head">Orlando Diggs</span><span>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star-half fa-xs" style="color: #FFD43B;"></i></span><br>
								<p class="para">April 14th</p>
							</div>
						</div>

						<div class="text-end">
							<span class="decline">Decline</span>
							<span><button class="Accept-btn">Accept</button></span>
						</div>

						<div class="Andi">
							<div class="img-section">
								<img src="IMAGES/users/Y Axis (2).svg">
							</div>
							<div class="content-section">
								<span class="head">Andi Lane</span><span>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star-half fa-xs" style="color: #FFD43B;"></i></span><br>
								<p class="para">May 16th</p>
							</div>
						</div>

						<div class="text-end">
							<span class="decline">Decline</span>
							<span><button class="Accept-btn">Accept</button></span>
						</div>

						<div class="Eva">
							<div class="img-section">
								<img src="IMAGES/users/Y Axis (3).svg">
							</div>
							<div class="content-section">
								<span class="head">Eva Leroy</span><span>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B; "></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
									<i class="fa-solid fa-star fa-xs" style="color: #FFD43B;"></i>
								</span><br>
								<p class="para">July 7th</p>
							</div>
						</div>

						<div class="text-end">
							<span class="decline">Decline</span>
							<span><button class="Accept-btn">Accept</button></span>
						</div>
					</div>
				</div>

			</div>
		</div>


	</div>
	</div>

	</div>

	</div>

</x-app-layout>
