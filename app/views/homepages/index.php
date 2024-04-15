<?php require_once APPROOT . '/views/includes/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/instructeurs/index">Instructeurs</a> |
            <a href="<?= URLROOT; ?>/Countries/index">Landen van de Wereld</a> |

        </div>
        <div class="col-3"></div>
    </div>

</div>




<?php require_once APPROOT . '/views/includes/footer.php'; ?>