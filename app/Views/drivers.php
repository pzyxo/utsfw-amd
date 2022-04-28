<?=$this->extend('template/template');?>
<?=$this->section('drivers');?>
<br>
<div class="container-fluid">
    <h3>AMD Radeon Graphic Drivers</h1>
</div>
<div class="container">
    <div class="card">

    </div>
    <div class="card">
    <select class="form-select" aria-label="Default select example">
        <option selected>Select Graphics Card</option>
        <?php
            foreach ($list as $item) { ?>
                <option value="$item['id_driver']"><?= $item['nama_driver'] ?> </option>
            <?php } ?>
    </select>
    </div>
</div>
<br>
<div class="container">
<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Product Graphics</th>
                <th>Driver Name</th>
                <th>Driver Size</th>
                <!-- <th>Detail</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list as $item) { ?>
            <tr>
                <td><?= $item['id_product'] ?>  </td>
                <td><?= $item['nama_driver'] ?> </td>
                <td><?= $item['size_driver'] ?> MB </td>
                <!-- <td><a class="btn btn-success" href="<?= base_url('graphics/' . $item['id_product']); ?>">Detail</a></td> -->
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#user-table').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('drivers/ajaxList') ?>",
                    "type": "POST"
                },
                "columnDefs": [{
                    "targets": [],
                    "orderable": false,
                }, ],
            });
        });
    </script>
<?=$this->endSection();?>
