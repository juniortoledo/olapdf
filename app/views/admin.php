<?= $this->layout('_template') ?>

<div class="col-12 text-center mt-3">
  <h5>Upload de arquivo</h5>

  <form action="<?= URL ?>upload" method="POST" enctype="multipart/form-data">
    <input class="form-control form-control-lg mt-2" name="name" placeholder="Nome da edição ou data" id="formFileLg" type="text" required>
    <input class="form-control form-control-lg mt-2" name="date" placeholder="Data de publicação" id="formFileLg" type="text" required>
    <input class="form-control form-control-lg mt-2" name="file" id="formFileLg" type="file" required>
    <button class="btn btn-lg btn-primary w-100 mt-2">Salvar</button>
  </form>
</div>