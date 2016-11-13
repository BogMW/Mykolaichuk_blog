<?php include('../includes/header.php')?>
<body>
<div class="container">
    <form action="" method="post" id="registration">
        Введите ваше имя</br>
        <input type="text" name="name"></br>
        Введите ваш email</br>
        <input type="email" name="email"></br>
        Придумайте пароль</br>
        <input type="password" name="password"></br>
        <input type="submit"  name="register" value="Зарегистрироватся"></br>
    </form>
    <div class="switch">
        Вже зареєстровані? => <a href="/controllers/login.php">Залогінитись</a>
    </div>

</div>

</body>
