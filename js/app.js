

//selecting the banner background division .
let banner_div = document.querySelector(".banner_div");


//selecting the division for all the button for the banner 
let bannerButton_div = document.querySelector(".banner_nav_button");



//event listener for the banner (note event delegation was implemented , element were not targeted directly) 
bannerButton_div.addEventListener("click", e => 
{
    e.preventDefault();
    if(e.target.id === "button1") 
    {
        banner_div.classList.remove("banner_div_two");
        banner_div.classList.add("banner_div");
    }
    else if( e.target.id === "button2") 
    {

        banner_div.classList.remove("banner_div");
        banner_div.classList.add("banner_div_two");
    }
    else 
    {
        banner_div.classList.remove("banner_div_two");
        banner_div.classList.add("banner_div");
    }
})


/* javascript for the carousel will go here ------------------__*/ 


function scrollL() 
{
    let left = document.querySelector(".scroll_images");
    left.scrollBy(350,0);
}

function scrollR() 
{
    let right = document.querySelector(".scroll_images");
    right.scrollBy(-350,0);
}

