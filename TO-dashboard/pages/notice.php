
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Notice - NSTI Training Officer Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Noto+Sans+Devanagari:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
  <div class="dashboard">
    <div class="hamburger" id="hamburger" onclick="toggleSidebar()">
      <i class="fa-solid fa-bars"></i>
    </div>
    <aside class="sidebar" id="sidebar" style="overflow-y: auto;">
      <div class="logo">
        <i class="fa-solid fa-graduation-cap"></i>
        <span>NSTI</span>
      </div>
      <!-- Sidebar Navigation -->
      <nav>
        <a href="../index.php">
          <i class="fa-solid fa-users"></i>
          <span>Dashboard</span>
        </a>
        <a href="students.php">
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
        <a href="#">
          <i class="fa-solid fa-bell"></i>
          <span>Request Notification</span>
        </a>
        <a href="#">
          <i class="fa-solid fa-check-circle"></i>
          <span>Approval</span>
        </a>
        <a href="#">
          <i class="fa-solid fa-lightbulb"></i>
          <span>Guidelines</span>
        </a>
        <a href="notice.php" class="active">
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
      <div class="topbar">
        <div style="flex:1"></div>
        <div class="notifications">
          <i class="fa-solid fa-bell"></i>
          <span class="badge">3</span>
        </div>
        <div class="profile">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Officer">
          <span>Mr. Sharma</span>
        </div>
      </div>
      <div class="content">
        <!-- All cards/content removed as requested. Only navigation remains. -->
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
    // Sidebar toggle for mobile
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('open');
    }
    // Close sidebar on click outside (mobile)
    document.addEventListener('click', function(e) {
      const sidebar = document.getElementById('sidebar');
      const hamburger = document.getElementById('hamburger');
      if (window.innerWidth <= 700 && sidebar.classList.contains('open')) {
        if (!sidebar.contains(e.target) && !hamburger.contains(e.target)) {
          sidebar.classList.remove('open');
        }
      }
    });
  </script>
</body>
</html>