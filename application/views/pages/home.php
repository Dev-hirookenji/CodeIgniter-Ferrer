<?php if($this->session->flashdata('user_loggedin')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>' ;?>
<?php endif;?>

<?php if($this->session->flashdata('post_added')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_added').'</p>' ;?>
<?php endif;?>

<?php if($this->session->flashdata('post_delete')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_delete').'</p>' ;?>
<?php endif;?>

<h1><?= $title; ?></h1><br>
<ul class="list-group">
<?php foreach($posts as $row){ ?>
    <a class="list-group-item list-group-item-action" href="<?= base_url() . $row['slug'] ?>"><?= $row['title'] ?></a>
<?php } ?>

</ul>
<br/>
<div class="alert alert-dark" role="alert">
 Total post is <?= $total;?>.
</div>