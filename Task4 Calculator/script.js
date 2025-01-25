const display=document.querySelector(".display");
let button=document.querySelectorAll("button");

function appendToDisplay(input) {
    display.textContent += input;
}

function clearDisplay() {
    display.textContent="";
}

function calculate() {
    try {
    display.textContent=eval(display.textContent);
    }
    catch(error) {
    display.textContent="Error";
    }
}