const months = [
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Decembre",
  ];
  var dateClique;
  var iddateClique;
  var idhourClique;
  var form;
  var today = new Date();
  var month = today.getMonth();
  var year = today.getFullYear();
  var firstDay;
  var lastDay;
  Give();
  var div = "<div class='border border-white p-2'></div>";
  var calendar = div;
  Fill();
  Write();
  var ChooseDate = [];
  
  function AddMonth() {
    month++;
    if (month > 11) {
      month = 0;
      year++;
    }
    Give();
    calendar = div;
    Fill();
    Write();
  }
  
  function RemoveMonth() {
    month--;
    if (month < 0) {
      month = 11;
      year--;
    }
    Give();
    calendar = div;
    Fill();
    Write();
  }
  
  function Fill() {
    if (firstDay.getDay() > 1) {
      for (let y = 2; y <= firstDay.getDay(); y++) {
        calendar += div;
      }
    }
    var Classe;
    var v; 
    for (let i = 1; i <= lastDay.getDate(); i++) {
      var idMonth = firstDay.getMonth();
      var idDay = i;
      idMonth++;
      if (idMonth < 10) {
        idMonth = "0" + idMonth;
      }
      if (idDay < 10) {
        idDay = "0" + idDay;
      }
      var idDate = firstDay.getFullYear() + "-" + idMonth + "-" + idDay;
      v = ""; 
      if (
        firstDay.getFullYear() < today.getFullYear() ||
        (firstDay.getFullYear() === today.getFullYear() &&
          firstDay.getMonth() < today.getMonth()) ||
        (firstDay.getFullYear() === today.getFullYear() &&
          firstDay.getMonth() === today.getMonth() &&
          i < today.getDate())
      ) {
        Classe = "border border-sky-500 text-start p-2 pb-10 bg-gray-200";
      } else {
        var reserv = reservation.filter(function(element) {
            return element.date === idDate;
        }).length;
        if(reserv == 0){
            
        }else{
            v = "<div class='absolute -top-2 -left-2 px-2 bg-green-500 text-white opacity-85 rounded-full text-sm'>" + reserv + "</div>"; 
        }
     
          Classe = "relative border border-sky-500 text-start p-2 pb-10 cursor-pointer hover:bg-sky-200";
      
      }
      calendar +=
        "<div class='" +
        Classe +
        "' id='" +
        idDate +
        "' " +
        " " +
        "onclick='ChooseDates(event)'" +
        ">"+ v +
        i +
        "</div>";
    }
  }
  
  function Write() {
    document.getElementById("month").innerText = months[firstDay.getMonth()];
    document.getElementById("calendar").innerHTML = calendar;
  }
  
  function Give() {
    firstDay = new Date(year, month, 1);
    lastDay = new Date(year, month + 1, 0);
  }
  

