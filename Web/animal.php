<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IZOO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/icon.png" alt="" width="64" height="64">IZOO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Главная страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="animals.html">Животные</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="headerChoose">
        <div class=" container">
            <?php
            $animal = isset($_POST['animal']) ? $_POST['animal'] : '';
            if (!empty($animal)) {
                echo '<h1>Ваше любимое животное: ';
                echo "<span>" . htmlentities($animal) . " </span>";
                echo '</h1>';
            } else
                echo '<h1>Как жаль, среди этих животных нет интересного вам, надеюсь мы это исправим';
            ?>
        </div>
    </div>

    <div id="textbox">
        <div class="container">
            <div class="text">
                <?php
                $animal = isset($_POST['animal']) ? $_POST['animal'] : '';
                if (!empty($animal)) {
                    echo '<h2>Интересный факт про ваше любимое животное пустыние</h2>';
                    if ($animal == 'Верблюд') {
                        echo '<p>У верблюдов развито обоняние. Они будут чувствовать запах влаги или пресной воды на расстоянии 40-60 километров. Их тела очень горячие и начинают потеть только тогда, когда температура их тела превышает 41 градус. Верблюд со всадником может пройти до восемьдесят километров в день. Запах слюни верблюдов неприятен, потому что при рвоте они не только выплевывают слюну, но и выплевывают желудочный сок.';
                    }
                    if ($animal == 'Фенек') {
                        echo '<p>Чтобы поймать добычу или увернуться от хищника, этот маленький зверек может подпрыгнуть на 0,7 метров вверх и прыгнуть на 1,2 метра вперед.';
                    }
                    if ($animal == 'Сурикат') {
                        echo '<p>Сурикаты имеют более 30 вариантов крика, каждый из которых имеет свое значение. Например, означает наземную угрозу или угрозу с воздуха, созыв всего семейства и прочее.';
                    }
                } else {
                    echo '<p>В нашем интернет зоопарке вы познакомитесь с множеством уникальных животных, и хотя бы один из этих животных станет вам не безразличен.Почувствуйте волнение и удивление, открывая мир дикой природы через интернет зоопарк! Исследуйте уникальные факты о животных, участвуйте в виртуальных турах или просто расслабьтесь, наблюдая за потрясающими видео животных. Волшебство живой природы ждет вас прямо здесь!';
                }
                ?>
            </div>
        </div>
    </div>

    <div id="social">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-2">
                    <a href="#"><i><img src="img/icon.png" alt="" width="64" height="64"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i><img src="img/tel.png" alt="" width="64" height="64"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i><img src="img/inst.png" alt="" width="64" height="64"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i><img src="img/vk.png" alt="" width="64" height="64"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i><img src="img/face.png" alt="" width="64" height="64"></i></a>
                </div>
                <div class="col-lg-2">
                    <a href="#"><i><img src="img/whatsap.png" alt="" width="64" height="64"></i></a>
                </div>



</body>

</html>