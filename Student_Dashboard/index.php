<?php
    session_start();

    include "../Connect.php";

    $S_ID = $_SESSION['S_Log'];

    if (! $S_ID) {

        echo '<script language="JavaScript">
     document.location="../login.php";
    </script>';

    } else {

        $sql1 = mysqli_query($con, "select * from students where id='$S_ID'");
        $row1 = mysqli_fetch_array($sql1);

        $name          = $row1['fname'] . ' ' . $row1['lname'];
        $email         = $row1['email'];
        $user_image    = $row1['image'];
        $department_id = $row1['department_id'];
        $major_id      = $row1['major_id'];

        $sql222 = mysqli_query($con, "select * from departments where id='$department_id'");
        $row222 = mysqli_fetch_array($sql222);

        $dep_name = $row222['name'];

        $sql33333 = mysqli_query($con, "select * from majors where id='$major_id'");
        $row3333  = mysqli_fetch_array($sql33333);

        $major_name = $row3333['name'];

        $eventsSql = mysqli_query($con, "select COUNT(id) AS count_events from student_events where student_id='$S_ID'");
        $eventsRow = mysqli_fetch_array($eventsSql);

        $count_events = $eventsRow['count_events'];

        $lostsSql = mysqli_query($con, "select COUNT(id) AS count_losts from lost_founds where student_id='$S_ID'");
        $lostsRow = mysqli_fetch_array($lostsSql);

        $count_losts = $lostsRow['count_losts'];

        $marketPlaceSql = mysqli_query($con, "select COUNT(id) AS count_marketplaces from marketplaces where student_id='$S_ID'");
        $marketPlaceRow = mysqli_fetch_array($marketPlaceSql);

        $count_marketplaces = $marketPlaceRow['count_marketplaces'];

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniKey - Dashboard</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
    <!-- css -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/framework.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/side.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
        
    </style>
</head>

<body>
    <div class="page d-flex">
    <!-- Sidebar Navigation -->
    <div class="sidebar bg-white p-20 p-relative" id="sidebar">
        <a href="landing.html"><h3 class="p-relative txt-c mt-0">UniKey</h3></a>
        <?php require './asaid.php'?>
    </div>

        <!-- Main Content -->
        <div class="content w-full">
            <!-- Header -->
            <div class="head bg-white p-15 between-flex">
                <div class="user-display p-relative d-flex align-center">
                    <i class="fa-solid fa-user-circle fa-lg c-main mr-10"></i>
                    <span class="fs-14 fw-500"><?php echo $name ?></span> <!-- Replace with dynamic username -->
                </div>
                <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-lg"></i>
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </span>
                </div>
            </div>
            <!-- User Profile Section -->
            <div class="user-profile-header">
                <img src="<?php echo $user_image ?>" alt="User Avatar" class="user-avatar">
                <div class="user-info">
                    <h2><?php echo $name ?></h2>
                    <p><?php echo $dep_name ?></p>
                    <p><?php echo $major_name ?></p>
                    <div class="user-stats">
                        <div class="stat-box">
                            <i class="fa-solid fa-calendar-check"></i> <?php echo $count_events ?> Events
                        </div>
                        <div class="stat-box">
                            <i class="fa-solid fa-magnifying-glass"></i> <?php echo $count_losts; ?> Lost Items
                        </div>
                        <div class="stat-box">
                            <i class="fa-solid fa-store"></i> <?php echo $count_marketplaces ?> Marketplace
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="dashboard-section">
                <h2 class="section-title">
                    <i class="fa-solid fa-map-location-dot"></i> Your Map Activity
                </h2>

                <div class="items-grid">
                    <div class="item-card">
                        <div class="item-actions">
                            <button class="action-btn" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="action-btn delete-event-btn " title="Delete" >
                                <i class="fa-solid fa-trash-can "></i>
                            </button>
                        </div>
                        <h3>Saved Location</h3>
                        <p>Faculty Cafeteria</p>
                        <div class="map-preview">
                            <img src="imgs/cafeteria.jpeg" alt="Cafeteria Preview">
                            <div class="map-label">IT Building Cafeteria</div>
                        </div>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-bookmark"></i> Saved location</span>
                        </div>
                    </div>
                </div>

                <div class="view-all">
                    <a href="map.html">View Full Map →</a>
                </div>
            </div>

            <!-- Upcoming Events Section -->
            <div class="dashboard-section">
                <h2 class="section-title">
                    <i class="fa-regular fa-calendar"></i> Your Registered Events
                </h2>

                <div class="items-grid">
                    <div class="item-card">
                        <div class="item-actions">
                            
                            <button class="action-btn delete-event-btn" title="Cancel Registration"
                                data-event="Tech Conference 2025">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                        <h3>Tech Conference 2025</h3>
                        <p>Annual technology conference featuring industry leaders and workshops on emerging
                            technologies.</p>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-calendar-days"></i> May 15, 2025</span>
                            <span class="status status-registered">Registered</span>
                        </div>
                    </div>

                    <div class="item-card">
                        <div class="item-actions">
                            
                            <button class="action-btn delete-event-btn" title="Cancel Registration"
                                data-event="Alumni Networking">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                        <h3>Alumni Networking</h3>
                        <p>Connect with successful alumni from your faculty and learn from their experiences.</p>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-calendar-days"></i> June 10, 2025</span>
                            <span class="status status-registered">Registered</span>
                        </div>
                    </div>
                </div>

                <div class="view-all">
                    <a href="event.html">View All Events →</a>
                </div>
            </div>

            <!-- Lost & Found Items Section -->
            <div class="dashboard-section">
                <h2 class="section-title">
                    <i class="fa-solid fa-magnifying-glass"></i> Your Found Items
                </h2>

                <div class="items-grid">
                    <div class="item-card">
                        <div class="item-actions">
                            <button class="action-btn" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="action-btn delete-item-btn" title="Delete" data-item="Student ID">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                        <h3>Found: Student ID</h3>
                        <p>Found near the library entrance. ID belongs to Ahmad Mohammad.</p>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-clock"></i> 2 days ago</span>
                            <span class="status status-found">Found</span>
                        </div>
                    </div>

                    <div class="item-card">
                        <div class="item-actions">
                            <button class="action-btn" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="action-btn delete-item-btn" title="Delete" data-item="Calculus Textbook">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                        <h3>Found: Calculus Textbook</h3>
                        <p>Found in the cafeteria area. Has personal notes inside.</p>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-clock"></i> 1 week ago</span>
                            <span class="status status-missing">Still Missing</span>
                        </div>
                    </div>
                </div>

                <div class="view-all">
                    <a href="lost.html">View All Items →</a>
                </div>
            </div>

            <!-- Marketplace Section -->
            <div class="dashboard-section">
                <h2 class="section-title">
                    <i class="fa-solid fa-store"></i> Your Marketplace Activity
                </h2>

                <div class="items-grid">
                    <div class="item-card">
                        <div class="item-actions">
                            <button class="action-btn" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>   
                            </button>
                            <button class="action-btn delete-marketplace-btn" title="Delete"
                                data-item="Calculus Textbook">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                        <div class="marketplace-item">
                            <!-- <img src="imgs/calculus.jpg" alt="Calculus Textbook"> -->
                            <div class="marketplace-info">
                                <h4>Calculus Textbook</h4>
                                <p>Excellent condition, barely used</p>
                                <p>Book Material</p>
                            </div>
                        </div>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-clock"></i> Posted 3 days ago</span>
                            <a href="chat.html"><span class="interested">3 interested</span></a>
                        </div>
                    </div>

                    <div class="item-card">
                        <div class="item-actions">
                            <button class="action-btn" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>                   
                            </button>
                            <button class="action-btn delete-marketplace-btn" title="Delete"
                                data-item="Linear Algebra Textbook">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                        <div class="marketplace-item">
                            <!-- <img src="imgs/linear.jpg" alt="Linear Algebra Textbook"> -->
                            <div class="marketplace-info">
                                <h4>Linear Algebra Textbook</h4>
                                <p>With solved problems and notes</p>
                                <p>Book Material</p>
                            </div>
                        </div>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-clock"></i> Posted 1 week ago</span>
                            <a href="chat.html"><span class="interested" title="See who's interested">1 interested</span></a>
                        </div>
                    </div>
                </div>

                <div class="view-all">
                    <a href="marketplace.html">View All Marketplace Items →</a>
                </div>
            </div>

            <!-- Confirmation Dialog -->
            <div class="confirmation-dialog" id="confirmationDialog">
                <div class="confirmation-box">
                    <h3>Confirm Deletion</h3>
                    <p id="confirmationMessage">Are you sure you want to delete this item?</p>
                    <div class="confirmation-buttons">
                        <button class="cancel-btn" id="cancelDelete">Cancel</button>
                        <button class="confirm-btn" id="confirmDelete" style="background-color: #d32f2f;">Delete</button>
                    </div>
                </div>
            </div>

            <!-- Recent Announcements Section -->
            <div class="dashboard-section">
                <h2 class="section-title">
                    <i class="fa-solid fa-bullhorn"></i> Recent Announcements
                </h2>

                <div class="items-grid">
                    <div class="item-card">
                        <h3>Exam Schedule Update</h3>
                        <p>Changes to the final exam schedule for Computer Science courses.</p>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-clock"></i> Yesterday</span>
                            <span>IT Department</span>
                        </div>
                    </div>

                    <div class="item-card">
                        <h3>Campus Maintenance</h3>
                        <p>Library will be closed this Saturday for maintenance work.</p>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-clock"></i> 3 days ago</span>
                            <span>University Admin</span>
                        </div>
                    </div>

                    <div class="item-card">
                        <h3>Scholarship Opportunity</h3>
                        <p>Applications now open for the Dean's Scholarship program.</p>
                        <div class="item-meta">
                            <span><i class="fa-solid fa-clock"></i> 1 week ago</span>
                            <span>Student Affairs</span>
                        </div>
                    </div>
                </div>

                <div class="view-all">
                    <a href="announcement.html">View All Announcements →</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/home.js"></script>
</body>

</html>