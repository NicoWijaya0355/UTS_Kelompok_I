<?php
 include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>TAMBAH AKUN</h4>
    <hr>
    <form action="../process/createPendudukProcess.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">RT</label>
            <input class="form-control" id="RT" name="RT" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">RW</label>
            <input class="form-control" id="RW" name="RW" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="jenis" id="jenis">
                <option value="Wanita">Wanita</option>
                <option value="Pria">Pria</option>
              
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input class="form-control" id="umur" name="umur" aria-describedby="emailHelp">
        </div>
       
        
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="register">Tambah Penduduk</button>
        </div>
    </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>