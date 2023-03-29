const body = document.getElementsByTagName('body')[0];
current_page = current_page.split("/").pop().replace(' .php', '');


console.log(current_page);

let nav_links = document.querySelectorAll(".navlink");

nav_links.forEach(element => {
  let href = element.getAttribute("href");
  console.log(current_page);
  if (href == current_page) {
    element.classList.add("active");
    element.setAttribute('href', "#");
  }
});
