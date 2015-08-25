<?php
    $fileName = 'html5-lessons.txt';
    $file = file_get_contents('./html5-lessons.txt');
    $lessons = explode(PHP_EOL, $file);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>HTML 5 / CSS 3 - All lessons</title>
        <style>

        </style>
    </head>
    <body>
        <div class="main">
            <ul class="lessons">
                <?php
                    foreach($lessons as $lessonData)
                    {
                        $lessonData = explode('|', $lessonData);
                        if (! isset($lessonData[0]) || ! isset($lessonData[1])) {
                           continue;
                        }
                        echo '<li class="lesson-item"><a href="' . $lessonData[1] . '">' . $lessonData[0] . '</a></li>';
                    }
                ?>
            </ul>
        </div>
    </body>
</html>
