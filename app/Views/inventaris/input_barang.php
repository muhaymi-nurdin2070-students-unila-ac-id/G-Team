<div style="
        height:auto;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color:#F14080;
        color:#171C7B;
        padding: 15px;
        border-radius: 20px;
        color:#171C7B;">
    <p>Form Tambah Barang</p>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <form role="form" action="insert.php" method="post">

                <label for="harga jual">Harga Jual</label><br>
                <select id="harga jual" style="
                margin-top: 8px; 
                margin-bottom: 8px; 
                width:270px;
                height:30px;
                border-radius: 5px;
                border-color:#F4EB93;
                font-family: roboto;
                font: size 13px;">
                    <option> </option>
                    <option value="premium">50.000</option>
                    <option value="reguler">35.000</option>
                    <option value="ekonomis">10.000</option>
                    <option value="new">lainya</option>
                </select>

                <div>
                    <label for="start">Tanggal:</label><br>
                    <input style="
                    margin-top: 8px; 
                    margin-bottom: 8px; 
                    width:270px;
                    height:30px;
                    border-radius: 5px;
                    border-color:#F4EB93;
                    font-family: roboto;
                    font: size 13px;" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                        max="2035-12-31">
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