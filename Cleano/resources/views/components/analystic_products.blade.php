<x-app-layout>
    <style>
        .Dashboard .SideBar ul.navigation {
            height: 100vh;
            overflow-y: scroll;
            width: 100%;
            padding: 0 20px 100px 20px;
        }

            .sales_analytics_section .right_section .sales_graph_container {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                height: auto;
                box-sizing: border-box;
                box-sizing: border-box;
            }
                .sales_analytics_section .right_section .sales_graph_container .graph_box {
                    height: 100%;
                }
    </style>
	<header>
		<div class="d-flex justify-content-between header_box">
			<h3>Analytics<span class="text_18 grey">/Product</span></h3>
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
	<div class="user_container">
		<div class="analytics_section">
			<div class="d-flex justify-content-between mb-4 flex-wrap">
				<div class="d-flex top">
					<h3 class="text_14 black d-flex b_500">Sales Analytics
					</h3>
					<span class="date_box">
						<form action="">
							<input type="date">
						</form>
					</span>
				</div>
				<div class="d-flex">
					<div class="filter_box">Day </div>
					<div class="filter_box">Month </div>
					<div class="filter_box">Year </div>
					<div class="filter_box filt"> <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
							viewBox="0 0 24 24">
							<path fill="currentColor"
								d="M14 12v7.88c.04.3-.06.62-.29.83a.996.996 0 0 1-1.41 0l-2.01-2.01a.989.989 0 0 1-.29-.83V12h-.03L4.21 4.62a1 1 0 0 1 .17-1.4c.19-.14.4-.22.62-.22h14c.22 0 .43.08.62.22a1 1 0 0 1 .17 1.4L14.03 12z" />
						</svg></div>
					<div class="filter_box">Month </div>
				</div>
			</div>


			<div class="row sales_analytics_section">
				<div class="col-lg-6 col-md-6 col-sm-12 left_section">
					<div class="row mb-3">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
							<div class="card">
								<p class="text_12 mb-3">Active Hours</p>
								<h4 class="d-flex justify-content-between black b_600">3 PM to 6 PM</h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
							<div class="card">
								<p class="text_12 mb-3">Average Orders Value</p>
								<h4 class="d-flex justify-content-between black b_600">1204 <span class="green text_12 mt-3">+2.5%</span></h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
							<div class="card">
								<p class="text_12 mb-3">Average Sales per day</p>
								<h4 class="d-flex justify-content-between black b_600">5004 <span class="green text_12 mt-3">+2.5%</span></h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
							<div class="card">
								<p class="text_12 mb-3">Returning customers</p>
								<h4 class="d-flex justify-content-between black b_600">504 <span class="orange text_12 mt-3">+2.5%</span></h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
							<div class="card">
								<p class="text_12 mb-3">Geography</p>
								<h4 class="d-flex justify-content-between black b_500 text_14">Hot Areas
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24">
											<path fill="currentColor"
												d="m15 21l-6-2.1l-4.65 1.8q-.5.2-.925-.112T3 19.75v-14q0-.325.188-.575T3.7 4.8L9 3l6 2.1l4.65-1.8q.5-.2.925.113T21 4.25v14q0 .325-.187.575t-.513.375zm-1-2.45V6.85l-4-1.4v11.7zm2 0l3-1V5.7l-3 1.15zM5 18.3l3-1.15V5.45l-3 1zM16 6.85v11.7zm-8-1.4v11.7z" />
										</svg>
									</span>
								</h4>
							</div>
						</div>

					</div>



					<div class="row product_service_graph_container mt-5 px-1">
						<div class="col-lg-10">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<div class="filt"><i class="fa-solid fa-filter"></i></div>

								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
										role="tab" aria-controls="home" aria-selected="true">Product</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
										role="tab" aria-controls="profile" aria-selected="false">Services</button>
								</li>

							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="row">
										<div class="col-lg-12 mt-3">
											<div class="product_graph_cont">
												<div class="row py-3">
													<div class="col-lg-12">
														<div class="slideshow-container">
															<div class="mySlides">
																<div class="text text_16 b_600 black">2023</div>
															</div>
															<div class="mySlides">
																<div class="text text_16 b_600 black">2024</div>
															</div>
															<div class="mySlides">
																<div class="text text_16 b_600 black">2025</div>
															</div>
															<a class="prev" onclick="plusSlides(-1)">❮</a>
															<a class="next" onclick="plusSlides(1)">❯</a>
														</div>
														<!---- slidershow container end  ---->
													</div>
												</div>

												<div class="row">
													<div class="col-lg-12">
														<div class="donut_chart_product_service">
															<canvas id="donut_chart" style="margin-top:-70px;">
															</canvas>

															<div class="cont">
																<h4 class="text_16 b_500 black mb-0">22.870</h4>
																<span class="text_8 grey">Product
																	Analytics</span>
															</div>

															<script>
																document.addEventListener("DOMContentLoaded",
																	function() {
																		const yValues1 = [50, 10, 20, 20];
																		const barColors1 = ["#FACF55",
																			"#FF974A", "#3DD598",
																			"#0062FF"
																		];

																		new Chart("donut_chart", {
																			type: "doughnut",
																			data: {
																				labels: [],
																				datasets: [{
																					backgroundColor: barColors1,
																					data: yValues1
																				}]
																			},
																			options: {
																				title: {
																					display: true,
																				},
																				cutoutPercentage: 85
																			}
																		});
																	});
															</script>

														</div>
														<!--- donut_chart_product_services_end --->
													</div>
												</div>

												<div class="row mt-3">
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 blue"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">Shirt</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 light_orange"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">Hoodie</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 green"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">Pant</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 yellow"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">T-shirt</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>

												</div>
											</div>
											<!---- product_graph_cont end  --->
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="row">
										<div class="col-lg-12 mt-3">
											<div class="product_graph_cont">
												<div class="row py-3">
													<div class="col-lg-12">
														<div class="slideshow-container-ser">
															<div class="mySlides_service">
																<div class="text_ser text_16 b_600 black">2023
																</div>
															</div>
															<div class="mySlides_service">
																<div class="text_ser text_16 b_600 black">2024
																</div>
															</div>
															<div class="mySlides_service">
																<div class="text_ser text_16 b_600 black">2025
																</div>
															</div>
															<a class="prev_ser" onclick="plusSlides_ser(-1)">❮</a>
															<a class="next_ser" onclick="plusSlides_ser(1)">❯</a>
														</div>
														<!---- slidershow container end  ---->
													</div>

												</div>

												<div class="row">
													<div class="col-lg-12">
														<div class="donut_chart_product_service">
															<canvas id="donut_chart_2" style="margin-top:-70px;">
															</canvas>

															<div class="cont">
																<h4 class="text_16 b_500 black mb-0">22.870</h4>
																<span class="text_8 grey">Product
																	Analytics</span>
															</div>

															<script>
																document.addEventListener("DOMContentLoaded",
																	function() {
																		const yValues1 = [50, 10, 20, 20];
																		const barColors1 = ["#FACF55",
																			"#FF974A", "#3DD598",
																			"#0062FF"
																		];

																		new Chart("donut_chart_2", {
																			type: "doughnut",
																			data: {
																				labels: [],
																				datasets: [{
																					backgroundColor: barColors1,
																					data: yValues1
																				}]
																			},
																			options: {
																				title: {
																					display: true,
																				},
																				cutoutPercentage: 85
																			}
																		});
																	});
															</script>

														</div>
														<!--- donut_chart_product_services_end --->
													</div>
												</div>

												<div class="row mt-3">
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 blue"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">Wash</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 light_orange"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">Dry Clean</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 green"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">Pant</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>
													<!-- -- -->
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 py-2">
														<div class="d-flex">
															<span class="text_10 yellow"><i class="fa-solid fa-circle"></i></span>
															<div class="d-flex justify-content-between w-100 px-2">
																<span class="text_12">T-shirt</span>
																<h6 class="text_12 b_600 black">2.1k</h6>
															</div>
														</div>
													</div>

												</div>
											</div>
											<!---- product_graph_cont end  --->
										</div>
									</div>
								</div>

							</div>
						</div>


					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 right_section">
					<div class="sales_graph_container mb-4">
						<h5 class="text_16 b_600 black d-flex justify-content-between"> Active Hours
							<span>3PM to 6PM</span>
						</h5>
						<div class="graph_box">
							<canvas id="sales_graph" style="bottom: 0;"></canvas>
							<script>
								const xValues = ['3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', ' ', ' '];
								const yValues = ['150', '300', '100', '100', '120', '200', '400'];

								new Chart("sales_graph", {
									type: "line",
									data: {
										labels: xValues,
										datasets: [{
											fill: true,
											lineTension: 0,
											backgroundColor: "#C8E9FF",
											borderColor: "#1B59F8",
											borderWidth: 1.1,
											pointBackgroundColor: "#1B59F8",
											data: yValues
										}]
									},
									options: {
										responsive: true,
										maintainAspectRatio: true,
										legend: {
											display: false
										},
										scales: {
											xAxes: [{
												ticks: {
													min: 'January',
													max: 'July'
												},
												gridLines: {
													display: false
												}
											}],
											yAxes: [{
												ticks: {
													min: 0,
													max: 400,
													stepSize: 100,
													callback: function(value, index, values) {
														return value;
													}
												},
												gridLines: {
													display: false
												},
												position: 'left'
											}],
										}
									}
								});
							</script>
						</div>
					</div>
					<div class="sales_graph_container mb-4">
						<div class="map_graph" style="box-sizing: border-box">
                            image here
                        </div>
						<div>
							<h5 class="text_16 b_600 black d-flex mb-3">
								Top Retail Sales Locations
								<span class="px-3"></span>
							</h5>
							<div>
								<h4 class="black mb-0">19.870</h4>
								<p class="text_12 grey">Active User Geography Areas in IND</p>
							</div>

							<div class="sales_graph_names mt-3">
								<!-- -- -->
								<div class="d-flex py-2">
									<span class="color_box blue_bg"></span>
									<div class="d-flex justify-content-between w-100 px-2">
										<span class="text_12 grey">Massive</span>
										<span class="text_12 grey b_600">15,000</span>
									</div>
								</div>
								<!-- -- -->
								<div class="d-flex py-2">
									<span class="color_box orange_bg"></span>
									<div class="d-flex justify-content-between w-100 px-2">
										<span class="text_12 grey">Large</span>
										<span class="text_12 grey b_600">4900</span>
									</div>
								</div>
								<!-- -- -->
								<div class="d-flex py-2">
									<span class="color_box yellow_bg"></span>
									<div class="d-flex justify-content-between w-100 px-2">
										<span class="text_12 grey">Medium</span>
										<span class="text_12 grey b_600">2000</span>
									</div>
								</div>

								<!-- -- -->
								<div class="d-flex py-2">
									<span class="color_box silver_bg"></span>
									<div class="d-flex justify-content-between w-100 px-2">
										<span class="text_12 grey">Small</span>
										<span class="text_12 grey b_600">980</span>
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
