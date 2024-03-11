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

        .users-intro {
            display: flex;
            width: 650px;
            height: auto;
            flex-direction: column;
        }

        .users-intro-info {
            display: flex;
        }

        textarea {
            margin-left: 330px;
        }

        .users-intro-info input {
            margin-left: 250px;
            margin-top: 20px;
        }

        .users-intro-combine {
            font-size: 16px;
            font-weight: 400;
            line-height: 16px;
            text-align: left;
            color: #333333;
            margin-left: 30px;
            margin-top: 20px;
        }

        .users-store {
            display: flex;
            margin-left: 27px;
        }

        .users-store-picture {
            width: 290px;
            height: 170px;
            background: #DFDFDF;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .users-store-picture p {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 16px;
            color: #6B6B6B;
            margin-top: 8px;
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256">
                            <path fill="#699bf7"
                                d="M208 58h-28.79L165 36.67a6 6 0 0 0-5-2.67H96a6 6 0 0 0-5 2.67L76.78 58H48a22 22 0 0 0-22 22v112a22 22 0 0 0 22 22h160a22 22 0 0 0 22-22V80a22 22 0 0 0-22-22m10 134a10 10 0 0 1-10 10H48a10 10 0 0 1-10-10V80a10 10 0 0 1 10-10h32a6 6 0 0 0 5-2.67L99.21 46h57.57L171 67.33a6 6 0 0 0 5 2.67h32a10 10 0 0 1 10 10ZM128 90a42 42 0 1 0 42 42a42 42 0 0 0-42-42m0 72a30 30 0 1 1 30-30a30 30 0 0 1-30 30" />
                        </svg>
                    </div>
                    <div class="users-intro">
                        <div class="users-intro-info">
                            <p class="users-intro-combine">Name of the Store</p>
                            <input type="text" value="The Grubs Wash">
                        </div>
                        <div class="users-intro-info" style="margin-">
                            <p class="users-intro-combine">Address</p>
                            <textarea rows="5" cols="40">Mr XXXXXXX, H No 153, Sector 15-A, Chandigarh-160015, INDIA"</textarea>
                        </div>
                        <div class="users-intro-info">
                            <p class="users-intro-combine">GSTIN</p>
                            <input type="text" value="-">
                        </div>
                    </div>
                    <div class="users-store">
                        <div class="users-store-picture">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.25 2.53125H12.0008L10.8906 0.864844C10.8477 0.800577 10.7896 0.747904 10.7215 0.711511C10.6533 0.675119 10.5773 0.656136 10.5 0.656251H5.5C5.42274 0.656136 5.34665 0.675119 5.2785 0.711511C5.21035 0.747904 5.15225 0.800577 5.10938 0.864844L3.99844 2.53125H1.75C1.29416 2.53125 0.856988 2.71233 0.53466 3.03466C0.212332 3.35699 0.03125 3.79416 0.03125 4.25V13C0.03125 13.4558 0.212332 13.893 0.53466 14.2153C0.856988 14.5377 1.29416 14.7188 1.75 14.7188H14.25C14.7058 14.7188 15.143 14.5377 15.4653 14.2153C15.7877 13.893 15.9688 13.4558 15.9688 13V4.25C15.9688 3.79416 15.7877 3.35699 15.4653 3.03466C15.143 2.71233 14.7058 2.53125 14.25 2.53125ZM15.0312 13C15.0312 13.2072 14.9489 13.4059 14.8024 13.5524C14.6559 13.6989 14.4572 13.7812 14.25 13.7812H1.75C1.5428 13.7812 1.34409 13.6989 1.19757 13.5524C1.05106 13.4059 0.96875 13.2072 0.96875 13V4.25C0.96875 4.0428 1.05106 3.84409 1.19757 3.69757C1.34409 3.55106 1.5428 3.46875 1.75 3.46875H4.25C4.32726 3.46887 4.40335 3.44988 4.4715 3.41349C4.53965 3.3771 4.59775 3.32442 4.64062 3.26016L5.75078 1.59375H10.2484L11.3594 3.26016C11.4023 3.32442 11.4604 3.3771 11.5285 3.41349C11.5967 3.44988 11.6727 3.46887 11.75 3.46875H14.25C14.4572 3.46875 14.6559 3.55106 14.8024 3.69757C14.9489 3.84409 15.0312 4.0428 15.0312 4.25V13ZM8 5.03125C7.35103 5.03125 6.71663 5.22369 6.17704 5.58424C5.63744 5.94479 5.21687 6.45725 4.96852 7.05682C4.72017 7.65639 4.65519 8.31614 4.7818 8.95264C4.90841 9.58914 5.22091 10.1738 5.67981 10.6327C6.1387 11.0916 6.72336 11.4041 7.35986 11.5307C7.99636 11.6573 8.65611 11.5923 9.25568 11.344C9.85525 11.0956 10.3677 10.6751 10.7283 10.1355C11.0888 9.59587 11.2812 8.96147 11.2812 8.3125C11.2812 7.44226 10.9355 6.60766 10.3202 5.99231C9.70484 5.37695 8.87024 5.03125 8 5.03125ZM8 10.6562C7.53645 10.6562 7.08331 10.5188 6.69788 10.2613C6.31245 10.0037 6.01205 9.63768 5.83466 9.20941C5.65726 8.78115 5.61085 8.3099 5.70128 7.85526C5.79172 7.40061 6.01494 6.983 6.34272 6.65522C6.6705 6.32744 7.08811 6.10422 7.54276 6.01378C7.9974 5.92335 8.46865 5.96977 8.89691 6.14716C9.32518 6.32455 9.69122 6.62496 9.94876 7.01038C10.2063 7.39581 10.3438 7.84895 10.3438 8.3125C10.3438 8.9341 10.0968 9.53024 9.65728 9.96978C9.21774 10.4093 8.6216 10.6562 8 10.6562Z" fill="#444444"/>
                                </svg>
                            <p>Store Pictures</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
