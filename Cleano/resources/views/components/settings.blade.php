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

      <div class="settings_left">
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'settings-domain')" id="defaultOpen">
            <i class="fa-solid fa-globe"></i>
            &nbsp;Domain
          </button>
          
          <button class="tablinks" onclick="openCity(event, 'settings-staff-account')">
            <i class="fa-solid fa-user"></i> &nbsp;Staff Account</button>

          <button class="tablinks" onclick="openCity(event, 'settings-notification')">
            <i class="fa-solid fa-bell"></i> &nbsp;Notification</button>

          <button class="tablinks" onclick="openCity(event, 'settings-payment')">
            <i class="fa-regular fa-credit-card"></i>&nbsp;Payment</button>

          <button class="tablinks" onclick="openCity(event, 'settings-checkout')">
            <i class="fa-solid fa-cart-shopping"></i> &nbsp;
            Checkout</button>

          <button class="tablinks" onclick="openCity(event, 'settings-warehouse')">
            <i class="fa-solid fa-warehouse"></i> &nbsp;
            Warehouse</button>
          
          <button class="tablinks" onclick="openCity(event, 'settings-delivery')">
            <i class="fa-solid fa-truck-ramp-box"></i> &nbsp;
            Delivery</button>

          <button class="tablinks" onclick="openCity(event, 'settings-returns')">
            <i class="fa-solid fa-truck"></i> &nbsp;
            Returns</button>

          <button class="tablinks" onclick="openCity(event, 'settings-tax')">
            <i class="fa-solid fa-calculator"></i>&nbsp;
            Tax</button>

          <button class="tablinks" onclick="openCity(event, 'settings-extracharges')">
            <i class="fa-solid fa-money-bills"></i> &nbsp;
            Extra Charges</button>

          <button class="tablinks" onclick="openCity(event, 'settings-seo')">
            <i class="fa-brands fa-searchengin"></i> &nbsp;
            SEO</button>

          <button class="tablinks" onclick="openCity(event, 'settings-languages')">
            <i class="fa-solid fa-language"></i> &nbsp;
            Languages</button>

          <button class="tablinks" onclick="openCity(event, 'settings-support')">
            <i class="fa-solid fa-user-group"></i> &nbsp;
            Support</button>

          <button class="tablinks" onclick="openCity(event, 'settings-policies')">
            <i class="fa-regular fa-file-lines"></i>&nbsp;
            Policies</button>

          <button class="tablinks" onclick="openCity(event, 'settings-storetimings')">
            <i class="fa-solid fa-clock"></i> &nbsp;
            Store Timings
          </button>
          
        </div>
      </div>

      <div class="settings_right">

        <div id="settings-domain" class="tabcontent">
          <p>Customer Domain</p>
          <div class="domain-name">Domain Name</div>
          <div class="domain1">
          <div class="domain-link">
            <a href="">cleaneoapp.com</a>
         </div>
          <div class="domain2">
          <p class="ext">External</p>
          <a href=""><img src="IMAGES/ph_dots-three-vertical-bold.svg"/></a>
         </div>
          </div>
        </div>
        
        <div id="settings-staff-account" class="tabcontent">
           <h3>Staff account</h3>
           <p>Control and assign roles for your team members here.</p>
           <div class="staff-searchAdd">
              <div class="staff-search">&nbsp;
                <img src="\IMAGES\icon.svg" alt="">
              <input type="text" placeholder="Search.." required>
              </div>
              <button class="btn btn-primary" id="staff-add" >Add Staff</button>
            </div>
            
           <div class="staff-account-table">
            <table class="table" id="staff-table" >
              <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Contact Details</th>
              </tr>
              <tr>
                <td>This Kumar</td>
                <td>Maria Anders</td>
                <td class="staff-td"><span class="staff-td-text">Germany</span> <span class="staff-td-dot"> <img src="IMAGES\ph_dots-three-vertical-bold.svg" alt=""> </span></td>
              </tr>
              <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td class="staff-td"><span class="staff-td-text">Germany</span> <span class="staff-td-dot"> <img src="IMAGES\ph_dots-three-vertical-bold.svg" alt=""> </span></td>
              </tr>
              <tr>
                <td>Ernst Handel</td>
                <td>Roland Mendel</td>
                <td class="staff-td"><span class="staff-td-text">Uk</span> <span class="staff-td-dot"> <img src="IMAGES\ph_dots-three-vertical-bold.svg" alt=""> </span></td>
              </tr>
              <tr>
                <td>Island Trading</td>
                <td>Helen Bennett</td>
                <td class="staff-td"><span class="staff-td-text">Germany</span> <span class="staff-td-dot"> <img src="IMAGES\ph_dots-three-vertical-bold.svg" alt=""> </span></td>
              </tr>
            </table>
            </div>
           </div>
        
        <div id="settings-notification" class="tabcontent">
          <div class="notification-first-div">
          <div class="notification-content1">Auto accept orders</div>
          <div class="notification-combined">
          <div class="notification-content2">Mark orders as Accepted Automatically for the desired payment nodes</div>
          <div class="notification-content3">Never ></div>
          </div>
          <div class="notification-div2">
          <div class="notification-div2-content1">Notification</div>
          <div class="notification-div2-content2">Send order notifications to the customers automatically.</div>
          <div class="notification-div2-combined1">
            <div class="notification-div2-content3">Sender email (SMTP)</div>
            <div class="notification-div2-content4">CleaneoApp Technologies India Pvt Ltd. &lt;no-reply@cleaneoapp.com &gt;</div>
          </div>
          <div class="notification-div2-combined2">
            <div class="notification-div2-content5">WhatsApp notification</div>
            <div class="notification-div2-content6">Dukaan ></div>
          </div>
          </div>
          </div>
        </div>
          

        <div id="settings-payment" class="tabcontent">
          <div class="settings-paytm">
            <div class="settings-paytm-heading">
              <p class="settings-paytm-heading-text">paytm</p>
              <button class="settings-paytm-heading-button" >Details</button>
            </div>
            <div class="settings-paytm-content">
              <div class="settings-paytm-content-left">
                <p class="settings-paytm-content-left-pgt">Payment gateway fee</p>
                <p class="settings-paytm-content-left-no">1.49%</p>
              </div>
              <div class="settings-paytm-content-right">
                <p class="settings-paytm-content-right-tl">Transaction limit</p>
                <p class="settings-paytm-content-right-no">₹5000</p>
              </div>
          </div> 
          </div>

          <div class="settings-payment-provider">
              <h4>Payment providers</h4>
              <p >Manage payment providers to accept payments from your customers.</p>
              
              <div class="settings-payment-provider-one">
                  <div class="s-one">
                    <img src="IMAGES\lucide_wallet-cards.svg" alt="">
                  </div>
                  <div class="s-two" style="text-align:left;">
                    Credit Card / Debit Card
                  </div>
                  <div class="s-three">
                    <button class="btn btn-primary" id="setup-btn" >Set Up</button>
                  </div>
              </div>

              <div class="settings-payment-provider-one">
                <div class="s-one">
                  <img src="IMAGES\simple-icons_phonepe.svg" alt="">
                </div>
                <div class="s-two" style="text-align:left;">
                  PhonePe Payment Gateway
                </div>
                <div class="s-three">
                  <button class="btn btn-primary" id="setup-btn" >Set Up</button>
                </div>
            </div>


            <div class="settings-payment-provider-one">
              <div class="s-one">
                <img src="IMAGES\Vector (1).svg" alt="">
              </div>
              <div class="s-two" style="text-align:left;">
                Cash on delivery
                <p>Receive payments in cash upon delivery.</p>
              </div>
              <div class="s-three">
                <button class="btn btn-primary" id="setup-btn" >Set Up</button>
              </div>
          </div>

       

          </div> 

          <div class="settings-payment-mpm">
            <div class="settings-payment-mpm-left">
              <h4>Manual Payment Methods</h4>
              <p >Manage payment providers to accept payments from your customers.</p>
            </div>
            <div class="settings-paytm-content-right">
              
            </div>
          </div>


        </div> 
          
        </div>

        <div id="settings-checkout" class="tabcontent">
          settings-checkout
        </div>

        <div id="settings-warehouse" class="tabcontent">
          settings-warehouse
        </div>

        <div id="settings-delivery" class="tabcontent">
          settings-delivery
        </div>

        <div id="settings-returns" class="tabcontent">
          settings-returns
        </div>

        <div id="settings-tax" class="tabcontent">
          settings-tax
        </div>

        <div id="settings-extracharges" class="tabcontent">
          settings-extracharges
        </div>

        <div id="settings-seo" class="tabcontent">
          settings-seo
        </div>

        <div id="settings-languages" class="tabcontent">
          settings-languages
        </div>

        <div id="settings-support" class="tabcontent">
          settings-support
        </div>

        <div id="settings-policies" class="tabcontent">
          settings-policeis
        </div>

        <div id="settings-storetimings" class="tabcontent">
          settings-storetimings
        </div>



      </div>
   
    </div>

    
</x-app-layout>