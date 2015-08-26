<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>4 - Microdata & data-*</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/prism.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
            <h1>4 - Microdata & data-*</h1>
        </div>
    </div>
    <div class="row">
        <h2>Microdata</h2>
        <p>Микроданные - это спецификация, позволяющая хранить дополнительные данные в структуре документ.
            Поисковые движки, браузеры и веб кравлеры могут использовать эти данные для того,
            чтобы предоставлять пользователю более богатые сведенья о странице.
        </p>

        <h2>Аттрибуты: Itemscope, Itemprop, Itemtype</h2>
        <p>
            Атрибут itemscope применяется для определения оласти действия, а itemprop - для указания свойства объекта,
            находящегося в этой области действия. Области действия - это своего рода сущности, их описание можно найти на
            официальном сатей словаря семантической разметки <a href="http://schema.org/Person">http://schema.org/Person</a>
        </p>
        <p>Рассмотрим пример, описывающий персону:</p>
        <button class="btn" data-toggle="collapse" data-target="#person-example">Show example</button>
        <section id="person-example" class="collapse" itemscope itemtype="http://schema.org/Person">
            <h2 itemprop="name">Konstantin Trostenuk</h2>
            <div class="col-xs-3 col-md-4 col-sm-4 col-lg-4">
                <img src="/img/person-img.jpg" alt="Konstantin Trostenuk" itemprop="image"/>
            </div>
            <div class="col-xs-9 col-md-8 col-sm-8 col-lg-8">
                <div class="row">
                    <p itemprop="worksFor" itemscope itemtype="http://schema.org/Organization">
                        <span itemprop="email">info@stopgame.ru</span>
                        <span itemprop="telephone">123-123-122</span>
                    </p>
                    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="addressLocality">Moscow</span>
                        <span itemprop="addressCountry" itemscope itemtype="http://schema.org/Country">
                            <span itemprop="name">Russian Federation
                            </span>
                        </span>
                    </p>
                    <a itemprop="url" href="http://vk.com/konstantin.trostenuk">http://vk.com/konstantin.trostenuk</a>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <h3>Заметки от себя</h3>
        <p>Сейчас не известно на сколько эффективно использование для SEO данных аттрибутов, но некоторые порталы ссылаются на то, что, используя
        данную особенность HTML5, получили новый трафик.</p>
    </div>
    <div class="row">
        <h2>Полезные ссылки</h2>
        <p><a href="http://www.google.com/webmasters/tools/richsnippets">Здесь</a> инструмент для проверки структурированных данных</p>
    </div>
    <div class="row">
        <h2>Attribute: data-*</h2>
        <h4>Имя аттрибута</h4>
        <p>Должен быть как минимум 1 символ в длину и использовать префикс data-</p>
        <h4>Значение аттрибута</h4>
        <p>Значением может быть любая строка</p>
        <h4>Пример пользовательского аттрибута</h4>
        <p>
            data-bind="src"
            data-validation-email="please enter valid email"
        </p>
        <h4>Обращение к атрибутам данных через Javascript</h4>
        <pre>
            <code class="language-javascript">
                var v = e.getAttribute('data-bind');
                e.setAttribute('data-bind', 'new value');

                // Этот способ не изменяет сам аттрибут
                var v = e.dataset.bind;
                e.dataset.bind = 'new value';

                var v = e.dataset.multiWordDataAttribute; // get data-multi-word-data-attribute
            </code>
        </pre>
    </div>
    <div class="row">
        <h2>Пример</h2>
        <p>Есть список с аттрибутом data-color</p>
        <ul id="data-example">
            <li data-color="yellow">Yellow</li>
            <li data-color="black">Black</li>
            <li data-color="white">White</li>
            <li data-color="green">Green</li>
        </ul>
        <pre>
            <code class="language-javascript">
                //Use data attr feature for old browser property (Tested at IE8)
                var dataList = document.getElementById('data-example').children;

                function showDataColorAttrFor(list){
                console.log('Showing data color attrs');
                for (var i = 0, dataItem = dataList[0]; i < dataList.length; i++, dataItem=dataList[i]) {
                if (typeof dataItem.dataset == 'undefined') {
                console.log(dataItem.getAttribute('data-color'));
                } else {
                console.log(dataItem.dataset.color);
                }
                }
                }

                showDataColorAttrFor(dataList);

                console.log('Changing data attrs throw dataset');
                // Change data attrs at #data-example throw dataset
                for (var i = 0, dataItem = dataList[0]; i < dataList.length; i++, dataItem=dataList[i]) {
                dataItem.dataset.color = 'blue';
                }

                showDataColorAttrFor(dataList);
            </code>
        </pre>
    </div>
</div>
<script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/modernizr.custom.46209.js" type="text/javascript"></script>
<script src="/js/prism.js"></script>
<script>
    //Use data attr feature for old browser property (Tested at IE8)
    var dataList = document.getElementById('data-example').children;

    function showDataColorAttrFor(list){
        console.log('Showing data color attrs');
        for (var i = 0, dataItem = dataList[0]; i < dataList.length; i++, dataItem=dataList[i]) {
            if (typeof dataItem.dataset == 'undefined') {
                console.log(dataItem.getAttribute('data-color'));
            } else {
                console.log(dataItem.dataset.color);
            }
        }
    }

    showDataColorAttrFor(dataList);

    console.log('Changing data attrs throw dataset');
    // Change data attrs at #data-example throw dataset
    for (var i = 0, dataItem = dataList[0]; i < dataList.length; i++, dataItem=dataList[i]) {
        dataItem.dataset.color = 'blue';
    }

    showDataColorAttrFor(dataList);

</script>
</body>
</html>