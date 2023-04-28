<h1><?= $title; ?></h1>
<hr>
<?= validation_errors();?>
<div class="row">
    <?= form_open('add');?>
    <div class="col-lg-12">
    <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="<?= set_value('title');?>">
    </div>
    <br>
    <div class="form-group">
        <textarea name="body" id="" cols="30" rows="5" class="form-control" placeholder="Enter Post Details" value="<?= set_value('title');?>"></textarea>
    </div>
    </div>
<div class="mt-4">
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
</div>  



