<?php require('app/views/partials/header.php'); ?>

<div class="container">


    <form action="/tasks" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="userName">Автор</label>
            <input type="name" class="form-control" id="userName" name="userName" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="text">Текст задачи:</label>
            <input type="text" class="form-control" id="text" name="text" required>
        </div>        
        <a onclick="openModal()" class="btn btn-default hover-shadow">Предпросмотр</a>
        <button type="submit" class="btn btn-default">Создать</button>
    </form>
</div>

<?php require('app/views/partials/modal_edit.php');?>
<?php require('app/views/partials/footer.php'); ?>