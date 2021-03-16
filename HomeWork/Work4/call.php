<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Call</title>
    <link rel="stylesheet" href="stypes.css">

    <?php
    session_start();

    if (isset($_POST['sub'])) {
        $_SESSION['car'] = $_POST['car'];
    }

    $car_model = array("Accord", "Civic", "Jazz", "City");
    $carprice = array(1799000, 1145000, 754000, 749000);
    $interest_year = array(0.02, 0.02, 0.04, 0.04);

    $car = $_SESSION['car'];
    $index = array_search($car, $car_model);    //ใช้ค้นหาในตำแหน่งของ array
    $photo = 'Pic/' . $car . '.png';
    $logo = 'Pic/logo-' . strtolower($car) . '.png';

    ?>
</head>

<body>

    <div class="row">
        <form action="" method="get">
            <div class="columnLeft">
                <center>
                    <img src="<?php echo $logo; ?>">
                    <img src="<?php echo $photo; ?>">
                </center>
            </div>

            <!--กล่อง เลือกเงินดาวน์-->
            <div class="columnRight">
                <fieldset>
                    <legend>เลือกเงินดาวน์</legend>

                    เงินดาวน์<input type="radio" name="ch" onclick="checkDisabled()" required>
                    <select name="price" id="check" disabled>
                        <option value="0.15">15%</option>
                        <option value="0.20">20%</option>
                        <option value="0.25">25%</option>
                        <option value="0.30">30%</option>
                    </select>

                    หรือ <input type="radio" name="ch" onclick="checkDisabled1()">
                    จำนวนเงิน <input type="text" name="price1" id="check1" disabled required> บาท

                </fieldset>
            </div>

            <!--กล่อง เลือกระยะเวลาผ่อนชำระ-->
            <div class="columnRight">
                <fieldset>
                    <legend>เลือกระยะเวลาผ่อนชำระ</legend>
                    ระยะเวลา <select name="day">
                        <option>36</option>
                        <option>48</option>
                        <option>60</option>
                        <option>72</option>
                        <option>84</option>
                    </select> งวด

                </fieldset>
                <br><br>
                <center><input type="submit" value="Calculate" name="sub"></center>
            </div>
        </form>
        <div class="columnRight">
            <?php

            if (isset($_GET['sub'])) {     //ถ้ากดปุ่มคำนวน
                @$price = $_GET['price'];
                @$price1 = $_GET['price1'];
                $term_day = $_GET['day'];

                $interest = $sum = $sum_interest = $interest_total = 0;




                if (isset($price)) {
                    $check_float = 1;
                    $persen = $price * 100; //เอาจุดแปลงเป็น เปอร์เซน
                } else {
                    $price = $price1;
                    $persen = ($price / $carprice[$index]) * 100; //นำเงินที่ดาวมาแปลงเป็น เปอร์เซน
                }

                echo '<table border="bold">';
                echo '<tr>
                  <td colspan="2">รายงานผ่อนสินเชื่อผ่อนชำระ</td>
              </tr>
              <tr>
                  <td>รุ่นรถยนต์</td>
                  <td>' . $car_model[$index] . '</td>
              </tr>
              <tr>
                  <td>ราคารถยนต์</td>
                  <td>' . number_format($carprice[$index]) . ' บาท</td>
              </tr>
              <tr>
                  <td>เงินดาวน์</td>
                  <td>'  . number_format(DownPayment($carprice[$index], $price)) . ' บาท (' . round($persen)   . '%)</td>
              </tr>
              <tr>';
                echo '<td>จำนวนเงินที่ขอสินเชื่อ</td>'; //สูตร ราคารถ - เงินดาวน์
                echo '<td>' . number_format(installment($carprice[$index], $interest)) . ' บาท</td>
              </tr>
              <tr>';
                echo '<td>ดอกเบี้ย ต่อปี</td>'; //สูตร เงินขอสินเชื่อ * อัตราดอกเบี้ยต่อปี
                echo '<td>' . number_format(interestYear($sum, $interest_year[$index])) . ' บาท (' . $interest_year[$index] * 100 . '% ต่อปี)</td>
              </tr>
              <tr>
                  <td>ดอกเบี่ย ทั้งหมด  ' . ($term_day / 12) . ' ปี (' . $term_day . ' งวด)</td>';
                // สุตร ดอกเบี้ยต่อปี * งวดที่แปลงเป็นปี
                echo '<td>' . number_format(interestTotal($sum_interest, $term_day)) . ' บาท</td>
              </tr>
              <tr>
                  <td>จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด</td>';
                //สูตร (จำนวนสินเชื่อ + ดอกเบี้ยทั้งหมด) / จำนวนงวด(เดือน)
                echo '<td>' . number_format(payMonth($term_day)) . ' บาท</td>
              </tr>
              <tr>
                  <td colspan="2"><a href="index.php"><button>กลับไปหน้าแรก</button></a></td>
              </tr>';
                echo '</table>';
            } ?>
        </div>
    </div>

    <script>
        function checkDisabled() {
            document.getElementById("check").disabled = false;
            document.getElementById("check1").disabled = true;
        }

        function checkDisabled1() {
            document.getElementById("check1").disabled = false;
            document.getElementById("check").disabled = true;
        }
    </script>

    <?php

    function DownPayment($carprice, $price)
    {
        global $interest;
        global $check_float;
        if ($check_float) {
            $interest = $carprice * $price;
        } else {
            $interest = $price;
        }
        return ($interest);
    }

    function installment($carprice, $interest)
    {
        global $sum;
        return ($sum = $carprice - $interest);
    }

    function interestYear($sum, $interestYear)
    {
        global $sum_interest;
        return ($sum_interest = $sum * $interestYear);
    }

    function interestTotal($sum_interest, $term_day)
    {
        global $interest_total;
        return ($interest_total = $sum_interest * ($term_day / 12));
    }

    function payMonth($term_day)
    {
        global $sum;
        global $interest_total;
        return (($sum + $interest_total) / $term_day);
    }

    ?>

</body>