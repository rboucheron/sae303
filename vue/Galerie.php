<section class=" mt-20 p-16 w-full" id="galerie">
  <h1 class="text-2xl lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Galerie photo</h1>
  <div class="block lg:grid grid-cols-3 p-4 mt-10">

    <div class="mt-2 p-2 lg:mt-0 hover:scale-105 duration-300 modal-trigger">
      <img class="h-max cover max-w-full rounded-lg" src="./assets/images/b.jpg" alt="">
    </div>
    <div class="mt-2  p-2 lg:mt-0 hover:scale-105 duration-300 modal-trigger">
      <img class="h-max cover max-w-full rounded-lg" src="./assets/images/course-5.jpg" alt="">
    </div>
    <div class="mt-2 p-2 lg:mt-0 hover:scale-105 duration-300 modal-trigger">
      <img class="h-max cover max-w-full rounded-lg" src="./assets/images/troisAutogires.jpg" alt="">
    </div>

  </div>
  <div class="w-3/4 m-auto mt-0 block lg:grid grid-cols-3 gap-4">

    <div class="mt-2 lg:mt-0  hover:scale-105 duration-300 modal-trigger">
      <img class="h-auto max-w-full rounded-lg" src="./assets/images/course-4.jpg" alt="">
    </div>
    <div class="mt-2 lg:mt-0  hover:scale-105 duration-300 modal-trigger">
      <img class="h-auto max-w-full rounded-lg" src="./assets/images/AeropraktA-22Foxbat.jpg" alt="">
    </div>
    <div class="mt-2 lg:mt-0  hover:scale-105 duration-300 modal-trigger">
      <img class="h-auto max-w-full rounded-lg" src="./assets/images/course-1.jpg" alt="">
    </div>


  </div>


  <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-75 overflow-hidden modal hidden">
    <div class="bg-white max-w-2xl mx-auto p-4 rounded-lg overflow-hidden">
      <img class="w-full h-auto" id="modal-image" src="" alt="">
    </div>
  </div>
</section>


<script>
  document.addEventListener('DOMContentLoaded', function() {
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
      event.stopPropagation(); 
    });
  });
</script>