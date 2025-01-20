console.log("yes");
function changeoption() {
  const selectElement = document.getElementById("category");
  const selectedValue = selectElement.value;
  if(selectedValue){
    if(selectedValue==="all"){
        window.location.href = "?page=toutlesproduits";
    }else{
        window.location.href = "?page=" + encodeURIComponent(selectedValue);
    }
  }

}

function delacc(){
  if(confirm("êtes-vous sûr de vouloir supprimer votre compte ?")){
    window.location.href = "?page=deconnexion&id=del";
  } 
}

function deconnexion(){
  window.location.href ="?page=deconnexion";
}