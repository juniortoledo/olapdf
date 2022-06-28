<?= $this->layout('_template') ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-12">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Edição</th>
            <th scope="col">Download</th>
          </tr>
        </thead>
        <tbody>

          <?php if ($files) : ?>
            <?php foreach ($files as $item) : ?>
              <tr>
                <th scope="row"><?= $item->name ?></th>
                <td>
                  <a target="_black" href="<?= URL . 'assets/pdf/' . $item->name ?>" class="btn btn-primary btn-sm">Download</a>
                </td>
              </tr>
            <?php endforeach ?>
          <?php endif ?>

        </tbody>
      </table>

    </div>
    <!-- row -->
  </div>
  <!-- container -->
</div>