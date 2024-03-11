<x-app-layout>
    <style>
        img {
            width: 14px;
            height: 14px;
            color: #333333;
            margin-top: -70px;
        }

        .container {
            display: flex;
        }

        .btn {
            outline: none;
            border: none;
            font-family: Inter;
            font-size: 13px;
            font-weight: 500;
            line-height: 16px;
            text-align: left;
            border-bottom: 1px solid #E71D36;
            margin-top: -20px;
        }

        .text-md-left {
            margin-top: 20px;
        }

        .form-div {
            width: 1112.83px;
            height: 911px;
            border-radius: 8.03px;
            background: #FFFFFF;
        }

        .form-text {
            width: 100%;
            height: 15px;
            font-family: Inter;
            font-size: 12px;
            font-weight: 400;
            line-height: 15px;
            text-align: left;
            color: #696D61;
            border: none;
            padding-left: 30px;
            padding-top: 20px;
        }

        .form-heading {
            width: 100%;
            height: 35.12px;
            font-family: Inter;
            font-size: 24px;
            font-weight: 700;
            line-height: 29px;
            text-align: center;
            //padding-left:60px;
        }

        .form-combine2 {
            width: 1022.07px;
            height: 911px;
            margin-top: 25px;
        }

        .form-combine2-text1 {
            padding-left: 40px;
            margin-top: 25px;
        }

        #file-input-container {
            border: 1px solid rgb(155, 150, 150);
            margin-left: 35px;
            margin-top: 20px;
            width: 100%;
        }

        #file-input {
            padding: 5px;
        }

        #file-input-container input {
            border: none;
            width: 100%;
            height: auto;
            outline: none;
        }

        input::placeholder {
            padding: 5px;
            color: black;
        }
    </style>
    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>Agent Registration</h3>
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
        <div class="delivery">
            <img src="IMAGES/Vector(5).svg">
            <div class="container">
                <button class="btn">Add Agent</button>
                <button class="btn">Add Multiple Agent</button>
            </div>
            <div class="form-div">
                <div class="form-combine1">
                    <div class="form-text">Upload Document</div>
                    <div class="form-heading"><u>Agent Registration Form</u></div>
                </div>
                <div class="form-combine2">
                    <div class="form-combine2-text1"><b>Upload Business License or Registration Certificate:</b></div>
                    <div id="file-input-container">
                        <input type="file" id="file-input">
                        <label for="file-input" id="file-input-label"></label>
                    </div>
                    <div class="form-combine2-text1"><b>Insurance Certificate(if available):</b></div>
                    <div id="file-input-container">
                        <input type="file" id="file-input">
                        <label for="file-input" id="file-input-label"></label>
                    </div>
                    <div class="form-combine2-text1"><b>Photo ID(e.g.,Passport,Driver's License):</b></div>
                        <div id="file-input-container">
                        <input type="file" id="file-input">
                        <label for="file-input" id="file-input-label"></label>
                        </div>
                    <div class="form-combine2-text1"><b>Bank Name:</b></div>
                    <div id="file-input-container" style="height:45px";><input type="text">
                    </div>
                    <div class="form-combine2-text1"><b>Account Number:</b></div>
                    <div id="file-input-container" style="height:45px";><input type="text">
                    </div>
                    <div class="form-combine2-text1"><b>Account Holder Name:</b></div>
                    <div id="file-input-container" style="height:45px";><input type="text">
                    </div>
                    <div class="form-combine2-text1"><b>UPI ID:</b></div>
                    <div id="file-input-container" style="height:45px";><input type="text">
                    </div>
                    <div class="form-combine2-text1"><b>Availability Schedule(days and hours):</b></div>
                    <div id="file-input-container" style="height:45px";><input type="text">
                    </div>
                    <div class="form-combine2-text1"><b>Preferred Communication Channels:</b></div>
                    <div id="file-input-container" style="height:45px";><input type="text" placeholder="Email">
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
