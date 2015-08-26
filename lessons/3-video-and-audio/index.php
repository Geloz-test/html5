<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>3 - Video & Audio</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>3 - Video & Audio</h1>
            <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                <h2>Видеоконтейнеры</h2>
                <ul>
                    <li>Audio Video Interleave(.avi)</li>
                    <li>Flash Video(.flv)</li>
                    <li>MPEG 4(.mp4)</li>
                    <li>Matroska(.mkv)</li>
                    <li>Ogg(.ogv)</li>
                </ul>
            </div>
            <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                <h2>Видеокодеки</h2>
                <ul>
                    <li>H.264</li>
                    <li>VP8</li>
                    <li>Ogg Theora</li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                <h2>Аудиокодеки</h2>
                <ul>
                    <li>AAC - формат сжатия с потерями, даёт более высокое качество чем MP3</li>
                    <li>MPEG-3 - лицензируемый формат файла для хранения аудиоинформации</li>
                    <li>Ogg Vorbis - открытый стандарт мультимедиа контейнера</li>
                    <li>WAV - проприетарный аудиоформат без какого-либо сжатия</li>
                    <li>WEBM - открытый бесплатный медиаформат Google, основанный на аудиокодеке Vorbis</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>Кодеков на самом деле очень много. Но здесь перечислены наиболее популярные из них.</p>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                <div class="row">
                    <h2>Audio</h2>
                    <audio id="bg-audio" src="/audio/sample1.mp3" controls="controls">
                        <p>Этот текст отображается если элемент не возможно использовать</p>
                    </audio>
                    <p>Аттрибут <mark>controls</mark> - добавляет элементы управления воспроизведением</p>
                    <p>Аттрибут <mark>autoplay</mark> - начинает воспроизведение после загрузки страницы</p>
                    <p>Если браузер не поддерживает тег <mark>audio</mark> то этот тэг будет использоваться как div</p>
                    <p>У каждого браузера <strong>свое собственное</strong> оформление этого элемента</p>
                    <audio id="audio" controls="controls">
                        <source src="/audio/ACDC_-_Back_In_Black-sample.ogg">
                        <source src="/audio/sample1.mp3">
                    </audio>
                    <p>Можно добавить тэг source в тело тэга audio, тогда браузер начнет воспроизводить первый файл, формат которого поддерживает</p>
                    <button class="audio--controls" onclick="togglePlay();">Click Me</button>
                    <button class="audio--controls-play-from" onclick="playFromSecond(10);">Play from 10 second</button>
                </div>
                <div class="row">
                    <h2>Video</h2>
                    <ul>
                        <li>MP4 - мультимедиа-контейнер для проприетарного кодека H.264</li>
                        <li>OGV - свободный мультимедиа-контейнер с открытым исходным кодом для кодека Theora. Результаты сжатия имеют более низкое качество, чем H.264</li>
                        <li>WEBM - ещё один мультимедиа-контейнер с открытым исходным кодом, использующий новый бесплатный кодек VP8 от Google</li>
                    </ul>
                    <video id="video-1" width="100%" height="100%" poster="/img/big_buck_bunny-poster.jpg" controls>
                        <source src="/video/big_buck_bunny.mp4" />
                        <source src="/video/big_buck_bunny.ogv" />
                        <source src="/video/big_buck_bunny.webm" />
                        <p>Элемент видео не доступен для браузера</p>
                    </video>
                    <p>Элементы аудио и видео похожи друг на друга и имеют большинство одинаковых свойств и функций.
                        В примере представлена возможность подключения нескольких источников видео контента, для обеспечения мульти браузерности.
                    </p>
                    <p>Также можно создавать множество красивых и функциональных вещей используя JS.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                <h3>Управляющие функции</h3>
                <ul>
                    <li>load() - загрузить и подготовить к воспроизведению файл</li>
                    <li>play() - функция, начинающая воспроизведение с текущей позиции</li>
                    <li>pause() - пауза</li>
                    <li>canPlayType(type) - возвращает строку, указывающую может ли браузер воспроизводить данный тип MIME-типа</li>
                </ul>

                <h3>Read-only свойства</h3>
                <ul>
                    <li>duration - длительность, сек</li>
                    <li>paused - (bool)</li>
                    <li>ended - завершено или нет (bool)</li>
                    <li>startTime - самый ранний момент времени, когда клип может быть воспроизведен, относиться к буферизированным клипам</li>
                    <li>error - код ошибки, если возникла</li>
                    <li>currentSrc - строка представляющая медифайл</li>
                </ul>

                <h3>Редактируемые свойства</h3>
                <ul>
                    <li>autoplay - (bool)</li>
                    <li>loop - повторно запускает аудио после завершения (bool)</li>
                    <li>currentTime - текущее положение в медиафайле (сек)</li>
                    <li>controls - элементы управления воспроизведения (bool)</li>
                    <li>volume - громкость [0.0 - 1.0]</li>
                    <li>muted - (bool)</li>
                    <li>autobuffer - требуется ли загружать медиафайл перед воспроизведением, игнорируется при <mark>autoplay</mark></li>
                </ul>

                <h3>Дополнительные свойства для <mark>video</mark></h3>
                <ul>
                    <li>poster - файл изображения, использующийся для заставки до начала воспроизведения видео</li>
                    <li>width, height - чтение или установка видимого размера видео</li>
                    <li>videoWidth, videoHeight - Естественная ширина и высота видео (read-only)</li>
                </ul>
            </div>
        </div>
    </div>

<script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/modernizr.custom.46209.js" type="text/javascript"></script>
<script>
    if (!Modernizr.audio) {
        alert('Браузер не поддерживает тэг audio');
    } else {
        var audioElement = document.getElementById('audio');

        function getAudioStatus(){
            console.log({
                canPlayType: audioElement.canPlayType('audio/ogg; codecs="vorbis"'),
                duration: audioElement.duration,
                currentTime: audioElement.currentTime,
                currentSrc: audioElement.currentSrc,
                paused: audioElement.paused,
                ended: audioElement.ended,
                startTime: audioElement.startTime
            });
        }
        getAudioStatus();

        var clickMeBtn = document.getElementsByClassName('audio--controls')[0],
            playFromBtn = document.getElementsByClassName('audio--controls-play-from')[0];

        function togglePlay(){
            getAudioStatus();
            if (!audioElement.paused){
                audioElement.pause();
                return null;
            }
            audioElement.play();

        }

        function playFromSecond(sec){
            getAudioStatus();
            if (typeof(sec) == 'undefined') {
                sec = 0;
            }
            audioElement.currentTime = sec;
            audioElement.play();
        }
    }

</script>
</body>
</html>