<?php
    //определяем пароль для доступа к загрузке
    $passwd = "1234";
    if($_GET['password'] != $passwd) header('Location: /');
    //подключаем базу
    require_once 'db/db.php';
    //процесс загрузки
    if($_POST != null && $_FILES != null)
    {
        $title = htmlspecialchars(trim($_POST['title']));
        $short_text = htmlspecialchars(trim($_POST['short_text']));
        $text = htmlspecialchars(trim($_POST['text']));
        $admin_passwd = trim($_POST['admin_passwd']);
        if($_FILES['photo'] != null)
        {
            $uploadfile = 'news/' . time() . '_cover.' . explode('.', $_FILES['photo']['name'])[1];
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                if($db->execute('INSERT INTO news (NAME, TEXT, SHORT_TEXT, PHOTO) VALUES (?, ?, ?, ?)', [$title, $text, $short_text, $uploadfile]))
                {
                    $nId = $db->lastInsertId();
                    header('Location: /#news_'.$nId);
                    exit();
                }
                exit('Неизвестная ошибка записи в базу');
            } else {            
                exit('Неизвестная ошибка загрузки фото');
            }
        }
        exit('Фото к новости не загружено');  
    }
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Добавление новости</title>
        <link rel="stylesheet" href="_fonts.css">
        <style>
            * {
                box-sizing: border-box;
                font-family: 'RobotoRegular';
            }
            
            body {
                margin: 0;
            }
            
            .title {
                text-align: center;
            }
            
            .form-group {
                margin: 0 auto;
                max-width: 800px;
                width: 100%;
            }
            
            .form-group label {
                padding-bottom: 8px;
            }
            
            .form-group .form-el {
                border: 1px solid #333;
                padding: 8px 16px;
                width: 100%;
                margin-bottom: 8px;
            }
        </style>
    </head>

    <body>
        <h2 class="title">Добавление новой новости</h2>
        <form enctype="multipart/form-data" action="#" method="POST" class="form-group">
            <label for="title_news">Заголовок новости</label>
            <input class="form-el" name="title" type="text" placeholder="Новость 1" id="title_news" required>
            <label for="shprt_text_news">Краткое содержание новости</label>
            <input class="form-el" name="short_text" type="text" placeholder="Краткое содержание" id="short_text_news" required>
            <label for="text_news">Основное содержание новости</label>
            <textarea class="form-el" name="text" placeholder="Текст новости" id="text_news"></textarea required>
            <label for="photo">Картинка новости</label>
            <input class="form-el" name="photo" type="file" id="photo" accept="image/jpg,image/png,image/jpeg" required>
            <input class="form-el" type="submit" placeholder="Опубликовать">
        </form>

        <script src="addon.js"></script>
    </body>

    </html>