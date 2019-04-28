function verifquantite()
{

var qte =  parseInt(document.getElementById('quantite').value)
if(qte < 0) {
  alert('Quantité negative')
  return false;

}


}
