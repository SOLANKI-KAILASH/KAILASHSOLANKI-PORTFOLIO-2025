function showSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}
function hideSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'none';
    document.body.style.overflow = 'auto';
}
document.querySelectorAll('.sidebar .nav-title-sidebar').forEach(item => {
    item.addEventListener('click', function() {
        hideSidebar();  // Close the sidebar when a link is clicked
    });
});

document.addEventListener('click', function (event) {
    const sidebar = document.querySelector('.sidebar');
    const menuButton = document.getElementById('menu-navbar');

    // If the click is outside the sidebar and menu button, hide the sidebar
    if (!sidebar.contains(event.target) && !menuButton.contains(event.target)) {
        hideSidebar();
    }
});