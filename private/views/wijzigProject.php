<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo site_url('/img/logo/favicon/favicon.ico') ?>" type="image/x-icon" />
  	<link rel="apple-touch-icon" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon.png') ?>" />
  	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-57x57.png') ?>" />
  	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-72x72.png') ?>" />
  	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-76x76.png') ?>" />
  	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-114x114.png') ?>" />
  	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-120x120.png') ?>" />
  	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-144x144.png') ?>" />
  	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-152x152.png') ?>" />
  	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-180x180.png') ?>" />
    <title>Admin | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/admin.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152808621-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-152808621-1');
    </script>
</head>

<body>
    <?php if ($this->section('dashboardNav')) : ?>
        <?php echo $this->section('dashboardNav') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardNav') ?>
    <?php endif ?>

    <div class="content">
        <div class="postEditor">
            <h1>Wijzig dit Project!</h1>
            <?php foreach ($currentProject as $row) : ?>
                <form method="post" action="<?php echo url('updateProject') . $row['id']; ?>" enctype="multipart/form-data">
                    <div class="titleSection">
                        <input type="text" id="title" name="title" placeholder="Titel van het Bericht..." value="<?php echo $row['projectnaam'] ?>">
                    </div>
                    <textarea id="mytextarea" name="mytextarea">
                        <?php echo $row['content']; ?>
                    </textarea>

                    <div class="projectDetails">
                        <div class="soortProject">
                            <h2>Soort Project</h2>
                            <input type="text" name="soortproject" id="soortproject" placeholder="Soort Project..." value="<?php echo $row['soort'] ?>">
                        </div>

                        <div class="projectDatum">
                            <h2>Datum van Project</h2>
                            <input type="date" name="projectdate" id="projectdate" value="<?php echo $row['datum'] ?>">
                        </div>
                    </div>

                    <div class="postInformation">
                        <div class="catoForm">
                            <h2>Methode toevoegen</h2>
                            <div class="cato">
                                <input type="text" placeholder="Voeg een categorie toe..." class="catoInput">
                                <button type="button" class="catoAddBtn">Voeg toe</button>
                            </div>
                            <select id="catoSelect" class="catoSelect" name="catoDropdown[]" multiple>
                                <?php foreach ($currentMethods as $cato) : ?>
                                    <option value="<?php echo $cato['naam'] ?>"><?php echo $cato['naam'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="kopImage">
                            <h2>Kopafbeelding</h2>
                            <img src="<?php echo site_url('/img/postImages/headers/' . $row['headerimage']) ?>" style="width: 100%;">
                        </div>
                    </div>

                    <div class="projectLinks">
                        <h2>Url's van Project</h2>
                        <div class="urls">
                            <div class="liveversie">
                                <input type="text" name="liveversie" id="liveversie" placeholder="URL van het Project..." value="<?php echo $row['liveversie'] ?>">
                            </div>

                            <div class="github">
                                <input type="text" name="github" id="github" placeholder="URL naar de Github van dit Project..." value="<?php echo $row['github'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="longInput">
                        <input type="text" id="taal" name="taal" placeholder="Taal van het Project..." value="<?php echo $row['taal'] ?>">
                    </div>

                    <div class="submit">
                        <input class="postSubmit" type="submit" value="Project wijzigen">
                    </div>
                </form>
            <?php endforeach; ?>
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
            plugins: 'codesample autolink lists media table tinydrive image imagetools code link',
            toolbar: "insertfile image link | code" + 'undo redo | formatselect | ' + 'bold italic backcolor | alignleft aligncenter ' + 'alignright alignjustify | bullist numlist outdent indent | ' + 'removeformat | help',
            menu: {
                insert: {
                    title: "Insert",
                    items: "insertfile"
                }
            },
            insert_button_items: "insertfile",
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Mees Postma',
            tinydrive_token_provider: '<?php echo url('jwt') ?>',
            tinydrive_upload_path: "<?php echo site_url('/img/postImages') ?>"
        });
    </script>

    <script>
        let btnAdd = document.querySelector('.catoAddBtn');
        let input = document.querySelector('.catoInput');
        let select = document.querySelector('.catoSelect');

        btnAdd.addEventListener('click', () => {
            let option = document.createElement('option');
            option.value = input.value;
            option.text = input.value;
            option.selected = true;

            let currentIndex = select.options[select.selectedIndex];
            select.add(option, currentIndex);
            input.value = '';
        });
    </script>
</body>

</html>