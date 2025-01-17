
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
