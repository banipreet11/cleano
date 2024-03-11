<x-app-layout>
<style>
    .delivery-container1
    {
        display: flex;
        flex-direction: column;
        width:100%;
        height:auto;
    }
    .delivery-combine1
    {
        display: flex;
        width:auto;
        height:auto;
        margin-top:-30px;
    }
    .add-delivery
    {
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        color: #FFFFFF;
        background: #75B1E8;
        width: 227px;
        height: 51px;
        border-radius: 8px;
        padding-top:13px;
        padding-left:15px;
    }
    .delivery-count 
    {
            width: 265px;
            height: 90px;
            border-radius: 20px;
            border: 1px;
            box-sizing: border-box;
            background: white;
            padding-top: 20px;
            padding-left: 20px;
    }
    .delivery-count p
    {
        width: 100%;
        height: 16px;
        font-size: 13px;
        font-weight: 400;
        line-height: 16px;
        color: #000000;

    }
    .delivery-count h6
    {
        width: 100%;
        height: 24px;
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        color: #222B45;
    }
    .payemnt-status 
    {
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

		tr:nth-child(even),#t-head {
			background: #F1F3F9;
		}

		#t-head {
			background: #F1F3F9;
		}

		.payment-status-button {
			/* Badge */
			width: Fixed (53px);
            height: Hug (14.78px);
            padding: 1.39px, 6.95px, 1.39px, 6.95px;
            border-radius: 2.78px;
            border: 0.7px;
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
			width: 157px;
			height: 40px;
		}

		.th-3 {
			width: 152px;
			height: 40px;
		}

		.th-4 {
			width: 178px;
			height: 40px;
		}

		.th-5 {
			width: 167px;
			height: 40px;
		}

		.th-6 {
			width: 78px;
			height: 40px;
		}

		.th-7 {
			width: 130px;
			height: 40px;
		}
		.th-8 {
			width: 93px;
			height: 40px;
		}
		.th-9 {
			width: 103px;
			height: 40px;
		}

</style>
<header>
		<div class="d-flex justify-content-between header_box">
			<h3>Delivery Agent</h3>
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
        <div class="delivery-container1">
            <div class="delivery-combine1">
                <a href="delivery-add"><div class="add-delivery">Add Delivery Agent</div></a>
                <div class="add-delivery" style="margin-left: 30px">Import Agent File</div>
            </div>
            <div class="delivery-combine1" style="margin-top: 25px";>
                <div class="delivery-count">
                    <p>Total Agent</p>
                    <h6>614</h6>
                </div>
                <div class="delivery-count" style="margin-left:20px";>
                    <p>Online Agent</p>
                    <h6>124</h6>
                </div>
                <div class="delivery-count"  style="margin-left:20px";>
                    <p>Offline Agent</p>
                    <h6>504</h6>
                </div>
                <div class="delivery-count"  style="margin-left:20px";>
                    <p>Cash Collection</p>
                    <h6>₹12400</h6>
                </div>
            </div>    
            <div class="delivery-combine1" style="margin-top: 25px";>
                <div class="delivery-count">
                    <p>Pickup Order</p>
                    <h6>614</h6>
                </div>
                <div class="delivery-count"  style="margin-left:20px";>
                    <p>Delivery</p>
                    <h6>124</h6>
                </div>
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
							<th class="th-2">Agent </th>
							<th class="th-3">Mobile Number </th>
                            <th class="th-4">Email </th>
							<th class="th-5">Location</th>
							<th class="th-6">Status</th>
							<th class="th-7">Pickup Order</th>
							<th class="th-8">Total Sales</th>
							<th class="th-9">Cash Collection</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							</button></td>
							<td>10</td>
							<td>2000</td>
							<td>₹1000</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="background: #999999;border: 0.7px solid #4D4D4D";><div class="button-text">Offline</div>
							<td>10</td>
							<td>2000</td>
							<td>₹1000</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>2000</td>
							<td>₹1000</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>2000</td>
							<td>₹1000</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>2000</td>
							<td>₹1000</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>₹50,000</td>
							<td>₹1200</td>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>₹50,000</td>
							<td>₹1200</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>₹50,000</td>
							<td>₹1200</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>₹50,000</td>
							<td>₹1200</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>₹50,000</td>
							<td>₹1200</td>
						</tr>

						<tr>
							<td><input type="checkbox"></td>
							<td>Username</td>
							<td>+91 1234567890</td>
							<td>username@company.com</td>
							<td>Clock Tower, Dehradun</td>
							<td><button class="payment-status-button" 
							style="border: 0.7px solid #0EAE00;color:#0EAE00";><div class="button-text">Online</div>
							<td>10</td>
							<td>₹50,000</td>
							<td>₹1200</td>
						</tr>


					</tbody>
				</table>

			</div>   
        </div>
    </div>
</x-app-layout>