<?php if ((isset($_GET['see'])) && (isset($_SESSION['AdminId']))) { 
    $plane = new Plane; 
    $find = $plane->findSomeone($_GET['see']); 
    $reservation = new Reservation; 
    
    $findReservation =  $reservation->Findother($find[0]['id']); 


    ?>
   
    <div class="w-full bg-white mt-10">


        <div class="w-full lg:w-3/4 relative m-auto  p-2">
            <div class="hidden absolute top-0 w-full h-full bg-white" id="hourly">
                <h2 class="mt-5 w-full text-center text-2xl text-sky-800">Choisissez votre Créneaux</h2>
                <div class=" text-black text-xl text-center mt-10" id="hourly_date">Jeudi 28 Décembre</div>
                <div class=" w-2/5 m-auto mt-10" id="hourly-hour">
                    <div class="border-y border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='ChooseHours(event)' id="10:00:00">
                        10h - 12h
                    </div>
                    <div class=" border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='ChooseHours(event)' id="13:00:00">
                        13h - 15h
                    </div>
                    <div class="border-y border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='ChooseHours(event)' id="15:10:00">
                        15h10 - 17h10
                    </div>
                </div>
            </div>



            <h2 class="text-5xl text-sky-800 w-full text-center">Reservation Avion <?= $find[0]['modele']?></h2>
            <div class="w-full lg:w-1/2  m-auto grid grid-cols-3 mt-10 mb-10">
                <div>
                    <div class="bg-gray-200 p-2 rounded-xl place-items-end w-1/2 m-auto cursor-pointer hover:bg-sky-200" onclick="RemoveMonth()">
                        <img src="./assets/images/chevron-left.svg" alt="right">
                    </div>
                </div>
                <h3 class="text-2xl text-gray-800 text-center " id="month"></h3>
                <div>
                    <div class="bg-gray-200 p-2 rounded-xl place-items-end w-1/2 m-auto cursor-pointer hover:bg-sky-200" onclick="AddMonth()">
                        <img src="./assets/images/chevron-right.svg" alt="right">
                    </div>
                </div>
            </div>
            <div class="w-full grid grid-cols-7 mt-5 text-sm lg:text-2sm text-center">
                <div class="border border-white text-start p-2">Dimanche</div>
                <div class="border border-white text-start p-2 ">Lundi</div>
                <div class="border border-white text-start p-2">Mardi</div>
                <div class="border border-white text-start p-2">Mercredi</div>
                <div class="border border-white text-start p-2">Jeudi</div>
                <div class="border border-white text-start p-2">Vendredi</div>
                <div class="border border-white text-start p-2">Samedi</div>
            </div>
            <div class="grid grid-cols-7 mt-5" id="calendar"></div>
            
        </div>
    </div>
    <script>
        const reservation = <?= json_encode($findReservation, JSON_UNESCAPED_UNICODE)?>;
         
    </script>


    <script src="./js/AdminCalendar.js"></script>
<?php } ?>