var metaiconA = document.querySelectorAll("a.metaicon[href*='javascript: void(0)']");

for (i = 0; i < metaiconA.length; i++) {
    metaiconA[i].innerHTML += "<img class='nope' src='http://mirthe.net/portfolio/wp-content/themes/html5blank-stable-child/img/icons/nope.png'/>";
}