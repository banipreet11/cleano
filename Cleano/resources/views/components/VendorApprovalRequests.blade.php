<x-app-layout>

    <style>
        #vendor_add {
            font-size: 16px;
            font-weight: 600;
            color: #000000;
        }
        .VendorApprovalRequest{
            width:100%;
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

        .table_form p {
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
            padding: 0px 20px;
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



        .seacrh_icon input[type="text"]::placeholder {

            font-size: 13px;
            font-weight: 400;
            color: #A1A9B8;
        }

        .Shop-add-1 {
            box-shadow: 0px 0px 5px 0px #b1b1b1;
            background-color: #FFFFFF;
            padding: 15px 25px;
            margin-top: 20px;
            border-radius: 10px;
        }

        .Shop_detail .Shop-add-1 table {
            border: 1px solid #1B59F8;
            width: 100%;
        }

        .basic_iinfo ul li {

            font-size: 16px;
            font-weight: 400;
            color: #333333;
            line-height: 40px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination button {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            cursor: pointer;
            margin-left: 10px;
            border-radius: 4px;
            background-color: #ffffff;
           
        }

        .pagination button.active {
            /* background-color: #007bff; */
            color: white;
            border:1px solid #1B59F8;
            color:#000000;
        }
    </style>
<header>
    <div class="d-flex justify-content-between header_box">
        <h3>Delivery Agent</h3>
        <div class="header_left_side">
            <span class="first"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36">
                    <path class="clr-i-outline clr-i-outline-path-1" fill="currentColor"
                        d="M32.51 27.83A14.4 14.4 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93a1 1 0 0 0-.34.75v1.36a1 1 0 0 0 1 1h27.8a1 1 0 0 0 1-1v-1.36a1 1 0 0 0-.34-.75M5.13 28.94a16.17 16.17 0 0 0 2.44-3a14.24 14.24 0 0 0 1.65-5.85v-4.94a8.74 8.74 0 1 1 17.47 0v4.94a14.24 14.24 0 0 0 1.65 5.85a16.17 16.17 0 0 0 2.44 3Z" />
                    <path class="clr-i-outline clr-i-outline-path-2" fill="currentColor"
                        d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28" />
                    <path fill="none" d="M0 0h36v36H0z" />
                </svg>
            </span>
            <span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
                </svg> Download</span>
        </div>
    </div>
</header>

            


            <div class="user_container">

                <div class="VendorApprovalRequest">

                    <span id="vendor_add"><a href="{{route('vendors')}}"><img src="IMAGES\Vector(5).svg"></a> Vendor Approval Requests</span>

                    <div class="table_form ">
                        <div class="d-flex gap-4">

                            <p><img src="IMAGES\icon (1).svg"></p>

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
                        
                        <table id="dataTable">

                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAll"> Vendor</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> sendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> dendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> rendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Vendorname</td>
                                    <td>+91-1234567890</td>
                                    <td>username@company.com</td>
                                    <td>Clock Tower, Dehradun</td>
                                    <td><a href="/vendor-preview"><button>Preview</button></a></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="pagination"></div>
                    </div>
                    
                </div>


               

            </div>

        </div>

    </div>

    <script>
        // Get the input field and table body
        const input = document.getElementById('searchInput');
        const tbody = document.querySelector('#dataTable tbody');
        const rows = tbody.getElementsByTagName('tr');

        // Add event listener for input
        input.addEventListener('input', function() {
            const searchText = input.value.toLowerCase(); // Convert input to lowercase for case-insensitive search

            // Loop through all table rows and hide those that don't match the search query
            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let rowMatchesSearch = false;

                // Check if any cell in the row contains the search text
                for (let j = 0; j < cells.length; j++) {
                    const cellText = cells[j].textContent.toLowerCase(); // Convert cell text to lowercase
                    if (cellText.includes(searchText)) {
                        rowMatchesSearch = true;
                        break; // No need to check further cells if the row matches the search
                    }
                }

                // Show/hide the row based on whether it matches the search
                rows[i].style.display = rowMatchesSearch ? '' : 'none';
            }
        });
    </script>


    <script>
        // Get the select all checkbox and all other checkboxes
        const selectAllCheckbox = document.getElementById('selectAll');
        const checkboxes = document.querySelectorAll('#dataTable tbody input[type="checkbox"]');

        // Function to toggle all checkboxes based on the state of the "Select All" checkbox
        function toggleCheckboxes() {
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }

        // Event listener for the "Select All" checkbox
        selectAllCheckbox.addEventListener('change', toggleCheckboxes);
    </script>

    <script>
        const table = document.getElementById('dataTable');
        const rowsPerPage = 10; // Number of rows per page
        const totalRows = table.rows.length - 1; // Exclude header row
        let currentPage = 1;

        // Function to show/hide rows based on current page
        function showPage(page) {
            for (let i = 1; i < table.rows.length; i++) {
                table.rows[i].style.display = (i >= (page - 1) * rowsPerPage + 1 && i <= page * rowsPerPage) ? '' : 'none';
            }
        }

        // Function to generate pagination buttons
        function generatePaginationButtons() {
            const totalPages = Math.ceil(totalRows / rowsPerPage);
            const paginationContainer = document.querySelector('.pagination');
            paginationContainer.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                if (i === currentPage) {
                    button.classList.add('active');
                }
                button.addEventListener('click', () => {
                    currentPage = i;
                    showPage(currentPage);
                    highlightActiveButton();
                });
                paginationContainer.appendChild(button);
            }
        }

        // Function to highlight the active pagination button
        function highlightActiveButton() {
            const buttons = document.querySelectorAll('.pagination button');
            buttons.forEach(button => {
                button.classList.remove('active');
                if (parseInt(button.textContent) === currentPage) {
                    button.classList.add('active');
                }
            });
        }

        // Initialize pagination
        showPage(currentPage);
        generatePaginationButtons();
    </script>
</x-app-layout>
