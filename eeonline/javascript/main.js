
//This Script Expands and contracts Long Sets of Data
function helloshow() {
    if (document.getElementById('expanding').innerHTML == "Expand") {
        document.getElementById('hello').style.height = "";
        document.getElementById('hello').style.overflowY = "";
        document.getElementById('expanding').innerHTML = "Contract";
    } else if (document.getElementById('expanding').innerHTML == "Contract") {
        document.getElementById('hello').style.height = "300px";
        document.getElementById('hello').style.overflowY = "scroll";
        document.getElementById('expanding').innerHTML = "Expand";
    }
}