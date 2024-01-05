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
var idreservClick;
var reservClick;
var reservChoose = [];
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
  calendar = '<div class="grid grid-cols-7 mt-5">';

  if (firstDay.getDay() > 1) {
    for (let y = 1; y <= firstDay.getDay(); y++) {
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
      var reserv = reservation.filter(function (element) {
        return element.date === idDate;
      }).length;
      if (reserv == 0) {
      } else {
        v =
          "<div class='absolute -top-2 -left-2 px-2 bg-green-500 text-white opacity-85 rounded-full text-sm'>" +
          reserv +
          "</div>";
      }

      Classe =
        "relative border border-sky-500 text-start p-2 pb-10 cursor-pointer hover:bg-sky-200";
    }
    calendar +=
      "<div class='" +
      Classe +
      "' id='" +
      idDate +
      "' " +
      " " +
      "onclick='seeDates(event)'" +
      ">" +
      v +
      i +
      "</div>";
  }
  calendar += "</div>";
}
function seeDates(event) {
  dateClique = event.target;
  iddateClique = dateClique.id;
  calendar;
  calendar =
    '<div class="w-full flex flex-wrap justify-center lg:flex-row  relative gap-4 w-full">';
  for (var i = 0; i < reservation.length; i++) {
    console.log(i);
    console.log(reservation[i].date);
    if (reservation[i].date == iddateClique) {
      calendar +=
        '<div class="bg-sky-800  w-80 rounded-xl border-2 border relative">' +
        '<p class="p-2 text-xl text-white font-bold">' +
        "Moniteur :" +
        reservation[i].moniteur +
        "</p>" +
        '<p class="p-2 text-xl text-white font-bold"> Début : ' +
        reservation[i].heur +
        ", durée :" +
        reservation[i].duree +
        "heur </p>" +
        '<div class="mt-5 mb-2 ml-2 bottom-0 right-0 flex"><div id="' +
        reservation[i].id +
        '" class="py-2 px-5 bg-sky-500 cursor-pointer rounded-3xl text-white hover:bg-black duration-300" onclick="Choose(event)">' +
        "Reservé" +
        "</div>" +
        "</div>";
    }
  }
  calendar += "</div>";
  Write();
  document.getElementById("month").innerText = iddateClique;
}
function Choose(event) {
  reservClick = event.target;
  idreservClick = reservClick.id;
  reservChoose.push({ reservation: idreservClick });
  console.log(reservChoose); 
}

function Write() {
  document.getElementById("month").innerText = months[firstDay.getMonth()];
  document.getElementById("calendar").innerHTML = calendar;
}

function Give() {
  firstDay = new Date(year, month, 1);
  lastDay = new Date(year, month + 1, 0);
}

function Form() {
    var form =
      "<h2 class='w-full text-white text-5xl text-center mt-2'>Confirmer Vos dates</h2>";
    for (let i = 0; i < reservChoose.length; i++) {
      e = i + 1;
      form +=
        '<h3 class=" ml-2 text-left text-white text-2xl">Date n°' + e + "</h3>";

      form +=
        '<input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="text" name="reservation' +
        i +
        '" value="' +
        reservChoose[i].reservation +
        '"/>';
    }
    console.log(form);
    document.getElementById("form").innerHTML = form;
  }
