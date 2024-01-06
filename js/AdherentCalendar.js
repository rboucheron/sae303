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
  calendar =
    '<div class="w-full lg:w-1/2  m-auto grid grid-cols-3 mt-10 mb-10">' +
    '<div><div class="bg-gray-200 p-2 rounded-xl place-items-end w-1/2 m-auto cursor-pointer hover:bg-sky-200" onclick="RemoveMonth()"><img src="./assets/images/chevron-left.svg" alt="right"></div></div>' +
    '<h3 class="text-2xl text-gray-800 text-center " >' +
    months[firstDay.getMonth()] +
    "</h3>" +
    '<div><div class="bg-gray-200 p-2 rounded-xl place-items-end w-1/2 m-auto cursor-pointer hover:bg-sky-200" onclick="AddMonth()"><img src="./assets/images/chevron-right.svg" alt="right"></div></div></div>';

  calendar +=
    '<div class="w-full grid grid-cols-7 mt-5 text-sm lg:text-2sm text-center">' +
    '<div class="border border-white text-start p-2">Dimanche</div>' +
    '<div class="border border-white text-start p-2 ">Lundi</div>' +
    '<div class="border border-white text-start p-2">Mardi</div>' +
    '<div class="border border-white text-start p-2">Mercredi</div>' +
    '<div class="border border-white text-start p-2">Jeudi</div>' +
    '<div class="border border-white text-start p-2">Vendredi</div>' +
    '<div class="border border-white text-start p-2">Samedi</div>' +
    "</div>";
  calendar += '<div class="grid grid-cols-7 mt-5">';

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
function Goback() {
  Give();
  Fill();
  Write();
}
function seeDates(event) {
  dateClique = event.target;
  iddateClique = dateClique.id;
  calendar;
  calendar =
    '<div class="relative mt-10 w-full flex flex-wrap justify-center lg:flex-row  relative gap-4 w-full">';
  calendar +=
    '<div class="absolute top-0 left-0 text-blue-800 text-x cursor-pointer" onclick="Goback()">Revenir en arrière</div>';
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
  document.getElementById(idreservClick).classList.add("hidden");
}

function Write() {
 
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
    var characteristic = reservation.filter(function (element) {
      return element.id == reservChoose[i].reservation;
    });
    e = i + 1;
    form +=
      '<div class="border p-2 w-1/2 m-auto rounded-xl" ><h3 class=" ml-2 text-left text-white text-2xl">Date n°' +
      e +
      "</h3>";
    form +=
      '<p class=" ml-2 text-left text-white text-xl"> Date : ' +
      characteristic[0].date +
      "</p>" +
      '<p class=" ml-2 text-left text-white text-xl"> Début : ' +
      characteristic[0].heur +
      "</p>" +
      '<p class=" ml-2 text-left text-white text-xl"> Durée : ' +
      characteristic[0].duree +
      " heur </p>";
    form +=
      '<input class="hidden" type="text" name="reservation' +
      i +
      '" value="' +
      reservChoose[i].reservation +
      '"/>';
  }
  console.log(form);
  document.getElementById("form").innerHTML = form;
}
