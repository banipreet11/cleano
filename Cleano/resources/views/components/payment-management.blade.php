<x-app-layout>

	<style>
		/*Payment Management */
		.payment-management {
			display: flex;
			flex-direction: column;
			width: 100%;
		}

		.payment-transaction {
			width: 100%;
			font-size: 22px;
			font-weight: 400;
			line-height: 30px;
			letter-spacing: 0em;
			text-align: left;
			font-family: Inter;
			font-size: 13px;
			font-weight: 400;
			line-height: 16px;
			letter-spacing: 0px;
			text-align: left;

		}

		.payment-transaction-day {
			display: flex;
			box-sizing: border-box;
			width: 130px;
			height: 30px;
			border: 1.5px solid #0B67F0;
			border-radius: 6px;
			background: white;
		}

		.payment-transaction-day p {
			font-family: Inter;
			font-size: 15px;
			font-weight: 400;
			line-height: 16px;
			letter-spacing: 0px;
			display: flex;
			flex: 80%;
			margin-top: 7px;
			margin-left: 5px;
		}

		.payment-transaction-day img {
			width: 22px;
			height: 21px;
			display: flex;
			flex: 20%;
			margin-top: 3px;
			margin-right: 3px;
		}

		.payment-order {
			box-sizing: border-box;
			border-radius: 6px;
			margin-top: 18px;
			height: 90px;
			display: flex;
		}

		.payment-order .payment-order-undelivered {
			box-sizing: border-box;
			width: 280px;
			height: 90px;
			border-radius: 20px;
			background-color: white;
			padding-top: 20px;
			padding-left: 16px;
		}

		.payment-order .payment-order-undelivered p,
		.payment-order .payment-order-completed p {
			font-size: 17px;
			font-weight: 400;
			line-height: 14px;
			letter-spacing: 0px;
		}

		.payment-order .payment-order-undelivered h4 .payment-order .payment-order-completed h4 {
			font-size: 13px;
			font-weight: 700;
			line-height: 11px;
			letter-spacing: 0px;
			margin-bottom: 8px;
		}

		.payment-order .payment-order-completed {
			width: 280px;
			height: 90px;
			background-color: white;
			padding-top: 20px;
			padding-left: 16px;
			margin-left: 20px;
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
			width: 140px;
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
			width: 200px;
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
			width: 110px;
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
			width: 80%;
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
			box-sizing: border-box;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 1.39086px 6.95431px;
			width: 80px;
			height: 20px;
			color: white;
			background: #5EAA3A;
			border: 0.695431px solid #93C5FD;
			border-radius: 2.78173px;
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

		#th-1 {
			width: 36px;
			height: 40px;
		}

		#th-2 {
			width: 200px;
			height: 40px;
		}

		#th-3 {
			width: 127px;
			height: 40px;
		}

		#th-4 {
			width: 86px;
			height: 40px;
		}

		#th-5 {
			width: 160px;
			height: 40px;
		}

		#th-6 {
			width: 178px;
			height: 40px;
		}

		#th-7 {
			width: 129px;
			height: 40px;
		}
	</style>
	<header>
		<div class="d-flex justify-content-between header_box">
			<h3>Payment</h3>
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
		<div class="payment-management">
			<h5 class="payment-transaction">Transactions</h5>
			<div class="payment-transaction-day">
				<p>Last 30 Days</p>
				<img src="IMAGES\uil_calender.svg" alt="">
			</div>
			<div class="payment-order">
				<div class="payment-order-undelivered">
					<p>Undelivered Order</p>
					<h4>₹61,400</h4>
				</div>
				<div class="payment-order-completed">
					<p>Completed payout</p>
					<h4>₹50000</h4>
				</div>
			</div>
			<div class="payemnt-status">
				<div class="payemnt-status-top">
					<div class="payemnt-status-top-left">
						<div class="payemnt-status-top-left-one">
							<img src="IMAGES\icon (1).svg" alt="">
						</div>
						<div class="payemnt-status-top-left-two">
							<p>Overview</p>
							<img src="IMAGES\users\Frame 1637.svg" alt="">
						</div>
						<div class="payemnt-status-top-left-three">
							<p>Completed Payout</p>
							<img src="IMAGES\users\Frame 1637.svg" alt="">
						</div>
						<div class="payemnt-status-top-left-four">
							<p>Refund</p>
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
							<th id="th-1"><input type="checkbox"></th>
							<th id="th-2">Date</th>
							<th id="th-3">Transaction ID </th>
							<th id="th-4">Status</th>
							<th id="th-5">Total Items</th>
							<th id="th-6">Total Order Amount</th>
							<th id="th-7">Total Payout</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>

						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Deposited on 2 Jan 2024</td>
							<td>Username</td>
							<td><button class="payment-status-button">Paid</button></td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td>Active</td>
						</tr>

					</tbody>
				</table>

			</div>
		</div>
	</div>

</x-app-layout>
color:
