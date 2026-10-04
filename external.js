const username = document.getElementById('displayusername').innerText;
const password = document.getElementById('displayuserid').innerText;
const fathername = document.getElementById('displayfather').innerText;
const mothername = document.getElementById('displaymother').innerText;
const siblingsname = document.getElementById('displaysiblings').innerText;
// create a function that can hold the value of php variables
function greetUser(){
    alert("Hello "+ username +". " + " your user id is: "+ password + "Your father is: " + fathername + " and your mother is: " + mothername + " and your siblings are: " + siblingsname);
}