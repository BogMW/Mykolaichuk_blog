<?php include('../includes/header.php')?>

<body>
<div class="container">
    <form action="" method="post" id="login">
        Введіть email</br>
        <input type="email" name="email"></br>
        Введіть ваш пароль</br>
        <input type="password" name="password"></br>
        <input type="submit" name="login" value="Ввойти"></br>
    </form>
    <div class="switch">
        Ще не зареєстровані? => <a href="/controllers/registration.php">Зареєструватися</a>
    </div>

</div>

</body>
