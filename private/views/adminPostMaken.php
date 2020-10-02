<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/admin.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
</head>

<body>
    <?php if ($this->section('dashboardNav')) : ?>
        <?php echo $this->section('dashboardNav') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardNav') ?>
    <?php endif ?>

    <div class="content">
        <div class="postEditor">
            <h1>Maak een Bericht!</h1>
            <div class="titleSection">
                <input type="text" id="title" name="title" placeholder="Titel van het Bericht...">
            </div>

            <form method="post">
                <textarea id="mytextarea" name="mytextarea"></textarea>
            </form>

            <div class="postInformation">
                <div class="catoForm">
                    <h2>Categorie toevoegen</h2>
                    <div class="cato">
                        <input type="text" placeholder="Voeg een categorie toe..." class="catoInput">
                    </div>
                    <select class="catoSelect" name="catoDropdown"></select>
                </div>

                <div class="kopImage">
                    <h2>Kopafbeelding</h2>
                    <input type="file">
                </div>
            </div>

            <div class="submit">
                <input class="postSubmit" type="submit" value="Post aanmaken">
            </div>
        </div>
    </div>

    <?php if ($this->section('dashboardFooter')) : ?>
        <?php echo $this->section('dashboardFooter') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardFooter') ?>
    <?php endif ?>

    <script src="https://cdn.tiny.cloud/1/a4porrdjpxoppis4n6hiyvrts4udnwno0xz3104dp9afltl0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Mees Postma',
        });
    </script>

    <script>
        let input = document.querySelector('.catoInput');
        let select = document.querySelector('.catoSelect');

        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                let option = document.createElement('option');
                option.value = input.value;
                option.text = input.value;

                let currentIndex = select.options[select.selectedIndex];
                select.add(option, 0);
                input.value = '';
            }
        })
    </script>
</body>

</html>