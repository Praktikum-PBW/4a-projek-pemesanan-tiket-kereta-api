<!DOCTYPE HTML>
<html>
    <head>
        <title>Account</title>
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
                        <div class="alert alert-success my-4">
                            <?= $message ?>
                        </div>
                        <?php    
                    }
                    ?>
                    <div class="card border-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h2>List Account</h2>
                                <a href="add-account.php" class=""btn btn-primary>Add Account</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Alamat Email</th>
                                        <th>ID Pengguna</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM account");
                                    foreach ($query as $data){
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['alamat_email'] ?></td>
                                            <td><?= $data['id_pengguna'] ?></td>
                                            <td><?= $data['tanggal_lahir'] ?></td>
                                            <td><?= $data['jenis_kelamin'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="edit-account.php?id=<?= data['id'] ?>" class="btn btn-warning">Edit</a>
                                                    <a href="delete-account.php?id=<?= data['id'] ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>