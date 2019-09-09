<div class="card border-0 bg-lighr shadow">
   <div class="card-body">
        <?php echo form_open_multipart(site_url('barang/input_act')); ?> 
            <div class="form-group">    
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div> 
            <div class="form-group">
                <label for="harga">Harga Sewa</label>
                <input type="number" name="harga" class="form-control">
            </div> 
            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" class="form-control" placeholder="(Tidak Ada Keterangan)"></textarea>
            </div> 
            <div class="form-group">
                <input type="file" name="image_file" class="form-control" id="imageFile">
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-orange-coral rounded-pill shadow btn-block"><i class="fa fa-check-circle-o mr-2"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>