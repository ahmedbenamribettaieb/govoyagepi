function dateCompare()
{

    var startDt = document.getElementsByName("depart").value;
    var endDt = document.getElementsByName("arrivee").value;
    alert("its wrong"+startDt.toString());
   if(startDt.toString().localeCompare(endDt.toString())===-1){
       alert("One of the Date are invalid");
   }
}