<x-app-layout>

    <header>
        <div class="d-flex justify-content-between header_box">
            <h3>Analytics<span class="text_18 grey">/Sales</span></h3>
            <div class="header_left_side">
                <span class="first"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                        <path fill="currentColor"
                            d="M32.51 27.83A14.4 14.4 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93a1 1 0 0 0-.34.75v1.36a1 1 0 0 0 1 1h27.8a1 1 0 0 0 1-1v-1.36a1 1 0 0 0-.34-.75M5.13 28.94a16.17 16.17 0 0 0 2.44-3a14.24 14.24 0 0 0 1.65-5.85v-4.94a8.74 8.74 0 1 1 17.47 0v4.94a14.24 14.24 0 0 0 1.65 5.85a16.17 16.17 0 0 0 2.44 3Z"
                            class="clr-i-outline clr-i-outline-path-1" />
                        <path fill="currentColor" d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28"
                            class="clr-i-outline clr-i-outline-path-2" />
                        <path fill="none" d="M0 0h36v36H0z" />
                    </svg>
                </span>
                <span class="second"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71M5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1" />
                    </svg> Download</span>
            </div>
        </div>
    </header>
    <div class="user_container">
        <div class="analytics_section">
            <div class="d-flex justify-content-between flex-wrap mb-4">
                <div class="d-flex top">
                    <h3 class="">Sales Analytics </h3>
                    <span class="date_box">
                        <form action="">
                            <input type="date">
                        </form>
                    </span>
                </div>
                <div class="d-flex">
                    <div class="filter_box">Day </div>
                    <div class="filter_box">Month </div>
                    <div class="filter_box">Year </div>
                    <div class="filter_box filt"> <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14 12v7.88c.04.3-.06.62-.29.83a.996.996 0 0 1-1.41 0l-2.01-2.01a.989.989 0 0 1-.29-.83V12h-.03L4.21 4.62a1 1 0 0 1 .17-1.4c.19-.14.4-.22.62-.22h14c.22 0 .43.08.62.22a1 1 0 0 1 .17 1.4L14.03 12z" />
                        </svg></div>
                    <div class="filter_box">Month </div>
                </div>
            </div>


            <div class="row sales_analytics_section ">
                <div class="col-lg-6 left_section">
                    <div class="row mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
                            <div class="card">
                                <p class=" mb-2 ">Average Orders per day</p>
                                <h4 class="d-flex justify-content-between  b_600">61,001 <span
                                        class="green  mt-2">+2.5%</span></h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
                            <div class="card">
                                <p class=" mb-2 ">Average Orders Value</p>
                                <h4 class="d-flex justify-content-between  b_600">1204
                                    <span class="green  mt-2">+2.5%</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
                            <div class="card">
                                <p class=" mb-2 ">Average Sales per day</p>
                                <h4 class="d-flex justify-content-between  b_600">5004
                                    <span class="green mt-2">+2.5%</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
                            <div class="card">
                                <p class="text_12 mb-2 ">Returning customers</p>
                                <h4 class="d-flex justify-content-between  b_600">504 <span class="orange  mt-2">+2.5%</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 right_section">
                    <div class="sales_graph_container mb-5">
                        <h5 class=" d-flex justify-content-between">Total Orders
                            <span>90,000</span>
                        </h5>
                        <div class="graph_box">
                            <canvas id="sales_graph" style="bottom: 0;"></canvas>
                            <script>
                            const xValues = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'];
                            const yValues = ['150', '300', '100', '100', '120', '200', '400'];

                            new Chart("sales_graph", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        fill: true,
                                        lineTension: 0,
                                        backgroundColor: "#C8E9FF",
                                        borderColor: "#1B59F8",
                                        borderWidth: 1.1,
                                        pointBackgroundColor: "#1B59F8",
                                        data: yValues
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: true,
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        xAxes: [{
                                            ticks: {
                                                min: 'January',
                                                max: 'July'
                                            },
                                            gridLines: {
                                                display: false
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                min: 0,
                                                max: 400,
                                                stepSize: 100,
                                                callback: function(value, index, values) {
                                                    return value;
                                                }
                                            },
                                            gridLines: {
                                                color: "rgba(0,0,0,0.1)",
                                                backgroundColor: "#0fa958"
                                            },
                                            position: 'left'
                                        }],
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                    <div class="sales_graph_container mb-5">
                        <h5 class="text_16 b_600 black d-flex justify-content-between"><span> Gross sales <br />
                                <span class="green text_12">+2.5%</span></span>
                            <span> &#8377;90,000,0</span>
                        </h5>
                        <div class="graph_box_2">
                            <canvas id="sales_graph_2" style="bottom: 0;"></canvas>
                            <script>
                            const xValues_2 = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'];
                            const yValues_2 = ['150', '300', '100', '100', '120', '200', '400'];

                            new Chart("sales_graph_2", {
                                type: "line",
                                data: {
                                    labels: xValues_2,
                                    datasets: [{
                                        fill: true,
                                        lineTension: 0,
                                        backgroundColor: "#C8E9FF",
                                        borderColor: "#1B59F8",
                                        borderWidth: 1.1,
                                        pointBackgroundColor: "#1B59F8",
                                        data: yValues_2
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: true,
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        xAxes: [{
                                            ticks: {
                                                min: 'January',
                                                max: 'July'
                                            },
                                            gridLines: {
                                                display: false
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                min: 0,
                                                max: 400,
                                                stepSize: 100,
                                                callback: function(value, index, values) {
                                                    return value;
                                                }
                                            },
                                            gridLines: {
                                                color: "rgba(0,0,0,0.1)",
                                                backgroundColor: "#0fa958"
                                            },
                                            position: 'left'
                                        }],
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>