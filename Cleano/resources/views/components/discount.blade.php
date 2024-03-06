<x-app-layout>
	<style>
		.card-body {
			padding: 1rem;
			border: 1px solid #8B94B2 !important;
			border-radius: 10px;
			width: 440px;
			height: 241px;
			border-radius: 10px;
			border: 1px;
		}

		input:checked+.round {
			background-color: #4EDA4B;
		}

		.nav-pills .nav-link {
			border-radius: var(--bs-nav-pills-border-radius);
			background: #7C7C7C1A;
			font-family: Inter;
			font-size: 14px;
			font-weight: 500;
			line-height: 17px;
			letter-spacing: -0.15399999916553497px;
			text-align: center;
			color: #000000;
		}

		.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
		color: var(--bs-nav-pills-link-active-color);
		background-color: var(--bs-nav-pills-link-active-bg);
		background: #1B59F81A;
		color: #1B59F8;
	}
	</style>
	<header>
		<div class="d-flex justify-content-between header_box">
			<h3>Discount</h3>
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

	<div class="user-container">
		<div style="margin-top: 110px;">
			<ul class="nav nav-pills mb-3 gap-4" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
						type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
				</li>

				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
						role="tab" aria-controls="pills-home" aria-selected="false">Percent
						Discount</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
						type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Flat Discount</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
						type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Percent Discount</button>
				</li>

				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
						type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Percent Discount</button>
				</li>
			</ul>


			{{-- ------------------tabs-------------- --}}
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
					tabindex="0">
					<div class="d-flex gap-4">
						<div class="CARD ms-2">

							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="card-title fw-bold fs-3">45% OFF</p>
									<label class="Discount switch">
										<input type="checkbox" checked="">
										<span class="Discount slider round"></span>
									</label>
								</div>
								<p class="card-text fw-bold">Up to ₹20,000 <br>
									On orders above ₹200</p>

								<div class="d-flex justify-content-between">
									<p class="text-primary fw-bold">Times Used:4 </p>
									<div class="d-flex">
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
											<path fill="currentColor"
												d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12q0 .175-.025.363T8.9 12.7l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22">
											</path>
										</svg>
										<p class="SHARE fw-bold">SHARE</p>
									</div>
								</div>

								<div class="Total-Sales d-flex justify-content-between align-items-center px-2 pt-3">
									<p class="SHARE fw-bold">Total Sales Generated</p>
									<p class="SHARE fw-bold">₹17,082</p>
								</div>
							</div>



						</div>

						<div class="CARD ms-2">

							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="card-title fw-bold fs-3">45% OFF</p>
									<label class="Discount switch">
										<input type="checkbox">
										<span class="Discount slider round"></span>
									</label>
								</div>
								<p class="card-text fw-bold">Up to ₹20,000 <br>
									On orders above ₹200</p>

								<div class="d-flex justify-content-between">
									<p class="text-primary fw-bold">Times Used:4 </p>
									<div class="d-flex">
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
											<path fill="currentColor"
												d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12q0 .175-.025.363T8.9 12.7l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22">
											</path>
										</svg>
										<p class="SHARE fw-bold">SHARE</p>
									</div>
								</div>

								<div class="Total-Sales d-flex justify-content-between align-items-center px-2 pt-3">
									<p class="SHARE fw-bold">Total Sales Generated</p>
									<p class="SHARE fw-bold">₹17,082</p>
								</div>
							</div>
						</div>
					</div>

					<div class="d-flex mt-4 gap-4">
						<div class="CARD ms-2">

							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="card-title fw-bold fs-3">45% OFF</p>
									<label class="Discount switch">
										<input type="checkbox">
										<span class="Discount slider round"></span>
									</label>
								</div>
								<p class="card-text fw-bold">Up to ₹20,000 <br>
									On orders above ₹200</p>

								<div class="d-flex justify-content-between">
									<p class="text-primary fw-bold">Times Used:4 </p>
									<div class="d-flex">
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
											<path fill="currentColor"
												d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12q0 .175-.025.363T8.9 12.7l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22">
											</path>
										</svg>
										<p class="SHARE fw-bold">SHARE</p>
									</div>
								</div>

								<div class="Total-Sales d-flex justify-content-between align-items-center px-2 pt-3">
									<p class="SHARE fw-bold">Total Sales Generated</p>
									<p class="SHARE fw-bold">₹17,082</p>
								</div>
							</div>



						</div>

						<div class="CARD ms-2">

							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="card-title fw-bold fs-3">45% OFF</p>
									<label class="Discount switch">
										<input type="checkbox">
										<span class="Discount slider round"></span>
									</label>
								</div>
								<p class="card-text fw-bold">Up to ₹20,000 <br>
									On orders above ₹200</p>

								<div class="d-flex justify-content-between">
									<p class="text-primary fw-bold">Times Used:4 </p>
									<div class="d-flex">
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
											<path fill="currentColor"
												d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12q0 .175-.025.363T8.9 12.7l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22">
											</path>
										</svg>
										<p class="SHARE fw-bold">SHARE</p>
									</div>
								</div>

								<div class="Total-Sales d-flex justify-content-between align-items-center px-2 pt-3">
									<p class="SHARE fw-bold">Total Sales Generated</p>
									<p class="SHARE fw-bold">₹17,082</p>
								</div>
							</div>
						</div>
					</div>

					<div class="d-flex mt-4 gap-4">
						<div class="CARD ms-2">

							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="card-title fw-bold fs-3">45% OFF</p>
									<label class="Discount switch">
										<input type="checkbox">
										<span class="Discount slider round"></span>
									</label>
								</div>
								<p class="card-text fw-bold">Up to ₹20,000 <br>
									On orders above ₹200</p>

								<div class="d-flex justify-content-between">
									<p class="text-primary fw-bold">Times Used:4 </p>
									<div class="d-flex">
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
											<path fill="currentColor"
												d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12q0 .175-.025.363T8.9 12.7l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22">
											</path>
										</svg>
										<p class="SHARE fw-bold">SHARE</p>
									</div>
								</div>

								<div class="Total-Sales d-flex justify-content-between align-items-center px-2 pt-3">
									<p class="SHARE fw-bold">Total Sales Generated</p>
									<p class="SHARE fw-bold">₹17,082</p>
								</div>
							</div>



						</div>

						<div class="CARD ms-2">

							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="card-title fw-bold fs-3">45% OFF</p>
									<label class="Discount switch">
										<input type="checkbox">
										<span class="Discount slider round"></span>
									</label>
								</div>
								<p class="card-text fw-bold">Up to ₹20,000 <br>
									On orders above ₹200</p>

								<div class="d-flex justify-content-between">
									<p class="text-primary fw-bold">Times Used:4 </p>
									<div class="d-flex">
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
											<path fill="currentColor"
												d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12q0 .175-.025.363T8.9 12.7l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22">
											</path>
										</svg>
										<p class="SHARE fw-bold">SHARE</p>
									</div>
								</div>

								<div class="Total-Sales d-flex justify-content-between align-items-center px-2 pt-3">
									<p class="SHARE fw-bold">Total Sales Generated</p>
									<p class="SHARE fw-bold">₹17,082</p>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">....
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
					tabindex="0">1212 </div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
					tabindex="0">wqewqew</div>
				<div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
					tabindex="0">00000</div>
			</div>
		</div>



	</div>
</x-app-layout>
