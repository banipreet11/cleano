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
            font-size: 14px;
            font-weight: 500;
            line-height: 17px;
            letter-spacing: -0.15399999916553497px;
            text-align: left;
            padding: 10px;
            color: #000000B2;
        }

        .order-count {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }


        .order-column {
            flex: 15%;
            width: 170px;
            height: 92.39px;
            border-radius: 8px border: 1px padding:0 !important;
            padding: 10px 15px;
            margin-left: -5px;
        }

        .order-combine1 .order-div2 {
            width: 129px;
            height: 16.37px;
            font-family: Inter;
            font-size: 24px;
            font-weight: 700;
            line-height: 29px;
            text-align: left;
            padding-left: 10px;
            display: flex;
            margin-top: 10px;
            flex: 30%;
            color: #000000;
        }

        .order-combine1 {
            display: flex;
        }

        .order-combine1 img {
            width: 35px;
            height: 8.89px;
            vertical-align: middle;
            margin-top: 20px;
            //margin-left: -110px;
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
            flex-wrap:wrap;
        }

        .payment-status-box 
        {
            width:fit-content;
            border-radius:6px;
            border:1px solid #D9DBDE;
            padding:2px 5px;
            height:30px;
            margin-right:20px;
        }
        .payment-status-box p 
        {
            font-size:12px;
            color:#979797;
        }
         .payment-status-box  span 
         {
             background-color:#6788DD;
             padding:3px 5px;
             border-radius:4px;
             font-size:11px;
             color:#ffffff;
             margin-left:8px;
         }
        
        /*===============*/
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

        .delivered {
            width: 70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #5EAA3A;
            border: 0.7px solid #93C5FD;
            text-align: center;
            color: #FFFFFF;
        }

        .shipped {
            width: 70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #BE9415;
            border: 0.7px solid #93C5FD;
            text-align: center;
            color: #FFFFFF;
        }

        .accepted {
            width: 70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #2577E4;
            border: 0.7px solid #93C5FD;
            text-align: center;
            color: #FFFFFF;
        }

        .pending {
            width: 70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #18C6DE;
            border: 0.7px solid #93C5FD;
            text-align: center;
            color: #FFFFFF;
        }

        .cancel {
            width:70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #C13030;
            border: 0.7px solid #C13030 ;
            text-align: center;
            color: #FFFFFF;
        }
        .rejected-button
        {
            width:70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #FFF066;
            border: 0.7px solid #93C5FD;
            text-align: center;
            color: #000000;
        }
        .cancel-button
        {
            width:70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #C13030;
            text-align: center;
            color: #FFFFFF;
        }
        .failed-button
        {
            width:70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #DD8501;
            border: 0.7px solid #C58E00;
            text-align: center;
            color: #FFFFFF;
        }
        .return-button
        {
            
            width:70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #222B45;
            border: 0.7px solid #3199FF;
            text-align: center;
            color: #FFFFFF;
        }
        .cbb-button
        {
            width:70px;
            height: Hug (14.78px)px;
            padding: 0px;
            border-radius: 4px;
            border: 0.7px;
            background: #9126FC;
            border: 0.7px solid #93C5FD;
            text-align: center;
            color: #FFFFFF;
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
            border-radius: 6px;
            padding: 5px;
        }

        .searchbaar input {
            overflow: hidden;
            width: 70%;
            border: none;
            outline: none;
            font-size: 13px;
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

        .nav-item .nav-link {
            background-color: transparent !important;
        }


        .nav-pills .nav-link.active .order-column,
        .show .nav-link .order-column {
            border: 1px solid #1B59F8;
        }



        @media(max-width:1460px) {
            .order-column {
                width: 150px;
                padding:0px;
            }

                .order-combine1 .order-div2 {
                    font-size: 20px;
                    font-weight: 500;
                }
            }

            .nav-pills .nav-link.order {
      background: blue !important;
      color: white;
      gap: 10px;
      margin-left: 20px;
    }
    /* Align disabled tab to the right */
    .nav-pills .nav-item.disabled {
      margin-left: auto;
    }
    .btn-group{
        float: right;
        margin-right: 80px;
        margin-top: -50px;
    }

    .other_order_tabs {
  display: flex;
  flex-wrap:wrap;
}

.other_order_tab_btn {
    padding:0 20px;
    width:fit-content;
  cursor: pointer;
  margin-right:30px;
  border:none;
  border-radius:5px;
  background-color:#75B1E8;
  color:#FFFFFF;
  font-size:13px;
  outline:none;
  height:35px;
  margin-bottom:20px;
}

.other_order_tab_content {
  display: none;
}

.other_order_tab_content.active {
  display: block;
}

    </style>
    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>Order Management<span class="heading-short">Total Order</span></h3>
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
        <div class="custom-container container">
            <div class="order-count">
                <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                    {{-- <div class="col-lg-2 col-md-2"> --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            <div class="order-column">
                                <div class="order-div1">Total Order</div>
                                <div class="order-combine1">
                                    <div class="order-div2">3,298</div>
                                    <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                                </div>
                            </div>
                        </button>
                    </li>
                    {{-- </div> --}}

                    {{-- <div class="col-lg-2 col-md-2"> --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            <div class="order-column">
                                <div class="order-div1">Pending Order</div>
                                <div class="order-combine1">
                                    <div class="order-div2">2980</div>
                                    <img src="IMAGES\Down.svg" alt="">
                                </div>
                            </div>
                        </button>
                    </li>
                    {{-- </div> --}}
                    {{-- <div class="col-lg-2 col-md-2"> --}}
                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">
                            <div class="order-column">
                                <div class="order-div1">Accepted Order</div>
                                <div class="order-combine1">
                                    <div class="order-div2">5026</div>
                                    <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                                </div>
                            </div>
                        </button>

                    </li>
                    {{-- </div> --}}
                    {{-- <div class="col-lg-2 col-md-2"> --}}
                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="pills-pause-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-pause" type="button" role="tab" aria-controls="pills-pause"
                            aria-selected="true">
                            <div class="order-column">
                                <div class="order-div1">Shipping Order</div>
                                <div class="order-combine1">
                                    <div class="order-div2">2700</div>
                                    <img src="IMAGES\Down.svg" alt="">
                                </div>
                            </div>
                        </button>

                    </li>
                    {{-- </div> --}}

                    {{-- <div class="col-lg-2 col-md-2"> --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-close-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-close" type="button" role="tab" aria-controls="pills-close"
                            aria-selected="false">
                            <div class="order-column">
                                <div class="order-div1">Delivered Orders</div>
                                <div class="order-combine1">
                                    <div class="order-div2">4000</div>
                                    <img src="IMAGES\Down.svg" alt="">
                                </div>
                            </div>
                        </button>
                    </li>
                    {{-- </div> --}}
                    {{-- <div class="col-lg-2 col-md-2"> --}}
                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="pills-premium-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-premium" type="button" role="tab"
                            aria-controls="pills-premium" aria-selected="false">
                            <div class="order-column">
                                <div class="order-div1">Others Order</div>
                                <div class="order-combine1">
                                    <div class="order-div2">200</div>
                                    <img src="IMAGES\Down.svg" alt="">
                                </div>
                            </div>
                        </button>

                    </li>
                    {{-- </div> --}}

                </ul>

            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="order-row2-div1">Total Order Number</div>
                    <div class="order-row2-combine1">
                        <div class="order-row2-combine1-text">3,298</div>
                        <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                    </div>
                    <div class="payemnt-status">
                        <div class="payemnt-status-top ">
                            <div class="payemnt-status-top-left d-flex align-items-center ">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" style="margin-right:20px;">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                
                                <div class="payment-status-box d-flex justify-content-between align-items-center" style="">
                                    <p class="mb-0">Today</p>
                                    <span>425</span>
                                </div>
                                <div class="payment-status-box d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Yesterday</p>
                                     <span>425</span>
                                </div>
                                <div class="payment-status-box d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Imported</p>
                                    <span>425</span>
                                </div>
                                <div class="payment-status-box d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Date</p>
                                    <span>425</span>
                                </div>
                                <div class="payment-status-box d-flex justify-content-between align-items-center" style="">
                                    <p class="mb-0">Orders</p>
                                     <span>425</span>
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>


                        {{-- -------table ------ --}}
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
                            <tbody id="searchResults">

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #DE7B07;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #955306, #955306),
										linear-gradient(0deg, #955306, #955306);">UPI</button>
                                    </td>
                                    <td><button class="delivered">Delivered</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
											border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
											linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="shipped">Shipped</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #A67548;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Debit
                                            Card</button></td>
                                    <td><button class="accepted">Accepted</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background:
										#5EAA3A;border: 0.7px solid #500050;
										background: #6F0D6F;">Cash</button>
                                    </td>
                                    <td><button class="pending">Pending</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="cancel">Cancel</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                               </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="order-row2-div1">Pending Order</div>
                    <div class="order-row2-combine1">
                        <div class="order-row2-combine1-text">2980</div>
                        <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                    </div>
                    <div class="payemnt-status">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Orders</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                            <tbody class="searchResults-two">
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #DE7B07;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #955306, #955306),
										linear-gradient(0deg, #955306, #955306);">UPI</button>
                                    </td>
                                    <td><button class="pending">Pending</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
											border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
											linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                            <td><button class="pending">Pending</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #A67548;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Debit
                                            Card</button></td>
                                    <td><button class="pending">Pending</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background:
										#5EAA3A;border: 0.7px solid #500050;
										background: #6F0D6F;">Cash</button>
                                    </td>
                                    <td><button class="pending">Pending</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                            <td><button class="pending">Pending</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <div class="order-row2-div1">Accepted Order</div>
                    <div class="order-row2-combine1">
                        <div class="order-row2-combine1-text">5026</div>
                        <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                    </div>
                    <div class="payemnt-status">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Orders</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                            <tbody class="searchResults-two">
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #DE7B07;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #955306, #955306),
										linear-gradient(0deg, #955306, #955306);">UPI</button>
                                    </td>
                                    <td><button class="accepted">Accepted</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
											border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
											linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="accepted">Accepted</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #A67548;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Debit
                                            Card</button></td>
                                    <td><button class="accepted">Accepted</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background:
										#5EAA3A;border: 0.7px solid #500050;
										background: #6F0D6F;">Cash</button>
                                    </td>
                                    <td><button class="accepted">Accepted</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="accepted">Accepted</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade " id="pills-pause" role="tabpanel" aria-labelledby="pills-pause-tab"
                    tabindex="0">
                    <div class="order-row2-div1">Shipping Order</div>
                    <div class="order-row2-combine1">
                        <div class="order-row2-combine1-text">2700</div>
                        <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                    </div>
                    <div class="payemnt-status">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>orders</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                            <tbody class="searchResults-two">
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #DE7B07;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #955306, #955306),
										linear-gradient(0deg, #955306, #955306);">UPI</button>
                                    </td>
                                    <td><button class="shipped">Shipped</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
											border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
											linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="shipped">Shipped</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #A67548;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Debit
                                            Card</button></td>
                                    <td><button class="shipped">Shipped</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background:
										#5EAA3A;border: 0.7px solid #500050;
										background: #6F0D6F;">Cash</button>
                                    </td>
                                    <td><button class="shipped">Shipped</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="shipped">Shipped</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-close" role="tabpanel" aria-labelledby="pills-close-tab"
                    tabindex="0">
                    <div class="order-row2-div1">Delivered Orders</div>
                    <div class="order-row2-combine1">
                        <div class="order-row2-combine1-text">4000</div>
                        <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                    </div>
                    <div class="payemnt-status">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>orders</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                            <tbody class="searchResults-two">
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #DE7B07;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #955306, #955306),
										linear-gradient(0deg, #955306, #955306);">UPI</button>
                                    </td>
                                    <td><button class="delivered">Delivered</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
											border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
											linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="delivered">Delivered</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #A67548;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Debit
                                            Card</button></td>
                                    <td><button class="delivered">Delivered</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background:
										#5EAA3A;border: 0.7px solid #500050;
										background: #6F0D6F;">Cash</button>
                                    </td>
                                    <td><button class="delivered">Delivered</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>Deposited on 2 Jan 2024</td>
                                    <td>Username</td>
                                    <td>+91 1234567890</td>
                                    <td>+91 1234567890</td>
                                    <td><button class="payment-status-button"
                                            style="background: #001C6E;
										border: 0.7px solid;border-image-source: linear-gradient(0deg, #1B59F8, #1B59F8),
										linear-gradient(0deg, #1B59F8, #1B59F8);">Credit
                                            Card</button></td>
                                    <td><button class="delivered">Delivered</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td>Active</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                 <div class="tab-pane fade " id="pills-premium" role="tabpanel" aria-labelledby="pills-premium-tab"
                    tabindex="0">
                     <div class="d-flex">
                         <div > <!--- other_order_section left start_---->
                       <div class="order-row2-div1">Others Order</div>
                        <div class="order-row2-combine1">
                        <div class="order-row2-combine1-text">200</div>
                        <img src="IMAGES\Leaderboard Arrow.svg" alt="">
                      </div>
                     </div><!---- other_order_section _left  end ---->
                       {{--  --}}
                      
                      <div class="other_order_tabs">
                        <button class="other_order_tab_btn active" data-tab="reject" onclick="hide_other_order_table()">Rejected Order </button>
                        <button class="other_order_tab_btn" data-tab="cancel" onclick="hide_other_order_table()">Cancelled Order</button>
                        <button class="other_order_tab_btn" data-tab="cancel_buyer" onclick="hide_other_order_table()">Cancelled by Buyer</button>
                        <button class="other_order_tab_btn" data-tab="fail" onclick="hide_other_order_table()">Failed Order</button>
                        <button class="other_order_tab_btn" data-tab="return" onclick="hide_other_order_table()">Returned</button>
                      </div>
                     </div>
                      
                      <!--=======  reject table ======-->
                     <div class="other_order_tab_content" id="reject">
                         <div class="payemnt-status ">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>User Type</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                                    <th class="th-2">Orders</th>
                                    <th class="th-3">Logistics Company</th>
                                    <th class="th-4">Email</th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Date</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>D#256349</td>
                                    <td>Ekart Logistics</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="rejected-button">Rejected</button>
                                    </td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                     </div>
                     
                     <!--========== cancel order tabel =======-->
                     <div class="other_order_tab_content" id="cancel">
                          <div class="payemnt-status ">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>User Type</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                                    <th class="th-2">Orders</th>
                                    <th class="th-3">Logistics Company</th>
                                    <th class="th-4">Email</th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Date</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                              
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="cancel-button">Cancel</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                     </div>
                     
                     <!----========= cancel buyer table =====----->
                     <div class="other_order_tab_content" id="cancel_buyer">
                          <div class="payemnt-status ">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>User Type</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                                    <th class="th-2">Orders</th>
                                    <th class="th-3">Logistics Company</th>
                                    <th class="th-4">Email</th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Date</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="cbb-button">CbB</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                     </div>
                     
                     <!-------=====Fail table ====--->
                     <div class="other_order_tab_content" id="fail">
                          <div class="payemnt-status ">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>User Type</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                                    <th class="th-2">Orders</th>
                                    <th class="th-3">Logistics Company</th>
                                    <th class="th-4">Email</th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Date</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                               
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="failed-button">Failed</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                     </div>
                     
                     <!------===== return table -----====----->
                     <div class="other_order_tab_content" id="return">
                          <div class="payemnt-status ">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>User Type</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                                    <th class="th-2">Orders</th>
                                    <th class="th-3">Logistics Company</th>
                                    <th class="th-4">Email</th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Date</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                               
                              

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="return-button">Return</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                     </div>
                        {{--  --}}

                    <div class="payemnt-status other_order_table">
                        <div class="payemnt-status-top">
                            <div class="payemnt-status-top-left">
                                <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_ddd_501_18005)">
                                        <rect x="5" y="5" width="40" height="32" rx="6"
                                            fill="white" />
                                        <path
                                            d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z"
                                            fill="#464F60" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_ddd_501_18005" x="0" y="0" width="50" height="42"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="2.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                result="effect2_dropShadow_501_18005" />
                                            <feOffset />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_501_18005"
                                                result="effect2_dropShadow_501_18005" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="0.5" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="effect2_dropShadow_501_18005"
                                                result="effect3_dropShadow_501_18005" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect3_dropShadow_501_18005" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>Today</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                                <div class="payemnt-status-top-left-three">
                                    <p>Yesterday</p>
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
                                <div class="payemnt-status-top-left-four" style="">
                                    <p>User Type</p>
                                    <img src="IMAGES\users\Frame 1637.svg" alt="">
                                </div>
                            </div>
                            <div class="payemnt-status-top-right">
                                <p>Export</p>
                                <img src="IMAGES\Vector (2).svg" alt="">
                            </div>
                        </div>

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
                                    <th class="th-2">Orders</th>
                                    <th class="th-3">Logistics Company</th>
                                    <th class="th-4">Email</th>
                                    <th class="th-5">Location</th>
                                    <th class="th-6">Status</th>
                                    <th class="th-7">Total Order</th>
                                    <th class="th-8">Total Sales</th>
                                    <th class="th-9">Date</th>
                                </tr>
                            </thead>
                            <tbody class="searchResults-two">
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>D#256349</td>
                                    <td>Ekart Logistics</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="rejected-button">Rejected</button>
                                    </td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="cancel-button">Cancel</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="failed-button">Failed</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="return-button">Return</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>

                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>#256349</td>
                                    <td>Shipway</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="cbb-button">CbB</button>
                                    </td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
    
    <!-------- other_order tabs js  ----->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const order_other_tabs = document.querySelectorAll('.other_order_tab_btn');
    const tabContents = document.querySelectorAll('.other_order_tab_content');
    const otherOrderTable = document.querySelector('.other_order_table');
    const removeActiveBtn = document.getElementById('pills-premium-tab');

    order_other_tabs.forEach(tab_other => {
        tab_other.addEventListener('click', function() {
            order_other_tabs.forEach(t => t.classList.remove('active'));
            tab_other.classList.add('active');

            const tabId = tab_other.getAttribute('data-tab');
            tabContents.forEach(content => {
                if (content.getAttribute('id') === tabId) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });

            // Hide other_order_table when a tab is active
            otherOrderTable.style.display = 'none';
        });
    });

    removeActiveBtn.addEventListener('click', function() {
        order_other_tabs.forEach(tab => {
            tab.classList.remove('active');
        });
        tabContents.forEach(content => {
            content.classList.remove('active');
        });

        // Show other_order_table when active class is removed from tabs
        otherOrderTable.style.display = 'block';
    });
});
</script>



<script>
    

function hide_other_order_table()
{
    var other_order_table  =  document.querySelector('.other_order_table');
   other_order_table.style.display = "none";
       
}
</script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
        });
    </script>

    <script>
        var searchInput = document.getElementById('searchInput-3');

        // Add event listener to input for filtering
        searchInput.addEventListener('input', function() {
            var filter = searchInput.value.toUpperCase();
            var table = document.getElementById('searchResults-three');
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
        const rowsPerPage = 10;
        const data = [...]; // Your array of transaction data

        // Function to populate table with data for a given page
        function populateTable(page) {
            const tbody = document.querySelector('#searchResults tbody');
            tbody.innerHTML = ''; // Clear existing rows

            const startIndex = (page - 1) * rowsPerPage;
            const endIndex = startIndex + rowsPerPage;

            for (let i = startIndex; i < endIndex && i < data.length; i++) {
                const rowData = data[i];
                const row = document.createElement('tr');
                row.innerHTML = `<td><input type="check" class="check"> ${rowData.date}</td>
                 <td>${rowData.transactionId}</td>
                 <td><button class="${rowData.status.toLowerCase()}">${rowData.status}</button></td>
                 <td>${rowData.totalItems}</td>
                 <td>${rowData.totalOrderAmount}</td>
                 <td>${rowData.totalPayout}</td>`;
                tbody.appendChild(row);
            }
        }

        // Function to navigate to previous page
        function previousPage() {
            currentPage--;
            if (currentPage < script 1) {
                currentPage = 1;
            }
            populateTable(currentPage);
        }

        // Function to navigate to next page
        function nextPage() {
            currentPage++;
            const totalPages = Math.ceil(data.length / rowsPerPage);
            if (currentPage > totalPages) {
                currentPage = totalPages;
            }
            populateTable(currentPage);
        }

        // Function to navigate to specific page
        function goToPage(page) {
            currentPage = page;
            populateTable(currentPage);
        }

        let currentPage = 1;
        populateTable(currentPage);
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

    <script>
        new DataTable('#example', {
            info: true,
            ordering: true,
            paging: true,
            showNEntries: false
        });
        document.getElementByClassName("input.form-control.form-control-sm").placeholder = "Search...";

        let ck = document.getElementById('globalCheck');
        ck.addEventListener("click", function() {
            let checkboxes = document.querySelectorAll('#example tr input[type="checkbox"]');

            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
                console.log(checkbox);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var searchInputs = document.querySelectorAll(
                '.searchInput-2'); // Select all elements with class "searchInput-2"

            searchInputs.forEach(function(searchInput) {
                // Add event listener to input for filtering
                searchInput.addEventListener('input', function() {
                    var filter = searchInput.value.toUpperCase();
                    var tables = document.querySelectorAll(
                        '.searchResults-two'); // Select all elements with class "searchResults-two"

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


</x-app-layout>
