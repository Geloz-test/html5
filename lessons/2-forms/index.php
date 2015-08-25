<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>2 - Forms</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="container">
            <div class="row">
                <h1>2 - HTML5 Forms</h1>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <h2>Types: Search, Email, Url, Tel</h2>
                    <div class="form-group">
                        <label for="query">Find</label>
                        <input id="query" name="query" type="search"/>
                        <p>Недоступен во многих браузерах. Добавляет иконку удаления всего содержимого в input-e и добавляет <strong>обводку</strong></p>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email"/>
                        <p>Проводит валидацию корректности введенного email адреса + моб. спец. клавиатура.</p>
                    </div>

                    <div class="form-group">
                        <label for="url">URL</label>
                        <input id="url" name="url" type="url"/>
                        <p>Проводит валидацию корректности введенного url адреса. Абсолютный URL с протоколом http://</p>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input id="telephone" name="telephone" type="tel"/>
                        <p>моб спец клавиатура</p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <h2>Types: Datetime, Date, Time</h2>

                    <div class="form-group">
                        <label for="datetime">Datetime</label>
                        <input id="datetime" name="datetime" type="datetime"/>
                        <p>Мало где поддерживается</p>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input id="date" name="date" min="2015-01-01" max="2016-12-31" type="date"/>
                        <p>Отображает всплывающий календарь. Атрибуты min и max задают диапозон дат. YYYY-MM-DD</p>
                    </div>

                    <div class="form-group">
                        <label for="time">Time</label>
                        <input id="time" name="time" min="08:00" max="21:59" type="time"/>
                        <p>Время. Атрибуты min, max для задания диапозона</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <h2>Types: Number</h2>

                    <div class="form-group">
                        <label for="num1">Number1</label>
                        <input id="num1" name="num1" type="number"/>
                    </div>
                    <div class="form-group">
                        <label for="num2">Number1</label>
                        <input id="num2" name="num2" type="number" min="2" max="60" step="3"/>
                        <p>Атрибуты min=2, max=60, step=3</p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <h2>Types: Range, Color</h2>
                    <div class="form-group">
                        <label for="range">Range</label>
                        <input id="range" name="range" min="3" max="33" step="3" value="15" type="range"/>
                        <p>Прокрутка. Атрибуты min,max,step</p>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input id="color" name="color" type="color"/>
                        <p>Выбор цвета</p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <h2>Types: Datalist</h2>
                    <div class="form-group">
                        <label for="datalist">Datalist</label>
                        <input id="datalist" name="datalist" list="source" type="text"/>
                    </div>
                </div>


                <datalist id="source">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </datalist>

                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <input class="btn btn-primary" type="submit"/>
            </div>
        </div>
    </form>
    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>