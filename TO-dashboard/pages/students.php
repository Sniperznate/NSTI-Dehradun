<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Page</title>
    <link rel="stylesheet" href="../styles.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar" id="sidebar">
            <div class="logo">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>NSTI</span>
            </div>
            <nav>
                <a href="../index.php">
                    <i class="fa-solid fa-users"></i>
                    <span>Dashboard</span>
                </a>
                <a href="students.php" class="active">
                    <i class="fa-solid fa-users"></i>
                    <span>Students</span>
                </a>
                <a href="store.php">
                    <i class="fa-solid fa-warehouse"></i>
                    <span>Store</span>
                </a>
                <a href="library.php">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Library</span>
                </a>
                <a href="request_notification.php">
                    <i class="fa-solid fa-bell"></i>
                    <span>Request Notification</span>
                </a>
                <a href="approval.php">
                    <i class="fa-solid fa-check-circle"></i>
                    <span>Approval</span>
                </a>
                <a href="guidelines.php">
                    <i class="fa-solid fa-lightbulb"></i>
                    <span>Guidelines</span>
                </a>
                <a href="notice.php">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>Notice</span>
                </a>
            </nav>
            <button class="toggle-theme" id="toggleThemeBtn" onclick="toggleTheme()">
                <i class="fa-solid fa-moon" id="themeIcon"></i>
                <span id="themeText">Dark Mode</span>
            </button>
        </aside>
        <div class="main">
            <div class="content">
                <h1>Welcome to the Students Page</h1>
            </div>
        </div>
    </div>
    <script>
        // Dark mode toggle
        function toggleTheme() {
            const theme = document.documentElement.getAttribute('data-theme');
            const icon = document.getElementById('themeIcon');
            const text = document.getElementById('themeText');
            if (theme === 'dark') {
                document.documentElement.removeAttribute('data-theme');
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
                text.textContent = 'Dark Mode';
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
                text.textContent = 'Light Mode';
            }
        }
        // Set initial icon/text on page load
        window.addEventListener('DOMContentLoaded', function() {
            const theme = document.documentElement.getAttribute('data-theme');
            const icon = document.getElementById('themeIcon');
            const text = document.getElementById('themeText');
            if (theme === 'dark') {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
                text.textContent = 'Light Mode';
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
                text.textContent = 'Dark Mode';
            }
        });
    </script>
</body>
</html>