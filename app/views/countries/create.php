<?php require_once APPROOT . '/views/includes/header.php'; ?>



<!-- Maak een formulier om gegevens in de Country tabel te kunnen opslaan -->

<div class="container">
  
  <div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <h3><?= $data['title']; ?></h3>
    </div>
    <div class="col-3"></div>
  </div>

  <div class="row mt-3">
    <div class="col-3">
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>        
    </div>
    <div class="col-3"></div>
  </div>
</div>







<?php require_once APPROOT . '/views/includes/footer.php'; ?>