
function verifdate()
{
var sdate1 = document.getElementById('d1').value
var date1 = new Date();
date1.setFullYear(sdate1.substr(6,4));
date1.setMonth(sdate1.substr(3,2));
date1.setDate(sdate1.substr(0,2));
date1.setHours(0);
date1.setMinutes(0);
date1.setSeconds(0);
date1.setMilliseconds(0);
var d1=date1.getTime()

var sdate2 = document.getElementById('d2').value
var date2 = new Date();
date2.setFullYear(sdate2.substr(6,4));
date2.setMonth(sdate2.substr(3,2));
date2.setDate(sdate2.substr(0,2));
date2.setHours(0);
date2.setMinutes(0);
date2.setSeconds(0);
date2.setMilliseconds(0);
var d2=date2.getTime()

//si la date d'arrviée et superieur a la date de depart en afficher un message d'erreur
if(d1>d2)
{ 
  alert('Verfier Vos Dates')
  return false;
}

var qte =  parseInt(document.getElementById('solde').value)
if(qte < 0) {
  alert('Solde Negatif')
  return false;

}


}

function verifsolde()
{

var qte =  parseInt(document.getElementById('s1').value)
if(qte < 0) {
  alert('Solde Negatif')
  return false;

}


}