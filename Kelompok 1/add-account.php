<!DOCTYPE html>
<html lang="en">
    <head>
        <title>add</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h2>Add Account</h2>
                                <a href="#" class="btn btn-primary">Account</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="add-account-proccess.php" method="post" enctype="multipart/form-data">
                                <div class="mb-4">
                                    <label for="alamat_email" class="form-label">Alamat Email</label>
                                    <input type="text" name="alamat_email" id="alamat_email" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="id_pengguna" class="form-label">ID Pengguna</label>
                                    <input type="text" name="id_pengguna" id="id_pengguna" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="month" name="tanggal_lahir" id="tanggal_lahir" class="form-select">
                                </div>  
                                <div>
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                        <option value="P">Perempuan</option>
                                        <option value="L">laki-laki</option>
                                    </select>
                                </div>
                                <button type="submit" name="add" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>