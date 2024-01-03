<?php
if (!empty($_FILES['image'])) {
    $date = date('m-d');
    $name = "assets/images" . $date . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $name);
    $plane = new Plane; 
    $plane->Add($_POST['model'], $_POST['marque'], $_POST['immatriculation'], $_POST['description'], $_POST['type'], $name); 


}
?>

<section id="addplane" class="mt-10 w-full">
    <h1 class="text-sm lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Nouvelles Avions</h1>
    <form action="" method="post">
        <div class="w-3/4 m-auto flex flex-col ">
            <h3 class="w-full mt-4 text-slate-600 text-center">General</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Marque" type="text" name="marque" />
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="model" type="text" name="model" />
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="immatriculation" type="text" name="immatriculation" />
            <h3 class="w-full mt-4 text-slate-600 text-center">Description</h3>
            <textarea name="description" id="description" class=" w-3/4 m-auto p-2 border-2 focus:outline-none  text-gray-500 rounded-lg" acols="30" rows="10"></textarea>

            <h3 class="w-full mt-4 text-slate-600 text-center">Image</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" id='input' type='file' name='image' />
            <button type="submit" class="mt-3 p-2 bg-cyan-100 w-1/3 m-auto mt-2">Ajouter</button>
        </div>
    </form>


</section>
<