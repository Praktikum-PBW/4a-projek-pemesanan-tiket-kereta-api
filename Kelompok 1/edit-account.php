<?php
if(isset($_GET['id'])){
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM account WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    ?>
    <!DOCTYPE HTML>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <body>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if(isset($_GET['message'])){
                            $message = $_GET['message'];
                            ?>
                            <div class="alert alert-danger my-4">
                                <?= $message ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="card border-0">
                            <div class="card-header">
                                <div classs="d-flex justify-content-between">
                                    <h2>Edit</h2>
                                    <a href="index.php" class="btn btn-primary">List Account</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="edit-account-proccess.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <div class="mb-4">
                                        <label for="alamat_email" class="form-label">Alamat Email</label>
                                        <input type="text" name="alamat_email" id="alamat_email" class="form-control" value="<?= $data['alamat_email'] ?>">
                                    </div>
                                    <div class="mb-4">
                                        <label for="id_pengguna" class="form-label">ID Pengguna</label>
                                        <input type="text" name="id_pengguna" id="id_pengguna" class="form-control" value="<?= $data['id_pengguna'] ?>">
                                    </div>
                                    <div class="mb-4">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="month" name="tanggal_lahir" id="tanggal_lahir" class="form-select" value="<?= $data['tanggal_lahir'] ?>">
                                    </div>  
                                    <div>
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                            <option value="P" <?= $data['jenis_kelamin'] == 'P' ? "selected" : "" ?>>Perempuan</option>
                                            <option value="L" <?= $data['jenis_kelamin'] == 'L' ? "selected" : "" ?>>laki-laki</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    <?php    
}
?>