<?=$this->extend('template/template');?>
<?=$this->section('graphics');?>
<br>
<div class="container-fluid">
    <h3>AMD Radeon RX Graphics Cards</h1>
</div>
<div class="container">
    <br>
    <div class="card">
        <div class="row" style="background-image: url('img/redlight-bg.webp'); background-position: center center; background-repeat: no-repeat; background-size: cover;color: white">
            <div class="col">
                <img src="img/rx6600.webp" alt="" width="600">
            </div>
            <div class="col" >
                <p>
                <h3>Performance to Rule Your Game</h3>
                </p>
                <h6>Introducing the AMD Radeon™ RX 6000 Series graphics cards, featuring the breakthrough AMD RDNA™ 2 architecture, engineered to deliver ultra-high performance and visually stunning gaming for all. We’re powering the next generation of gaming.</h6>
                <img src="img/rx6600-series.webp" alt"" width="200">
            </div>
        </div>
        
    </div>
    <br>
    <div class="card">
    <div class="input-group">
              <form method='get' action="/graphics" id="searchForm">
                <input type='text' name='search' value='' placeholder="Search here...">
                <input type='button' id='btnsearch' value='Search' onclick='document.getElementById("searchForm").submit();'>
              </form>
        </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Memory Size</th>
                <th>Memory Type</th>
                <th>Base Clock</th>
                <!-- <th>Detail</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list as $item) { ?>
            <tr>
                <td><?= $item['nama'] ?> </td>
                <td><?= $item['size'] ?> GB </td>
                <td><?= $item['type'] ?>  </td>
                <td><?= $item['base_clock'] ?> MHz </td>
                <!-- <td><a class="btn btn-success" href="<?= base_url('graphics/' . $item['id_product']); ?>">Detail</a></td> -->
            </tr>
            <?php } ?>
        </tbody>

    </table>
    </div>
    
</div>
<?=$this->endSection();?>
