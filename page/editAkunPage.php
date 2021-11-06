<?php
    include '../component/sidebar.php';
?>
<?php
    include ('../db.php');
     $id=$_GET['id'];
     $query=mysqli_query($con,"SELECT * FROM users WHERE id=$id") or die(mysqli_error($con));
 
 
    
?>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>EDIT AKUN</h4>
    <hr>
    <form action="../process/editAkunProcess.php" method="post">
    <?php while($data=mysqli_fetch_array($query)) {?>
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input class="form-control" id="name" name="name" value="<?php echo $data['name'] ?>" aria-describedby="emailHelp">
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <select class="form-select"  aria-label="Default select example" name="jabatan"  id="jabatan">
                    <?php
                        if($data['jabatan'] == "Camat") {
                            echo '<option selected value="Camat">'.$data['jabatan']. '</option>';
                            echo '<option value="Lurah">Lurah </option>';
                            echo '<option value="Staff">Staff</option>';
                        } else if($data['jabatan'] == "Lurah") {
                            echo '<option value="Camat"> Camat </option>';
                            echo '<option selected value="Lurah">'.$data['jabatan']. '</option>';
                            echo '<option value="Staff"> Staff </option>';
                        } else if($data['jabatan'] == "Staff") {
                            echo '<option value="Camat"> Camat </option>';
                            echo '<option value="Lurah"> Lurah </option>';
                            echo '<option selected value="Staff">'.$data['jabatan']. '</option> ';
                        }
                    ?>
                
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input class="form-control" id="username" name="username" value="<?php echo $data['username'] ?>" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Edit Akun</button>
        </div>
    </form>
    <?php } ?>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>