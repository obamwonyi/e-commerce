

//selecting the banner background division .
let banner_div = document.querySelector(".banner_div");

//select the special price un order list 
let special_price_ul = document.querySelector(".special_price_ul");

//selecting the division for all the button for the banner 
let bannerButton_div = document.querySelector(".banner_nav_button");



//event listener for the banner (note event delegation was implemented , element were not targeted directly) 
bannerButton_div.addEventListener("click", e => 
{
    e.preventDefault();

    let buttonOne = document.querySelector("#button1");
    let buttonTwo = document.querySelector("#button2");
    let buttonThree = document.querySelector("#button3");

    if(e.target.id === "button1") 
    {

                //removing the black  banner navigation button color when not active and setting it to the default value 
                buttonTwo.classList.remove("banner_button");
                buttonTwo.classList.add("banner_button_off");
        
                //removing the black  banner navigation button color when not active and setting it to the default value
                buttonThree.classList.remove("banner_button");
                buttonThree.classList.add("banner_button_off");
        
                //removing the default banner button and setting the the active banner 
                buttonOne.classList.remove("banner_button_off");
                buttonOne.classList.add("banner_button");


        banner_div.classList.remove("banner_div_two");
        banner_div.classList.add("banner_div");
    }
    else if( e.target.id === "button2") 
    {

        //selecting button one and two from the banner view selection 


        //removing the black  banner navigation button color when not active and setting it to the default value 
        buttonOne.classList.remove("banner_button");
        buttonOne.classList.add("banner_button_off");

        //removing the black  banner navigation button color when not active and setting it to the default value
        buttonThree.classList.remove("banner_button");
        buttonThree.classList.add("banner_button_off");

        //removing the default banner button and setting the the active banner 
        buttonTwo.classList.remove("banner_button_off");
        buttonTwo.classList.add("banner_button");

        banner_div.classList.remove("banner_div");
        banner_div.classList.add("banner_div_two");
    }
    else 
    {


        buttonTwo.classList.remove("banner_button");
        buttonTwo.classList.add("banner_button_off");

        //removing the black  banner navigation button color when not active and setting it to the default value
        buttonOne.classList.remove("banner_button");
        buttonOne.classList.add("banner_button_off");

        //removing the default banner button and setting the the active banner 
        buttonThree.classList.remove("banner_button_off");
        buttonThree.classList.add("banner_button");

        banner_div.classList.remove("banner_div_two");
        banner_div.classList.add("banner_div");
    }
})


/* javascript for the scroll menu will go here ------------------__*/ 

function scrollL() 
{
    let left = document.querySelector(".main_scroller");
    left.scrollBy(350,0);
}

function scrollR() 
{
    let right = document.querySelector(".main_scroller");
    right.scrollBy(-350,0);
}


let all_products = document.querySelector("#special_all");
let apple_products = document.querySelector("#special_apple");
let redmi_products = document.querySelector("#special_redmi");
let samsung_products = document.querySelector("#special_samsung");

let special_price = "special_price_items";
let special_price_off = "special_price_items_off";


window.addEventListener("load", (e) => 
{

    apple_products.classList.add(special_price_off);

    redmi_products.classList.add(special_price_off);
    
    samsung_products.classList.add(special_price_off);
})


special_price_ul.addEventListener("click", e => 
{
    e.preventDefault();
    console.log(e.target.id);

    if(e.target.id === "all")
    {

        all_products.classList.remove(special_price_off);
        all_products.classList.add(special_price);

        apple_products.classList.add(special_price_off);

        redmi_products.classList.add(special_price_off);
        
        samsung_products.classList.add(special_price_off);
    }

    if(e.target.id === "apple") 
    {
        all_products.classList.add(special_price_off)

        //apple_products.classList.remove(special_price);
        apple_products.classList.add(special_price);
        apple_products.classList.remove(special_price_off);
    
        redmi_products.classList.add(special_price_off);
        
        samsung_products.classList.add(special_price_off);

    }

    if(e.target.id === "redmi")
    {


        all_products.classList.add(special_price_off)

        apple_products.classList.add(special_price_off);
    
        //redmi_products.classList.remove(special_price);
        redmi_products.classList.add(special_price);
        redmi_products.classList.remove(special_price_off);
        
        samsung_products.classList.add(special_price_off);

    }

    if(e.target.id === "samsung")
    {

        all_products.classList.add(special_price_off)

        apple_products.classList.add(special_price_off);
    
        redmi_products.classList.add(special_price_off);
        
        //samsung_products.classList.remove(special_price);
        samsung_products.classList.add(special_price);
        samsung_products.classList.remove(special_price_off);

    }
})
