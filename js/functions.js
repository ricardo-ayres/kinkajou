/*
function kinkajou_posts_list() {
  var menu = document.getElementById("");:w
  var btn = document.getElementById("kinkajou-collapse-button");
  if (menu.style.maxHeight) {
    menu.style.maxHeight = "";
  } else {
    menu.style.maxHeight = "100%";
  }
  btn.classList.toggle("active");
}
document.getElementById("kinkajou-collapse-button").onclick = kinkajou_collapse;
*/

function isLinkToCurrentPage() {
  var allLinks = document.getElementsByTagName("a");
  for (link of allLinks) {
    if (link.href == document.URL) {
      link.classList.add("current");
        if (
            link.classList.contains("collapsible-item")
            || link.classList.contains("title")
        ) {
        document.getElementById("kinkajou-collapse-button").classList.add("current");
      }
    }
  }
}

isLinkToCurrentPage();

