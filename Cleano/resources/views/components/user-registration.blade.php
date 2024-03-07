<x-app-layout>
    <style>
        .user-registration {
            display: flex;
            flex-direction: column;
        }

        h3 {
            font-weight: 600;
            font-size: 16px;
            line-height: 16px;
            color: #000000;
        }

        .details {
            width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
            background: white;
            padding: 10px;
            box-shadow: 0px 4px 4px 0px #00000040;
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

        table#dynamic-table td input {
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

        .details h3 {
            font-size: 16px;
            font-weight: 600;
            line-height: 16px;
            letter-spacing: 0px;
            margin-top: 25px;
        }

        .users-basic {
            display: flex;
            justify-content: space-between;
            margin-top: 18px;
        }

        .users-basic p {
            font-size: 16px;
            font-weight: 400;
            line-height: 16px;
            letter-spacing: 0px;
            text-align: left;
        }

        .users-basic h6 {
            font-size: 16px;
            font-weight: 600;
            line-height: 16px;
            letter-spacing: 0px;
            text-align: left;
            margin-right: 75px;
        }

        .users-picture {
            display: flex;
            width: 100%;
            height: auto;
        }

        .users-photo {
            box-sizing: border-box;
            width: 162px;
            height: 170px;
            border: 1px solid #000000;
            border-radius: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .users-intro-combine
        {
            width: 260px;
            height: 16px;
            font-family: Inter;
            font-size: 16px;
            font-weight: 400;
            line-height: 16px;
            text-align: left;
            color: #333333;
            margin-left:30px;
            margin-top:20px
         }
        
    </style>
    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>User Registration</h3>
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
        <div class="user-registration">
            <h3>User Details</h3>
            <div class="details">
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
                <h3>User Details</h3>
                <div class="users-basic">
                    <p>Basic Information</p>
                    <h6>Uploaded Store Pictures</h6>
                </div>
                <div class="users-picture">
                    <div class="users-photo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                        viewBox="0 0 256 256">
                        <path fill="#699bf7"
                            d="M208 58h-28.79L165 36.67a6 6 0 0 0-5-2.67H96a6 6 0 0 0-5 2.67L76.78 58H48a22 22 0 0 0-22 22v112a22 22 0 0 0 22 22h160a22 22 0 0 0 22-22V80a22 22 0 0 0-22-22m10 134a10 10 0 0 1-10 10H48a10 10 0 0 1-10-10V80a10 10 0 0 1 10-10h32a6 6 0 0 0 5-2.67L99.21 46h57.57L171 67.33a6 6 0 0 0 5 2.67h32a10 10 0 0 1 10 10ZM128 90a42 42 0 1 0 42 42a42 42 0 0 0-42-42m0 72a30 30 0 1 1 30-30a30 30 0 0 1-30 30" />
                        </svg>
                    </div>
                    <div class="users-intro">
                        <p class="users-intro-combine">Name of the Store</p>
                        <p class="users-intro-combine">Address</p>
                        <p class="users-intro-combine">GSTIN</p>

                    </div>
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
