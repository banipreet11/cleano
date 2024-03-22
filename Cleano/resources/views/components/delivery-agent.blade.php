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
    .delivery-request
    {
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        color: #FFFFFF;
        background: #75B1E8;
        width: 280px;
        height: 51px;
        border-radius: 8px;
        padding-top:13px;
        padding-left:15px;
        margin-left: 30px;
    }
    .delivery-count 
    {
            width: 235px;
            height: 90px;
            border-radius: 20px;
            border: 1px;
            box-sizing: border-box;
            background: white;
            padding-top: 20px;
            padding-left: 20px;
            text-align:left;
            margin-left:-10px;
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
            width: 150px;
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

        .payemnt-status-top-left-two p,
        .payemnt-status-top-left-three p,
        .payemnt-status-top-left-four p {
            font-size: 13px;
            font-weight: 400;
            line-height: 16px;
            letter-spacing: 0px;
            display: flex;
            text-align: center;
        }

        .payemnt-status-top-left-two img,
        .payemnt-status-top-left-three img,
        .payemnt-status-top-left-four img {
            flex: 20%;
            height: 25px;
            margin-right: -15px;
        }

        .payemnt-status-top-left-three {
            width: 140px;
            height: 40px;
            margin: 8px 12px 8px 12px;
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
            margin: 8px 12px 8px 12px;
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

            .searchbaar {
                width: 320px;
                height: 38px;
                border: 1px solid rgb(181, 180, 180);
                border-radius: 6px
            }

            .searchbaar input {
                overflow: hidden;
                width: 70%;
                border: none;
                outline: none;
                font-size: 13px;


            }

            table .online {
                width: Fixed (53px)px;
                height: Hug (14.78px)px;
                padding: 5px;
                border-radius: 2.78px;
                border: 0.7px;
                background: #FFFFFF;
                border: 0.7px solid #0EAE00;
                font-weight: 500;
                line-height: 11.13px;
                text-align: center;
                color: #22C115;
            }

            table .offline
            {
                width: Fixed (53px)px;
                height: Hug (14.78px)px;
                padding: 5px;
                border-radius: 2.78px;
                border: 0.7px;
                background: #999999;
                border: 0.7px solid #4D4D4D;
                font-weight: 500;
                line-height: 11.13px;
                text-align: center;
                color: #FFFFFF;
            }
            table .pending {
                width: 53px;
                height: 18x;
                font-size: 8px;
                border: none;
                background-color: #AAAAAA;
                color: white;
            }

            table .check {
                margin-right: 10px;
                margin-top: 3px;
            }

            .pagination {
                border: none;
                padding: 10px;

            }

            .page-item {
                margin: 5px;

            }
            .nav-item .nav-link {
            background-color: transparent !important;
            }


            .nav-pills .nav-link.active .delivery-count,
            .show .nav-link .delivery-count {
                border: 1px solid #1B59F8;
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
                <div class="delivery-request">Approve Delivery Request</div>
            </div>
            <div class="delivery-combine1" style="margin-top: 25px";>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            <div class="delivery-count">
                                <p>Total Agent</p>
                                <h6>614</h6>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            <div class="delivery-count">
                                <p>Online Agent</p>
                                <h6>124</h6>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">
                            <div class="delivery-count">
                                <p>Offline Agent</p>
                                <h6>504</h6>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-pause-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-pause" type="button" role="tab" aria-controls="pills-pause"
                            aria-selected="true">
                            <div class="delivery-count">
                                <p>Cash Collection</p>
                                <h6>₹12400</h6>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-close-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-close" type="button" role="tab" aria-controls="pills-close"
                            aria-selected="false">
                            <div class="delivery-count">
                                <p>Pickup Order</p>
                                <h6>614</h6>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-premium-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-premium" type="button" role="tab" aria-controls="pills-premium"
                            aria-selected="false">
                            <div class="delivery-count">
                                <p>Delivery</p>
                                <h6>124</h6>
                            </div>
                        </button>
                    </li>
                </ul>
        
            </div>    
        
			<div class="payemnt-status">

				<div class="payemnt-status-top">
					<div class="payemnt-status-top-left">

						<svg width="50" height="42" viewBox="0 0 50 42" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<g filter="url(#filter0_ddd_501_18005)">
								<rect x="5" y="5" width="40" height="32" rx="6" fill="white" />
								<path
									d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
									fill="#464F60" />
							</g>
							<defs>
								<filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
									filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feColorMatrix in="SourceAlpha" type="matrix"
										values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dy="2" />
									<feGaussianBlur stdDeviation="2.5" />
									<feColorMatrix type="matrix"
										values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
									<feBlend mode="normal" in2="BackgroundImageFix"
										result="effect1_dropShadow_501_18005" />
									<feColorMatrix in="SourceAlpha" type="matrix"
										values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feMorphology radius="1" operator="dilate" in="SourceAlpha"
										result="effect2_dropShadow_501_18005" />
									<feOffset />
									<feColorMatrix type="matrix"
										values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
									<feBlend mode="normal" in2="effect1_dropShadow_501_18005"
										result="effect2_dropShadow_501_18005" />
									<feColorMatrix in="SourceAlpha" type="matrix"
										values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dy="1" />
									<feGaussianBlur stdDeviation="0.5" />
									<feColorMatrix type="matrix"
										values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
									<feBlend mode="normal" in2="effect2_dropShadow_501_18005"
										result="effect3_dropShadow_501_18005" />
									<feBlend mode="normal" in="SourceGraphic" in2="effect3_dropShadow_501_18005"
										result="shape" />
								</filter>
							</defs>
						</svg>
						<div class="payemnt-status-top-left-two" style="">
                            <p>Active User</p>
                            <img src="IMAGES\users\Frame 1637.svg" alt="">
                        </div>
                        <div class="payemnt-status-top-left-three">
                            <p>Returning</p>
                            <img src="IMAGES\users\Frame 1637.svg" alt="">
                        </div>
                        <div class="payemnt-status-top-left-three">
                            <p>Imported</p>
                            <img src="IMAGES\users\Frame 1637.svg" alt="">
                        </div>
                        <div class="payemnt-status-top-left-four">
                            <p>Date</p>
                            <img src="IMAGES\users\Frame 1637.svg" alt="">
                        </div>
                        <div class="payemnt-status-top-left-two" style="">
                            <p>User Type</p>
                            <img src="IMAGES\users\Frame 1637.svg" alt="">
                        </div>
					</div>
					<div class="payemnt-status-top-right">
						<p>Export</p>
						<img src="IMAGES\Vector (2).svg" alt="">
					</div>
				</div>
				<div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" id="searchInput">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
                            <thead id="t-head">
                                <tr>
                                    <th class="th-1"><input type="checkbox" class="selectAll"></th>
                                    <th class="th-2">User </th>
                                    <th class="th-3">Mobile Number </th>
                                    <th class="th-4">Email </th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Reconcilliation</th>
                                </tr>
                            </thead>
                            <tbody id="searchResults">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="offline">Offline</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="tab-pane fade " id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" class="searchInput-2">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
                            <thead id="t-head">
                                <tr>
                                    <th class="th-1"><input type="checkbox" class="selectAll"></th>
                                    <th class="th-2">User </th>
                                    <th class="th-3">Mobile Number </th>
                                    <th class="th-4">Email </th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Reconcilliation</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="offline">Offline</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab" tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" class="searchInput-2">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
                            <thead id="t-head">
                                <tr>
                                    <th class="th-1"><input type="checkbox" class="selectAll"></th>
                                    <th class="th-2">User </th>
                                    <th class="th-3">Mobile Number </th>
                                    <th class="th-4">Email </th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Reconcilliation</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="offline">Offline</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="tab-pane fade " id="pills-pause" role="tabpanel" aria-labelledby="pills-pause-tab"
                        tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" class="searchInput-2">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
                            <thead id="t-head">
                                <tr>
                                    <th class="th-1"><input type="checkbox" class="selectAll"></th>
                                    <th class="th-2">User </th>
                                    <th class="th-3">Mobile Number </th>
                                    <th class="th-4">Email </th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Reconcilliation</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="offline">Offline</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="tab-pane fade" id="pills-close" role="tabpanel" aria-labelledby="pills-close-tab"
                        tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" class="searchInput-2">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
                            <thead id="t-head">
                                <tr>
                                    <th class="th-1"><input type="checkbox" class="selectAll"></th>
                                    <th class="th-2">User </th>
                                    <th class="th-3">Mobile Number </th>
                                    <th class="th-4">Email </th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Reconcilliation</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="offline">Offline</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="tab-pane fade " id="pills-premium" role="tabpanel"
                        aria-labelledby="pills-premium-tab" tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" class="searchInput-2">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
                            <thead id="t-head">
                                <tr>
                                    <th class="th-1"><input type="checkbox" class="selectAll"></th>
                                    <th class="th-2">User </th>
                                    <th class="th-3">Mobile Number </th>
                                    <th class="th-4">Email </th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Reconcilliation</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="offline">Offline</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"> </td>
                                    <td>User name</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="online">Online</button></td>
                                    <td>10</td>
                                    <td>2000</td>
                                    <td>₹1000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
			</div>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item">
						<a class="page-link" href="#" onclick="previousPage()">&lt;</a>
					</li>
					<li class="page-item"><a class="page-link" href="#" onclick="goToPage(1)">1</a>
					</li>
					<li class="page-item"><a class="page-link" href="#" onclick="goToPage(2)">2</a>
					</li>
					<li class="page-item"><a class="page-link" href="#" onclick="goToPage(3)">..</a>
					</li>
					<!-- Add more page numbers dynamically based on total pages -->
					<li class="page-item">
						<a class="page-link" href="#" onclick="nextPage()">&gt;</a>
					</li>
				</ul>
			</nav>
            
            <script>
                var searchInput = document.getElementById('searchInput');

                // Add event listener to input for filtering
                searchInput.addEventListener('input', function() {
                    var filter = searchInput.value.toUpperCase();
                    var table = document.getElementById('searchResults');
                    var rows = table.getElementsByTagName('tr');

                    // Loop through all table rows, and hide those who don't match the search query
                    for (var i = 0; i < rows.length; i++) {
                        var cells = rows[i].getElementsByTagName('td');
                        var found = false;
                        for (var j = 0; j < cells.length; j++) {
                            var cell = cells[j];
                            if (cell) {
                                var textValue = cell.textContent || cell.innerText;
                                if (textValue.toUpperCase().indexOf(filter) > -1) {
                                    found = true;
                                    break;
                                }
                            }
                        }
                        if (found) {
                            rows[i].style.display = '';
                        } else {
                            rows[i].style.display = 'none';
                        }
                    }
                });
            </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var searchInputs = document.querySelectorAll('.searchInput-2'); // Select all elements with class "searchInput-2"

        searchInputs.forEach(function(searchInput) {
            // Add event listener to input for filtering
            searchInput.addEventListener('input', function() {
                var filter = searchInput.value.toUpperCase();
                var tables = document.querySelectorAll('.searchResults-two'); // Select all elements with class "searchResults-two"

                tables.forEach(function(table) {
                    var rows = table.getElementsByTagName('tr');

                    // Loop through all table rows, and hide those who don't match the search query
                    for (var i = 0; i < rows.length; i++) {
                        var cells = rows[i].getElementsByTagName('td');
                        var found = false;
                        for (var j = 0; j < cells.length; j++) {
                            var cell = cells[j];
                            if (cell) {
                                var textValue = cell.textContent || cell.innerText;
                                if (textValue.toUpperCase().indexOf(filter) > -1) {
                                    found = true;
                                    break;
                                }
                            }
                        }
                        if (found) {
                            rows[i].style.display = '';
                        } else {
                            rows[i].style.display = 'none';
                        }
                    }
                });
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const selectAllCheckboxes = document.querySelectorAll(".selectAll");

        selectAllCheckboxes.forEach(function(selectAllCheckbox) {
            const checkboxes = selectAllCheckbox.closest('table').querySelectorAll(".check");

            selectAllCheckbox.addEventListener("change", function() {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            });
        });
    });
</script>
        </div>
    </div>
</x-app-layout>