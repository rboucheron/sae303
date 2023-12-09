<?php 

include 'Plane.php'; 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body class="bg-gradient-to-r to-blue-500 bg-cyan-500 from-cyan-500">
    <header class="grid grid-cols-2 gap-4 lg:grid-cols-4">
    <div class="cursor-pointer grid place-items-start pt-2 lg:col-span-1  "><img src="./assets/images/logo.svg" class="w-16 mt-4 ml-4" alt=""></div>        
    <div class="cursor-pointer grid place-items-end pb-2 pr-6 lg:hidden "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg></div>
    <div class="hidden lg:grid place-items-center col-span-2 grid-cols-4 p-3">
        <a class="grid font-semibold text-xl cursor-pointer text-white hover:underline" >Accueil</a>
        <a class="grid font-semibold text-xl cursor-pointer text-white hover:underline" href="#activites">Activites</a>
        <a class="grid font-semibold text-xl cursor-pointer text-white hover:underline">Nos Moyens</a>
        <a class="grid font-semibold text-xl cursor-pointer text-white hover:underline" >Contact</a>
    </div>
    <div class="hidden lg:grid place-items-center grid-cols-2 pl-9 ">
        <div class=" grid">  <a class=" bg-gray-50 w-full text-center rounded-xl textfont-semibold text-xl cursor-pointer  p-3 ">Connexion</a></div>
        <div class=" grid"> <a class="bg-gray-50  w-full text-center rounded-xl textfont-semibold text-xl cursor-pointer  p-3">Inscription</a></div>
    </div>
    </header>
    <section class="w-full mt-36 ">
            <h1 class="text-sm lg:text-9xl w-3/4 m-auto text-center text-gray-50 font-bold ">VENEZ PILOTER UN ULM</h1>
            <p class="mt-2 text-2xl w-1/3 m-auto text-center text-slate-700 font-semibold ">Bienvenue chez AC2FL</p>
            <div class="w-1/3 m-auto mt-16 cursor-pointer">
                <div class="w-1/3 m-auto p-2 text-xl bg-gray-50 rounded-xl text-center text-slate-700 ">Découvrir </div>
            </div>
    </section>
    <section class="w-full mt-36 " id="activites">
        <h1 class="text-sm lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold ">Activites</h1>
        <div class="grid grid-cols-3 gap-4 mt-16">
            <div class="grid">
             <img src="./assets/images/reveil.svg" alt="" class="w-1/4 m-auto">
             <h3 class="text-slate-700 font-semibold m-auto mt-2 text-2xl">Bus Service </h3>
             <p class="w-2/4 m-auto text-center mt-3 text-gray-700">Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
            </div>
            <div class="grid mt-28">
                <img src="./assets/images/reveil.svg" alt="" class="w-1/4 m-auto">
                <h3 class="text-slate-700 font-semibold m-auto mt-2 text-2xl">Best Quality Food</h3>
                <p class="w-2/4 m-auto text-center mt-3 text-gray-700">Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
            </div>
            <div class="grid ">
                <img src="./assets/images/reveil.svg" alt="" class="w-1/4 m-auto">
                <h3 class="text-slate-700 font-semibold m-auto mt-2 text-2xl">Music Lesson </h3>
                <p class="w-2/4 m-auto text-center mt-3 text-gray-700">Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
            </div>
        </div>
    </section>
    <?php
    $plane = new Plane(" ", " ", " ", " "); 
    $searchPlane = $plane->findAll(); 
    foreach ($searchPlane as $model){

   

    
    ?>
 

    <section class="w-11/12 m-auto overflow-x-scroll mt-36 flex flex-nowrap relative">
        <div class="bg-gray-50 m-2 w-80 rounded-xl flex-none p-2">
            <img src="./assets/images/b.jpg" alt="image d'élicoptère">
            <p class="p-2 mb-4"> <?= $model['modele']?> <?= $model['marque']?> <?= $model['type']?></p>
            <a class="p-2 bg-cyan-500 rounded-xl mb-2" href="#reserver">Réserver</a>
        </div>
  

    </section>
    
<?php } ?>


 
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
      lucide.createIcons();
    </script>
    
</body>
</html>





