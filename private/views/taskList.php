<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takenlijst | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/admin.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <?php if ($this->section('dashboardNav')) : ?>
        <?php echo $this->section('dashboardNav') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardNav') ?>
    <?php endif ?>

    <div class="content">
        <div class="container">
            <h1>Developed To-Do List in PHP using Ajax - 4</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">My To-Do List</h3>
                </div>

                <div class="panel-body">
                    <form method="post" id="to_do_form">
                        <span id="message"></span>
                        <div class="input-group">
                            <input type="text" name="task_name" id="task_name" class="form-control input-lg" autocomplete="off" placeholder="Title..." />
                            <div class="input-group-btn">
                                <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span></button>
                            </div>
                        </div>
                    </form>
                    <br />
                    <div class="list-group">
                        <?php
                        foreach ($tasks as $row) {
                            $style = '';
                            if ($row["task_status"] == 'yes') {
                                $style = 'text-decoration: line-through';
                            }
                            echo '<a href="#" style="' . $style . '" class="list-group-item" id="list-group-item-' . $row["id"] . '" data-id="' . $row["id"] . '">' . $row["details"] . ' <span class="badge" data-id="' . $row["id"] . '">X</span></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <?php if ($this->section('dashboardFooter')) : ?>
                <?php echo $this->section('dashboardFooter') ?>
            <?php else : ?>
                <?php echo $this->fetch('_dashboardFooter') ?>
            <?php endif ?>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            
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