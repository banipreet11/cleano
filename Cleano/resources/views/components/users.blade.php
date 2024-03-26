<x-app-layout>
    <style>
        .users-management {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: auto;
        }

        .users-add-top {
            display: flex;
            width: auto;
            height: auto;
            margin-top: -30px;
        }

        .users-add-user {
            width: 227px;
            height: 51px;
            background: #75B1E8;
            border-radius: 8px;
            /* Add User */
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
            color: #FFFFFF;
            text-align: center;
            padding-top: 13px;
        }

        .users-total {
            width: 265.86px;
            height: 90px;
            background: white;
            border-radius: 20px;
            padding-top: 20px;
            padding-left: 20px;
            margin-left:-10px;
        }

        .users-total p,
        .users-total .users-count-top p {
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;
            color: #8F9BB3;
        }

        .users-count-top {
            display: flex;
            justify-content: space-between;
        }

        .users-count-top img {
            margin-top: -15px;
            margin-right: 18px;
        }

        .users-total h6 {
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
            color: #222B45;
            margin-top: -5px;
            text-align: left;
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
            width: 80px;
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
            text-align: center;
        }

        .payemnt-status-top-left-two img,
        .payemnt-status-top-left-three img,
        .payemnt-status-top-left-four img {
            flex: 30%;
            height: 24px;
            margin-top: -1px;
            margin-right: -15px;
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

        th input[type="checkbox"] {
            margin-right: 10px;
            /* Adjust this value as needed */
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

        table .admin {
            width: 70px;
            height: Hug (14.78px)px;
            padding: 5px;
            border-radius: 2.78px;
            border: 0.7px;
            background: #FFFFFF;
            border: 0.7px solid #93C5FD;
            font-weight: 500;
            line-height: 11.13px;
            text-align: center;
            color: #00E0FF;
        }

        table .new-user {
            width: 70px;
            height: Hug (14.78px)px;
            padding: 5px;
            border-radius: 2.78px 0px 0px 0px;
            border: 0.7px;
            background: #DBEAFE;
            border: 0.7px solid #93C5FD;
            font-weight: 500;
            line-height: 11.13px;
            text-align: center;
            color: #1E40AF;
        }

        table .premium {
            width: 70px;
            height: Hug (14.78px)px;
            padding: 5px;
            border-radius: 2.78px;
            border: 0.7px;
            font-weight: 500;
            line-height: 11.13px;
            text-align: center;
        }

        table .regular {
            width: 70px;
            height: Hug (14.78px)px;
            padding:5px;
            border-radius: 2.78px 0px 0px 0px;
            border: 0.7px;
            background: #5EAA3A;
            border: 0.7px solid #93C5FD;
            font-weight: 500;
            line-height: 11.13px;
            text-align: center;
            color: #FFFFFF;
        }

        table .check {
            margin-right: 10px;
            margin-top: 3px;
        }

        table .check a{
            text-decoration: none;
            color: black;
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


        .nav-pills .nav-link.active .users-total,
        .show .nav-link .users-total {
            border: 1px solid #1B59F8;
        }
    </style>

    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>User Management<span class="heading-short">/Total User</span></h3>
            <div class="header_left_side">

                <span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
                    </svg> Download</span>
            </div>
        </div>
    </header>

    <div class="user_container">
        <div class="users-management">
            <div class="users-add-top">
                <a href="{{ route('users_add') }}" id="add-user-link">
                    <div class="users-add-user"> Add User</div>
                </a>

                <a href="{{ route('users_add') }}" id="import-user-link">
                    <div class="users-add-user" style="margin-left:55px;"> Import User File</div>
                </a>
            </div>

            <div class="users-add-top" style="margin-top:30px; margin-left:-5px;">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            <div class="users-total">
                                <div class="users-count-top">
                                    <p>Total User</p>

                                </div>
                                <h6>124</h6>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            <div class="users-total">
                                <div class="users-count-top">
                                    <p>Active User</p>
                                    <img src="IMAGES\Ellipse 50.svg" alt="">
                                </div>
                                <h6>124</h6>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">
                            <div class="users-total">
                                <div class="users-count-top">
                                    <p>Inactive User</p>
                                    <img src="IMAGES\Ellipse 51.svg" alt="">
                                </div>
                                <h6>504</h6>
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
                            <p>All</p>
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


                {{-- -------table ------ --}}
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
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="selectAll">User</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Total Order</th>
                                    <th>Total Sales</th>
                                    <th>Tag</th>
                                </tr>
                            </thead>
                            <tbody id="searchResults">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="new-user">New user</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="new-user">New user</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="new-user">New user</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="new-user">New user</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="new-user">New user</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="premium">Premium</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>

                                    <td>-</td>
                                </tr>


                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="regular">Regular</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free.-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" id="searchInput-2">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="selectAll">User</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Total Order</th>
                                    <th>Total Sales</th>
                                    <th>Tag</th>
                                </tr>
                            </thead>
                            <tbody id="searchResults-second">
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                               
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                               
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab" tabindex="0">
                        <div class="searchbaar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width: 14px; height: 14px; margin-left:10px;">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free-->
                                <path fill="#a0a0a2"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <input type="text" placeholder="Search" id="searchInput-3">
                        </div>
                        <table class="table table-striped table-hover table-borderless">
    <thead>
        <tr>
            <th><input type="checkbox" class="selectAll"> User</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Location</th>
            <th>Status</th>
            <th>Total Order</th>
            <th>Total Sales</th>
            <th>Tag</th>
        </tr>
    </thead>
    <tbody id="searchResults-three">
        <tr style="border: transparent">
            <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
            <td>+91-1234567890</td>
            <td>username@company.com</td>
            <td>Clock Tower, Dehradun</td>
            <td><button class="admin">Admin</button></td>
            <td>10</td>
            <td>50,000</td>
            <td>-</td>
        </tr>
        <tr style="border: transparent">
            <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
            <td>+91-1234567890</td>
            <td>username@company.com</td>
            <td>Clock Tower, Dehradun</td>
            <td><button class="admin">Admin</button></td>
            <td>10</td>
            <td>50,000</td>
            <td>-</td>
        </tr>
        <tr style="border: transparent">
            <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
            <td>+91-1234567890</td>
            <td>username@company.com</td>
            <td>Clock Tower, Dehradun</td>
            <td><button class="admin">Admin</button></td>
            <td>10</td>
            <td>50,000</td>
            <td>-</td>
        </tr>
    
                               
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                                <tr style="border: transparent">
                                    <td><input type="checkbox" class="check"><a href="{{route('usermanagement_userdetail')}}">Username</a></td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</button></td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><button class="admin">Admin</button></td>
                                    <td>10</td>
                                    <td>50,000</td>
                                    <td>-</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
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





        </div>
    </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            var searchInput = document.getElementById('searchInput-2');

            // Add event listener to input for filtering
            searchInput.addEventListener('input', function() {
                var filter = searchInput.value.toUpperCase();
                var table = document.getElementById('searchResults-second');
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
                row.innerHTML = `<td><input type="checkbox" class="check"> ${rowData.date}</td>
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
    document.addEventListener("DOMContentLoaded", function () {
        const selectAllCheckboxes = document.querySelectorAll(".selectAll");

        selectAllCheckboxes.forEach(function(selectAllCheckbox) {
            const checkboxes = selectAllCheckbox.closest('table').querySelectorAll(".check");

            selectAllCheckbox.addEventListener("change", function () {
                checkboxes.forEach(function (checkbox) {
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

    



</x-app-layout>
