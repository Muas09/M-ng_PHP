<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <style>
        .list_title{
            color:red;
           
        }
        th{
            background:Orange;
        }
        td{
            background:Pink;
        }
    </style>
</head>
<body>
    <?php 
        $schools = array(
            'Student' => array (
                'SV01' => array (
                    'name' => 'Đanngự Minh Quân',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'SV02' => array(
                    'name' => 'Đặng Mùi Nái',
                    'birth' => '14/11/2003',
                    'gender' => 'Nữ'
                ),
                'SV03' => array(
                    'name' => 'Đinh Ngọc Sơn',
                    'birth' => '05/09/2003',
                    'gender' => 'Nữ'
                ),
                'SV04' => array(
                    'name' => 'Nguyễn Thị Út Viên',
                    'birth' => '02/02/2003',
                    'gender' => 'Nữ'
                )

            ),
            'Teacher' => array (
                'GV01' => array (
                    'name' => 'Nguyễn Trúc Minh',
                    'birth' => '10/11/1990',
                    'gender' => 'Nam'
                ),
                'GV02' => array(
                    'name' => 'Nguyễn Thị Thùy Trang',
                    'birth' => '28/11/1988',
                    'gender' => 'Nữ'
                ),
                'GV03' => array(
                    'name' => 'Võ Hoàng Yến',
                    'birth' => '05/09/1993',
                    'gender' => 'Nữ'
                ),
                'GV04' => array(
                    'name' => 'Hoàng Yến Chi Bi',
                    'birth' => '02/02/1998',
                    'gender' => 'Nữ'
                )

            )   
        )
    ?>
    <div id="content">
        <?php 
            foreach ($schools as $k => $v){
                ?>
                <h1 align="center" class="list_title"><?php echo $k; ?></h1>
                <table border="1" align="center" class="list_schools">
                    <tr>
                        <th>MaSV</th>
                        <th>Tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                    </tr>
                    <?php foreach ($v as $k1 => $v1){
                        ?>
                        <tr>
                            <td><?php echo $k1; ?></td>
                            <td><?php echo $v1['name'] ?></td>
                            <td><?php echo $v1['birth'] ?></td>
                            <td><?php echo $v1['gender'] ?></td>
                    </tr>
                    <?php   }
                    ?>

                </table>
                <?php 
            }
            ?>
       
    </div>
</body>
</html>