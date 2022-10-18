<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div style="margin:20px;">
    <button class="btn_tampil" onclick="openCity('Input')">Input Barang</button>
    <button class="btn_tampil" onclick="openCity('List')">List Barang</button>

    <hr>

    <div id="Input" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>

        <div class="ctnr">
            <p>Form Tambah Barang</p>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <form role="form" action="insert.php" method="post">

                        <label for="harga jual">Harga Jual</label><br>
                        <select class="form-control" id="harga jual">
                            <option> </option>
                            <option value="premium">50.000</option>
                            <option value="reguler">35.000</option>
                            <option value="ekonomis">10.000</option>
                            <option value="new">lainya</option>
                        </select>

                        <div class="form-group">
                            <label for="start">Tanggal:</label><br>
                            <input class="form-control" type="date" id="start" name="trip-start" value="2018-07-22"
                                min="2018-01-01" max="2035-12-31">
                        </div>

                        <div class="form-group">
                            <label>Harga Modal</label>
                            <input type="text" name="terbit_bk" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Banyak Barang</label>
                            <input type="text" name="genre_bk" class="form-control">
                        </div>


                        <button type="submit" style="
                cursor: pointer;
                border-radius: 10px;
                background-color: #F4EB93;
                padding: 5px 30px 5px 30px;
                font-family: roboto;
                /* margin-left:30%; */
                font-size: 15px;
                color:#171C7B; 
                border-color:#171C7B;         
                font-weight: bold;">Tambah Barang</button>
                    </form>


                </div>
            </div>
        </div>




    </div>

    <div id="List" class="w3-container w3-display-container city" style="display:none">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>

        <p><?= $this->include('inventaris/list_barang'); ?></p>
    </div>
</div>


<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
}
</script>





<?= $this->endSection(); ?>