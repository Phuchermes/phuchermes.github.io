<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT0301</title>
</head>
<body>
   
    
    <h1>Bai toan loai tam giac voi 3 canh a,b,c</h1>
    <form action="loaitamgiac.php" method="get">
        <br>Nhap canh a
        <input type="text" name="a">
        <br>Nhap canh b
        <input type="text" name="b">
        <br>Nhap canh c
        <input type="text" name="c">
        <br>
        <input type="submit" name="Caculate" value="KET QUA">
        
    </form>

    <h1>Tinh ngay ke tiep voi thong tin ngay thang nam</h1>
    <form action="ngayketiep.php" method="get">
        <br>Nhap ngay
        <input type="text" name="day">
        <br>Nhap thang
        <input type="text" name="month">
        <br>Nhap nam        
		<input type="text" name="year">
        <br>
        <input type="submit" name="Caculate2" value="KET QUA" >
        
    </form>
</body>
</html>
