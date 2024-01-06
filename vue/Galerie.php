<section class="bg-gray-200 mt-20 p-16 w-full">
    <div class="  text-2xl text-center m-auto text-slate-700 font-bold pb-4" >GALERIE PHOTO</div>
  <div class="grid grid-cols-3 md:grid-cols-3 gap-4">
    <!-- Ajoutez la classe 'modal-trigger' à chaque div contenant une image -->
    <div class=" hover:scale-105 duration-300 modal-trigger">
        <img class="h-auto max-w-full rounded-lg bg-white" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
    </div>
    <div class="hover:scale-105 duration-300 modal-trigger">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
    </div>
    <div class="hover:scale-105 duration-300 modal-trigger">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
    </div>

  </div>
  <div class=" mt-6 grid grid-cols-2 md:grid-cols-3 gap-4">
    <!-- Ajoutez la classe 'modal-trigger' à chaque div contenant une image -->
    <div class="hover:scale-105 duration-300 modal-trigger">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
    </div>
    <div class="hover:scale-105 duration-300 modal-trigger">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
    </div>

  </div>

  <!-- Ajoutez la modal à la fin de votre section -->
  <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-75 overflow-hidden modal hidden">
    <div class="bg-white max-w-2xl mx-auto p-4 rounded-lg overflow-hidden">
      <img class="w-full h-auto" id="modal-image" src="" alt="">
    </div>
  </div>
</section>

<!-- Ajoutez le script JavaScript Tailwind pour gérer l'ouverture/fermeture de la modal -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modalTriggerElements = document.querySelectorAll('.modal-trigger');
    const modalElement = document.querySelector('.modal');
    const modalImageElement = document.getElementById('modal-image');

    modalTriggerElements.forEach((triggerElement) => {
      triggerElement.addEventListener('click', () => {
        const imageSrc = triggerElement.querySelector('img').src;
        modalImageElement.src = imageSrc;
        modalElement.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
      });
    });

    modalElement.addEventListener('click', () => {
      modalElement.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    });

    modalImageElement.addEventListener('click', (event) => {
      event.stopPropagation(); // Empêche la fermeture de la modal lors du clic sur l'image
    });
  });
</script>


