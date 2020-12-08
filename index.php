<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="js/validate.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Title</title>
</head>
<body>
<table class="header-table">
    <tbody>
    <tr class="header-tr">
        <h1 class="header-text">
            <span> Epifanov Maxim P3232 Var 2806 </span>
        </h1>
    </tr>
    </tbody>
</table>
<table>
    <tr>
        <td>
    <tr>
        <td>
            <div class="form-row">

                <img id="task-img" src="assets/img/task.png" alt="">

            </div>
        </td>
    </tr>

    </td>
    </tr>
</table>
<table>
    <tbody>

    <form method="get" action="#" class="request-form" id="request-form" onsubmit="checkForm();return false">

        <tr class="checkBoxX">
            <td class="form-control-title"> X:</td>
            <!— x —>
            <td>

                <input class="checkboxX" id="xCheck1" type="checkbox" name="x[]" value="-5"
                       onclick="selectOnlyThisx(this.id)"> -5
                <input class="checkboxX" id="xCheck2" type="checkbox" name="x[]" value="-4"
                       onclick="selectOnlyThisx(this.id)"> -4
                <input class="checkboxX" id="xCheck3" type="checkbox" name="x[]" value="-3"
                       onclick="selectOnlyThisx(this.id)"> -3
                <input class="checkboxX" id="xCheck4" type="checkbox" name="x[]" value="-2"
                       onclick="selectOnlyThisx(this.id)"> -2
                <input class="checkboxX" id="xCheck5" type="checkbox" name="x[]" value="-1"
                       onclick="selectOnlyThisx(this.id)"> -1
                <input class="checkboxX" id="xCheck6" type="checkbox" name="x[]" value="0"
                       onclick="selectOnlyThisx(this.id)"> 0
                <input class="checkboxX" id="xCheck7" type="checkbox" name="x[]" value="1"
                       onclick="selectOnlyThisx(this.id)"> 1
                <input class="checkboxX" id="xCheck8" type="checkbox" name="x[]" value="2"
                       onclick="selectOnlyThisx(this.id)"> 2
                <input class="checkboxX" id="xCheck9" type="checkbox" name="x[]" value="3"
                       onclick="selectOnlyThisx(this.id)"> 3
                <input class="checkboxX" id="xCheck10" type="checkbox" name="x[]" value="4"
                       onclick="selectOnlyThisx(this.id)"> 4
                <input class="checkboxX" id="xCheck11" type="checkbox" name="x[]" value="5"
                       onclick="selectOnlyThisx(this.id)"> 5
            </td>
        </tr>

        <!— y —>
        <tr class="textY">
            <td class="form-control-title"> Y:</td>
            <td>
                <input id="inputY" type="text" name="y" placeholder="-5 ... 5" required>
            </td>
        </tr>

        <tr class="checkBoxR">
            <td class="form-control-title"> R:</td>
            <td>
                <!— r —>
                <input class="checkboxR" id="rCheck1" type="checkbox" name="r[]" value="-4"
                       onclick="selectOnlyThisr(this.id)">-4
                <input class="checkboxR" id="rCheck2" type="checkbox" name="r[]" value="-3"
                       onclick="selectOnlyThisr(this.id)">-3
                <input class="checkboxR" id="rCheck3" type="checkbox" name="r[]" value="-2"
                       onclick="selectOnlyThisr(this.id)">-2
                <input class="checkboxR" id="rCheck4" type="checkbox" name="r[]" value="-1"
                       onclick="selectOnlyThisr(this.id)">-1
                <input class="checkboxR" id="rCheck5" type="checkbox" name="r[]" value="0"
                       onclick="selectOnlyThisr(this.id)"> 0

                <input class="checkboxR" id="rCheck6" type="checkbox" name="r[]" value="1"
                       onclick="selectOnlyThisr(this.id)"> 1
                <input class="checkboxR" id="rCheck7" type="checkbox" name="r[]" value="2"
                       onclick="selectOnlyThisr(this.id)">2
                <input class="checkboxR" id="rCheck8" type="checkbox" name="r[]" value="3"
                       onclick="selectOnlyThisr(this.id)">3
                <input class="checkboxR" id="rCheck9" type="checkbox" name="r[]" value="4"
                       onclick="selectOnlyThisr(this.id)">4

            </td>
        </tr>

        <td>
            <input type="submit" value="ОТПРАВИТЬ">

    </form>
</table>


<table class="results-table" id="result-table" name="result-table">

    <br>

    <table id="tableResults">
        <tr>
            <td>Дата и время запроса</td>
            <td>Время выполнения</td>
            <td>Координата X</td>
            <td>Координата Y</td>
            <td>Параметр R</td>
            <td>Результат</td>
       </tr>

       <?php
              $values = $_SESSION['table'];
              
              foreach($values as $key => $el) {
                     if ($key == 0){
						echo '<tr>';
                     }
                     if ($key % 6 == 0){
						echo '</tr>';
						echo '<tr>';
                     }
                     echo '<td class="inRes" >' . $el . '</td>';
              }
       ?>
        

</table>
</body>
</html>