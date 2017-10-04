//Validates the user's username
function nameAndPassValidation() {
    let x = document.forms["profileForm"]["Username"].value;
    let y = document.forms["profileForm"]["Password"].value;
    if (x == "") {
        alert("Username must be filled out");
        return (false);
    } else if (y == "") {
        alert("Password must be filled out");
        return (false);
    } else {
        alert("Your Password is:" + y);
        return (true);
    }
}

function orderValidation() {
    let item1_val = document.forms["orderForm"]["item1"].value;
    let item2_val = document.forms["orderForm"]["item2"].value;
    let item3_val = document.forms["orderForm"]["item3"].value;
    let shipping_val = document.forms["orderForm"]["shipping"].value;

    if (item1_val == "" || item1_val < 0) {
        alert("Item 1: Input is required and cannot be negative.");
        return (false);
    } else if (item2_val == "" || item1_val < 0) {
        alert("Item 2: Input is required and cannot be negative.");
        return (false);
    } else if (item3_val == "") {
        alert("Item 3: Input is required and cannot be negative.");
        return (false);
    } else if (shipping_val != "0" && shipping_val != "50" && shipping_val != "5") {
        alert("Shipping: Input is required.");
        return (false);
    } else {
        return (true);
    }
}
