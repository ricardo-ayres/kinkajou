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
