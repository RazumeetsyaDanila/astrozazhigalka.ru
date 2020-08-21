<!doctype html>
<html>
<head>
    <title>Ректификация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/rectification_style.css?v.1.0.2">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="scripts/age_questions.js?v.1.0.1"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
<div class="TestContainer">
    <!----------------------------------------------- Тест ---------------------------------------------------->
    <div id="age_test" style="display:block;">
        <div class="me" >
            <img class="photo" src="img/9photo(new).jpg" style="border: 2px solid #1258DC">
        </div>
        <p class="TestName"><span class="TestName" id="age_testname" style="font-weight: bold"></span></p>

        <div class="QuestionContainer">
            <p>Вопрос 1</p><hr>
            <p><span id="age_q_1"></span></p>
            <div style="margin-bottom: 10px">
                <input type="radio" name="age_answer_1" value="младший">Да
                <input type="radio" name="age_answer_1" value="не младший">Нет
                <input type="radio"  name="age_answer_1" value="единственный">Я единственный ребенок в семье
                <input type="radio"  name="age_answer_1" value="единственный" style="display: none" checked>
            </div>
        </div>

        <?php
        for ($i = 2; $i < 8; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="age_q_'.$i.'"></span></p>',
                '<div style="margin-bottom: 10px">',
                    '<p>Когда мне было <input type="text" name="age_answer_'.$i.'" id="age_answer_'.$i.'" placeholder="?"> лет.</p>',
                '</div>',
            '</div>';
        }
        ?>

        <?php
        for ($i = 8; $i < 12; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="age_q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<input type="text" name="age_answer_'.$i.'" id="age_answer_'.$i.'" placeholder="Никто" style="width: 90px">',
            '</div>',
            '</div>';
        }
        ?>

        <?php
        for ($i = 12; $i < 22; $i++) {
            echo
            '<div class="QuestionContainer" >',
                '<p>Вопрос '.$i.' </p><hr>',
                '<p><span id="age_q_'.$i.'"></span></p>',
            '<div style="margin-bottom: 10px">',
                '<p>Когда мне было <input type="text" name="age_answer_'.$i.'" id="age_answer_'.$i.'" placeholder="?"> лет.</p>',
            '</div>',
            '</div>';
        }
        ?>

    </div>
    <!-------------------------------------------- Кнопки переключения ---------------------------------------------------->
    <button class="resultbtn" id="btn_result" onclick="result()"><span>Принять</span></button>

    <!------------------------------------------------ Результат ---------------------------------------------------------->
    <div class="ResultContainer div_for_report" id="ResultContainer" style="display: none">
        <p style="font-size: 28px; margin-bottom: 10px; margin-top: 10px;">Мои ответы:</p>
        <div>
            <p style="margin-bottom: 3px; margin-top: 3px;"> <span id="age_answer_out_id_spin"> </span> </p>
        </div>
    </div>
    <!------------------------------------------------ Инструкция ---------------------------------------------------------->
	<div class="ResultContainer" id="CopyInstruction" style="display: none">

        <p style="font-size: 18px; margin-bottom: 10px; margin-top: 10px;">Текст скопирован.<br>
            Для того, чтобы поделиться результатом,<br>
            нажмите на кнопку "вставить" при отправке сообщения.<br>
            (если вы это делаете с компьютера, нажмите сочетание клавиш Ctrl + V<br>
            или правая кнопка мыши ->вставить).</p>

        <button class="submitbtn"  onclick="result()"><span>Понятно</span></button>
    </div>

    <button class="submitbtn" id="btn_share" onclick="copy_in_buffer('#ResultContainer')" style="display: none"><span>Копировать</span></button>
    <button class="submitbtn" id="btn_exit" onclick="location.href='index.php'" style="display: none"><span>Выйти</span></button>
    
</div>
<!----------------------------------------------- *Результат* --------------------------------------------------------->
<!---------------------------------------------- JavaScript ------------------------------------------>
<script>

    //считывание и вставка в html вопросов и названий тестов из файла js
    document.addEventListener('DOMContentLoaded', function()
    {
        document.getElementById('age_testname').innerHTML = age_testname;
        for(let i = 1; i < 22; i++){
            document.getElementById('age_q_'+i).innerHTML = age_question[i];
        }
    });

    function result() {
        document.getElementById('age_test').style.display = "none";
        document.getElementById('btn_result').style.display = "none";
        document.getElementById('CopyInstruction').style.display = "none";
        document.getElementById('ResultContainer').style.display = "block";
        document.getElementById('btn_exit').style.display = "inline-block";
        document.getElementById('btn_share').style.display = "inline-block";

        //массив введенных значений в поле input
        var input_answer_arr = [];
        input_answer_arr[1] = getCheckedRadio(document.getElementsByName('age_answer_1')).value;
        for(var i = 2; i < 22; i++)
        {
            input_answer_arr[i] = document.getElementById('age_answer_'+i).value;
        }

        //объект spin, в который будут записываться результаты
        var age_answer_out = document.getElementById('age_answer_out_id_spin');

        //----------------------------------------------- Вывод результатов ----------------------------------------------------
        //массив полных ответов
        var answer_arr = [];
        answer_arr.push("");
        answer_arr.push("Я "+input_answer_arr[1]+" ребенок в семье.");
        answer_arr.push("Мне было "+input_answer_arr[2]+", когда умерла бабушка по папе.");
        answer_arr.push("Мне было "+input_answer_arr[3]+", когда умерла бабушка по маме.");
        answer_arr.push("Мне было "+input_answer_arr[4]+", когда умер дедушка по папе.");
        answer_arr.push("Мне было "+input_answer_arr[5]+", когда умер дедушка по маме.");
        answer_arr.push("Мне было "+input_answer_arr[6]+", когда умерла мама.");
        answer_arr.push("Мне было "+input_answer_arr[7]+", когда умер папа.");
        answer_arr.push("От рака умер/ла "+input_answer_arr[8]+".");
        answer_arr.push("Внезапно умер/ла "+input_answer_arr[9]+".");
        answer_arr.push("В чрезвычайной ситуации умер/ла "+input_answer_arr[10]+".");
        answer_arr.push("От инсульта умер/ла "+input_answer_arr[11]+".");
        answer_arr.push("Мне было "+input_answer_arr[12]+", когда я тонул/а.");
        answer_arr.push("Мне было "+input_answer_arr[13]+", когда у меня были переломы.");
        answer_arr.push("Мне было "+input_answer_arr[14]+", когда случилась авария.");
        answer_arr.push("Мне было "+input_answer_arr[15]+", когда у меня были переезды.");
        answer_arr.push("Мне было "+input_answer_arr[16]+", когда у меня случались пожары.");
        answer_arr.push("Мне было "+input_answer_arr[17]+", когда у меня были нападения.");
        answer_arr.push("Мне было "+input_answer_arr[18]+", когда у меня были операции.");
        answer_arr.push("Мне было "+input_answer_arr[19]+", когда у меня были разводы.");
        answer_arr.push("Мне было "+input_answer_arr[20]+", когда купили квартиру.");
        answer_arr.push("Мне было "+input_answer_arr[21]+", когда я терял/а крупные суммы денег.");

        //вывод полных ответов (answer_arr[]) в html объект span (age_answer_out), при условии, что был записан ответ в input (input_answer_arr[])
        age_answer_out.innerHTML = answer_arr[1]+'\n'+'<br>';
        for(var i = 2; i < 22; i++)
        {
            if (input_answer_arr[i]) age_answer_out.innerHTML += answer_arr[i]+'\n'+'<br>';
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
<!--------------------------------------------- *JavaScript* ----------------------------------------->
</body>
</html>