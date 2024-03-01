<x-app-layout>


    <style>
        
    </style>
    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>Settings</h3>
            <div class="header_left_side">
                <span class="first"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 36 36">
                        <path fill="currentColor"
                            d="M32.51 27.83A14.4 14.4 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93a1 1 0 0 0-.34.75v1.36a1 1 0 0 0 1 1h27.8a1 1 0 0 0 1-1v-1.36a1 1 0 0 0-.34-.75M5.13 28.94a16.17 16.17 0 0 0 2.44-3a14.24 14.24 0 0 0 1.65-5.85v-4.94a8.74 8.74 0 1 1 17.47 0v4.94a14.24 14.24 0 0 0 1.65 5.85a16.17 16.17 0 0 0 2.44 3Z"
                            class="clr-i-outline clr-i-outline-path-1" />
                        <path fill="currentColor" d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28"
                            class="clr-i-outline clr-i-outline-path-2" />
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

        <div class="d-flex align-items-start">

  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>

    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>

  </div>
  <div class="tab-content" id="v-pills-tabContent">

    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

        <div class="" style="width:50%;">
        <h3>Staff account</h3>
                <p>Control and assign roles for your team members here.</p>
                <div class="tab-searchAdd"><div class="tab-search">
                    <img src="\IMAGES\icon.svg" >
                    <input type=text placeholder="Search" required>
                </div>
                <button class="btn btn-primary" id="addStaff">Add Staff</button></div>
                <div id="staffTable">
                <table class="table">
                    <tr>
                      <th>Company</th>
                      <th>Contact</th>
                      <th>Country</th>
                    </tr>
                    <tr>
                      <td>Alfreds Futterkiste</td>
                      <td>Maria Anders</td>
                      <td>Germany<img src="\IMAGES\ph_dots-three-vertical-bold.svg"></td>
                    </tr>
                    <tr>
                      <td>Centro comercial Moctezuma</td>
                      <td>Francisco Chang</td>
                      <td>Mexico<img src="\IMAGES\ph_dots-three-vertical-bold.svg"></td>
                    </tr>
                    <tr>
                      <td>Ernst Handel</td>
                      <td>Roland Mendel</td>
                      <td>Austria<img src="\IMAGES\ph_dots-three-vertical-bold.svg"></td>
                    </tr>
                    <tr>
                      <td>Island Trading</td>
                      <td>Helen Bennett</td>
                      <td>UK<img src="\IMAGES\ph_dots-three-vertical-bold.svg"></td>
                    </tr>
                    <tr>
                      <td>Laughing Bacchus Winecellars</td>
                      <td>Yoshi Tannamuri</td>
                      <td>Canada<img src="\IMAGES\ph_dots-three-vertical-bold.svg"></td>
                    </tr>
                    <tr>
                      <td>Magazzini Alimentari Riuniti</td>
                      <td>Giovanni Rovelli</td>
                      <td>Italy<img src="\IMAGES\ph_dots-three-vertical-bold.svg"></td>
                    </tr>
                  </table>
                </div>
    </div>

</div>

    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
      <div class="Auto_accept">
        <h3>Auto accept orders</h3>
        <h4 class="order">Mark orders as Accepted Automatically for the desired payment nodes</h4>
        <h4 class="order2">Never ></h4>
      </div>
      <div class="notification">
       <h3>Notification</h3>
       <p class="content1">Send order notifications to the customers automatically.</p>
       <p class="content2">Sender email (SMTP)</p>
       <p class="content3">CleaneoApp Technologies India Pvt Ltd. <no-reply@cleaneoapp.com ></p>
       <p class="content4">WhatsApp notification</p>
       <p class="content5">Dukaan ></p>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">

        <h1></h1>
    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">

        <h1>dfvbhc4</h1>
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">

        <h1>dfvbhc</h1>
    </div>

  </div>
</div>
    </div>

    
</x-app-layout>