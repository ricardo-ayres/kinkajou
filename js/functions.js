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
					(link.classList.contains("posts") && link.classList.contains("item"))
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
    if ((screen.width >= 980) && this.classList.contains("horizontal") && !this.classList.contains("locked")) {
        e = window.event || e;
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        this.scrollLeft -= (delta * 30);
        e.preventDefault();
    }
}

for (e of document.getElementsByClassName("wrapper horizontal")) {
		/* IE9, Chrome, Safari, Opera */
		e.addEventListener('mousewheel', scrollHorizontally, false);
		/* Firefox */
		e.addEventListener('DOMMouseScroll', scrollHorizontally, false);
}

for (e of document.getElementsByClassName("single text")) {
		e.onclick = function(){
				for (e of document.getElementsByClassName("wrapper horizontal")) {
						if (e.contains(this)) {
								e.classList.toggle("locked");
						}
				}
				this.classList.toggle("wide");
		};
}

