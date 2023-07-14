//Popup
function show(state, id) {
   if (id != null)
      document.getElementById(id).style.display = state;
   else {
      document.getElementById('Fpp-window').style.display = state;
   }
   document.getElementById('Fpp-background').style.display = state;
};
