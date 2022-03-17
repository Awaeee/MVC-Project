<?php
    $title = 'Регистрация в системе';
    $css = [
        'register/main.css'
    ];
    @include_once 'header.php';
?>

<?= ( isset($_GET['error_password'])
    ? "<div class='error'>Пароли не совпали!</div>"
    : "" )
?>
<?php @include_once 'footer.php'; ?>
<div>
    <div>
        <div>
            <div>
                <form action="" method="POST">
                    <div>
                        <lable>Ваше ФИО:</lable>
                        <input type="text" name="name" id="inputName" placeholder="Фамилия Имя Отчество">
                    </div>
                    <div>
                        <lable>Ваш логин:</lable>
                        <input type="text" name="login" id="inputLogin" placeholder="Логин">
                    </div>
                    <div>
                        <lable>Ваш пароль:</lable>
                        <input type="password" name="password" id="inputPassword" placeholder="Пароль">
                    </div>
                    <div>
                        <lable>Ваш повтор пароля:</lable>
                        <input type="password" name="password_confirmed" id="inputPasswordConfirmed" placeholder="Повтор пароля">
                    </div>
                    <button>Регестрация</button>
                </form>
            </div>
        </div>
    </div>
</div>
