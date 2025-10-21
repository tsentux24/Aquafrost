<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquafrost - Container</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
</head>
<body>
@include('navbar');
    <!-- Main Content -->
    <div class="main-content">
        <!-- Topbar -->
        <div class="topbar">
            <div class="search-bar">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search...">
            </div>
            <div class="topbar-icons">
                <div class="icon-wrapper" id="settings-icon">
                    <i class="bi bi-gear"></i>
                </div>
                <div class="icon-wrapper" id="notifications-icon">
                    <i class="bi bi-bell"></i>
                    <div class="badge">9</div>
                </div>
                <div class="icon-wrapper">
                    <i class="bi bi-envelope"></i>
                </div>
                <div class="user-profile" id="user-profile">
                    <div class="user-avatar">A</div>
                    <div class="profile-dropdown" id="profile-dropdown">
                        <div class="dropdown-item">
                            <i class="bi bi-person"></i>
                            <span>Profile</span>
                        </div>
                        <div class="dropdown-item">
                            <i class="bi bi-gear"></i>
                            <span>Settings</span>
                        </div>
                        <div class="dropdown-item">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid">
            <div class="card">
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Weekly Sales</div>
                        <div class="stat-value">$47K</div>
                        <div class="stat-change">
                            <i class="bi bi-arrow-up"></i> +3.5%
                        </div>
                    </div>
                    <div class="stat-chart">
                        <canvas id="weeklySalesChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Total Order</div>
                        <div class="stat-value">58.4K</div>
                        <div class="stat-change">
                            <i class="bi bi-arrow-up"></i> +13.6%
                        </div>
                    </div>
                    <div class="stat-chart">
                        <canvas id="totalOrderChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Market Share</div>
                        <div class="stat-value">26M</div>
                    </div>
                    <div class="stat-chart">
                        <canvas id="marketShareChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Weather</div>
                        <div class="stat-value">31°</div>
                        <div class="stat-label">New York City</div>
                    </div>
                    <div>
                        <i class="bi bi-sun" style="font-size: 32px; color: #ffc107;"></i>
                    </div>
                </div>
                <div style="font-size: 12px; color: var(--secondary); margin-top: 10px;">
                    32° / 25°, Precipitation 50%
                </div>
            </div>
        </div>

        <!-- Middle Section -->
        <div class="grid-2">
            <!-- Total Sales Graph -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Total Sales</div>
                    <div class="dropdown">January <i class="bi bi-chevron-down"></i></div>
                </div>
                <div class="chart-container">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>



        <!-- Shared Files -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Container Aquafrost</div>
                <button type="button" class="btn btn-primary"><i class="bi bi-database-add"> Add Data</button></i>
                <div class="dropdown">All Data <i class="bi bi-chevron-down"></i></div>
            </div>

            <div class="file-item">
                <div class="file-icon">
                    <i class="bi bi-file-image"></i>
                </div>
                <div class="file-info">
                    <div class="file-name">apple-smart-watch.png</div>
                    <div class="file-details">Antony (Just Now)</div>
                </div>
            </div>

            <div class="file-item">
                <div class="file-icon">
                    <i class="bi bi-file-image"></i>
                </div>
                <div class="file-info">
                    <div class="file-name">iphone.jpg</div>
                    <div class="file-details">Antony (Yesterday at 1:30 PM)</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Settings Modal -->
    <div class="modal" id="settings-modal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Settings</div>
                <button class="modal-close" id="settings-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Theme</label>
                    <select class="form-control">
                        <option>Light</option>
                        <option>Dark</option>
                        <option>Auto</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Language</label>
                    <select class="form-control">
                        <option>English</option>
                        <option>Indonesian</option>
                        <option>Spanish</option>
                        <option>French</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Notifications</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="email-notifications" checked>
                        <label for="email-notifications">Email Notifications</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="push-notifications" checked>
                        <label for="push-notifications">Push Notifications</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="sms-notifications">
                        <label for="sms-notifications">SMS Notifications</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="settings-cancel">Cancel</button>
                <button class="btn btn-primary" id="settings-save">Save Changes</button>
            </div>
        </div>
    </div>

    <!-- Notifications Modal -->
    <div class="modal" id="notifications-modal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Notifications</div>
                <button class="modal-close" id="notifications-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="notification-item">
                    <div class="notification-icon">
                        <i class="bi bi-cart"></i>
                    </div>
                    <div class="notification-content">
                        <div class="notification-title">New Order Received</div>
                        <div class="notification-desc">Customer John Doe placed a new order for $250</div>
                        <div class="notification-time">5 minutes ago</div>
                    </div>
                </div>
                <div class="notification-item">
                    <div class="notification-icon">
                        <i class="bi bi-person-plus"></i>
                    </div>
                    <div class="notification-content">
                        <div class="notification-title">New User Registered</div>
                        <div class="notification-desc">Jane Smith just registered on your website</div>
                        <div class="notification-time">1 hour ago</div>
                    </div>
                </div>
                <div class="notification-item">
                    <div class="notification-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <div class="notification-content">
                        <div class="notification-title">Sales Target Achieved</div>
                        <div class="notification-desc">Your team has achieved this month's sales target</div>
                        <div class="notification-time">2 hours ago</div>
                    </div>
                </div>
                <div class="notification-item">
                    <div class="notification-icon">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>
                    <div class="notification-content">
                        <div class="notification-title">Server Maintenance</div>
                        <div class="notification-desc">Scheduled server maintenance in 24 hours</div>
                        <div class="notification-time">Yesterday</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="notifications-mark-read">Mark All as Read</button>
            </div>
        </div>
    </div>

    <script>
        // Initialize charts when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Weekly Sales Chart (Mini Bar Chart)
            const weeklySalesCtx = document.getElementById('weeklySalesChart').getContext('2d');
            new Chart(weeklySalesCtx, {
                type: 'bar',
                data: {
                    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                    datasets: [{
                        data: [12, 19, 8, 15, 22, 18, 25],
                        backgroundColor: '#007bff',
                        borderWidth: 0,
                        borderRadius: 3,
                        barPercentage: 0.5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            display: false
                        },
                        y: {
                            display: false
                        }
                    }
                }
            });

            // Total Order Chart (Mini Line Chart)
            const totalOrderCtx = document.getElementById('totalOrderChart').getContext('2d');
            new Chart(totalOrderCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        data: [12, 19, 15, 25, 22, 30],
                        borderColor: '#007bff',
                        backgroundColor: 'rgba(0, 123, 255, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            display: false
                        },
                        y: {
                            display: false
                        }
                    }
                }
            });

            // Market Share Chart (Mini Doughnut Chart)
            const marketShareCtx = document.getElementById('marketShareChart').getContext('2d');
            new Chart(marketShareCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Samsung', 'Huawei', 'Apple'],
                    datasets: [{
                        data: [45, 30, 25],
                        backgroundColor: [
                            '#007bff',
                            '#28a745',
                            '#6c757d'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    cutout: '70%'
                }
            });

            // Sales Chart (Main Line Chart)
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['1', '3', '5', '7', '9', '11', '13', '15', '17', '19', '21'],
                    datasets: [{
                        label: 'Sales',
                        data: [12000, 19000, 15000, 25000, 22000, 30000, 28000, 35000, 30000, 40000, 45000],
                        borderColor: '#007bff',
                        backgroundColor: 'rgba(0, 123, 255, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#007bff',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [5, 5]
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + (value / 1000) + 'K';
                                }
                            }
                        }
                    }
                }
            });

            // E-commerce menu toggle
            const ecommerceMenu = document.getElementById('ecommerce-menu');
            const ecommerceSubmenu = document.getElementById('ecommerce-submenu');
            const menuArrow = ecommerceMenu.querySelector('.menu-arrow');

            ecommerceMenu.addEventListener('click', function() {
                ecommerceSubmenu.classList.toggle('open');
                menuArrow.classList.toggle('rotated');
            });

            // Profile dropdown toggle
            const userProfile = document.getElementById('user-profile');
            const profileDropdown = document.getElementById('profile-dropdown');

            userProfile.addEventListener('click', function(e) {
                e.stopPropagation();
                profileDropdown.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                profileDropdown.classList.remove('show');
            });

            // Settings modal
            const settingsIcon = document.getElementById('settings-icon');
            const settingsModal = document.getElementById('settings-modal');
            const settingsClose = document.getElementById('settings-close');
            const settingsCancel = document.getElementById('settings-cancel');

            settingsIcon.addEventListener('click', function() {
                settingsModal.classList.add('show');
            });

            settingsClose.addEventListener('click', function() {
                settingsModal.classList.remove('show');
            });

            settingsCancel.addEventListener('click', function() {
                settingsModal.classList.remove('show');
            });

            // Notifications modal
            const notificationsIcon = document.getElementById('notifications-icon');
            const notificationsModal = document.getElementById('notifications-modal');
            const notificationsClose = document.getElementById('notifications-close');
            const markReadBtn = document.getElementById('notifications-mark-read');

            notificationsIcon.addEventListener('click', function() {
                notificationsModal.classList.add('show');
            });

            notificationsClose.addEventListener('click', function() {
                notificationsModal.classList.remove('show');
            });

            markReadBtn.addEventListener('click', function() {
                const badge = document.querySelector('.badge');
                badge.style.display = 'none';
                notificationsModal.classList.remove('show');
            });

            // Close modals when clicking outside
            window.addEventListener('click', function(event) {
                if (event.target === settingsModal) {
                    settingsModal.classList.remove('show');
                }
                if (event.target === notificationsModal) {
                    notificationsModal.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
