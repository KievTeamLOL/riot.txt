var get = location.search;
$val = document.getElementById('NotificationLogin');
if (get) {
$val.classList.add("margintop0");

<?PHP if ($_GET['login']=="0") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Что-то пошло не так. Попробуйте еще раз.";
<?PHP }
else if ($_GET['login']=="2") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Этот логин не был найден в базе данных. Проверьте введенные данные.";
<?PHP }
else if ($_GET['login']=="1") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#3c3");
$val.innerHTML = "Отлично! Приветствуем <?PHP echo $_SESSION['login']; ?>!";
<?PHP }
else if ($_GET['login']=="3") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Вы ввели не всю информацию, заполните все поля!";
<?PHP } ?>

<?PHP if ($_GET['fail']=="0") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#3c3");
$val.innerHTML = "Новость успешно загружена на сайт, можете посмотреть на нее <a href='../../'>тут</a>.";
<?PHP }
else if ($_GET['fail']=="2") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Файл не был загружен. Проверьте его реальное расширение, это должен быть файл типа картинка(jpg, gif, png).";
<?PHP }
else if ($_GET['fail']=="1") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Вы ввели не всю информацию. Пожалуйста вернитесь назад и заполните все обязательные поля.";
<?PHP }
else if ($_GET['fail']=="3") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Файл слишком большой. Его размер не должен превышать 10 МБ.";
<?PHP } ?>

<?PHP if ($_GET['validated']=="0") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#3c3");
$val.innerHTML = "Вы ввели не всю информацию. Пожалуйста вернитесь назад и заполните все обязательные поля.";
<?PHP }
else if ($_GET['validated']=="2") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Извините, введённый вами логин уже зарегистрирован. Введите другой логин.";
<?PHP }
else if ($_GET['validated']=="1") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Поздравляем! Вы успешно зарегистрировались, предлагаем вам ввойти на сайт с помощью формы входа в левой колонке сайта.";
<?PHP }
else if ($_GET['validated']=="3") { ?>
$val.classList.add("NotificationLogin");
$("#NotificationLogin").css("background-color", "#f00");
$val.innerHTML = "Извините, но мы затрудняемся получить доступ к базе данных. Попробуйте еще раз позже.";
<?PHP } ?>
}