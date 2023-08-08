const sidebar = document.querySelector(".sidebar");

function toggleSidebar() {
  if (sidebar.classList.contains("open_sidebar")) {
    return sidebar.classList.remove("open_sidebar");
  }
  sidebar.classList.add("open_sidebar");
}



const hanlder_buttons = document.querySelectorAll('.drop_down_handler')

for (let i = 0; i < hanlder_buttons.length; i++) {
  hanlder_buttons[i].addEventListener('click', ()=>toggleSibilling(hanlder_buttons[i]))
}

function toggleSibilling(obj){
  if (obj.nextElementSibling.classList.contains('show_')) {
    return obj.nextElementSibling.classList.remove('show_')
  }
  obj.nextElementSibling.classList.add('show_')
}