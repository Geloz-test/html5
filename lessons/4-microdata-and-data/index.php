<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>4 - Microdata & data-*</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
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

    </div>
</div>
<script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/modernizr.custom.46209.js" type="text/javascript"></script>
</body>
</html>