
<?php require('app/views/partials/header.php'); ?>
<?php require('app/views/partials/filterForm.php');?>

<div class="container">
<h5>Список задач:</h5>

<?php require('app/views/partials/pagination.php');?>
<div class="row">
<?php if (isset($tasks)) : ?>
<?php foreach ($tasks as $task) :?>    
    <div class="col-lg-3 col-md-3">
        <h6>ID задачи: <?=$task->id?></h6>
        <h7><i>Автор: <?=$task->username?></i></h7>
        <p><i><?=$task->useremail?></i></p>
        <p class="taskId-<?=$task->id?>"><?=$task->text?></p>  
        <?php echo $task->status ?
          "<button type='button' class='btn btn-success'>Готово</button>" :
          "<button type='button' class='taskId-{$task->id} btn btn-warning'>Выполняется</button>" ;
        ?>
        <?php if (isset($_SESSION['userData'])  && $_SESSION['userData']['success']) : ?>
             <button type='button' class='btn btn-primary' onclick="markAsDone(<?= $task->id ?>)">Закрыть</button>
             <button type='button' class='btn btn-secondary' onclick="editModal(<?= $task->id ?>)">Изменить</button>
        <?php endif; ?>
    </div>  
<?php endforeach;?>
<?php endif; ?>
</div>
</div> <!-- end container -->
<?php require('app/views/partials/footer.php'); ?>