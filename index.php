<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
        /* พื้นหลังธีมชมพูฟ้าพาสเทล */
        body {
            background: linear-gradient(135deg, #ffe5ec 0%, #c5dedd 100%);
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #4a4a4a;
        }

        /* ตกแต่งกล่องข้อความหัวข้อ */
        h1 {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px 25px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            text-align: center;
            border: 2px dashed #ffb3c6;
            margin-bottom: 25px;
        }

        /* ลิงก์เมนู while Loop */
        a {
            display: inline-block;
            text-decoration: none;
            color: #5fa8d3;
            background-color: #fff;
            padding: 8px 18px;
            border-radius: 15px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        /* กล่องครอบฟอร์มและผลลัพธ์ */
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 24px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
            text-align: center;
            border: 3px solid #e2f0cb;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #6c757d;
            display: block;
            margin-bottom: 10px;
        }

        /* ช่องกรอกตัวเลข */
        input[type="number"] {
            width: 80%;
            padding: 12px;
            border: 2px solid #bde0fe;
            border-radius: 12px;
            outline: none;
            text-align: center;
            background-color: #f8f9fa;
        }
        input[type="number"]:focus {
            border-color: #ffb3c6;
            background-color: #fff;
        }

        /* ปุ่มคำนวณ */
        input[type="submit"] {
            background: linear-gradient(135deg, #ffb3c6 0%, #ff85a1 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            width: 86%;
            box-shadow: 0 4px 10px rgba(255, 133, 161, 0.3);
        }

        /* โซนแสดงผลลัพธ์สูตรคูณ */
        .result-box {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px dashed #bde0fe;
            text-align: center;
            line-height: 1.8;
            color: #555;
        }
        .result-title {
            font-weight: bold;
            color: #ff758f;
            margin-bottom: 10px;
        }
    </style>
    </head>
<body>
    
    <?php
        echo "<h1 style='color:#ff758f;'>งานที่ 1 พัชราภรณ์ พรหมภักษร BIT.2/4 เลขที่ 15</h1>";
    ?>

    <a href="while.php"> while loop </a>

    <div class="container">
        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ</label> <br>
            <input type="number" name="num" id="num">
            <br>
            <input type="submit" value="คำนวณ">
        </form>
        <?php

        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "<div class='result-box'>";
            echo "<div class='result-title'>สูตรคูณแม่ " . $num . "</div>";

            //. เริ่มต้น       สิ้นสุด. เพิ่มทีละ1
            for($i = 1; $i <= 12; $i++) {
                $result = $num * $i;
                echo $num . " x " . $i . " = " . $result . "<br>";
            }
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>