<?php 
if(isset($_GET['plane'])){
    $id = $_GET['plane']; 
    $plane = new plane(); 
    $result = $plane->findSomeone($id); 
}else{
    echo"avion innéxistant"; 
}
?> 
<section>
    <div class="grid grid-cols-2 mt-20 gap-4">
        <div>
            <img src="./assets/images/b.jpg" alt="<?= $result[0]['modele']?>">
        </div>
        <div>
            <h1 class="text-2xl text-white"><?= $result[0]['modele']?><?= $result[0]['marque']?></h1>
        </div>

    </div>
</section>