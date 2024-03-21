<x-app-layout>
    <style>
        .nav-pills .nav-link {
            color: black;


        }

        .nav-pills .nav-link.active {
            background-color: transparent;
            border-bottom: 1px solid red;
            color: red;

        }

        .user-form {

            background-color: white;
            /* padding: 10px 50px; */
            border-radius: 3.5px;
            box-shadow: 0px 0px 4px;
        }

        .user-form .form-control {
            border: 1px solid #b1afaf;
            background-color: #ece8e8;
            outline: none !important;
        }

        .user-form .upload {
            /* padding: 10px; */
        }

        .uplod-photo {
            margin: 60px 20px;
        }

        .user-form .add-user {

            padding: 10px 20px 0px 20px;
            width: 100%
        }

        .user-form .user-id {
            border-top: 1px solid #1B59F8;
            padding-left: 30px;

        }

        .form-detail {
            padding-left: 30px;

        }

        .user-form button {
            width: 250px;
            font-size: 26px;
            margin: 30px 40%;
            padding: 10px 50px;
        }

        .user-form label {
            font-weight: bold;
        }

        .upload {
            position: relative;
            width: fit-content;
            cursor: pointer;

        }

        .upload input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .upload img {
            /* max-width: 100px;
            max-height: 100px; */
            cursor: pointer;
            margin: 50px;
        }

        .butns-group {
            margin-top: 30px;
        }

        .Wait {
            background-color: #DBA008;
            color: white;
            font-size: 10px;
            border-radius: 2.68px;
        }

        .Decline {
            background-color: #F44336;
            color: white;
            font-size: 10px;
            border-radius: 2.68px;
        }

        .Approve {
            color: white;
            background-color: #56B429;
            font-size: 10px;
            border-radius: 2.68px;
        }

        /*  */
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
            background-color: #d9d9d9;
            /* Set background color as desired */
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
            width: 100%;
        }

        @media (max-width: 700px) {
            .Multiple_section #label_border {
                width: 100%;
            }
        }

        .container {
            position: relative;
        }

        .text-center {
            position: absolute;
            display: flex;
            justify-content: center;
            top: 20%;
            left: 20%;
            align-items: center;

        }
    </style>
    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>Add User</h3>
            <div class="header_left_side">
                <span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
                    </svg> Download</span>
            </div>
        </div>
    </header>
    
        <div class="user_container d-block">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Add User</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="false">Add Multiple Users</button>
                </li>
            </ul>
    
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <form class="user-form">
                        <p class="add-user" style="font-size: 40px;">Add User</p>
                        <p class="user-id">User Id: DR0001</p>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 p-3">
                                <div class="form-detail mb-3">
                                    <label class="form-label" for="exampleInputName1">User Name</label>
                                    <input class="form-control" id="exampleInputName1" type="Name" aria-describedby="emailHelp"
                                        style="outline: none;" placeholder=  "Enter Driver Name">
    
                                </div>
                                <div class="form-detail mb-3">
                                    <label class="form-label" for="exampleInputNumber1">Phone Number</label>
                                    <input class="form-control" id="exampleInputNumber1" type="Number" placeholder= "91+">
                                </div>
                                <div class="form-detail mb-3">
                                    <label class="form-label" for="exampleInputEmail1">Email</label>
                                    <input class="form-control" id="exampleInputEmail1" type="Emaild" placeholder= "this@gmail.com">
                                </div>
                                <div class="form-detail mb-3">
                                    <label class="form-label" for="exampleInputAddress">Address</label>
                                    <input class="form-control" id="exampleInputAddress1" type="Address" placeholder= "address">
                                </div>
    
    
                                <button class="btn btn-primary" type="submit">ADD <svg width="26" height="25" viewBox="0 0 26 25"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.8931 4.63672C13.9664 4.63672 14.9957 5.06306 15.7546 5.82196C16.5135 6.58086 16.9398 7.61014 16.9398 8.68339C16.9398 9.75663 16.5135 10.7859 15.7546 11.5448C14.9957 12.3037 13.9664 12.7301 12.8931 12.7301C11.8199 12.7301 10.7906 12.3037 10.0317 11.5448C9.27282 10.7859 8.84647 9.75663 8.84647 8.68339C8.84647 7.61014 9.27282 6.58086 10.0317 5.82196C10.7906 5.06306 11.8199 4.63672 12.8931 4.63672ZM12.8931 14.7534C17.3647 14.7534 20.9865 16.5643 20.9865 18.8001V20.8234H4.7998V18.8001C4.7998 16.5643 8.42157 14.7534 12.8931 14.7534Z"
                                            fill="#F8F8F8" />
                                    </svg>
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="upload">
                                    <label for="fileInput">
                                        <img class="upload-photo" src="/IMAGES/Frame 7 (1).svg">
                                    </label>
                                    <input id="fileInput" type="file" style="display: none;" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="d-grid d-md-flex justify-content-md-end butns-group gap-2">
                        <button class="btn Wait me-md-2" type="button">Wait</button>
                        <button class="btn Decline" type="button">Decline</button>
                        <button class="btn Approve" type="button">Approve</button>
                    </div>
                </div>
    
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="Multiple_section mt-5">
    
                        <form>
                            <label class="mb-3">Upload Excel Sheet Here</label><br>
                            <div class="d-flex" id="label_border">
    
                                <div class="file-input-container">
                                    <label class="file-input-label" for="fileInput">Choose a file</label>
                                    <input class="file-input" id="fileInput" type="file">
                                </div>
    
                                <div class="container">
                                    <p class="text-center">No File Chosen</p>
                                </div>
                            </div>
                            <button class="mt-3">Submit</button>
                        </form>
                    </div>
    
                </div>
            </div>
    
    
    
        </div>
        </div>
    
        <script>
            const fileInput = document.getElementById('fileInput');
            const imgPreview = document.querySelector('.upload-photo');
    
            fileInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        </script>
    
    
    
</x-app-layout>
