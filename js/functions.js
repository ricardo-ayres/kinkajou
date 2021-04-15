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

/* This function was deactivated. Its purpose was to sequentially scroll the
 * gallery with mouse clicks. It was replaced by scrolling the clicked image
 * into view
 */

/*
class kgal {
    constructor(className) {
        this.gal = document.getElementsByClassName(className);
        this.counter = 0;
    }
    next() {
        let i = this.counter;
        this.counter = (this.counter+1) % this.gal.length;
        return this.gal[i];
    }
    scroll() {
        this.next().scrollIntoView({behavior: 'smooth', block: 'center'});
    }
}
var sikgl = new kgal("gallery image");
function gScroll() {sikgl.scroll();}
document.getElementById("kinkajou-gallery").onclick = gScroll;
*/

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

// IE9, Chrome, Safari, Opera
for (e of document.getElementsByClassName("wrapper")) {
    e.addEventListener('mousewheel', scrollHorizontally, false);
    e.addEventListener('DOMMouseScroll', scrollHorizontally, false);
}
