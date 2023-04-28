
<h1><?= $title; ?></h1>
<hr>
<p><?= $body; ?></p>
<br>
<p>Date Published: <?= $date; ?></p>
<?php if($this->session->logged_in == true && $this->session->access == 1){ ?>
<div class="btn-group">
    <a href="edit/<?= $id;?>" class="btn btn-primary">Edit</a>
    <a href="delete/<?= $id;?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
</div>
<?php } ?>
