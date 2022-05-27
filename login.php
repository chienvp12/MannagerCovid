<?php
include_once('../connect/db.php');
//session_start();
$idstudent = $password = '';
if (!empty($_POST)) {
    $idstudent = $_POST['idstudent'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$idstudent' and password = '$password'";
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    //var_dump($conn);
    if (!$conn) {
        echo 'Loi ket noi';
    } else {
        $result = mysqli_query($conn, $sql);
        //var_dump($result);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            if ($id . include("AD")) {
                header('Location: index.php');
                die();
                mysqli_close($conn);
            }
        } else {
            echo '<script> alert("Sai mat khau hoac tai khoan") </script>';
        }
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="login-container justify-content-center">
                        <div class="content-top">
                            <p style="font-size: 40px;">Xin chào!</p>
                        </div>
                        <div class="login-form">
                            <form method="POST">
                                <div class="mb-3 form-group">
                                  <label for="username" class="form-label form-text">Mã sinh viên</label>
                                  <input type="text" class="form-control" id="idstudent" name="idstudent" placeholder="Nhập mã sinh viên">
                                </div>
                                <div class="mb-4 form-group">
                                  <label for="password" class="form-label">Mật khẩu</label>
                                  <input required="true" type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                                </div>
                               <div class="btn-box d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                               </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>