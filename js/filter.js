var tagsArray = [];
var elements = document.querySelectorAll("article");
for (i = 0; i < elements.length; i++) {
    var classesString = elements[i].classList.toString();
    while (classesString.length > 0) {
        if (classesString.search(/\btag-[\S]*/g) !== -1) {
            var x = classesString.search(/\btag-[\S]*/g);
            var y = classesString.length - x;
            classesString = classesString.substr(x,y);
            var n = classesString.search(/\s|[%]/g);

            if (n != -1) {
                var tag = classesString.substr(0,n);
                tagsArray.push(tag);
                classesString = classesString.substr(n,y);
            }
            else {
                var tag = classesString.substr(0,y);
                tagsArray.push(tag);
                classesString = "";
            }

        }
        else {
            classesString = "";
        }
    }
}
/* filter array function 
    arrayVar takes each var from the array. index is matching index.
    indexOf(arrayVar) gets index of first occurence.
    If first occurence index matches arrayVar index, arrayVar is either unique or the first occurence.
    If the matching index condition is met, function returns boolean true and arrayVar gets added to new array.
*/
var filterArray = tagsArray.filter(function(arrayVar,index) {
    return tagsArray.indexOf(arrayVar) == index;
});

filterArray.sort();
    
var nav = document.querySelector("#filter-nav");
nav.innerHTML = nav.innerHTML + '<h1>Filter</h1><ul id="filter"><li id="tag-alles" class="is-checked tag-alles">Alles</li></ul>';
var filter = document.querySelector("#filter");
for (var j = 0; j < (filterArray.length); j++) {
    filter.innerHTML = filter.innerHTML + '<li class="' + filterArray[j] + '">' + filterArray[j].substr(4) + '</li>';
}

var articleItems = document.querySelectorAll("#items article");
var clickedItem;
var itemsToSelect;
var activeItem = document.querySelector("#filter li.is-checked");

function clickListItem(event) {
    activeItem.classList.remove("is-checked");
    clickedItem = event.target;
    activeItem = event.target;
    if (clickedItem.id == "filter") {
        console.log("click miss");
    }
    else if (clickedItem.id == "tag-alles") {
        for (x = 0; x < articleItems.length; x++) {
            articleItems[x].classList.add("selectedarticle");
        }
        clickedItem.classList.add("is-checked");
    }        
    else {
        for (x = 0; x < articleItems.length; x++) {
            articleItems[x].classList.remove("selectedarticle");
        }
        itemsToSelect = document.querySelectorAll("#items article." + clickedItem.classList.item(0));
        for (x = 0; x < itemsToSelect.length; x++) {
            itemsToSelect[x].classList.add("selectedarticle");
        }
            
        clickedItem.classList.add("is-checked");
    }
}

filter.addEventListener('click', clickListItem, false);