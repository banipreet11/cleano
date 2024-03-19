<x-app-layout>
    <style>
        .user_container{
            margin-left: 120px;
        }
        .vendor-name{
            font-weight: bold;
            display: flex;

        }
        .main-sec-1{
            display: flex;
            justify-content: space-between;
            width:100%;
              }

        .vendor-name span{
         font-size: 20px;
         margin: 5px;
        }

        .btn-group{
            gap: 10px;
        }

        .btn-group .dropdown button{
            outline: none;
            height: 36px;
            border: 1px solid #0430A1;
        }


        .main-sec-2{
            width: 100%;
            border: 1px solid #0430A1;
            padding: 10px;
            border-radius: 8px;
        }
        .main-sec-2 .content button{
            color: #1E40AF;
            border: 1px solid #93C5FD;
            background-color: #DBEAFE;
            border-radius: 3px;
            font-size: 9px;
        }
        .main-sec-2  .contct-info{
            border-left:1px solid black; 
        }
        .last-dv {
    width: 98%;
    border: 1px solid #0430A1;
    margin-left: 130px;
    height: 680px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5); 
}
        .last-dv button{
        margin: 15px 10px;
        border: 1px solid lightgray;
        background-color: transparent;
        color:#979797;
        font-size: 13px;
        }
        .last-dv button:hover{
            background: transparent;
            color:#979797;
        }
        .last-dv  svg{
            margin-top: 15px;
        
        }
        .last-dv button span{
            background-color: #6788DD;
            color: white;
            margin-right: -5px;
            margin-left: 5px;
            font-size: 11px;
            padding: 5px;
            border-radius: 4px;
        }
        .edit-btn{
            border: none;
            background: transparent;
        }

        .searchbaar{
			width: 320px;
			height: 38px;
			border: 1px solid rgb(181, 180, 180);
			border-radius: 6px;
            color: white;
            margin-left: 20px;
	
		}
		.searchbaar #searchInput{
			overflow: hidden;
			width: 70%;
			border: none;
			outline: none;
			font-size: 13px;
            background: transparent;

			
				}
                .btn-group{
                    gap: 30px;
                }
                .last-dv .wash{
                    height: 137px;
                    border-radius: 20px;
                    background-color: #8FA5D0;
                    margin-top: 35px;
                    margin-left:25px; 
                    text-align: center;
                    width: 206px;
                    padding: 15px 10px;
                }
                .last-dv p{
                    font-weight: bold;
                    
                }
                .dropdown .btn{
                    padding: 0 30px;
                   
                }
                .dropdown .dropdown-menu{
                    width: 174px;
                 border-top: 2px solid black;
                 border-bottom: 1px solid black;
                 border-left: 1px solid black;
                 border-right: 1px solid black;
                  box-shadow: 0px 6px 5px -4px rgba(0, 0, 0, 0.5); 
                }
                .checkbox-container {
        display: flex;
        align-items: center;
    }
    .checkbox-container span{
        font-size: 8px;
    }
    .click-box {
        margin-right: 5px;
        margin-left: 5px; /* Adjust the spacing between the checkbox and the text */
    }
                .dropdown ul .text-center{
                    width: 70px;
                    height: 15px;
                    font-size: 8px;
                    margin-left: 30px;
                   
                }
                
                /* .btn.active {
                    border-bottom: 2px solid black*/

    


    </style>
    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>Vendor Management</h3>
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

    <div class="user_container d-block">

      <div class="main-sec-1 d-flex">
        <div class="vendor-name ">
            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.40625 20.1562H36.2812C36.6376 20.1562 36.9794 20.2978 37.2314 20.5498C37.4834 20.8018 37.625 21.1436 37.625 21.5C37.625 21.8564 37.4834 22.1982 37.2314 22.4502C36.9794 22.7022 36.6376 22.8438 36.2812 22.8438H9.40625C9.04987 22.8438 8.70808 22.7022 8.45608 22.4502C8.20407 22.1982 8.0625 21.8564 8.0625 21.5C8.0625 21.1436 8.20407 20.8018 8.45608 20.5498C8.70808 20.2978 9.04987 20.1562 9.40625 20.1562Z" fill="#333333"/>
                <path d="M9.96301 21.4997L21.1081 32.6421C21.3604 32.8944 21.5021 33.2367 21.5021 33.5935C21.5021 33.9503 21.3604 34.2925 21.1081 34.5449C20.8558 34.7972 20.5135 34.9389 20.1567 34.9389C19.7999 34.9389 19.4576 34.7972 19.2053 34.5449L7.11157 22.4511C6.98644 22.3263 6.88715 22.178 6.81941 22.0148C6.75167 21.8515 6.7168 21.6765 6.7168 21.4997C6.7168 21.323 6.75167 21.148 6.81941 20.9847C6.88715 20.8215 6.98644 20.6732 7.11157 20.5484L19.2053 8.45462C19.4576 8.2023 19.7999 8.06055 20.1567 8.06055C20.5135 8.06055 20.8558 8.2023 21.1081 8.45462C21.3604 8.70694 21.5021 9.04916 21.5021 9.40599C21.5021 9.76283 21.3604 10.105 21.1081 10.3574L9.96301 21.4997Z" fill="#333333"/>
                </svg>
                 
            <span>Vendor Name</span>
        </div>

          <div class="btn-group">

            
                <div class="dropdown">
                    <button class="btn" type="button" onclick="adjustButtonWidth(this)" data-bs-toggle="dropdown" aria-expanded="false">
                      Pause
                    </button>
                    <ul class="dropdown-menu">
                   <div class="d-flex p-2 gap-2">
                    <input type="date" id="start_date" style="width:80px;" placeholder="Start date" value="Start Date">
                    <input type="text" style="width:80px;" >
                   </div>
                   <div class="d-flex p-2 gap-2">
                    <input type="date" style="width:80px;">
                    <input type="text" style="width:80px;">
                   </div>
                   <div class="checkbox-container">
                    <input type="checkbox" class="px-2 click-box">
                    <span>Apply for given Date*</span>
                </div>
                   <button class="btn btn-primary text-center">Apply</button>
                    </ul>
                  </div>
           
                  <div class="dropdown">
                    <button class="btn" type="button" onclick="adjustButtonWidth(this)" data-bs-toggle="dropdown" aria-expanded="false">
                      Close
                    </button>
                    <ul class="dropdown-menu">
                   <div class="d-flex p-2 gap-2">
                    <input type="date" id="start_date" style="width:80px;" placeholder="Start date" value="Start Date">
                    <input type="text" style="width:80px;" >
                   </div>
                   <div class="d-flex p-2 gap-2">
                    <input type="date" style="width:80px;">
                    <input type="text" style="width:80px;">
                   </div>
                   <div class="checkbox-container">
                    <input type="checkbox" class="px-2 click-box">
                    <span>Apply for given Date*</span>
                </div>
                   <button class="btn btn-primary text-center">Apply</button>
                    </ul>
                  </div>

                  <div class="dropdown">
                    <button class="btn" type="button" onclick="adjustButtonWidth(this)" data-bs-toggle="dropdown" aria-expanded="false">
                      Premium
                    </button>
                    <ul class="dropdown-menu">
                   <div class="d-flex p-2 gap-2">
                    <input type="date" id="start_date" style="width:80px;" placeholder="Start date" value="Start Date">
                    <input type="text" style="width:80px;" >
                   </div>
                   <div class="d-flex p-2 gap-2">
                    <input type="date" style="width:80px;">
                    <input type="text" style="width:80px;">
                   </div>
                   <div class="checkbox-container">
                    <input type="checkbox" class="px-2 click-box">
                    <span>Apply for given Date*</span>
                </div>
                   <button class="btn btn-primary text-center">Apply</button>
                    </ul>
                  </div>
        </div>
    </div>
    <br>

    
       <div class="container main-sec-2">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="d-flex">
            <img src="IMAGES\1 24.svg">
            <div class="px-2 py-0 content">
                <p>Vendor Name</p>
                <p>username@company.com</p>
                <p>Service: </p>
                   <sapn>
                    <button class="px-2">DryClean</button> 
                    <button class="px-2">Wash</button>  
                    <button class="px-2">Option</button>

                   </sapn>
                  <div class="mt-3"> <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.438 15.3125C21.438 15.6586 21.3353 15.997 21.143 16.2847C20.9508 16.5725 20.6774 16.7968 20.3577 16.9293C20.0379 17.0617 19.686 17.0964 19.3466 17.0289C19.0071 16.9614 18.6953 16.7947 18.4505 16.5499C18.2058 16.3052 18.0391 15.9934 17.9716 15.6539C17.9041 15.3144 17.9387 14.9626 18.0712 14.6428C18.2036 14.323 18.4279 14.0497 18.7157 13.8574C19.0035 13.6651 19.3419 13.5625 19.688 13.5625C20.1521 13.5625 20.5972 13.7469 20.9254 14.0751C21.2536 14.4033 21.438 14.8484 21.438 15.3125ZM25.813 11.8125V20.5625C25.813 21.4908 25.4442 22.381 24.7878 23.0374C24.1315 23.6938 23.2412 24.0625 22.313 24.0625H6.56297C5.63471 24.0625 4.74447 23.6938 4.0881 23.0374C3.43172 22.381 3.06297 21.4908 3.06297 20.5625V7.53813C3.04951 7.0701 3.13009 6.60413 3.29995 6.16781C3.4698 5.73149 3.72547 5.33368 4.05183 4.99794C4.37819 4.66221 4.76859 4.39536 5.19992 4.21321C5.63126 4.03106 6.09475 3.93731 6.56297 3.9375H21.0005C21.3486 3.9375 21.6824 4.07578 21.9285 4.32192C22.1747 4.56806 22.313 4.9019 22.313 5.25C22.313 5.5981 22.1747 5.93194 21.9285 6.17808C21.6824 6.42422 21.3486 6.5625 21.0005 6.5625H6.56297C6.44563 6.56244 6.32948 6.58598 6.22142 6.63172C6.11336 6.67746 6.01561 6.74447 5.93398 6.82875C5.85234 6.91304 5.7885 7.01289 5.74623 7.12235C5.70397 7.23181 5.68416 7.34866 5.68797 7.46594V7.47469C5.70635 7.70636 5.81267 7.92223 5.98513 8.07802C6.15759 8.2338 6.38312 8.3177 6.61547 8.3125H22.313C23.2412 8.3125 24.1315 8.68125 24.7878 9.33763C25.4442 9.994 25.813 10.8842 25.813 11.8125ZM23.188 11.8125C23.188 11.5804 23.0958 11.3579 22.9317 11.1938C22.7676 11.0297 22.545 10.9375 22.313 10.9375H6.61547C6.30254 10.9376 5.99087 10.8979 5.68797 10.8194V20.5625C5.68797 20.7946 5.78016 21.0171 5.94425 21.1812C6.10835 21.3453 6.33091 21.4375 6.56297 21.4375H22.313C22.545 21.4375 22.7676 21.3453 22.9317 21.1812C23.0958 21.0171 23.188 20.7946 23.188 20.5625V11.8125Z" fill="#333333"/>
                    </svg>
                    <span>300.00</span></div>
                
            </div>
           
          </div>

         
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 contct-info" >
                <button class="float-end edit-btn">
                    <span>Edit</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 7H6C5.46957 7 4.96086 7.21071 4.58579 7.58579C4.21071 7.96086 4 8.46957 4 9V18C4 18.5304 4.21071 19.0391 4.58579 19.4142C4.96086 19.7893 5.46957 20 6 20H15C15.5304 20 16.0391 19.7893 16.4142 19.4142C16.7893 19.0391 17 18.5304 17 18V17" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 5.00011L19 8.00011M20.385 6.58511C20.7788 6.19126 21.0001 5.65709 21.0001 5.10011C21.0001 4.54312 20.7788 4.00895 20.385 3.61511C19.9912 3.22126 19.457 3 18.9 3C18.343 3 17.8088 3.22126 17.415 3.61511L9 12.0001V15.0001H12L20.385 6.58511Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                </button>
               <div class="mt-2">
                <span class="">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.95 18C14.8667 18 12.8083 17.546 10.775 16.638C8.74167 15.73 6.89167 14.4423 5.225 12.775C3.55833 11.1083 2.271 9.25833 1.363 7.225C0.455 5.19167 0.000666667 3.13333 0 1.05C0 0.75 0.0999999 0.5 0.3 0.3C0.5 0.0999999 0.75 0 1.05 0H5.1C5.33333 0 5.54167 0.0793332 5.725 0.238C5.90833 0.396667 6.01667 0.584 6.05 0.8L6.7 4.3C6.73333 4.56667 6.725 4.79167 6.675 4.975C6.625 5.15833 6.53333 5.31667 6.4 5.45L3.975 7.9C4.30833 8.51667 4.704 9.11233 5.162 9.687C5.62 10.2617 6.12433 10.816 6.675 11.35C7.19167 11.8667 7.73333 12.346 8.3 12.788C8.86667 13.23 9.46667 13.634 10.1 14L12.45 11.65C12.6 11.5 12.796 11.3877 13.038 11.313C13.28 11.2383 13.5173 11.2173 13.75 11.25L17.2 11.95C17.4333 12.0167 17.625 12.1377 17.775 12.313C17.925 12.4883 18 12.684 18 12.9V16.95C18 17.25 17.9 17.5 17.7 17.7C17.5 17.9 17.25 18 16.95 18Z" fill="#333333"/>
                        </svg>
                        <span class="px-1 mb-4 ">+91-1234567890</span>
                        <p class="py-2">City:<br>
                            Mr XXXXXXX, H No 153, Sector <br>15-A, Chandigarh-160015, INDIA</p>

                            
                       
                </div> 
                </div>

                
            </div>
        </div>
    </div>

        <h5 style="margin:20px 150px;">All Services</h5>

        <div class="py-3 container">
            <div class="last-dv">
                <div class="d-flex justify-content-end align-items-center">
                    <span class="mr-5" style="margin-right: 10px;">Export</span>
                    <span style="margin-right: 10px; margin-bottom: 6px;">
                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.9836 5.30048H9.50636V1.23172C9.50636 0.784157 9.08829 0.417969 8.57731 0.417969H4.86109C4.35011 0.417969 3.93204 0.784157 3.93204 1.23172V5.30048H2.45484C1.62798 5.30048 1.20991 6.17933 1.79521 6.69199L6.05957 10.4271C6.4219 10.7445 7.0072 10.7445 7.36954 10.4271L11.6339 6.69199C12.2192 6.17933 11.8104 5.30048 10.9836 5.30048ZM0.21582 13.438C0.21582 13.8855 0.633895 14.2517 1.14487 14.2517H12.2935C12.8045 14.2517 13.2226 13.8855 13.2226 13.438C13.2226 12.9904 12.8045 12.6242 12.2935 12.6242H1.14487C0.633895 12.6242 0.21582 12.9904 0.21582 13.438Z" fill="#4D4D4D"/>
                        </svg>
                    </span>
                </div>
<div class="d-flex px-3">
    <svg width="50" height="42" viewBox="0 0 50 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_ddd_137_12060)">
        <rect x="5" y="3" width="40" height="32" rx="6" fill="white"/>
        <path d="M30.79 13.6156C31.3029 12.9591 30.8351 12 30.002 12H20.0019C19.1687 12 18.7009 12.9591 19.2138 13.6156L24.0398 19.7287C24.1772 19.9045 24.2518 20.1212 24.2518 20.3443V25.7961C24.2518 25.9743 24.4672 26.0635 24.5932 25.9375L25.6054 24.9254C25.6991 24.8316 25.7518 24.7044 25.7518 24.5718V20.3443C25.7518 20.1212 25.8264 19.9045 25.9638 19.7287L30.79 13.6156Z" fill="#464F60"/>
        </g>
        <defs>
        <filter id="filter0_ddd_137_12060" x="0" y="0" width="50" height="42" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="2"/>
        <feGaussianBlur stdDeviation="2.5"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0.34902 0 0 0 0 0.376471 0 0 0 0 0.470588 0 0 0 0.1 0"/>
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_137_12060"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feMorphology radius="1" operator="dilate" in="SourceAlpha" result="effect2_dropShadow_137_12060"/>
        <feOffset/>
        <feColorMatrix type="matrix" values="0 0 0 0 0.27451 0 0 0 0 0.308497 0 0 0 0 0.376471 0 0 0 0.16 0"/>
        <feBlend mode="normal" in2="effect1_dropShadow_137_12060" result="effect2_dropShadow_137_12060"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="1"/>
        <feGaussianBlur stdDeviation="0.5"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
        <feBlend mode="normal" in2="effect2_dropShadow_137_12060" result="effect3_dropShadow_137_12060"/>
        <feBlend mode="normal" in="SourceGraphic" in2="effect3_dropShadow_137_12060" result="shape"/>
        </filter>
        </defs>
        </svg>
<button class="btn btn-primary">All  <span>425</span></button>

<button class="btn btn-primary">Pending<span>425</span></button>

<button class="btn btn-primary">Accepted <span>425</span></button>

<button class="btn btn-primary">Shipping <span>425</span></button>

<button class="btn btn-primary">Delivered <span>425</span></button>

<button class="btn btn-primaryb px-4">Other</button>

    </div>
    <div class="searchbaar">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 14px; height: 14px; margin:10px 5px;">
					<!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free
				 Copyright 2024 Fonticons, Inc.--><path fill="#a0a0a2" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
				<input type="text" placeholder="Search" id="searchInput">
	</div>
   
        
    <div class="row">
        <div class="col-lg-3">
            <div class="wash">
                <img src="IMAGES/img/machine.svg" alt="">
                
            </div>
            <p class="text-center py-1">Wash</p>
        </div>

        <div class="col-lg-3 ">
            <div class="wash ">
                <img src="IMAGES\img\Window cleaning (1).svg" alt="">
            </div>
            <p class="text-center py-1">Dry cleaning</p>
        </div>
        <div class="col-lg-3">
            <div class="wash">
                <img src="IMAGES\img\iron (1).svg" alt="">
            </div>
            <p class="text-center py-1">Ironing </p>
        </div>
        <div class="col-lg-3">
            <div class="wash">
                <img src="IMAGES/img/machine.svg" alt="">
            </div>
            <p class="text-center py-1">Stain Removal</p>
        </div>
        <div class="col-lg-3">
            <div class="wash">
                <img src="IMAGES/img/washing machine with cloth.svg" alt="">
            </div>
            <p class="text-center py-1">Fabric Wash</p>
        </div>
        <div class="col-lg-3">
            <div class="wash">
                <img src="IMAGES/img/machine.svg" alt="">
            </div>
            <p class="text-center py-1">Express Service</p>
        </div>
        <div class="col-lg-3">
            <div class="wash">
                <img src="IMAGES/img/machine.svg" alt="">
            </div>
            <p class="text-center py-1">Wash</p>
        </div>
        <div class="col-lg-3">
            <div class="wash">
                <img src="IMAGES/img/machine.svg" alt="">
            </div>
            <p class="text-center py-1">Wash</p>
        </div>
      
    </div>

            </div>

        </div>
 
      
    </div>
    <script>
       // Set placeholder for date input
var startDateInput = document.getElementById('start_date');
startDateInput.addEventListener('focus', function() {
    if (!this.value) {
        this.setAttribute('data-placeholder', 'Start Date');
    }
});

startDateInput.addEventListener('blur', function() {
    if (this.value === '') {
        this.removeAttribute('data-placeholder');
    }
});
    </script>
  
<script>
    function adjustButtonWidth(button) {
        button.style.width = '174px';
    }
    let previousButton = null;

    function adjustButtonWidth(button) {
       
        if (previousButton !== null) {
            previousButton.style.width = '';
        }
        
        
        button.style.width = '174px';
        button.style.border = ' 1px solid #222B45';

        previousButton = button;
    }
</script>
    

</x-app-layout>