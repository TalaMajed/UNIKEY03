        // Sample data to store announcements
        let announcements = [];

        // Function to add a new announcement
        function addAnnouncement() {
            const title = document.getElementById('announcement-title').value;
            const des = document.getElementById('announcement-des').value;
            const content = document.getElementById('announcement-content').value;
            const date = document.getElementById('announcement-date').value;
            const category = document.getElementById('announcement-category').value;
            const image = document.getElementById('announcement-image').files[0];

            if (title && content && date && category) {
                const newAnnouncement = {
                    id: Date.now(), // Unique ID for each announcement
                    title: title,
                    des: des,
                    content: content,
                    date: date,
                    category: category,
                    image: image ? URL.createObjectURL(image) : null, // Store image URL
                };
                announcements.push(newAnnouncement);
                renderAnnouncements();
                clearForm();
            } else {
                alert('Please fill in all fields.');
            }
        }

        // Function to delete an announcement
        function deleteAnnouncement(id) {
            announcements = announcements.filter(announcement => announcement.id !== id);
            renderAnnouncements();
        }

        // Function to render all announcements
        function renderAnnouncements() {
            const announcementList = document.getElementById('announcement-list');
            announcementList.innerHTML = '<h2>Existing Announcements</h2>';

            announcements.forEach(announcement => {
                const announcementItem = document.createElement('div');
                announcementItem.className = 'announcement-item';
                announcementItem.innerHTML = `
                    <h3>${announcement.title}</h3>
                    <p><strong>Description:</strong> ${announcement.des}</p>
                    <p><strong>Date:</strong> ${announcement.date}</p>
                    <p><strong>Category:</strong> ${announcement.category}</p>
                    <p><strong>Content:</strong>${announcement.content}</p>
                    <!-- <div style="width: 200px; height: 200px; display: block;"> -->
                    ${announcement.image ? `<img src="${announcement.image}" alt="Announcement Image" />` : ''}
                    <!-- </div> -->
                    <div class="actions">
                        <button class="edit-btn" onclick="editAnnouncement(${announcement.id})">Edit</button>
                        <button class="delete-btn" onclick="deleteAnnouncement(${announcement.id})">Delete</button>
                    </div>
                `;
                announcementList.appendChild(announcementItem);
            });
        }

        // Function to clear the form after adding an announcement
        function clearForm() {
            document.getElementById('announcement-title').value = '';
            document.getElementById('announcement-content').value = '';
            document.getElementById('announcement-date').value = '';
            document.getElementById('announcement-category').value = '';
            document.getElementById('announcement-image').value = '';
        }

        // Function to edit an announcement (placeholder for now)
        function editAnnouncement(id) {
            const announcement = announcements.find(announcement => announcement.id === id);
            if (announcement) {
                document.getElementById('announcement-title').value = announcement.title;
                document.getElementById('announcement-content').value = announcement.content;
                document.getElementById('announcement-date').value = announcement.date;
                document.getElementById('announcement-category').value = announcement.category;
                deleteAnnouncement(id); // Remove the old announcement
            }
        }

    // Initial render of announcements
    renderAnnouncements();
    document.addEventListener("DOMContentLoaded", function () {
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        themeToggle.addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');

            // Update icon and text
            if (document.body.classList.contains('dark-mode')) {
                themeToggle.innerHTML = '<i class="fa-solid fa-sun"></i><span class="fs-14 ml-5">Light</span>';
            } else {
                themeToggle.innerHTML = '<i class="fa-solid fa-moon"></i><span class="fs-14 ml-5">Dark</span>';
            }
        });

        // Language Dropdown Toggle
        const languageToggle = document.getElementById('languageToggle');
        const languageDropdown = document.querySelector('.language-dropdown');

        languageToggle.addEventListener('click', function (e) {
            e.stopPropagation();
            languageDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking elsewhere
        document.addEventListener('click', function () {
            languageDropdown.classList.add('hidden');
        });

        // Language selection
        document.querySelectorAll('.language-dropdown a').forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                const lang = this.getAttribute('data-lang');
                languageToggle.querySelector('span').textContent = lang.toUpperCase();
                // Here you would add your language change logic
                console.log('Language changed to:', lang);
                languageDropdown.classList.add('hidden');
            });
        });
    });
    // Add this to your existing JavaScript
    document.getElementById('logoutBtn').addEventListener('click', function () {
        // Add your logout logic here
        console.log('Logout clicked');
        // Example: window.location.href = '/logout';

        // For demo purposes - show confirmation
        if (confirm('Are you sure you want to logout?')) {
            // Redirect to login page or perform logout action
            window.location.href = 'login.html';
        }
    });

        // Initial render of announcements
        renderAnnouncements();