var data_actual = new Date();
var dias = ["Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte"];
var mesos = ["Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"];
document.getElementById("data").innerHTML = (dias[data_actual.getDay()] + ", " + data_actual.getDate()+ " " +  mesos[data_actual.getMonth()] + " " + data_actual.getFullYear());

function edat() {
  var txt;
  var age = prompt("Introdueix la teva edat:", "");
  if (age == null || age == "" || age >= 120) {
      txt = "Introdueix la teva edat!";
  } else {
    if(age >= 18) {
      txt = "Hola! Tens " + age + " anys. Benvigut a la zona de compra!";
    } else {
        txt = "Si no ets major d'edat (+18) no pots entrar a aquesta pàgina";
    }
  }
  document.getElementById("compra").innerHTML = txt;
}

function sorteig(){
  var txt = "";
  var i;
  for(i=0; i < 5; i++) {
    txt += "Ticket número "+ (i+1) +": T"+(""+Math.random()).substring(2,6)+"<br>";
  }
  document.getElementById("tickets").innerHTML = txt;
}
