//complete code listing for lightbox.js
window.console.log("Hello from Lightbox Javascript");

// function to initialize lightbox object
function init()
{
    var lightboxElemnts = "<div id ='lightbox'>" +
        "<div id ='overlay' class='hidden'></div>" +
        "<img id='big-image' class='hidden' />" +
        "</div>";
    document.querySelector("body").innerHTML += lightboxElemnts;
    //new code: register toggle as event handler
    var bigImage = document.querySelector("#big-image")
    bigImage.addEventListener("click",toggle, false);
//end of changes
    prepareThumbs();
}

function toggle(event)
{
    var clickedImage = event.target; //get which image is clicked
    var overlay = document.querySelector("#overlay");
    var bigImage = document.querySelector("#big-image");
    bigImage.src = clickedImage.src;
    //if the overlay is hidden, we can assume bigImage is also hidden
    if(overlay.getAttribute("class") === "hidden")
    {
        overlay.setAttribute("class", "showing");
        bigImage.setAttribute("class", "showing");
    }
    else
    {
        overlay.setAttribute("class", "hidden");
        bigImage.setAttribute("class", "hidden");
    }

}

function prepareThumbs()
{
    var liElements = document.querySelectorAll("ul#images li");
    var i=0;
    var image,li;
    while(liElements.length)
    {
        li = liElements[i]; //iterating through every li item
        li.setAttribute("class", "lightbox");  // setting class attribute to 'lightbox' to every li element
        image = li.querySelector("img");    //selecting li elements of images
        image.addEventListener("click", toggle, false);
        i++;
    }
}

document.addEventListener("DOMContentLoaded", init, false);