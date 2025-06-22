<main class="container mt-4">
  <section id="galeria" class="text-center">
    <h2>Galeria de Imagens</h2>
    <p class="mb-4">Confira alguns dos nossos trabalhos incríveis!</p>
    <div class="row">
      <?php
        $unhaApi = file_get_contents("http://localhost/teste/api/unha.php");
        $unhaApi = json_decode($unhaApi);

        foreach ($unhaApi as $unha) {
      ?>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <a href="unha/<?= $unha->id ?>">
              <img src="<?= $unha->banner ?>" class="img-fluid rounded-top" alt="<?= $unha->alt ?>">
            </a>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
  </section>

  <div class="text-center mt-4">
    <a href="horario" class="btn btn-lg btn-pink text-white">Reserve seu horário</a>
  </div>
</main>
 