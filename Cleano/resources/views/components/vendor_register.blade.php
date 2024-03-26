<x-app-layout>
    <style>
		h3 {
            font-weight: 600;
            font-size: 16px;
            line-height: 16px;
            color: #000000;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
            width: 100%;
        }

        table#dynamic-table {
            width: 100%;
            margin: auto;
            margin-top: 15px;
            border: 1px solid #1B59F8;
        }

        table#dynamic-table td input,
        .users-intro-info input,
        textarea {
            border: none;
            outline: none;
        }

        #t-head {
            background: #F1F3F9;
        }

        #th-2 {
            width: 245px;
            height: 40px;
        }

        #th-3 {
            width: 191px;
            height: 40px;
        }

        #th-4 {
            width: 253px;
            height: 40px;
        }

        #th-5 {
            width: 290px;
            height: 40px;
        }

        #th-6 {
            width: 180px;
            height: 40px;
        }

        .nav-pills .nav-link {
            width: 207px;
            height: 51px;
            border: 1px solid #000000;
            font-size: 24px;
            font-weight: 400;
            line-height: 16px;
            color: #000000;
            border-radius: 2px;
        }

        .nav-pills .nav-link.active {
            background: none;
            border: 1px solid #000000;
            color: #000000;
        }

        #pills-profile-tab {
            margin-left: 50px;
        }

        #pills-contact-tab {
            margin-left: 50px;
        }

        @media (max-width:840px) {
            .nav-pills .nav-link {
                margin-bottom: 10px;
            }

            #pills-contact-tab {
                margin-left: 10px;
            }

            #pills-profile-tab {
                margin-left: 10px;
            }

            .nav {
                margin-top: 20px;
            }

            .under_text button {
                margin-bottom: 10px;
            }
        }

        /* @media (max-width:750px) {
            #pills-contact-tab {
                margin-left: 0px;
            }
        } */
        /------------------------------------------------------------------/ 
		.Vendor-Detail-section .vendor_1 select {
            border: 1px solid #1b59f8;
            height: 55px;
            width: 173px;
            outline: none;
            border-radius: 4px;
        }

        .Vendor-Detail-section .vendor_1 select option {
            font-size: 16px;
            font-weight: 500;
            color: #000000;
        }

        .Vendor-Detail-section .vendor_2 button {
            border: 1px solid #1b59f8;
            height: 55px;
            width: 173px;
            outline: none;
            background-color: #ffffff;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
        }

        .Vendor-Detail-section .vendor_2 button a {
            color: #000000;
        }

        .Vendor-Detail-section h6 {
            font-size: 16px;
            font-weight: 600;
            color: #000000;
            margin-top: 30px;
        }

        .list_ul ul li {
            font-size: 16px;
            font-weight: 400 !important;
            color: #333333;
            line-height: 47px;
        }

        .vender_detail h4 {
            font-size: 16px;
            font-weight: 600;
            color: #000000;
            margin-top: 25px;
        }

        .vender_detail ul {
            padding-left: 0;
        }

        .vender_detail ul li {
            font-size: 16px;
            font-weight: 400;
            line-height: 36px;
            color: #333333;
        }

        .opening_button {
            display: flex;
            justify-content: start;
            margin-top: 70px;
            padding: 0 0;
            gap: 80px;
        }

        .opening_button button {
            border: 1px solid #000000;
            height: 51px;
            font-size: 24px;
            font-weight: 400;
            color: #000000;
            width: 207px;
            border-radius: 2px;
            background: #ffffff;
            margin-bottom: 0;
        }

        .opening_button_1 {
            margin-top: 50px;
        }

        @media (max-width: 1430px) and (min-width: 1100px) {
            .opening_button_1 button {
                width: 100% !important;
                font-size: 8px !important;
            }
        }

        @media (max-width: 1100px) {
            .opening_button button {
                font-size: 12px;
                padding: 10px 15px;
            }

            /* .opening_button_1 button {
        font-size: 12px !important;
    } */

            #grub_1 {
                margin: 20px 0;
            }
        }

        .input_ty {
            margin-top: 10px;
        }

        .input_ty textarea {
            width: 100%;
            height: 366px;
            border: 1px solid #000000;
            outline: none;
            padding: 15px;
            border-radius: 4px;
        }

        .input_ty_1 {
            margin-top: 10px;
        }

        .input_ty_1 {
            width: 100%;
            height: 366px;
            border: 1px solid #000000;
            outline: none;
            padding: 15px;
            border-radius: 4px;
            background-color: #ffffff;
        }

        .under_text {
            border: 1px solid #3199ff;
            height: 314px;
            border-radius: 4px;
            background-color: #e8e8e8;
            padding: 15px 15px;
        }

        .under_text button {
            background-color: #2148c0c7;
            border: none;
            height: 35px;
            border-radius: 2.96px;
            color: #ffffff;
            padding: 0px 20px;
            /* width: 100px; */

            font-size: 9px;
            font-weight: 500;
            color: #ffffff;
        }

        .opening_button_1 button {
            border: 1px solid #000000;
            height: 51px;
            font-size: 24px !important;
            font-weight: 400;
            color: #000000;
            width: 207px;
            border-radius: 2px;
            background: #ffffff;
            margin-bottom: 0;
        }

        #wash_grub p {
            font-size: 16px;
            font-weight: 400;
            line-height: 16px;
            color: #333333;
        }

        #wash_grub h6 {
            font-size: 15px;
            font-weight: 400;
            line-height: 16px;
            color: #000000;
        }

        #wash_grub ul {
            margin-top: 100px;
            padding-left: 0;
        }

        #wash_grub ul li {
            font-size: 16px;
            font-weight: 400;
            line-height: 36px;
            color: #333333;
        }
    </style>
    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>Vendor Detail</h3>
            <div class="header_left_side">
                <span class="first"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 36 36">
                        <path class="clr-i-outline clr-i-outline-path-1" fill="currentColor"
                            d="M32.51 27.83A14.4 14.4 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93a1 1 0 0 0-.34.75v1.36a1 1 0 0 0 1 1h27.8a1 1 0 0 0 1-1v-1.36a1 1 0 0 0-.34-.75M5.13 28.94a16.17 16.17 0 0 0 2.44-3a14.24 14.24 0 0 0 1.65-5.85v-4.94a8.74 8.74 0 1 1 17.47 0v4.94a14.24 14.24 0 0 0 1.65 5.85a16.17 16.17 0 0 0 2.44 3Z" />
                        <path class="clr-i-outline clr-i-outline-path-2" fill="currentColor"
                            d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28" />
                        <path fill="none" d="M0 0h36v36H0z" />
                    </svg>
                </span>
                <span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
                    </svg> Download</span>
            </div>
        </div>
    </header>
    <div class="user_container">


        <div class="Vendor-Detail-section">

            <h3>User Details</h3>
                <table id="dynamic-table">
                    <thead id="t-head">
                        <tr>
                            <th id="th-2">Full Name</th>
                            <th id="th-3">Phone Number</th>
                            <th id="th-4">Email</th>
                            <th id="th-5">Address</th>
                            <th id="th-6">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" placeholder="Username"></td>
                            <td><input type="text" placeholder="+91-1234567890"></td>
                            <td><input type="text" placeholder="username@company.com"></td>
                            <td><input type="text" placeholder="Clock Tower, Dehradun"></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            <h6>Shop Details</h6>


            <div class="">
                <div class="row">

                    <div class="col-lg-5 col-md-5 col-sm-12">

                        <div class="mt-3 d-flex ">
                            <div class="">
                                <img src="IMAGES\users\unsplash_iEEBWgY_6lA.svg">
                            </div>


                            <div class="list_ul">
                                <ul>
                                    <li>Name of the Store</li>
                                    <li>Address</li>
                                    <li>GSTIN</li>
                                </ul>
                            </div>

                        </div>


                        <div class="vender_detail">
                            <h4>Vendor Details</h4>
                            <ul>
                                <li>User ID</li>
                                <li>Merchant ID No.</li>
                                <li>Email</li>
                                <li>Mobile No.</li>
                            </ul>
                        </div>

                        {{-- <div class="opening_button">
							<button>Opening Hours</button>
							<button>Services</button>
						</div> --}}



                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="row" id="wash_grub">
                            <div class="col-lg-5 col-md-12" id="grub_1">
                                <p>The Grubs Wash</p>
                                <h6>Mr XXXXXXX, H No 153, Sector 15-A, Chandigarh-160015, INDIA</h6>
                                <h6> 22AAAAA0000A1Z5</h6>

                                <ul>
                                    <li>78945626</li>
                                    <li>4865</li>
                                    <li>thisthat@gmail.com</li>
                                    <li>+91 1234567890</li>
                                </ul>


                            </div>

                            <div class="col-lg-7 col-md-12">
                                <p>Service Area</p>
                                <h6>Mr XXXXXXX, H No 153, Sector 15-A, Chandigarh-160015, INDIA</h6>
                                <img src="IMAGES\users\map 1.svg">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Opening Hours</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Services</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Order History</button>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">

                            <div class="input_ty">
                                <textarea rows=""></textarea>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="input_ty_1">
                                <div class="under_text">
                                    <button>wash</button>
                                    <button>Wash & Iron</button>
                                    <button>Steam Iron</button>
                                    <button>Dry Clean</button>
                                    <button>Premium Wash</button>
                                    <button>Shoe & Bag Care</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="input_ty">
                                <textarea rows=""></textarea>
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
