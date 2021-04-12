function kinkajou_posts_list() {
  var menu = document.getElementById("sidenav-collapsible");
  var btn = document.getElementById("sidenav-button");
  if (menu.style.maxHeight == "100%") {
    menu.style.maxHeight = 0;
  } else {
    menu.style.maxHeight = "100%";
  }
  btn.classList.toggle("expanded");
}
document.getElementById("sidenav-button").onclick = kinkajou_posts_list;

function isLinkToCurrentPage() {
  var allLinks = document.getElementsByTagName("a");
  for (link of allLinks) {
    if (link.href == document.URL) {
      link.classList.add("current");
        if (
					link.className == "sidenav post current"
					|| link.className == "sidenav site title current"
				) {
        document.getElementById("sidenav-button").classList.add("current");
      }
    }
  }
}

isLinkToCurrentPage();

