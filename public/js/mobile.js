/*----------------------------handling cart item input quantiti ---------------------*/

let increment_button = document.querySelector(".input_add");
let decrement_button = document.querySelector(".input_drop");
let input_field = document.querySelector("#quantity_input");
let cart_hidden_input = document.querySelector(".hidden_input");






decrement_button.addEventListener("click",e => 
{
    e.preventDefault();
    input_value = parseInt(input_field.value) - 1;
    input_field.value = input_value;
    cart_hidden_input.value = input_value;
    console.log(cart_hidden_input.value);
})

increment_button.addEventListener("click",e => 
{
    e.preventDefault();
    input_value = parseInt(input_field.value) + 1 ;
    input_field.value = input_value;
    cart_hidden_input.value = input_value;
    console.log(cart_hidden_input.value);
})
