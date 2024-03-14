<x-app-layout>
	<style>
		.dashboard_drop_select{
			
		}
	</style>
	<header>
		<div class="d-flex justify-content-between header_box">
			<h3>Dashboard</h3>
			<div class="header_left_side">
				<span class="first"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
						<path class="clr-i-outline clr-i-outline-path-1" fill="currentColor"
							d="M32.51 27.83A14.4 14.4 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93a1 1 0 0 0-.34.75v1.36a1 1 0 0 0 1 1h27.8a1 1 0 0 0 1-1v-1.36a1 1 0 0 0-.34-.75M5.13 28.94a16.17 16.17 0 0 0 2.44-3a14.24 14.24 0 0 0 1.65-5.85v-4.94a8.74 8.74 0 1 1 17.47 0v4.94a14.24 14.24 0 0 0 1.65 5.85a16.17 16.17 0 0 0 2.44 3Z" />
						<path class="clr-i-outline clr-i-outline-path-2" fill="currentColor"
							d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28" />
						<path fill="none" d="M0 0h36v36H0z" />
					</svg>
				</span>
				<span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
					</svg> Download</span>
			</div>
		</div>
	</header>
	<div class="user_container" style="display: block">
		<div class="dashboard_page_content">
			<div class="d-flex mb-2">
				<div class="inpt inpt_date mb-2">
					<label for="select-lifetime">Lifetime:</label>
					<div class="dashboard_drop_select">
						<select>
							<option value="0">Today</option>
							<option value="1">Yesterday</option>
							<option value="2">This month</option>
							<option value="3">Lifetime</option>
						</select>
					</div>
				</div>
				<div class="inpt inpt_date mb-2">
					<label for="select-lifetime">People:</label>
					<div class="dashboard_drop_select">
						<select>
							<option value="0">All</option>
							<option value="1">Yesterday</option>
							<option value="2">This month</option>
							<option value="3">Lifetime</option>
						</select>
					</div>
				</div>
			</div>
			<div>
				<button class="d-flex">
					<span class="store_icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
							<g fill="none" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M14.5 21v-5a1 1 0 0 0-1-1h-3a1 1 0 0 0-1 1v5" />
								<path
									d="M5 11v6c0 1.886 0 2.828.586 3.414C6.172 21 7.114 21 9 21h6c1.886 0 2.828 0 3.414-.586C19 19.828 19 18.886 19 17v-6M4.621 4.515c.182-.728.273-1.091.544-1.303C5.437 3 5.812 3 6.562 3h10.876c.75 0 1.125 0 1.397.212c.27.212.362.575.544 1.303l1.203 4.814c.097.388.146.581.135.739a1 1 0 0 1-.69.883c-.15.049-.354.049-.763.049c-.533 0-.8 0-1.023-.052a2 2 0 0 1-1.393-1.18c-.089-.212-.132-.47-.217-.983c-.024-.144-.036-.216-.05-.235a.1.1 0 0 0-.162 0c-.014.019-.026.09-.05.235l-.081.489A2 2 0 0 1 14.352 11h-.204a2 2 0 0 1-1.936-1.726l-.081-.49c-.024-.143-.036-.215-.05-.234a.1.1 0 0 0-.162 0c-.014.019-.026.09-.05.235l-.081.489A2 2 0 0 1 9.852 11h-.204A2 2 0 0 1 7.73 9.374a1.386 1.386 0 0 1-.018-.1l-.081-.49c-.024-.143-.036-.215-.05-.234a.1.1 0 0 0-.162 0c-.014.019-.026.09-.05.235c-.085.514-.128.77-.217.983a2 2 0 0 1-1.392 1.18C5.536 11 5.27 11 4.736 11c-.409 0-.613 0-.763-.049a1 1 0 0 1-.69-.883c-.01-.158.038-.351.135-.739z" />
							</g>
						</svg>
					</span>
					<span class="store_link">
						<a class="st_link">Store Link</a>
						<a class="web_link">cleaneoapp.com</a>
					</span>

				</button>
			</div>
		</div>

		<div class="row total_Sale mt-2">
			<div class="col-lg-6 col-md-12">
				<div class="total_sales_graph_box" style="box-sizing: content-box;height: 288px;width: 540px;">
					<h3 class="d-flex justify-content-between text_16 b_600 black"><span>Total Sales </span>
						<span>₹ 5000</span>
					</h3>

					<div class="total_sales_graph" style="">
						<canvas id="total_slaes_chart" style="margin:0;"></canvas>
						<script>
							const xValues = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
							const yValues = ['150', '300', '100', '100', '120', '200', '400'];

							new Chart("total_slaes_chart", {
								type: "line",
								data: {
									labels: xValues,
									datasets: [{
										fill: true,
										lineTension: 0,
										backgroundColor: "#C5E8FF",
										borderColor: "#1B59F8",
										borderWidth: 1.3,
										pointBackgroundColor: "#1B59F8", // Set the background color for data points
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
												callback: function(
													value,
													index,
													values) {
													return value
												}
											},
											gridLines: {
												color: "rgba(0,0,0,0.1)",
												backgroundColor: "#0fa958"
											},
											position: 'left'
										}],
									}
								}
							});
						</script>

					</div>

				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="row">
					<!-- ----- -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="total_sales_box">
							<a class="total_sales_icon" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
									viewBox="0 0 24 24">
									<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
										d="m15.578 3.382l2 1.05c2.151 1.129 3.227 1.693 3.825 2.708C22 8.154 22 9.417 22 11.942v.117c0 2.524 0 3.787-.597 4.801c-.598 1.015-1.674 1.58-3.825 2.709l-2 1.049C13.822 21.539 12.944 22 12 22s-1.822-.46-3.578-1.382l-2-1.05c-2.151-1.129-3.227-1.693-3.825-2.708C2 15.846 2 14.583 2 12.06v-.117c0-2.525 0-3.788.597-4.802c.598-1.015 1.674-1.58 3.825-2.708l2-1.05C10.178 2.461 11.056 2 12 2s1.822.46 3.578 1.382ZM21 7.5l-4 2M12 12L3 7.5m9 4.5v9.5m0-9.5l4.5-2.25l.5-.25m0 0V13m0-3.5l-9.5-5" />
								</svg>
							</a>
							<div class="content_box mt-3">
								<h3>50</h3>
								<span class="mb-0">New Orders</span>
								<p class="blue mb-0">Worth <span>&#8377;</span>50,000 </p>
							</div>
						</div>

					</div>

					<!-- ----- -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="total_sales_box">
							<a class="total_sales_icon" href="">
								<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
									<path fill="currentColor"
										d="M12 6a1 1 0 0 0-1 1v10a1 1 0 0 0 2 0V7a1 1 0 0 0-1-1m-5 6a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1m10-2a1 1 0 0 0-1 1v6a1 1 0 0 0 2 0v-6a1 1 0 0 0-1-1m2-8H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3m1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
								</svg>
							</a>
							<div class="content_box mt-3">
								<h3>220</h3>
								<span class="mb-0">New Orders</span>
								<p class="blue mb-0">Worth <span>&#8377;</span>50,000 </p>
							</div>
						</div>
					</div>

					<!-- ----- -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="total_sales_box">
							<a class="total_sales_icon" href="">
								<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
									<path fill="currentColor"
										d="M12 6a1 1 0 0 0-1 1v10a1 1 0 0 0 2 0V7a1 1 0 0 0-1-1m-5 6a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1m10-2a1 1 0 0 0-1 1v6a1 1 0 0 0 2 0v-6a1 1 0 0 0-1-1m2-8H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3m1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
								</svg>
							</a>
							<div class="content_box mt-3">
								<h3>990</h3>
								<span class="mb-0">New Orders</span>
								<p class="blue mb-0">Worth <span>&#8377;</span>50,000 </p>
							</div>
						</div>
					</div>

				</div>

				<div class="row mt-4">
					<!-- --- -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="total_sales_box2">
							<span class="gry">Active User</span>
							<h5 class="mt-4">90 <span id="sm">/ 180</span></h5>
						</div>
					</div>
					<!-- --- -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="total_sales_box2">
							<span class="gry">Active Vendor</span>
							<h5 class="mt-4">27 <span id="sm">/ 80</span></h5>
						</div>
					</div>
					<!-- --- -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="total_sales_box2">
							<span class="gry">Live Order</span>
							<h5 class="mt-4">110 </h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-lg-4">
				<div class="customer_list_table">
					<h4>User Leaderboard</h4>
					<div class="row">
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="customer_list_table">
					<h4>Vendor
						Leaderboard</h4>
					<div class="row">
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="customer_list_table">
					<h4>Driver
						Leaderboard</h4>
					<div class="row">
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>



						</div>

						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex grn">1
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
						<div class="col-lg-12 customer_list_row">
							<div class="d-flex justify-content-between">
								<img src="IMAGES/users/one.jpg" alt="">
								<div class="det">
									<h6>Jesse Thomas</h6>
									<span>637 Points </span>
								</div>
							</div>
							<span class="num d-flex rd">2
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="45" viewBox="0 0 20 20">
									<path fill="currentColor"
										d="M1.176 15.8A1.5 1.5 0 0 0 2.502 18h14.995a1.5 1.5 0 0 0 1.318-2.215l-7.6-14C10.643.731 9.13.74 8.57 1.798z" />
								</svg>
							</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</x-app-layout>
