/*----------------------------handling the user agreement exception from the frontend ----------------*/

let form_submit_button =document.querySelector(".submit_button");

let check_box_value = document.querySelector(".checkbox_input");

let img_button = document.querySelector(".img_button");

let pop_up_section = document.querySelector(".popup");

let checked_is_true = false;


let registered = null;



    cookies = document.cookie;
    splitCookies = cookies.split(";");

    splitCookies.forEach(aSplitCookie => {

        splitAtEqual = aSplitCookie.split("=");

        splitAtEqualTrim = splitAtEqual[0].trim();

        if(splitAtEqualTrim === "registered")
        {
            registered = true;
        }

    });

    console.log(registered);





if(registered === true)
{

    window.addEventListener("load", e => 
    {


        e.preventDefault();

        pop_up_section.classList.remove("popup_display_off");


    })

}




img_button.addEventListener("click", e => 
{

    e.preventDefault();

    if(e.target.id === "close_button")
    {
        pop_up_section.classList.add("popup_display_off");
    }


})





/* ----------------------------------------handling the wishlist click message -----------------*/
let pop_up_wishlist_section = document.querySelector(".popup_wishlist");

let wishlist_button = document.querySelector("#wishlist_button");

let img_button2 =  document.querySelector("#img_button2");

wishlist_button.addEventListener("click", e => 
{
    e.preventDefault();
    pop_up_wishlist_section.classList.remove("popup_display_off");
})



img_button2.addEventListener("click", e => 
{

    e.preventDefault();

    console.log(e.target.id);

    if(e.target.id === "close_button2")
    {
        pop_up_wishlist_section.classList.add("popup_display_off");
    }


})


/* ----------------------------------------handling the add to cart click message -----------------*/
let pop_up_addToCart_section = document.querySelector(".popup_addToCart");

let addToCart_button = document.querySelector("#addToCart_button");

let img_button3 =  document.querySelector("#img_button3");

addToCart_button.addEventListener("click", e => 
{
    e.preventDefault();
    pop_up_addToCart_section.classList.remove("popup_display_off");
})



img_button3.addEventListener("click", e => 
{

    e.preventDefault();

    console.log(e.target.id);

    if(e.target.id === "close_button3")
    {
        pop_up_addToCart_section.classList.add("popup_display_off");
    }


})