/*----------------------------handling the user agreement exception from the frontend ----------------*/

let form_submit_button =document.querySelector(".submit_button");

let check_box_value = document.querySelector(".checkbox_input");

let img_button = document.querySelector(".img_button");

let pop_up_section = document.querySelector(".popup");

let checked_is_true = false;




form_submit_button.addEventListener("click", e => 
{
    checked = check_box_value.checked;
    if(checked === true) 
    {
        return true;
    }

    e.preventDefault();

    

    if(checked === false)
    {
        pop_up_section.classList.remove("popup_display_off");
    }

})




img_button.addEventListener("click", e => 
{
    e.preventDefault();


    if(e.target.id === "close_button")
    {
        pop_up_section.classList.add("popup_display_off");
    }


})