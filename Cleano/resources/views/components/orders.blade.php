<x-app-layout>

	<style>
		.custom-container {
			width: 100%;
			height: 93px;
			border-radius: 8px;
			margin: 0;
		}

		.Dashboard_header .user_container {
			margin-top: 120px;
			padding: 0 0px;
		}

		.order-column {
			width: 170px;
			height: 92.39px;
			border-radius: 8px;
			border: 1px;
			background: #ffffff;
			border: 1px solid eff0f6;

		}

		.order-div1 {
			width: 100%;
			height: 17px;
			font-family: Inter;
			font-size: 14px;
			font-weight: 500;
			line-height: 17px;
			letter-spacing: -0.15399999916553497px;
			text-align: left;
			padding: 5px;
		}

		.row {
			display: flex;
			width: 100%;
			justify-content: space-between;
			align-items: center;
			margin: 0;
		}

		.row .order-column {
			flex: 15%;
			width: 140.14px;
			height: 92.39px;
			border-radius: 8px border: 1px padding:0 !important;
			margin-left: 10px;
			padding: 10px 15px;
		}

		.order-combine1 .order-div2 {
			width: 129px;
			height: 16.37px;
			font-family: Inter;
			font-size: 24px;
			font-weight: 700;
			line-height: 29px;
			text-align: left;
			padding-left: 5px;
			display: flex;
			margin-top: 10px;
			flex: 30%;
		}

		.order-combine1 {
			display: flex;
		}

		.order-combine1 img {
			width: 35px;
			height: 8.89px;
			vertical-align: middle;
			margin-top: 20px;
			margin-left: -110px;
			flex: 30%;
			justify-content: flex-start;
		}

		.payemnt-status {
			width: 100%;
			height: auto;
			margin-top: 20px;
			border-radius: 8px;
			background: white;
			border: 1px solid #1b59f8;
			padding: 10px;
		}

		.order-row2-div1 {
			width: 130px;
			height: 17px;
			font-family: Inter;
			font-size: 14px;
			font-weight: 500;
			line-height: 17px;
			letter-spacing: -0.15399999916553497px;
			text-align: left;
			margin-left: 10px;
			margin-top: 18px;
		}

		.order-row2-combine1 {
			display: flex;
			width: 170px;
		}

		.order-row2-combine1-text {
			width: 129px;
			height: 27px;
			font-family: Inter;
			font-size: 24px;
			font-weight: 700;
			line-height: 29px;
			text-align: left;
			color: #000000;
			margin-left: 12px;
			margin-top: 10px;
		}

		.order-row2-combine1 img {
			width: 35px;
			height: 8.89px;
			vertical-align: middle;
			margin-top: 20px;
			margin-left: -110px;
			flex: 30%;
			justify-content: flex-start;
		}


		.payemnt-status-top {
			width: 100%;
			display: flex;
			margin-bottom: 15px;
		}

		.payemnt-status-top-left {
			display: flex;
			flex: 90%;
		}

		.payemnt-status-top-left-one {
			width: 40px;
			height: 40px;
			margin: 8px 12px 8px 16px;
			padding: 8px 12px 8px 12px;
			border-radius: 6px;
			gap: 8px;
			border: 1px solid #5960781A;
			box-shadow: 0px 0px 0px 1px #464F6029;
			box-shadow: 0px 1px 1px 0px #0000001A;
		}

		.payemnt-status-top-left-two {
			width: 95px;
			height: 40px;
			margin: 8px 12px 8px 16px;
			padding: 8px 12px 8px 8px;
			border-radius: 6px;
			gap: 8px;
			border: 1px solid #1B59F8;
			display: flex;
		}

		.payemnt-status-top-left-two p,
		.payemnt-status-top-left-three p,
		.payemnt-status-top-left-four p {
			font-size: 13px;
			font-weight: 400;
			line-height: 16px;
			letter-spacing: 0px;
			display: flex;
			flex: 70%;
		}

		.payemnt-status-top-left-two img,
		.payemnt-status-top-left-three img,
		.payemnt-status-top-left-four img {
			flex: 30%;
			height: 24px;
		}

		.payemnt-status-top-left-three {
			width: 130px;
			height: 40px;
			margin: 8px 12px 8px 16px;
			padding: 8px 12px 8px 8px;
			border-radius: 6px;
			gap: 8px;
			display: flex;
			border: 1px solid #5960781A;
			box-shadow: 0px 0px 0px 1px #464F6029;
			box-shadow: 0px 1px 1px 0px #0000001A;
		}

		.payemnt-status-top-left-four {
			width: 125px;
			height: 40px;
			margin: 8px 12px 8px 16px;
			padding: 8px 12px 8px 8px;
			border-radius: 6px;
			gap: 8px;
			display: flex;
			border: 1px solid #5960781A;
			box-shadow: 0px 0px 0px 1px #464F6029;
			box-shadow: 0px 1px 1px 0px #0000001A;
		}

		.payemnt-status-top-left-five {
			width: 85px;
			height: 40px;
			margin: 8px 12px 8px 16px;
			padding: 8px 12px 8px 8px;
			border-radius: 6px;
			gap: 8px;
			display: flex;
			border: 1px solid #5960781A;
			box-shadow: 0px 0px 0px 1px #464F6029;
			box-shadow: 0px 1px 1px 0px #0000001A;
		}

		.payemnt-status-top-left-six {
			width: 115px;
			height: 40px;
			margin: 8px 12px 8px 16px;
			padding: 8px 12px 8px 8px;
			border-radius: 6px;
			gap: 8px;
			display: flex;
			border: 1px solid #5960781A;
			box-shadow: 0px 0px 0px 1px #464F6029;
			box-shadow: 0px 1px 1px 0px #0000001A;
		}


		.payemnt-status-top-right {
			display: flex;
			flex: 10%;
			gap: 18px;
			margin-top: 13px;
		}

		.payemnt-status-top-right img {
			height: 20px;
		}

		.payemnt-status-top-right p {
			font-size: 16px;
			font-weight: 400;
			line-height: 17px;
			letter-spacing: 0px;
			color: #979797;
		}

		.staff-searchAdd .staff-search {
			margin-left: 17px;
		}

		table {
			caption-side: bottom;
			border-collapse: collapse;
			width: 100%;
		}

		table#dynamic-table {
			width: 98%;
			margin: auto;
			margin-top: 15px;
		}

		tr:nth-child(even) {
			background: #F1F3F9;
		}

		#t-head {
			background: #F1F3F9;
		}

		.payment-status-button {
			/* Badge */
			width: 75px;
            height: Hug (14px);
            padding: 1.39px, 6.95px, 1.39px, 6.95px;
            border-radius: 8px;
            color: white;
            
		}

		.payment-order .payment-order-completed {
			width: 280px;
			height: 90px;
			background-color: white;
			padding-top: 20px;
			padding-left: 16px;
			margin-left: 20px;
			border-radius: 20px;
		}

		.th-1 {
			width: 36px;
			height: 40px;
		}

		.th-2 {
			width: 120px;
			height: 40px;
		}

		.th-3 {
			width: 130px;
			height: 40px;
		}

		.th-4 {
			width: 170px;
			height: 40px;
		}

		.th-5 {
			width: 170px;
			height: 40px;
		}

		.th-6 {
			width: 120px;
			height: 40px;
		}

		.th-7 {
			width: 90px;
			height: 40px;
		}
		.th-8 {
			width: 120px;
			height: 40px;
		}
		.th-9 {
			width: 90px;
			height: 40px;
		}
		.th-10 {
			width: 80px;
			height: 40px;
		}
		
	</style>
	<header>
		<div class="d-flex justify-content-between header_box">
			<h3>Order Management<span class="heading-short">/Total Order</span></h3>
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
		<div class="custom-container container">
			<div class="row">
				<div class="col-md-2 order-column">
					<div class="order-div1">Total Order</div>
					<div class="order-combine1">
						<div class="order-div2">3,298</div>
						<img src="IMAGES\Leaderboard Arrow.svg" alt="">
					</div>
				</div>
				<div class="col-md-2 order-column">
					<div class="order-div1">Pending Order</div>
					<div class="order-combine1">
						<div class="order-div2">2980</div>
						<img src="IMAGES\Down.svg" alt="">
					</div>
				</div>
				<div class="col-md-2 order-column">
					<div class="order-div1">Accepted Order</div>
					<div class="order-combine1">
						<div class="order-div2">5026</div>
						<img src="IMAGES\Leaderboard Arrow.svg" alt="">
					</div>
				</div>
				<div class="col-md-2 order-column">
					<div class="order-div1">Shipping Order</div>
					<div class="order-combine1">
						<div class="order-div2">2700</div>
						<img src="IMAGES\Down.svg" alt="">
					</div>
				</div>
				<div class="col-md-2 order-column">
					<div class="order-div1">Delivered Orders</div>
					<div class="order-combine1">
						<div class="order-div2">4000</div>
						<img src="IMAGES\Down.svg" alt="">
					</div>
				</div>
				<div class="col-md-2 order-column">
					<div class="order-div1">Others Order</div>
					<div class="order-combine1">
						<div class="order-div2">200</div>
						<img src="IMAGES\Down.svg" alt="">
					</div>
				</div>
			</div>
			<div class="order-row2-div1">Total Order Number</div>
			<div class="order-row2-combine1">
				<div class="order-row2-combine1-text">3,298</div>
				<img src="IMAGES\Leaderboard Arrow.svg" alt="">
			</div>

			<div class="payemnt-status">
				<div class="payemnt-status-top">
					<div class="payemnt-status-top-left">
						<div class="payemnt-status-top-left-one">
							<img src="IMAGES\icon (1).svg" alt="">
						</div>
						<div class="payemnt-status-top-left-two">
							<p>Today</p>
							<img src="IMAGES\users\Frame 1637.svg" alt="">
						</div>
						<div class="payemnt-status-top-left-three">
							<p>Yesterday</p>
							<img src="IMAGES\users\Frame 1637.svg" alt="">
						</div>
						<div class="payemnt-status-top-left-four">
							<p>Imported</p>
							<img src="IMAGES\users\Frame 1637.svg" alt="">
						</div>
						<div class="payemnt-status-top-left-five">
							<p>Date</p>
							<img src="IMAGES\users\Frame 1637.svg" alt="">
						</div>
						<div class="payemnt-status-top-left-six">
							<p>Orders</p>
							<img src="IMAGES\users\Frame 1637.svg" alt="">
						</div>
					</div>
					<div class="payemnt-status-top-right">
						<p>Export</p>
						<img src="IMAGES\Vector (2).svg" alt="">
					</div>
				</div>
				<div class="staff-searchAdd">
					<div class="staff-search">&nbsp;
						<img src="\IMAGES\icon.svg" alt="">
						<input type="text" placeholder="Search..." required>
					</div>
				</div>

				{{-- -------table ------ --}}
				<table id="dynamic-table">
					<thead id="t-head">
						<tr>
							<th class="th-1"><input type="checkbox"></th>
							<th class="th-2">Orders</th>
							<th class="th-3">User </th>
							<th class="th-4">Mobile Number </th>
							<th class="th-5">Location</th>
							<th class="th-6">Payment</th>
							<th class="th-7">Status</th>
							<th class="th-8">Total Order</th>
							<th class="th-9">Total Sales</th>
							<th class="th-10">Date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background:
                             #5EAA3A;border: 0.7px solid #500050;
                                background: #6F0D6F;">Cash</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background: #DE7B07;
                            border: 0.7px solid;border-image-source: linear-gradient(0deg, #955306, #955306),
                            linear-gradient(0deg, #955306, #955306);">UPI</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background: #001C6E;
                                border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
                                linear-gradient(0deg, #1B59F8, #1B59F8);">Credit Card</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background: #A67548;
							border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
							linear-gradient(0deg, #1B59F8, #1B59F8);">Debit Card</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background: #158D86;
							border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
							linear-gradient(0deg, #1B59F8, #1B59F8);">PayPal</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background:
                             #5EAA3A;border: 0.7px solid #500050;
                            background: #6F0D6F;">Cash</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background: #DE7B07;
                            border: 0.7px solid;border-image-source: linear-gradient(0deg, #955306, #955306),
                            linear-gradient(0deg, #955306, #955306)";>UPI</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background: #001C6E;
                            border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
                            linear-gradient(0deg, #1B59F8, #1B59F8);">Credit Card</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button" style="background: #A67548;
							border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
							linear-gradient(0deg, #1B59F8, #1B59F8);">Debit Card</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button"style="background:
                             #5EAA3A;border: 0.7px solid #500050;
                                background: #6F0D6F;">Cash</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>

						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>+91 1234567890</td>
							<td><button class="payment-status-button"style="background:
                             #5EAA3A;border: 0.7px solid #500050;background: #6F0D6F;">Cash</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
							<td>-</td>
						</tr>


					</tbody>
				</table>

			</div>
		</div>



	</div>
	</div>

</x-app-layout>
