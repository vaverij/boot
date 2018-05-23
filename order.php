<div style="display: none;" id="feedback-form" class="order" align="center">
        <h2>Request a photoset</h2>
        <span></span>
        <!--<p>If you want to order a photoset, write to e-mail info@janisvavere.info <br> In the letter, you must specify your name, age, gender and style of the photoset (idea and so on). <br> The answer will be given in the next 3 days.</p>-->
        <form>
            <label>Name</label><br>
            <input maxlength="255" name="name" id="name" value=""/><br>
            <label>Surname</label><br>
            <input maxlength="255" name="surname" id="surname" value=""/><br>
            <label>E-mail</label><br>
            <input maxlength="255" name="email" id="email" value=""/><br>
            <label>Gender</label><br>
            <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
            <label>Age:</label><br>
            <input maxlength="255" name="year" id="year" class="year"/><br>
            <label>Type of work</label><br>
            <select name="type">
                <option value="Wedding">Wedding</option>
                <option value="Portrait">Portrait</option>
                <option value="Video">Video</option>
            </select><br>
            <label>Tell me about the essence of the idea.</label><br>
            <textarea name="idea"></textarea><br>
            <div class="result"></div>
            <a href="javascript: void(0);" class="btn-theme btn-theme-md btn-default-bg text-uppercase" id="submit">Submit</a>       
        </form>
        <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var name = $('#name').val(); // Получаем имя
                var surname = $('#surname').val(); // Получаем e-mail
                var email = $('#email').val(); // Получаем сообщение
                var gender = $('#gender').val(); // Получаем сообщение
                var year = $('#year').val(); // Получаем сообщение
                var type = $('#type').val(); // Получаем сообщение
                var idea = $('#idea').val(); // Получаем сообщение
                $.ajax({
                    url: "/contacts.php", // Куда отправляем данные (обработчик)
                    type: "post",
                    dataType: "json",
                    data: {
                        "name" : name,
                        "surname" : surname,
                        "email" : email,
                        "gender" : gender,
                        "year" : year,
                        "type" : type,
                        "idea" : idea
                    },
                    success: function(data){
                        $('.result').html(data.result); // Выводим результат
                    }
                });
            });
        });
    </script>
    </div>  