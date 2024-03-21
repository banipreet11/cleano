<x-app-layout>
    <style>
        p {

            font-size: 20px;
            font-weight: 700;
            color: #000000;

        }


        .table_form {
            /* width: 100%; */
            margin-top: 20px;
            border: 1px solid #1B59F8;
            padding: 15px;
            border-radius: 8px;
            background-color: #FFFFFF;
            /* height: 677px; */
        }

        .table_form table {
            width: 100% !important;
        }

        .table_form #img_para {
            width: 40px;
            height: 32px;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 1.5);
            padding: 8px 0;
            border-radius: 6px;
        }

        .table_form p img {
            display: flex;
            margin: auto;
        }

        table tr th {
            text-align: start;
            font-size: 14px !important;
            font-weight: 600;
            color: #1D2433;
            background-color: #F1F3F9;
            height: 40px;
            padding: 0 20px !important;
        }

        table tr th input[type="checkbox"] {
            height: 15px;
            width: 15px;
            border: 1px solid #1D2433;

        }

        table tr td {

            font-size: 11px;
            font-weight: 400;
            color: #2E2E2E;
            text-align: start;
            height: 40px;
            padding: 10px 20px !important;
        }

        table tr td input[type="checkbox"] {
            height: 15px;
            width: 15px;
            border: 1px solid #1D2433;

        }

        table tr td button {
            font-size: 9px;
            font-weight: 500;
            color: #ffffff;
            background-color: #2148C0;
            /* width: 129px; */
            padding: 5px 20px;
            border: none;
            height: 24px;
            border-radius: 3px;
        }

        tr:nth-child(even) td {
            background-color: #F8F9FC;
        }

        .table_form_flex {
            display: flex;
        }

        .table_form_flex p {
            width: fit-content;
            /* height: 30px; */
            font-size: 12px;
            font-weight: 400;
            padding: 7px 5px;
            color: #979797;
            border: 1px solid #D9DBDE;
            box-shadow: none;
            border-radius: 6px;
        }

        .table_form_flex span {
            background-color: #6788DD;
            color: white;
            padding: 3px 4px;
            border-radius: 4px;
        }
        .usermanagement_detail {
    border: 1px solid #1b59f8;
    border-radius: 8px;
    padding: 20px;
    /* display: flex;
    flex-direction: column */
}

.usermanagement_detail .usermanagement_1 {
    margin-top: 6px;
}

.usermanagement_detail .usermanagement_1 p {
    margin-bottom: 5px;
}

.usermanagement_detail .usermanagement_1 .p1 {
    font-size: 16px;
    font-weight: 400;
    color: #2e2e2e;
}

.usermanagement_detail .usermanagement_1 .p2 {
    font-size: 15px;
    font-weight: 400;
    color: #5d5d5d;
}

.usermanagement_detail .usermanagement_1 .p3 {
    font-size: 14px;
    font-weight: 500;
    color: #2e2e2e;
}

.usermanagement_detail .usermanagement_1 .p4 {
    font-size: 13px;
    font-weight: 400;
    color: #000000;
}

.usermanagement_detail .usermanagement_1 .btn-user .btn1 {
    background-color: #30e684;
    font-size: 10px;
    font-weight: 500;
    color: #ffffff;
    border: none;
    padding: 2px;
    border-radius: 12px;
}

.usermanagement_detail .usermanagement_1 .btn-user .btn2 {
    background-color: #dbeafe;
    font-size: 8px;
    font-weight: 500;
    color: #1e40af;
    border: none;
    padding: 2px;
    border-radius: 3px;
}

.usermanagement_detail .usermanagement_1 .p5 {
    font-size: 11px;
    font-weight: 500;
    color: #000000;
    margin-top: 6px;
}

.para_add p {
    font-size: 16px;
    font-weight: 400;
    color: #2e2e2e;
}

.para_city p {
    font-size: 16px;
    font-weight: 400;
    color: #2e2e2e;
}

.user_1 p {
    font-size: 20px;
    font-weight: 400;
    color: #000000;
}

.card_section .card_section_1 {
    background-color: #b6c7f3;
    border-radius: 8px;
    padding: 10px 10px;
}

.card_section_1 p {
    margin-bottom: 0;
}
.card_section .card_section_1 .d-flex p {
    width: 100%;
    box-shadow: none;
    font-size: 13px;
    font-weight: 500;
    color: #000000;
    margin-bottom: 0 !important;
}

.items_para {
    gap: 10px !important;
    height: 20px;
    margin-top: 15px;
}

.items_para p {
    width: 100% !important;
    font-size: 12px;
    font-weight: 500;
    color: #000000;
    box-shadow: none !important;
    margin-bottom: 0 !important;
}

#btn_cash button {
    background-color: #ffffff;
    font-size: 5px;
    font-weight: 500;
    color: #000000;
    height: 14px;
    border: none;
    padding: 5px 20px;
}

.btn_delivered {
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
}

.btn_delivered .btn1 {
    background-color: #51d08b;
    color: #ffffff;
    border: none;
    padding: 5px;
    border-radius: 12px;
    font-size: 10px;
    font-weight: 500;
}

.btn_delivered .btn2 {
    font-size: 5px;
    font-weight: 500;
    border: 1px solid #000000;
    height: 13px;
    width: 42px;
    background-color: transparent;
    margin-top: 8px;
}

.card_section .card_section_2 {
    background-color: #d5e9f2;
    border-radius: 8px;
    padding: 10px 10px;
}

.card_section_2 p {
    margin-bottom: 0;
}

.card_section_1 {
    margin-top: 20px;
    width: 300px !important;
}
.card_section_2 {
    margin-top: 20px;
    width: 300px !important;
}

.card_section_1 #para_1 {
    font-size: 12px;
    font-weight: 500;
    color: #000000;
}

.card_section_1 #para_2 {
    font-size: 12px;
    font-weight: 500;
    color: #000000;
    line-height: 20px;
}

.card_section_2 #para_1 {
    font-size: 12px;
    font-weight: 500;
    color: #000000;
}

.card_section_2 #para_2 {
    font-size: 12px;
    font-weight: 500;
    color: #000000;
    line-height: 20px;
}

@media (max-width: 1230px) {
    .card_section_1 {
        width: 85% !important;
    }

    .card_section_2 {
        width: 85% !important;
    }
}

@media (max-width: 1430px) {
    .id_image img {
        width: 100%;
        /* height: 100vh; */
    }
}

@media (max-width: 991px) {
    .card_section_1 {
        width: 90% !important;
    }

    .card_section_2 {
        width: 90% !important;
    }

    #image_mb_1 {
        margin-top: 20px;
    }
}
    </style>



<header>
    <div class="d-flex justify-content-between header_box">
        <h3>User Management<span class="heading-short">/Username</span></h3>
        <div class="header_left_side">

            <span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
                </svg> Download</span>
        </div>
    </div>
</header>


            <div class="user_container" style="display: block;margin-left:10px;">

            <p><a href="/users"><img src="IMAGES\Vector(5).svg" style="margin-right:5px;width:30px;height:30px;"></a>
                User Name</p>

                <div class="usermanagement_detail">

                    <div class="row">

                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <div class="id_image">
                                        <img src="\IMAGES\1 24.svg">
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <div class="usermanagement_1">
                                        <p class="p1">Username</p>
                                        <p class="p2">username@company.com</p>

                                        <p class="p3">Monthly</p>
                                        <p class="p4">3 JAN - 3 FEB 2023</p>

                                        <div class="btn-user">
                                            <button class="btn1">Active</button>
                                            <button class="btn2">New User</button>
                                        </div>

                                        <div class="d-flex mt-3 gap-2">
                                            <img src="\IMAGES\ph_wallet-bold.svg">
                                            <p class="p5"> 300.00</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-7 col-md-12 col-sm-12" id="image_mb_1">

                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-5 col-md-5 col-sm-5  ">

                                    <div class="para_add">
                                        <p> <img src="\IMAGES\material-symbols_call_1.svg"> +91-1234567890 </p>
                                    </div>

                                    <div class="para_city mt-5">
                                        <p>City:
                                            Mr XXXXXXX, H No 153, Sector 15-A,
                                            <br> Chandigarh-160015, INDIA
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <p class="" style="text-align: end;">Edit <img src="\IMAGES\tabler_edit_1.svg"></p>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <div class="user_1 mt-4">

                    <p>All Orders</p>


                    <div class="table_form ">

                        <div class="d-flex gap-4">

                            <p id="img_para"><img src="\IMAGES\filter.svg"></p>

                            <div class="table_form_flex">
                                <div class="">
                                    <p>Today <span>425</span></p>
                                </div>
                            </div>
                            <div class="table_form_flex">
                                <div class="">
                                    <p>Yesterday <span>425</span></p>
                                </div>
                            </div>

                            <div class="table_form_flex">
                                <div class="">
                                    <p>Vendor <span>425</span></p>
                                </div>
                            </div>

                            <div class="table_form_flex">
                                <div class="">
                                    <p>Email <span>425</span></p>
                                </div>
                            </div>

                            <div class="table_form_flex">
                                <div class="">
                                    <p>Number <span>425</span></p>
                                </div>
                            </div>


                        </div>

                        <div class="search_icon"
                            style="   border: 1px solid #687182 !important;
                        width: 30%;
                        margin: 15px 0 !important;
                        display: flex;
                        border-radius: 6px;
                        padding: 5px 10px;
                        background-color: #FFFFFF;">

                            <img src="\IMAGES\icon.svg">
                            <input type="text" id="searchInput" placeholder="  Search..."
                                style="  border: none;
                            outline: none;
                            width: 100%;
                            margin-left:10px;
                            ">
                        </div>

                        <div class="card_section">
                            <div class="row">

                                <div class="col-lg-4 col-md-6 col-sm-12">

                                    <div class="card_section_1">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>

                                                    <div class="" style="margin-top: -9px;">
                                                        <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                            src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                            src="\IMAGES\Group1.svg">
                                                    </div>

                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card_section_2">
                                        <div class="d-flex justify-content-between">
                                            <p id="para_1">Order #1223344</p>
                                            <p id="para_2">15 JAN 2024, 08:30 AM</p>
                                        </div>
                                        <div class="d-flex justify-content-between gap-4 mt-1 mb-3" id="btn_cash">

                                            <div class="d-flex gap-2">
                                                <img src="\IMAGES\Frame 1621.svg">
                                                <div class="items_para gap-3">
                                                    <p> 5 Items</p>
                                                    <p> Rs 500</p>
                                                    <img src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group.svg"> <img src="\IMAGES\Group.svg"> <img
                                                        src="\IMAGES\Group1.svg">
                                                </div>
                                            </div>
                                            <button class="mt-2">Cash</button>
                                        </div>
                                        <div class="btn_delivered">
                                            <button class="btn1">Delivered</button>
                                            <button class="btn2">Detail</button>
                                        </div>
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
