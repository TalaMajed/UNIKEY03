<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniKey - Marketplace</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
    <!-- css -->
    <link rel="stylesheet" href="../css/marketplace.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/framework.css" />
    <link rel="stylesheet" href="../css/side.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <style>
        
    </style>
</head>

<body>
    <div class="page d-flex">
        <div class="sidebar bg-white p-20 p-relative">
            <a href="landing.html">
                <h3 class="p-relative txt-c mt-0">UniKey</h3>
            </a>
            <ul>
                <li>
                    <!-- href -->
                    <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="dashboard.html">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.html">
                        <i class="fa-solid fa-gear fa-fw"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="map.html">
                        <i class="fa-solid fa-map"></i>
                        <span>Map</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="lost.html">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span>Lost/Found</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="portals.html">
                        <i class="fa-solid fa-door-open"></i>
                        <span>Portals</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="event.html">
                        <i class="fa-regular fa-calendar"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="announcement.html">
                        <i class="fa-solid fa-bullhorn"></i>
                        <span>Announcements</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="marketplace.html">
                        <i class="fa-solid fa-store"></i>
                        <span>Marketplace</span>
                    </a>
                </li>
                <li>
                    <!-- href -->
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="help.html">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Help</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content w-full">
            <!-- Start Head -->
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
            <!-- End Head -->
            <h1 class="p-relative">Marketplace</h1>
            <!-- Filter Section -->
            <div class="filter-section ">
                <select name="type" id="filter-type" onchange="filterItems()">
                    <option value="" disabled selected>Filter by Faculty</option>
                    <option value="Electronics">IT</option>
                    <option value="Clothes">Languages</option>
                    <option value="Wallet">Engeering</option>
                    <option value="jacket">Medicine</option>
                    <option value="other">Business</option>
                </select>
                <button class="add-card-btn" id="addCardBtn" onclick="openAddCardForm()">Add Your Own Card</button>
            </div>

            <div class="friends-page d-grid m-20 gap-20">
                <!-- First 5 available items -->
                <div class="friend bg-white rad-6 p-20 p-relative">
                    <div class="txt-c">
                        <div class="notebook-image-container">
                            <img class="notebook-image" src="imgs/book1.png" alt="Data Structure Notebook" />
                        </div>
                        <h4 class="mt-10">Data Structure</h4>
                        <p class="c-grey fs-13 mt-5 mb-0">Notebook by Roaa Bassam 2023</p>
                    </div>
                    <div class="tags mt-10 mb-10">
                        <span class="tag">Web Design</span>
                        <span class="tag">Design</span>
                    </div>
                    <span class="availability c-grey mb-10 mt-10">Available for Exchange</span>
                    <div class="contact">
                        <button class="save fs-14 bg-olive c-beige b-none w-fit btn-shape mt-10" id="btn-found"
                            style="cursor: pointer;">Contact</button>
                    </div>
                </div>

                <div class="friend bg-white rad-6 p-20 p-relative">
                    <div class="txt-c">
                        <div class="notebook-image-container">
                            <img class="notebook-image" src="imgs/book2.png" alt="Cryptography Notebook" />
                        </div>
                        <h4 class="mt-10">Cryptography</h4>
                        <p class="c-grey fs-13 mt-5 mb-0">Notebook by Ayham Ayman 2024</p>
                    </div>
                    <div class="tags mt-10 mb-10">
                        <span class="tag">Cyber</span>
                        <span class="tag">Security</span>
                    </div>
                    <span class="availability c-grey mb-10 mt-10">Available for Exchange</span>
                    <div class="contact">
                        <button class="save fs-14 bg-olive c-beige b-none w-fit btn-shape mt-10" id="btn-found"
                            style="cursor: pointer;">Contact</button>
                    </div>
                </div>

                <div class="friend bg-white rad-6 p-20 p-relative">
                    <div class="txt-c">
                        <div class="notebook-image-container">
                            <img class="notebook-image" src="imgs/book3.png" alt="Statistics Notebook" />
                        </div>
                        <h4 class="mt-10">Statistics</h4>
                        <p class="c-grey fs-13 mt-5 mb-0">Notebook by Abdallah Bassam 2022</p>
                    </div>
                    <div class="tags mt-10 mb-10">
                        <span class="tag">CS</span>
                        <span class="tag">CIS</span>
                        <span class="tag">AI</span>
                        <span class="tag">DS</span>
                        <span class="tag">Cyber</span>
                    </div>
                    <span class="availability c-grey mb-10 mt-10">Available for Exchange</span>
                    <div class="contact">
                        <button class="save fs-14 bg-olive c-beige b-none w-fit btn-shape mt-10" id="btn-found"
                            style="cursor: pointer;">Contact</button>
                    </div>
                </div>

                <div class="friend bg-white rad-6 p-20 p-relative">
                    <div class="txt-c">
                        <div class="notebook-image-container">
                            <img class="notebook-image" src="imgs/book4.png" alt="Operation System Notebook" />
                        </div>
                        <h4 class="mt-10">Operation System</h4>
                        <p class="c-grey fs-13 mt-5 mb-0">Notebook by Jomman Salamah 2023</p>
                    </div>
                    <div class="tags mt-10 mb-10">
                        <span class="tag">CS</span>
                        <span class="tag">CIS</span>
                        <span class="tag">BIT</span>
                        <span class="tag">Cyber</span>
                    </div>
                    <span class="availability c-grey mb-10 mt-10">Available for Exchange</span>
                    <div class="contact">
                        <button class="save fs-14 bg-olive c-beige b-none w-fit btn-shape mt-10" id="btn-found"
                            style="cursor: pointer;">Contact</button>
                    </div>
                </div>

                <div class="friend bg-white rad-6 p-20 p-relative">
                    <div class="txt-c">
                        <div class="notebook-image-container">
                            <img class="notebook-image" src="imgs/book7.png" alt="C++ Notebook" />
                        </div>
                        <h4 class="mt-10">C++</h4>
                        <p class="c-grey fs-13 mt-5 mb-0">Notebook by Roaa Bassam 2023</p>
                    </div>
                    <div class="tags mt-10 mb-10">
                        <span class="tag">Web Design</span>
                        <span class="tag">Design</span>
                    </div>
                    <span class="availability c-grey mb-10 mt-10">Available for Exchange</span>
                    <div class="contact">
                        <button class="save fs-14 bg-olive c-beige b-none w-fit btn-shape mt-10" id="btn-found"
                            style="cursor: pointer;">Contact</button>
                    </div>
                </div>

                <!-- Last 2 expired items -->
                <div class="friend bg-white rad-6 p-20 p-relative expired">
                    <div class="expired-tag">EXPIRED</div>
                    <div class="txt-c">
                        <div class="notebook-image-container">
                            <img class="notebook-image" src="imgs/book6.png" alt="Web Development Notebook" />
                        </div>
                        <h4 class="mt-10">Web Development</h4>
                        <p class="c-grey fs-13 mt-5 mb-0">Notebook by Aya Zeyad 2022</p>
                    </div>
                    <div class="tags mt-10 mb-10">
                        <span class="tag">CS</span>
                        <span class="tag">CIS</span>
                    </div>
                    <span class="availability c-grey mb-10 mt-10">No Longer Available</span>
                    <div class="contact">
                        <button class="save fs-14 bg-olive c-beige b-none w-fit btn-shape mt-10" id="btn-found"
                            style="cursor: not-allowed;" disabled>Contact</button>
                    </div>
                </div>

                <div class="friend bg-white rad-6 p-20 p-relative expired">
                    <div class="expired-tag">EXPIRED</div>
                    <div class="txt-c">
                        <div class="notebook-image-container">
                            <img class="notebook-image" src="imgs/book5.png" alt="Networks Notebook" />
                        </div>
                        <h4 class="mt-10">Networks</h4>
                        <p class="c-grey fs-13 mt-5 mb-0">Notebook by Ayham Almahsery 2023</p>
                    </div>
                    <div class="tags mt-10 mb-10">
                        <span class="tag">CS</span>
                        <span class="tag">CIS</span>
                        <span class="tag">BIT</span>
                        <span class="tag">DS</span>
                        <span class="tag">Cyber</span>
                        <span class="tag">AI</span>
                    </div>
                    <span class="availability c-grey mb-10 mt-10">No Longer Available</span>
                    <div class="contact">
                        <button class="save fs-14 bg-olive c-beige b-none w-fit btn-shape mt-10" id="btn-found"
                            style="cursor: not-allowed;" disabled>Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="card" class="new-card hidden" style="height: 1000px;">
        <h2>Add Item</h2>
        <form action="">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" placeholder="Add Title to the item" name="fn">
            </div>
            <div class="form-group">
                <label for="fn">Desciption</label>
                <input type="text" placeholder="Desciption of the item" name="fn">
            </div>
            <div class="form-group">
                <label for="Category">Faculty</label>
                <select id="categoray" name="categoray">
                    <option value="acc">IT</option>
                    <option value="sta">Medicine</option>
                    <option value="phone" selected>Engeering</option>
                    <option value="elec">Business</option>
                    <option value="clothes">Languages</option>
                </select>
            </div>
            <div class="form-group" >
                <label for="fn">Upload Image</label>
                <input type="file" placeholder="Desciption of the item" name="fn">
            </div>
        </form>
        <div class="last-btn">
            <button id="closeCardBtn" class="btn-shape add-btn">Add</button>
        </div>
    </div>
    <script>
        function navigateToPage(url) {
            window.location.href = url;
        }

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("btn-found").addEventListener("click", function () {
                navigateToPage("chat.html");
            });
        });

        document.getElementById('addCardBtn').addEventListener('click', function () {
            // Show the card
            document.getElementById('card').classList.remove('hidden');
            // Add blur effect to the background
            document.querySelector('.content').classList.add('blur');
        });

        document.getElementById('closeCardBtn').addEventListener('click', function () {
            // Hide the card
            document.getElementById('card').classList.add('hidden');
            // Remove blur effect from the background
            document.querySelector('.content').classList.remove('blur');
        });
    </script>
</body>

</html>