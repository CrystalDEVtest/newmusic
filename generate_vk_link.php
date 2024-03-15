<!DOCTYPE html>
<html>
<head>
    <title>URL</title>
</head>
<body>
    <h1>Ссылка на музыку из ВКонтакте</h1>

    <?php
    if(isset($_POST['vk_song_url'])) {
        $vk_song_url = $_POST['vk_song_url'];
        
        // Извлечение ID аудиозаписи из URL
        $vk_song_id = preg_replace('/[^0-9]/', '', $vk_song_url);
        
        // Генерация ссылки на аудиозапись
        $vk_song_link = "https://vk.com/audios{$vk_song_id}?z=audio_playlist{$vk_song_id}";
        
        echo "<p>Ссылка на музыку из ВКонтакте: <a href='$vk_song_link'>$vk_song_url</a></p>";
    } else {
        echo "<p>Ошибка: URL музыкального файла из ВКонтакте не был передан.</p>";
    }
    ?>
</body>
</html>
