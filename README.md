<h1>MVC-Project для изучения</h1>
<ol>
    <li>Файлы конфигурации находятся в главной папке</li>
    <li>Все классы находятся в папке <b>core</b></li>
    <li>Контроллеры распологаются в папке <b>core/Controllers</b></li>
    <li>Модели распологаются в папке <b>core/Models</b></li>
</ol>

<h2>Версии фреймворка</h2>
<ul>
    <li><b>1.0.0</b> - Разработана основная структура MVC.</li>
    <li><b>1.0.1</b> - Добавлена в Models возможность соединения таблиц.</li>
    <li><b>1.0.8</b> - Добавлена операция создание Постов.</li>
</ul>

<h3>Базовые функции</h3>
<p>Базовый функционал описан в файле <a href="../../Downloads/MVC-Project-main/MVC-Project-main/core/basefunction.php">basefunction.php</a></p>
<ol>
    <li><b>session(name)</b> - name название идентификатора в сессии, получает значение данного элемента.</li>
    <li><b>has_session(name)</b> - name название идентификатора в сессии, проверяет существует ли элемент.</li>
    <li><b>put_session(name)</b> - name название идентификатора в сессии, записывает данные в $_SESSION.</li>
    <li><b>redirect(url)</b> - url ссылка на которую будет переход, используется стандартный header('Location: URL')</li>
</ol>

<h3>Представление и его функционал</h3>
<p>Представление описано в файле <a href="../../Downloads/MVC-Project-main/MVC-Project-main/core/view.php">view.php</a></p>
<ol>
    <li><b>$isError(name, input = false)</b> - генерирует вывод ошибок автоматически для полей.<br>
    <b>name</b> - содержит в себе наименования идентификатора поля input из атрибута name<br>
    <b>input</b> - содержит в себе значение истина или ложь. По default является ложь, и значит выводит ошибку.
    При значении истина выводит class для тега input.<br>
    Пример использования для input тега:

```html
<input name='login' <?= $isError('login', true) ?> >
```
Пример использования для вывода ошибок:
```php
<?= $isError('login') ?>
```    

</li>
</ol>