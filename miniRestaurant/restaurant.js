
function arrayMenjar(){

var primerPlat = new Array(5);

primerPlat[0] = "Primer_Plat";
 primerPlat[1] = "Mariscada";
 primerPlat[2] = "Ensalada tibia";
 primerPlat[3] = "Amanida de ventresca";
 primerPlat[4] = "Polp a la Gallega";

var segonPlat = new Array(5);

segonPlat[0]="Segon_Plat";
segonPlat[1] = "Paella de marisc";
segonPlat[2]= "Parrillada de marisc";
segonPlat[3]= "Dorada a la sal";
segonPlat[4]= "Fideuada";

var postre =  new Array (5);

postre[0] = "postre";
postre[1]="Crema Catalana";
postre[2]="Coulant";
postre[3]="Sorbet Llima";
postre[4]="Macedonia";

var Menu= new Array(3);

Menu[0]= primerPlat;
Menu[1]= segonPlat;
Menu[2]= postre;

document.write("<table border=1>");
for (i=0; i<Menu.length; i++){
  document.write("<tr>");
  for (j=0; j<Menu[i].length; j++){
    document.write("<td>" +Menu [i][j] + "</td>");
  }
  document.write("</tr>");
}
document.write("</table>");
}
