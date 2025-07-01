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