<!doctype html>
<html>
<head>
    <title>Заявка на расклад таро</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="styles/tarot_request_style.css?v.1.0.0">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <script src="scripts/tarot_questions.js?v.1.0.0"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
<div class="TestContainer">
<!----------------------------------------------- Тест ---------------------------------------------------->
    <div id="tarot_test" style="display:block;">
        <!--<div class="me" >
            <img class="photo" src="img/1photo(new).jpg" style="border: 2px solid #1258DC">
        </div>-->
        <p class="TestName"><span class="TestName" id="tarot_testname" style="font-weight: bold"></span></p>

        <div class="QuestionContainer">
            <p class="question">Как бы вы охарактеризовали себя?</p><hr>
            <div>
                <?php
                $self_characteristic_res = array(
                        1 => "Королева Дисков",
                        2 => "Принцесса Дисков",
                        3 => "Принцесса Мечей",
                        4 => "Королева Мечей",
                        5 => "Принцесса Чаш",
                        6 => "Королева Чаш",
                        7 => "Королева Жезлов",
                        8 => "Принцесса Жезлов",
                );
                for($i = 1; $i < 9; $i++) {
                    echo
                    '<label>',
                        '<div class="AnswerContainer">',
                            '<input type="radio" name="tarot_answer_1" value="'.$self_characteristic_res[$i].'"><span id="1_t_a_'.$i.'"></span> <br>',
                        '</div>',
                    '</label>';
                }
                ?>
                <input type="radio" name="tarot_answer_1" value="" style="display: none" checked>
            </div>
        </div>

        <div class="QuestionContainer">
            <p class="question">Как бы вы охарактеризовали своего мужчину?</p><hr>
            <div>
                <?php
                $characteristic_of_a_man_res = array(
                    1 => "Принц Дисков",
                    2 => "Рыцарь Дисков",
                    3 => "Принц Мечей",
                    4 => "Рыцарь Мечей",
                    5 => "Принц Чаш",
                    6 => "Рыцарь Чаш",
                    7 => "Принц Жезлов",
                    8 => "Рыцарь Жезлов",
                );
                for($i = 1; $i < 9; $i++) {
                    echo
                    '<label>',
                        '<div class="AnswerContainer">',
                            '<input type="radio" name="tarot_answer_2" value="'.$characteristic_of_a_man_res[$i].'"><span id="2_t_a_'.$i.'"></span> <br>',
                        '</div>',
                    '</label>';
                }
                ?>

                <input type="radio" name="tarot_answer_2" value="" style="display: none" checked>

                <div class="AnswerContainer" style="text-align: center">
                    <label>
                        <input type="checkbox" id="man_check"> <span style="font-weight: bold">Хочу сделать расклад без участия мужчины</span>
                    </label>
                </div>

            </div>
        </div>

        <!--<div class="QuestionContainer">
            <div  style="padding-top: 10px">
                <input type="checkbox" name="tarot_answer_3" value="бизнес"> <span>Хочу сделать расклад без участия мужчины</span>
            </div>
        </div>-->

        <div class="QuestionContainer">
            <p class="question">На какую тему вы бы хотели сделать расклад?</p><hr style="margin-bottom: 10px">

            <label class="AnswerContainer AnswerContainerLabel" >
                <input type="radio" name="tarot_answer_4" value="бизнес"> Бизнес
            </label>

            <label class="AnswerContainer AnswerContainerLabel" >
                <input type="radio" name="tarot_answer_4" value="инвестиции"> Инвестиции
            </label>

            <label class=" AnswerContainer AnswerContainerLabel" ">
                <input type="radio" name="tarot_answer_4" value="любовь"> Любовь
            </label>

            <input type="radio" name="tarot_answer_4" value="" style="display: none" checked>

            <p style="padding: 0 20px 0 20px">В голосовом сообщении запишите мне ситуацию в которой Вы оказались.
                Расскажите все, что считаете может помочь сделать точный расклад.
                Опишите все нюансы от начала истории до настоящего времени.
                Длительно ауди не должна превышать 5 минут.</p>
        </div>

    </div>
    <!-------------------------------------------- Кнопки переключения ---------------------------------------------------->
    <button class="resultbtn" id="btn_result" onclick="result()"><span>Принять</span></button>

    <!------------------------------------------------ Результат ---------------------------------------------------------->
    <div class="ResultContainer" id="ResultContainer" style="display: none">
        <p style="font-size: 28px; margin-bottom: 10px; margin-top: 10px;">Результат:</p> <hr>
        <div>
            <p style="margin-bottom: 3px; margin-top: 3px;"> <span id="tarot_answer_out_id_span"> </span> </p>
        </div>
    </div>

    <button class="submitbtn" id="btn_share" onclick="copy_in_buffer('#ResultContainer')" style="display: none"><span>Копировать</span></button>
    <button class="submitbtn" id="btn_exit" onclick="location.href='index.php'" style="display: none"><span>Выйти</span></button>

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
<!---------------------------------------------- JavaScript ------------------------------------------>
<script>

    //считывание и вставка в html вопросов и названий тестов из файла js
    document.addEventListener('DOMContentLoaded', function()
    {
        document.getElementById('tarot_testname').innerHTML = tarot_testname;
        for(let i = 1; i < 9; i++){
            document.getElementById('1_t_a_'+i).innerHTML = self_characteristic[i];
        }
        for(let i = 1; i < 9; i++){
            document.getElementById('2_t_a_'+i).innerHTML = characteristic_of_a_man[i];
        }
    });

    function result() {
        document.getElementById('tarot_test').style.display = "none";
        document.getElementById('btn_result').style.display = "none";
        document.getElementById('CopyInstruction').style.display = "none";
        document.getElementById('ResultContainer').style.display = "block";
        document.getElementById('btn_exit').style.display = "inline-block";
        document.getElementById('btn_share').style.display = "inline-block";

        //массив ответов
        let input_answer_arr = [];
        input_answer_arr[1] = getCheckedRadio(document.getElementsByName('tarot_answer_1')).value;
        input_answer_arr[2] = getCheckedRadio(document.getElementsByName('tarot_answer_2')).value;
        if(document.getElementById('man_check').checked)
            input_answer_arr[3] = "без участия мужчины";
        else
            input_answer_arr[3] = "с участием мужчины";
        input_answer_arr[4] = getCheckedRadio(document.getElementsByName('tarot_answer_4')).value;


        //объект span, в который будут записываться результаты
        let tarot_answer_out = document.getElementById('tarot_answer_out_id_span');

        //----------------------------------------------- Вывод результатов ----------------------------------------------------

        //вывод полных ответов (input_answer_arr[]) в html объект span (tarot_answer_out)
        if(input_answer_arr[1]) tarot_answer_out.innerHTML = "Я — "+input_answer_arr[1]+'\n'+'<br>';
        if(input_answer_arr[2]) tarot_answer_out.innerHTML += "Мой мужчина — "+input_answer_arr[2]+'\n'+'<br>';
        tarot_answer_out.innerHTML += "Расклад "+input_answer_arr[3]+'\n'+'<br>';
        if(input_answer_arr[4])tarot_answer_out.innerHTML += "Расклад на тему: "+input_answer_arr[4]+'\n'+'<br>';

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