


/* ###################################### MENU ######################################### */
function activeMenu() {
  let menu = document.getElementById('menu');
  if(menu.style.display == 'none') {
    menu.style.display = 'flex';
  } else   {
    menu.style.display = 'none';
  }
}


/* ###################################### ACCORDION ######################################### */
let itemChevron = document.getElementsByClassName("item-chevron");
let panel = document.getElementsByClassName("panel");
let contador;

for (contador = 0; contador < itemChevron.length; contador++) {
  let panelNow = panel[contador]
  itemChevron[contador].addEventListener("click", function() {
    
    this.classList.toggle("active");
    
    
    if (panelNow.style.display == "block") {
      panelNow.style.display = "none";
    } else {
      panelNow.style.display = "block";
    }
  });
}