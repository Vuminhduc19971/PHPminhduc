<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>

<?php
include_once "config.php";
$sqlSelect = "SELECT * FROM info";
$result = mysqli_query($connection, $sqlSelect);
?>
<div>
<h1 style="text-align:center; font-size: 50px">Quản lý sản phẩm</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-2">
                <a href="create.php" class="btn btn-success">Thêm sản phẩm</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Tồn kho</th>
                        <th scope="col">Nhà cung cấp</th>
                        <th scope="col">Ngày tạo</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($i <= ($row = mysqli_fetch_assoc($result))) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo "$i"?></th>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['price'].'$'?></td>
                            <td><?php echo $row['inventory']?></td>
                            <td><?php echo $row['supplier']?></td>
                            <td><?php echo date("d-m-Y",strtotime(($row['dateCreated'])))?></td>
                            <td>
                                <div style="display: inline-block" >
                                    <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $row['id'] ?>">Sửa</a>
                                </div>
                                <div style="display: inline-block">
                                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id'] ?>">Xóa</a>
                                </div>
                            </td>
                        </tr>
                    <?php    
                          $i ++;       
                             }
                        } else {
                            echo "<br> Không có dữ liệu";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>