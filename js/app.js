

//selecting the banner background division .
let banner_div = document.querySelector(".banner_div");


//selecting the division for all the button for the banner 
let bannerButton_div = document.querySelector(".banner_nav_button");



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