<!DOCTYPE html>
<html>
<head>
    <title>Диагностика планет</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <link rel="stylesheet" href="styles/diagnostics_of_planets_style.css?v.1.0.4">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="scripts/questions.js?v.1.0.12"></script>
</head>

<body>
<!---------------------------------------------- Разметка вопросов ---------------------------------------------------->
<div class="TestContainer">
<!----------------------------------------------- Диагностика Луны ---------------------------------------------------->
    <div id="test_1" style="display:block;">
        <div class="me" >
            <img class="photo" src="img/2photo(new).jpg" style="border: 2px solid #ffab29">
        </div>
        <p class="TestName"><span class="TestName" id="test_name_1"></span></p>

        <?php
        for ($i = 1; $i < 21; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="q_'.$i.'"></span></p>',
                '<div style="margin-bottom: 10px">',
                    '<input type="radio" name="answer_'.$i.'" value="Да" style="transform: scale(1.3)">Да 
                     <input type="radio" name="answer_'.$i.'" value="Нет">Нет 
                     <input type="radio"  name="answer_'.$i.'" value="Иногда">Иногда 
                     <input type="radio"  name="answer_'.$i.'" value="Иногда" style="display: none" checked>',
                '</div>',
            '</div>';
        }
        ?>


    </div>
<!---------------------------------------------- Диагностика Солнца --------------------------------------------------->
    <div id="test_2" style="display:none;">
        <div class="me" >
            <img class="photo" src="img/3photo(new).jpg" style="border: 2px solid #ffab29">
        </div>
        <p class="TestName"><span id="test_name_2"></span></p>

        <?php
        for ($i = 21; $i < 41; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<input type="radio" name="answer_'.$i.'" value="Да" style="transform: scale(1.3)">Да 
                 <input type="radio" name="answer_'.$i.'" value="Нет">Нет 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда">Иногда 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда" style="display: none" checked>',
            '</div>',
            '</div>';
        }
        ?>

    </div>
<!--------------------------------------------- Диагностика Сатурна --------------------------------------------------->
    <div id="test_3" style="display:none;">
        <div class="me" >
            <img class="photo" src="img/4photo(new).jpg" style="border: 2px solid #ffab29">
        </div>
        <p class="TestName"><span id="test_name_3"></span></p>

        <?php
        for ($i = 41; $i < 61; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<input type="radio" name="answer_'.$i.'" value="Да" style="transform: scale(1.3)">Да 
                 <input type="radio" name="answer_'.$i.'" value="Нет">Нет 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда">Иногда 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда" style="display: none" checked>',
            '</div>',
            '</div>';
        }
        ?>

    </div>
<!--------------------------------------------- Диагностика Венеры ---------------------------------------------------->
    <div id="test_4" style="display:none;">
        <div class="me" >
            <img class="photo" src="img/5photo(new).jpg" style="border: 2px solid #ffab29">
        </div>
        <p class="TestName"><span id="test_name_4"></span></p>

        <?php
        for ($i = 61; $i < 81; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<input type="radio" name="answer_'.$i.'" value="Да" style="transform: scale(1.3)">Да 
                 <input type="radio" name="answer_'.$i.'" value="Нет">Нет 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда">Иногда 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда" style="display: none" checked>',
            '</div>',
            '</div>';
        }
        ?>

    </div>
<!-------------------------------------------- Диагностика Меркурия --------------------------------------------------->
    <div id="test_5" style="display:none;">
        <div class="me" >
            <img class="photo" src="img/6photo(new).jpg" style="border: 2px solid #ffab29">
        </div>
        <p class="TestName"><span id="test_name_5"></span></p>

        <?php
        for ($i = 81; $i < 101; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<input type="radio" name="answer_'.$i.'" value="Да" style="transform: scale(1.3)">Да 
                 <input type="radio" name="answer_'.$i.'" value="Нет">Нет 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда">Иногда 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда" style="display: none" checked>',
            '</div>',
            '</div>';
        }
        ?>

    </div>
<!---------------------------------------------- Диагностика Марса ---------------------------------------------------->
    <div id="test_6" style="display:none;">
        <div class="me" >
            <img class="photo" src="img/7photo(new).jpg" style="border: 2px solid #ffab29">
        </div>
        <p class="TestName"><span id="test_name_6"></span></p>

        <?php
        for ($i = 101; $i < 121; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<input type="radio" name="answer_'.$i.'" value="Да" style="transform: scale(1.3)">Да 
                 <input type="radio" name="answer_'.$i.'" value="Нет">Нет 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда">Иногда 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда" style="display: none" checked>',
            '</div>',
            '</div>';
        }
        ?>

    </div>
<!--------------------------------------------- Диагностика Юпитера --------------------------------------------------->
    <div id="test_7" style="display:none;">
        <div class="me" >
            <img class="photo" src="img/8photo(new).jpg" style="border: 2px solid #ffab29">
        </div>
        <p class="TestName"><span id="test_name_7"></span></p>

        <?php
        for ($i = 121; $i < 141; $i++) {
            echo
            '<div class="QuestionContainer" style="margin-bottom: 12px">',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<input type="radio" name="answer_'.$i.'" value="Да" style="transform: scale(1.3)">Да 
                 <input type="radio" name="answer_'.$i.'" value="Нет">Нет 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда">Иногда 
                 <input type="radio"  name="answer_'.$i.'" value="Иногда" style="display: none" checked>',
            '</div>',
            '</div>';
        }
        ?>

    </div>
<!--------------------------------------------- *Разметка вопросов* --------------------------------------------------->


<!-------------------------------------------- Кнопки переключения ---------------------------------------------------->
    <button class="submitbtn" id="btn_next" onclick="next_test();location.href='#'"><span>Дальше</span></button>
    <button class="resultbtn" id="btn_result" onclick="result()" style="display: none; width: 45%;"><span>Результат</span></button>
<!------------------------------------------- *Кнопки переключения* --------------------------------------------------->


<!------------------------------------------------ Результат ---------------------------------------------------------->
    <div class="ResultContainer" id="ResultContainer" style="display: none">
        <p style="font-size: 28px">Результат тестирования:</p>
        <div>
            <p>Луна: <span id="result_test_1"> </span></p>
            <p>Солнце: <span id="result_test_2"> </span></p>
            <p>Сатурн: <span id="result_test_3"> </span></p>
            <p>Венера: <span id="result_test_4"> </span></p>
            <p>Меркурий: <span id="result_test_5"> </span></p>
            <p>Марс: <span id="result_test_6"> </span></p>
            <p>Юпитер: <span id="result_test_7"> </span></p>
        </div>
    </div>

    <!--<button class="submitbtn" id="btn_share" onclick="copy_in_buffer('#ResultContainer')" style="display: none"><span>Копировать</span></button>-->
    <button class="submitbtn" id="btn_exit" onclick="location.href='index.php'" style="display: none; width: 45%"><span>Начать заново</span></button>

    <div class="ResultContainer" id="CopyInstruction" style="display: none">

        <p style="font-size: 18px; margin-bottom: 10px; margin-top: 10px;">Текст скопирован.<br>
            Для того, чтобы поделиться результатом,<br>
            нажмите на кнопку "вставить" при отправке сообщения.<br>
            (если вы это делаете с компьютера, нажмите сочетание клавиш Ctrl + V<br>
            или правая кнопка мыши ->вставить).</p>

        <button class="submitbtn"  onclick="result()"><span>Понятно</span></button>
    </div>
</div>
<!----------------------------------------------- *Результат* --------------------------------------------------------->


<!------------------------------------------------ JavaScript --------------------------------------------------------->
<script>
    //считывание и вставка в html вопросов и названий тестов из файла js
    document.addEventListener('DOMContentLoaded', function()
    {
        for(let i = 1; i < 141; i++){
            document.getElementById('q_'+i).innerHTML = question[i];
        }

        for(let i = 1; i < 8; i++){
            document.getElementById('test_name_'+i).innerHTML = test_name[i];
        }
    });

    function next_test(){
        if(document.getElementById('test_6').style.display == "block"){
            document.getElementById('test_6').style.display = "none";
            document.getElementById('test_7').style.display = "block";
            document.getElementById('btn_next').style.display = "none";
            document.getElementById('btn_result').style.display = "inline-block";
        }
        if(document.getElementById('test_5').style.display == "block"){
            document.getElementById('test_5').style.display = "none";
            document.getElementById('test_6').style.display = "block";
        }

        if(document.getElementById('test_4').style.display == "block"){
            document.getElementById('test_4').style.display = "none";
            document.getElementById('test_5').style.display = "block";
        }

        if(document.getElementById('test_3').style.display == "block"){
            document.getElementById('test_3').style.display = "none";
            document.getElementById('test_4').style.display = "block";
        }

        if(document.getElementById('test_2').style.display == "block"){
            document.getElementById('test_2').style.display = "none";
            document.getElementById('test_3').style.display = "block";
        }

        if(document.getElementById('test_1').style.display == "block"){
            document.getElementById('test_1').style.display = "none";
            document.getElementById('test_2').style.display = "block";
        }
    }

    function result() {

        document.getElementById('test_7').style.display = "none";
        document.getElementById('btn_result').style.display = "none";
        document.getElementById('btn_exit').style.display = "inline-block";
        document.getElementById('ResultContainer').style.display = "block";
        document.getElementById('CopyInstruction').style.display = "none";
        /*document.getElementById('btn_share').style.display = "inline-block";*/

        //массив с результатами за каждый тест
        let result_test = [];
        for(let i = 1; i < 8; i++){
            result_test[i] = 0;
        }

        //массив ответов
        let answer = [];
        for(let i = 1; i < 141; i++){
            answer[i] = getCheckedRadio(document.getElementsByName('answer_'+i)).value;
        }

        //массив объектов span в html верстке
        let result_test_out = [];
        for(let i = 1; i < 8; i++){
            result_test_out[i] = document.getElementById('result_test_'+i);
        }
//---------------------------------------- Подсчет баллов (тест 1) -----------------------------------------------------
        for(let i = 1; i < 21; i++){
            switch (answer[i]) {
                case "Нет":
                    result_test[1] += 1;
                    break;
                case "Иногда":
                    result_test[1] += 2;
                    break;
                case "Да":
                    result_test[1] += 3;
                    break;
            }
        }

//---------------------------------------- Подсчет баллов (тест 2) -----------------------------------------------------
        for(let i = 21; i < 41; i++){
            switch (answer[i]) {
                case "Нет":
                    result_test[2] += 1;
                    break;
                case "Иногда":
                    result_test[2] += 2;
                    break;
                case "Да":
                    result_test[2] += 3;
                    break;
            }
        }

//---------------------------------------- Подсчет баллов (тест 3) -----------------------------------------------------
        for(let i = 41; i < 61; i++){
            switch (answer[i]) {
                case "Нет":
                    result_test[3] += 1;
                    break;
                case "Иногда":
                    result_test[3] += 2;
                    break;
                case "Да":
                    result_test[3] += 3;
                    break;
            }
        }

//---------------------------------------- Подсчет баллов (тест 4) -----------------------------------------------------
        for(let i = 61; i < 81; i++){
            switch (answer[i]) {
                case "Нет":
                    result_test[4] += 1;
                    break;
                case "Иногда":
                    result_test[4] += 2;
                    break;
                case "Да":
                    result_test[4] += 3;
                    break;
            }
        }

//---------------------------------------- Подсчет баллов (тест 5) -----------------------------------------------------
        for(let i = 81; i < 101; i++){
            switch (answer[i]) {
                case "Нет":
                    result_test[5] += 1;
                    break;
                case "Иногда":
                    result_test[5] += 2;
                    break;
                case "Да":
                    result_test[5] += 3;
                    break;
            }
        }

//---------------------------------------- Подсчет баллов (тест 6) -----------------------------------------------------
        for(let i = 101; i < 121; i++){
            switch (answer[i]) {
                case "Нет":
                    result_test[6] += 1;
                    break;
                case "Иногда":
                    result_test[6] += 2;
                    break;
                case "Да":
                    result_test[6] += 3;
                    break;
            }
        }

//---------------------------------------- Подсчет баллов (тест 7) -----------------------------------------------------
        for(let i = 121; i < 141; i++){
            switch (answer[i]) {
                case "Нет":
                    result_test[7] += 1;
                    break;
                case "Иногда":
                    result_test[7] += 2;
                    break;
                case "Да":
                    result_test[7] += 3;
                    break;
            }
        }

        //Вывод результатов
        for(let i = 1; i < 8; i++){
            result_test_out[i].innerHTML = result_test[i];
        }
    }

    function copy_in_buffer(el) {
        var $tmp = $("<textarea>");
        $("body").append($tmp);
        $tmp.val($(el).text()).select();
        document.execCommand("copy");
        $tmp.remove();
        //document.getElementById('btn_share').style.display = "none";
        document.getElementById('ResultContainer').style.display = "none";
        document.getElementById('btn_share').style.display = "none";
        document.getElementById('btn_exit').style.display = "none";
        document.getElementById('CopyInstruction').style.display = "block";
    }

    function getCheckedRadio(radio_group) {
        //Обходим весь список радиокнопок
        for (var i = 0; i < radio_group.length; i++) {
            var button = radio_group[i];
            //Нашли отмеченную
            if (button.checked) {
                return button;
            }
        }
        //Ни одна не отмечена
        return undefined;
    }
</script>
<!----------------------------------------------- *JavaScript* -------------------------------------------------------->

</body>
</html>