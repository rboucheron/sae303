<?php
if (isset($_GET['plane'])) {
    $id = $_GET['plane'];
    $plane = new plane();
    $result = $plane->findSomeone($id);
} else {
    echo "avion innéxistant";
}
?>
<section>
    <div class="grid grid-cols-2 mt-20 gap-4">
        <div>
            <img class="w-3/4 m-auto" src="./assets/images/<?= $result[0]['image'] ?>" alt="<?= $result[0]['modele'] ?>">
        </div>
        <div>
            <h1 class="text-5xl text-white"><?= $result[0]['modele'] ?><?= $result[0]['marque'] ?></h1>
            <h2 class="text-2xl text-white"><?= $result[0]['type'] ?></h2>
            <p class="w-3/4 text-xl mt-2"><?= $result[0]['description'] ?></p>
            
        </div>
    </div>

</section>