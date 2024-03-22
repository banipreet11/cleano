<x-app-layout>
    <style>
        .Agent-Registration-section .nav-pills .nav-link {
    color: #696d61;
    font-size: 13px;
    font-weight: 500;
    line-height: 16px;
    border-bottom: 1px solid #696d61;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.Agent-Registration-section .nav-pills .nav-link.active {
    background: transparent;
    color: #e71d36;

    font-size: 13px;
    font-weight: 500;
    line-height: 16px;
    border-bottom: 1px solid #e71d36;
    border-radius: none !important;
}

.Agent-Registration-section .Agent_tabs h3 {
    font-size: 24px;
    font-weight: 700;
    line-height: 29px;
    text-align: center;
    text-decoration: underline;
}

.Agent_tabs {
    background-color: #ffffff;
    border-radius: 8.03px;
    padding: 40px 40px 10px 40px;
    width: 100%;
}



.Agent_tabs .Agent_tabs_form p {
    font-size: 12px;
    font-weight: 400;
    line-height: 15px;
    margin-bottom: 0;
    color: #696d61;
}

.Agent_tabs form label {
    font-size: 14px;
    color: #000000;
    font-weight: 700;
}

.Agent_tabs form input[type="file"] {
    border: 1px solid #e2e2e2;
    width: 100%;
    padding: 8px;
    border-radius: 5px;
}

.Agent_tabs form input[type="text"] {
    border: 1px solid #e2e2e2;
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    outline: none;
}

.Agent_tabs form select {
    font-size: 15px;
    width: 100%;
    padding: 10px 0px;
    border: 1px solid rgb(205, 203, 203);
    border-radius: 5px;
    outline: none;
}

.Agent_tabs form .btn_check {
    display: flex;
    justify-content: space-between;
}

.Agent_tabs .btn_Submit button {
    border: none;
    background-color: #4b62dc;
    border-radius: 8px;
    font-size: 24px;
    font-weight: 700;
    color: #ffffff;
    height: 35px;
    width: 112px;
}

@media (max-width: 540px) {
    .Agent-Registration-section .Agent_tabs h3 {
        font-size: 18px;
    }

    .Agent_tabs form label {
        font-size: 10px;
    }

    .Agent_tabs .btn_Submit button {
        border-radius: 8px;
        font-size: 20px;
        height: 30px;
        width: 100px;
        margin-top: 8px;
    }

    .Agent_tabs form .btn_check {
        display: flex;
        flex-wrap: wrap;
    }

    .Agent_tabs form .btn_check label {
        margin-bottom: 0px !important;
    }
}

.Multiple_section {
    background-color: #ffffff;
    border-radius: 8.03px;
}

.Multiple_section form {
    padding: 10px 20px 30px 20px;
}

.Multiple_section form label {
    font-size: 16px;
    font-weight: 700;
    line-height: 18px;
    color: #000000;
}

.Multiple_section form input[type="file"] {
    border: none;
}

.Multiple_section button {
    background-color: #4b62dc;
    width: 112px;
    height: 35px;
    border: none;
    border-radius: 8px;

    font-size: 20px;
    font-weight: 400;
    line-height: 24px;
    color: #ffffff;
}

.Multiple_section .file-input-container {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.Multiple_section .file-input-label {
    display: block;
    padding: 8px 12px;
    background-color: #d9d9d9; /* Set background color as desired */
    /* border: 1px solid #aaa; */
    border-radius: 4px;
    cursor: pointer;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 13px;
    font-weight: 500;
    color: #000000;
    /* width: 91px; */
    height: 37px;
}

.Multiple_section .file-input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}

.Multiple_section p {
    font-size: 15px;
    text-align: center;
}

.Multiple_section #label_border {
    border: 1px solid #d7dedd;
    border-radius: 6px;
    width: 50%;
}

@media (max-width: 700px) {
    .Multiple_section #label_border {
        width: 100%;
    }
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

       <div class="container">
        <div class="Agent-Registration-section">

            <div class="mt-2">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-Agent-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Agent" type="button" role="tab"
                            aria-controls="pills-Agent" aria-selected="true">Add Agent</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Multiple-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Multiple" type="button" role="tab"
                            aria-controls="pills-Multiple" aria-selected="false">Add Multiple Agent</button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">


                    <div class="tab-pane fade show active" id="pills-Agent" role="tabpanel"
                        aria-labelledby="pills-Agent-tab">

                        <div class="Agent_tabs mt-5">

                            <div class="Agent_tabs_form">
                                <p>Upload Document</p>
                                <h3 class="mb-3">Agent Registration Form</h3>
                            </div>

                            <form>
                                <div class="mb-4">
                                    <label class="mb-2">Upload Business License or Registration Certification
                                        :</label><br>
                                    <input type="file">
                                </div>

                                <div class="mb-4">
                                    <label class="mb-2">Insurance Certification (if applicable)
                                        :</label><br>
                                    <input type="file">
                                </div>

                                <div class="mb-4">
                                    <label class="mb-2">Photo ID (e.g., Passport, Driver's License)
                                        :</label><br>
                                    <input type="file">
                                </div>

                                <div class="mb-4">
                                    <label class="mb-2">Bank Name
                                        :</label><br>
                                    <input type="text">
                                </div>

                                <div class="mb-4">
                                    <label class="mb-2">Account Number
                                        :</label><br>
                                    <input type="text">
                                </div>


                                <div class="mb-4">
                                    <label class="mb-2">Account Holder Name
                                        :</label><br>
                                    <input type="text">
                                </div>

                                <div class="mb-4">
                                    <label class="mb-2">UPI ID
                                        :</label><br>
                                    <input type="text">
                                </div>


                                <div class="mb-4">
                                    <label class="mb-2">Availability Schedule (days and hours)
                                        :</label><br>
                                    <input type="text">
                                </div>


                                <div class="mb-4">
                                    <label class="mb-2">Preferred Communication Channels
                                        :</label><br>
                                    <Select>
                                        <option selected>Email</option>
                                        <option></option>
                                        <option></option>
                                    </Select>
                                </div>

                                <div class="mb-4 btn_check">
                                    <div class="">
                                        <input type="checkbox">
                                        <label class="mb-2" id="checkbox_in">I agree to comply with company
                                            policies and
                                            standards
                                        </label><br>
                                    </div>

                                    <div class="btn_Submit">
                                        <button>Submit</button>
                                    </div>
                                </div>


                            </form>

                        </div>

                    </div>


                    <div class="tab-pane fade" id="pills-Multiple" role="tabpanel"
                        aria-labelledby="pills-Multiple-tab">

                        <div class="Multiple_section mt-5">
                            <form>
                                <label class="mb-3">Upload Excel Sheet Here</label><br>
                                <div class="d-flex" id="label_border">
                                    
                                    <div class="file-input-container">
                                        <label for="fileInput" class="file-input-label">Choose a file</label>
                                        <input type="file" id="fileInput" class="file-input">
                                    </div>

                                    <div>
                                        <p style="text-align: center"> No File Chosen</p>
                                    </div>
                                </div>
                                <button class="mt-3">Submit</button>
                            </form>
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

