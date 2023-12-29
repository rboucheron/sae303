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
      var index = ever.indexOf(idDate);
      if (index !== -1) {
        Classe = "border border-sky-500 text-start p-2 pb-10 bg-green-500";
      } else {
        Classe =
          "border border-sky-500 text-start p-2 pb-10 cursor-pointer hover:bg-sky-200";
      }
    }
    calendar +=
      "<div class='" +
      Classe +
      "' id='" +
      idDate +
      "' " +
      " " +
      "onclick='ChooseDates(event)'" +
      ">" +
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

function ChooseDates(event) {
  var hourly = document.getElementById("hourly");
  dateClique = event.target;
  iddateClique = dateClique.id;
  hourly.classList.remove("hidden");
  document.getElementById("hourly_date").innerText = iddateClique;
}

function ChooseHours(event) {
  var hourClique;
  var hourly = document.getElementById("hourly");
  hourClique = event.target;
  idhourClique = hourClique.id;
  document.getElementById(iddateClique).classList.add("bg-green-300");
  ChooseDate.push({ hour: idhourClique, date: iddateClique });
  hourly.classList.add("hidden");
  compte = 0;
  console.log(ChooseDate);
}

function Form() {
  var form =
    "<h2 class='w-full text-white text-5xl text-center mt-2'>Confirmer Vos dates</h2>";
  for (let i = 0; i < ChooseDate.length; i++) {
    e = i + 1;
    form +=
      '<h3 class=" ml-2 text-left text-white text-2xl">Date n°' + e + "</h3>";
    form +=
      '<input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="date" name="reservation' +
      i +
      '" value="' +
      ChooseDate[i].date +
      '"/>';
    form +=
      '<input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="time" name="reservationhour' +
      i +
      '" value="' +
      ChooseDate[i].hour +
      '"/>';
  }
  console.log(form);
  document.getElementById("form").innerHTML = form;
}
