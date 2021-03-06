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
    <title>Takenlijst | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/admin.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Takenlijst</h1>
                    <p class="takenlijstP">Alle to-do's voor op deze portfolio! Zet hier geen andere taken in.</p>
                    <form method="post" id="to_do_form">
                        <span id="message"></span>
                        <div class="input-group">
                            <input type="text" name="task_name" id="task_name" class="taskForm" autocomplete="off" placeholder="Title..." />
                            <div class="input-group-btn">
                                <button type="submit" name="submit" id="submit" class="taskFormSubmit">Voeg Toe</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="panel-body">
                    <h1>Huidige taken</h1>
                    <div class="list-group">
                        <?php
                        foreach ($tasks as $row) {
                            $style = '';
                            if ($row["task_status"] == 'yes') {
                                $style = 'text-decoration: line-through';
                            }
                            echo '<a href="#" style="' . $style . '" class="list-group-item" id="list-group-item-' . $row["id"] . '" data-id="' . $row["id"] . '">
                            ' . $row["details"] . ' 
                            <span class="badge" data-id="' . $row["id"] . '">
                                <i class="fas fa-trash"></i>
                            </span></a>';
                        }
                        ?>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <?php if ($this->section('dashboardFooter')) : ?>
        <?php echo $this->section('dashboardFooter') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardFooter') ?>
    <?php endif ?>


    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('submit', '#to_do_form', function(event) {
                event.preventDefault();
                if ($('#task_name').val() == '') {
                    $('#message').html('<div class="alert alert-danger">Enter Task Details</div>');
                    return false;
                } else {
                    $('#submit').attr('disabled', 'disabled');
                    $.ajax({
                        url: "<?php echo url('addTask'); ?>",
                        method: "POST",
                        data: $(this).serialize(),
                        success: function(data) {
                            $('#submit').attr('disabled', false);
                            $('#to_do_form')[0].reset();
                            $('.list-group').prepend(data);
                        }
                    })
                }
            });

            $(document).on('click', '.list-group-item', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "<?php echo url('updateTask') ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#list-group-item-' + id).css('text-decoration', 'line-through');
                    }
                })
            });

            $(document).on('click', '.badge', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "<?php echo url('deleteTask'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#list-group-item-' + id).fadeOut('slow');
                    }
                })
            });
        });
    </script>
</body>

</html>