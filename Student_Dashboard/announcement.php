<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniKey - Announcements</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
    <!-- css -->
    <link rel="stylesheet" href="css/announcement.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/side.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="page d-flex content">
        <!-- Sidebar -->
        <div class="sidebar bg-white p-20 p-relative">    
            <a href="landing.html">
                <h3 class="p-relative txt-c mt-0">UniKey</h3>
            </a>
            <ul>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="dashboard.html">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.html">
                        <i class="fa-solid fa-gear fa-fw"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="map.html">
                        <i class="fa-solid fa-map"></i>
                        <span>Map</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="lost.html">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span>Lost/Found</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="portals.html">
                        <i class="fa-solid fa-door-open"></i>
                        <span>Portals</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="event.html">
                        <i class="fa-regular fa-calendar"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="announcement.html">
                        <i class="fa-solid fa-bullhorn"></i>
                        <span>Announcements</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="marketplace.html">
                        <i class="fa-solid fa-store"></i>
                        <span>Marketplace</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="help.html">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Help</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content w-full full-content">
            <!-- Header -->
            <div class="head bg-white p-15 between-flex">
                <div class="user-display p-relative d-flex align-center">
                    <i class="fa-solid fa-user-circle fa-lg c-main mr-10"></i>
                    <span class="fs-14 fw-500">Tala Hammami</span> <!-- Replace with dynamic username -->
                </div>
                <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-lg"></i>
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </span>
                </div>
            </div>

            <!-- Main Content -->
        <div class="wrapper">
            <div class="short-header">
                <h1 class="p-relative">Announcements</h1>
            </div>
            <div class="filter-section">
                <!-- <select name="type" id="filter-type" onchange="filterItems()">
                    <option value="" disabled selected>Filter By</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Clothes">Clothes</option>
                    <option value="Wallet">Wallet</option>
                    <option value="jacket">Wallet</option>
                    <option value="other">Other</option>
                </select> -->
                <button class="add-card-btn">All</button>
                <button class="add-card-btn">IT</button>
                <button class="add-card-btn">Engineering</button>
                <button class="add-card-btn">Science</button>
                <button class="add-card-btn">Medicine</button>
                <button class="add-card-btn">Business</button>
                <button class="add-card-btn">Shari'a</button>
                <button class="add-card-btn">Sport</button>
                <button class="add-card-btn">Languages</button>
                <button class="add-card-btn">Agriculture</button>

            </div>
            <div class="latest-news p-20 bg-white rad-10 txt-c-mobile">
                <h2 class="mt-0 mb-20">Latest News</h2>
                <div class="news-row d-flex align-center">
                    <!-- <i class="fa-solid fa-thumbtack"></i> -->
                    <img src="imgs/Yearbook.jpg" alt="" />
                    <div class="info">
                        <h3>UJ's Yearbook</h3>
                        <p class="m-0 fs-14 c-grey">The UJ's Yearbook 2024-2025 Has Been Lunched</p>
                        <div class="tags">
                            <span class="tag">Graduate</span>
                            <span class="tag">All</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">15/3/2025</div>
                        <div class="btn-shape fs-13 label c-beige see" style="background-color: #314528;" id="btn-found">See More...</div>
                    </div> 
                </div>
                <div class="news-row d-flex align-center">
                    <img src="imgs/JU1.jpg" alt="" />
                    <div class="info">
                        <h3>Admission and Registration Unit</h3>
                        <p class="m-0 fs-14 c-grey">​Course Add/Drop Dates and Instructions</p>
                        <div class="tags">
                            <span class="tag">All</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">7/3/2025</div>
                        <div class="btn-shape bg-eee fs-13 label c-beige see" style="background-color: #314528;">See More...</div>
                    </div>
                </div>
                <div class="news-row d-flex align-center">
                    <img src="imgs/JU2.JPG" alt="" />
                    <div class="info">
                        <h3>Graduate Programs For The Second Semester</h3>
                        <p class="m-0 fs-14 c-grey">(UJ) School of Graduate Studies has opened applications for admission to graduate programs for the second semester</p>
                        <div class="tags">
                            <span class="tag">Graduate</span>
                            <span class="tag">Business</span>
                            <span class="tag">Law</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">11/2/2025</div>
                        <div class="btn-shape bg-eee fs-13 label c-beige see" style="background-color: #314528;">See More...</div>
                    </div>
                </div>
                <div class="news-row d-flex align-center">
                    <img src="imgs/whatsapp.jpeg" alt="" />
                    <div class="info">
                        <h3>UJ's Official WhatsApp Channel Launched</h3>
                        <p class="m-0 fs-14 c-grey">​The Media and Public Relations Unit at the University of Jordan (UJ) launched its official channel on WhatsApp.</p>
                        <div class="tags">
                            <span class="tag">All</span>
                            <span class="tag">IT</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">3/2/2025</div>
                        <div class="btn-shape bg-eee fs-13 label c-beige see" style="background-color: #314528;">See More...</div>
                    </div>
                </div>
                <div class="news-row d-flex align-center">
                    <img src="imgs/JU3.jpeg" alt="" />
                    <div class="info">
                        <h3>Application For Admission To Graduate Programs Now Open</h3>
                        <p class="m-0 fs-14 c-grey">applications for admission to graduate programs for the first semester of the 2024/2025 academic year are now open.</p>
                        <div class="tags">
                            <span class="tag">Graduate</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">16/1/2025</div>  
                        <div class="btn-shape bg-eee fs-13 label c-beige see" style="background-color: #314528;">See More...</div>
                    </div>
                    
                </div>
                <i class="fa-solid fa-circle-xmark time"></i>
                <div class="news-row d-flex align-center expired">
                    
                    <img src="imgs/Dr. Yazan Hasouneh.jpg" alt="" />
                    <div class="info">
                        <h3>Workshop </h3>
                        <p class="m-0 fs-14 c-grey">Workshop By Prof. Yazan Hassona</p>
                        <div class="tags">
                            <span class="tag">Medicine</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">3/1/2025</div>
                        <div class="btn-shape bg-eee fs-13 label c-beige see" style="background-color: #314528;">See More...</div>
                    </div>
                </div>
                <i class="fa-solid fa-circle-xmark time"></i>
                <div class="news-row d-flex align-center expired">
                    <img src="imgs/test.jpg" alt="" /> 
                    <div class="info">
                        <h3>Students Who Missed The University Proficiency Exam</h3>
                        <p class="m-0 fs-14 c-grey">​​It will be allowed for students who missed the university proficiency exam, to apply for make-up exam (in person) at
                        HEAC</p>
                        <div class="tags">
                            <span class="tag">Languages</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">20/12/2024</div>
                        <div class="btn-shape bg-eee fs-13 label c-beige see" style="background-color: #314528;">See More...</div>
                    </div>
                </div>
                <i class="fa-solid fa-circle-xmark time"></i>
                <div class="news-row d-flex align-center expired">
                    <img src="imgs/students.jpg" alt="" />
                    <div class="info">
                        <h3>Information For New Students</h3>
                        <p class="m-0 fs-14 c-grey">Fees And Specialization Information for students in school of Arts</p>
                        <div class="tags">
                            <span class="tag">Art</span>
                        </div>
                    </div>
                    <div class="for-left">
                        <div class="btn-shape bg-eee fs-13 label mb-5 ">8/7/2024</div>
                        <div class="btn-shape bg-eee fs-13 label c-beige see" style="background-color: #314528;">See More...</div>
                    </div>
                </div>
            </div>

        </div>
        </div>

    <script>
            function navigateToPage(url) {
                window.location.href = url;
            }
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById("btn-found").addEventListener("click", function () {
                    navigateToPage("ann-details.html");
                });
            });
    </script>

</body>

</html>