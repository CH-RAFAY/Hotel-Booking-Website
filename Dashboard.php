<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking.com - Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php require('inc/link.php');?>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --booking-blue: #003580;
            --booking-light-blue: #0071c2;
            --booking-background: #f2f2f2;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--booking-background);
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: var(--booking-blue);
            color: white;
            padding: 20px 0;
            transition: width 0.3s;
        }

        .sidebar-logo {
            text-align: center;
            margin-bottom: 30px;
            padding: 0 20px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            padding: 15px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
        }

        .sidebar-menu li:hover,
        .sidebar-menu li.active {
            background-color: rgba(255,255,255,0.1);
        }

        .sidebar-menu li i {
            margin-right: 15px;
            width: 20px;
            text-align: center;
        }

        .main-content {
            flex-grow: 1;
            background-color: var(--booking-background);
            overflow-y: auto;
        }

        .topbar {
            background-color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .dashboard-section {
            padding: 20px;
        }

        .section-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .section-options {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .option-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .option-card:hover {
            background-color: var(--booking-light-blue);
            color: white;
            transform: scale(1.05);
        }

        .option-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--booking-blue);
        }

        .option-card:hover i {
            color: white;
        }

        .btn-primary {
            background-color: var(--booking-light-blue);
            border-color: var(--booking-light-blue);
        }

        /* Hide all sections by default except dashboard */
        #dashboard-section {
            display: block;
        }
        #rooms-section,
        #bookings-section,
        #users-section,
        #settings-section {
            display: none;
        }
    </style>
</head>
<body>
    <div class="admin-container">
    <?php require('inc/header.php');?>
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-logo">
                <h3 class="text-white">Booking.com</h3>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-item active" data-section="dashboard">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </li>
                <li class="menu-item" data-section="rooms">
                    <i class="fas fa-door-open"></i> Rooms
                </li>
                <li class="menu-item" data-section="bookings">
                    <i class="fas fa-bookmark"></i> Bookings
                </li>
                <li class="menu-item" data-section="users">
                    <i class="fas fa-user-friends"></i> Users
                </li>
                <li class="menu-item" data-section="settings">
                    <i class="fas fa-sliders-h"></i> Settings
                </li>
                <li class="menu-item" id="logout-btn">
                    <i class="fas fa-power-off"></i> Logout
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Topbar -->
            <div class="topbar">
                <h2 id="section-title">Dashboard</h2>
                <div class="user-profile">
                    <span>Welcome, Admin</span>
                    <i class="fas fa-user-circle ms-2"></i>
                </div>
            </div>

            <!-- Dashboard Section -->
            <div id="dashboard-section" class="dashboard-section">
                <div class="section-card">
                    <h3>Quick Overview</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="option-card">
                                <i class="fas fa-chart-line"></i>
                                <h5>Total Bookings</h5>
                                <p class="text-muted">1,234</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="option-card">
                                <i class="fas fa-bed"></i>
                                <h5>Active Rooms</h5>
                                <p class="text-muted">56</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="option-card">
                                <i class="fas fa-dollar-sign"></i>
                                <h5>Total Revenue</h5>
                                <p class="text-muted">$124,567</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="option-card">
                                <i class="fas fa-hourglass-half"></i>
                                <h5>Pending Bookings</h5>
                                <p class="text-muted">12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rooms Section -->
            <div id="rooms-section" class="dashboard-section">
                <div class="section-card">
                    <h3>Room Management</h3>
                    <div class="section-options">
                        <div class="option-card" data-subsection="room-list">
                            <i class="fas fa-list"></i>
                            <h5>Room List</h5>
                        </div>
                        <div class="option-card" data-subsection="add-room">
                            <i class="fas fa-plus-circle"></i>
                            <h5>Add New Room</h5>
                        </div>
                        <div class="option-card" data-subsection="room-types">
                            <i class="fas fa-tags"></i>
                            <h5>Room Types</h5>
                        </div>
                        <div class="option-card" data-subsection="room-amenities">
                            <i class="fas fa-concierge-bell"></i>
                            <h5>Room Amenities</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bookings Section -->
            <div id="bookings-section" class="dashboard-section">
                <div class="section-card">
                    <h3>Booking Management</h3>
                    <div class="section-options">
                        <div class="option-card" data-subsection="booking-list">
                            <i class="fas fa-list-alt"></i>
                            <h5>Booking List</h5>
                        </div>
                        <div class="option-card" data-subsection="create-booking">
                            <i class="fas fa-calendar-plus"></i>
                            <h5>Create Booking</h5>
                        </div>
                        <div class="option-card" data-subsection="booking-calendar">
                            <i class="fas fa-calendar-alt"></i>
                            <h5>Booking Calendar</h5>
                        </div>
                        <div class="option-card" data-subsection="booking-reports">
                            <i class="fas fa-chart-bar"></i>
                            <h5>Booking Reports</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Section -->
            <div id="users-section" class="dashboard-section">
                <div class="section-card">
                    <h3>User Management</h3>
                    <div class="section-options">
                        <div class="option-card" data-subsection="user-list">
                            <i class="fas fa-users"></i>
                            <h5>User List</h5>
                        </div>
                        <div class="option-card" data-subsection="add-user">
                            <i class="fas fa-user-plus"></i>
                            <h5>Add New User</h5>
                        </div>
                        <div class="option-card" data-subsection="user-roles">
                            <i class="fas fa-user-tag"></i>
                            <h5>User Roles</h5>
                        </div>
                        <div class="option-card" data-subsection="user-permissions">
                            <i class="fas fa-user-shield"></i>
                            <h5>User Permissions</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Section -->
            <div id="settings-section" class="dashboard-section">
                <div class="section-card">
                    <h3>System Settings</h3>
                    <div class="section-options">
                        <div class="option-card" data-subsection="general-settings">
                            <i class="fas fa-cog"></i>
                            <h5>General Settings</h5>
                        </div>
                        <div class="option-card" data-subsection="email-settings">
                            <i class="fas fa-envelope"></i>
                            <h5>Email Settings</h5>
                        </div>
                        <div class="option-card" data-subsection="payment-settings">
                            <i class="fas fa-credit-card"></i>
                            <h5>Payment Settings</h5>
                        </div>
                        <div class="option-card" data-subsection="security-settings">
                            <i class="fas fa-lock"></i>
                            <h5>Security Settings</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navigation Functionality
        const menuItems = document.querySelectorAll('.menu-item');
        const sectionTitle = document.getElementById('section-title');

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remove active from all items
                menuItems.forEach(mi => mi.classList.remove('active'));
                
                // Add active to clicked item
                this.classList.add('active');

                // Hide all sections
                document.querySelectorAll('.dashboard-section').forEach(section => {
                    section.style.display = 'none';
                });

                // Show selected section
                const sectionName = this.getAttribute('data-section');
                const sectionElement = document.getElementById(`${sectionName}-section`);
                if (sectionElement) {
                    sectionElement.style.display = 'block';
                }

                // Update section title
                sectionTitle.textContent = this.textContent.trim();
            });
        });

        // Subsection Card Click Functionality
        document.querySelectorAll('.option-card').forEach(card => {
            card.addEventListener('click', function() {
                const subsection = this.getAttribute('data-subsection');
                alert(`You clicked on: ${subsection}`);
                // Here you would typically load the specific subsection content
                // For now, just showing an alert to demonstrate functionality
            });
        });

        // Logout Functionality
        document.getElementById('logout-btn').addEventListener('click', function() {
            // Redirect to login page or perform logout actions
            alert('Logging out...');
        });
    </script>
</body>
</html>
