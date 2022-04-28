<?=$this->extend('template/template');?>
<?=$this->section('technologies');?>
<br>
<center class="container-fluid">
    <h1> Check Our Technologies We've Been Created </h1>
</center>
<br>
<div class="container">
    <table class="table table-bordered table-striped">
        <tbody>
            <?php
            foreach ($json as $json) { ?>
            <tr>
                <td><img src="<?= $json['thumbnail'] ?>" alt="" width="300"></td>
                <td><?= $json['teknologi'] ?> </td>
                <td><?= $json['deskripsi'] ?> </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>
<?=$this->endSection();?>
