/* Collapse posts menu in sidenav */
function kinkajou_posts_list() {
  var menu = document.getElementById("sidenav-collapsible");
  var btn = document.getElementById("sidenav-button");
  if (menu.style.maxHeight == "unset") {
    menu.style.maxHeight = 0;
  } else {
    menu.style.maxHeight = "unset";
  }
  btn.classList.toggle("expanded");
}
document.getElementById("sidenav-button").onclick = kinkajou_posts_list;

/* Highlight navigation to current page */
function isLinkToCurrentPage() {
  var allLinks = document.getElementsByTagName("a");
  for (link of allLinks) {
    if (link.href == document.URL) {
      link.classList.add("current");
        if (
          link.className == "sidenav post current"
          || link.id == "home"
        ) {
        document.getElementById("sidenav-button").classList.add("current");
      }
    }
  }
}
isLinkToCurrentPage();

/* Scroll clicked gallery images into view */
galimgs = document.getElementsByClassName("gallery image");
for (i of galimgs) {
    i.onclick = function() {this.scrollIntoView({behavior: 'smooth', inline: 'center'})};
}

/* Scroll gallery and index horizontally */
function scrollHorizontally(e) {
    e = window.event || e;
    var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
    this.scrollLeft -= (delta * 40); // Multiplied by 40
    e.preventDefault();
}
for (e of document.getElementsByClassName("wrapper horizontal")) {
    /* IE9, Chrome, Safari, Opera */
    e.addEventListener('mousewheel', scrollHorizontally, false);
    /* Firefox */
    e.addEventListener('DOMMouseScroll', scrollHorizontally, false);
}
