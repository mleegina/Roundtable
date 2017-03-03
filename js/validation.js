function validateToken() {
    var x = document.forms["gettoken"]["token"].value;
    if (x == "") {
        alert("Token must be filled out");
        return false;
    }
};

function validateMOD() {
    var v = document.forms["valMod"]["name"].value;
    var w = document.forms["valMod"]["token"].value;
    var x = document.forms["valMod"]["crust"].value;
    var y = document.forms["valMod"]["sauce"].value;
    if (v == "") {
        alert("Name must be filled out");
        return false;
    }
    if (w == "") {
        alert("Token must be filled out");
        return false;
    }
    if (x == "0") {
        alert("Crust must be chosen");
        return false;
    }
    if (y == "0") {
        alert("Sauce must be chosen");
        return false;
    }
};

function validateChipotle() {
    var v = document.forms["valChip"]["name"].value;
    var w = document.forms["valChip"]["token"].value;
    var x = document.forms["valChip"]["meal"].value;
    var y = document.forms["valChip"]["meat"].value;
    if (v == "") {
        alert("Name must be filled out");
        return false;
    }
    if (w == "") {
        alert("Token must be filled out");
        return false;
    }
    if (x == "0") {
        alert("Type of meal must be chosen");
        return false;
    }
    if (y == "0") {
        alert("Type of meat must be chosen");
        return false;
    }
};

function validateBB() {
    var v = document.forms["valBB"]["name"].value;
    var w = document.forms["valBB"]["token"].value;
    if (v == "") {
        alert("Name must be filled out");
        return false;
    }
    if (w == "") {
        alert("Token must be filled out");
        return false;
    }
};
