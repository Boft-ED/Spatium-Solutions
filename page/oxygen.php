<article id="article2">
    <span class="text">
        Рассматриваем установки по разложению углекислого газа на С и О2, проиллюстрированные в кинофильме "Марсианин".
        <br />
Также часть затрат по преобразованию возьмут на себя растения, выращиваемые на станции.
        <br />
Так же кислород (O2) получают в ходе разложения марганцовки
        <br />
При нагревании кристаллический марганцовка начинает разлагаться, выделяющийся кислород поступает по газоотводной трубке в сосуд. Кислород тяжелее воздуха, поэтому не покидает ёмкость и постепенно заполняет ее.
    </span>
    <label>

        Дни полёта
        <input type="text" class="daysOFflight"/>
    </label>
    <label>
        Членов экипажа
        <input type="text" class="crewMembers" />
    </label>

    <div class="button-text"><input type="button" name="send" value="Рассчитать" class="button3"/></div>
    <div class="result-area"><label>Результат:</label><input type="text" name="result" placeholder="Ответ"/></div>

    <span class="arrow-back">
    &#x219A;
</span>
    <script type="text/javascript">

            $("input[name=send]").click(function () { // Событие нажатия на кнопку "Расчёт"
                var firstValues = $(".daysOFflight").val();
                var secondValues = $(".crewMembers").val();
                var stable = firstValues * secondValues;
                var result = stable * 0.906;
                $("input[name=result]").val(result); // записываем результат
            });

    </script>
</article>

<script src="js/page.js"></script>