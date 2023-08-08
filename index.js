const sidebar = document.querySelector(".sidebar");

function toggleSidebar() {
  if (sidebar.classList.contains("open_sidebar")) {
    return sidebar.classList.remove("open_sidebar");
  }
  sidebar.classList.add("open_sidebar");
}
