var uitslag1 = null;
var uitslag2 = null;
document.getElementById("form1").hidden = true;
document.getElementById("form2").hidden = true;
document.getElementById("winnaar").hidden = true;
function player1() {
    document.getElementById("start").hidden = true;
    document.getElementById("form1").hidden = false;
    document.getElementById("form2").hidden = true;
}
function player2() {
    document.getElementById("start2").hidden = false;
    document.getElementById("form2").hidden = false;
    document.getElementById("form1").hidden = true;
}
function winnaar() {
    document.getElementById("start2").hidden = true;
    document.getElementById("form2").hidden = true;
    document.getElementById("winnaar").hidden = false;
}
function check11() {
    uitslag1 = "steen";
    console.log(uitslag1);
}
function check12() {
    uitslag1 = "papier";
    console.log(uitslag1);
}
function check13() {
    uitslag1 = "schaar";
    console.log(uitslag1);
}
function check21() {
    uitslag2 = "steen";
    console.log(uitslag2);
}
function check22() {
    uitslag2 = "papier";
    console.log(uitslag2);
}
function check23() {
    uitslag2 = "schaar";
    console.log(uitslag2);
}
function test() {
    console.log(uitslag1);
    console.log(uitslag2);
    if (uitslag1 == uitslag2) {
        document.getElementById("winnaar").innerHTML = "gelijk spel";
    } else if ((uitslag1 == 'steen') && (uitslag2 == 'schaar')) {
        document.getElementById("winnaar").innerHTML = "speler 1 wint";
    } else if ((uitslag1 == 'steen') && (uitslag2 == 'papier')) {
        document.getElementById("winnaar").innerHTML = "speler 2 wint";
    } else if ((uitslag1 == 'schaar') && (uitslag2 == 'papier')) {
        document.getElementById("winnaar").innerHTML = "speler 1 wint";
    } else if ((uitslag1 == 'schaar') && (uitslag2 == 'steen')) {
        document.getElementById("winnaar").innerHTML = "speler 2 wint";
    } else if ((uitslag1 == 'papier') && (uitslag2 == 'steen')) {
        document.getElementById("winnaar").innerHTML = "speler 1 wint";
    } else if ((uitslag1 == 'papier') && (uitslag2 == 'steen')) {
        document.getElementById("winnaar").innerHTML = "speler 2 wint";
    }
}