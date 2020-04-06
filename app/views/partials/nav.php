<div class="menu-block">
    <div class="container">
        <nav class="nav nav-pills">
          <a class="nav-link btn btn-primary" href="/">Менеждер задач</a>
          <a class="nav-link btn btn-danger" href="tasks/create" >Создать новую задачу</a>
          <?php if (isset($_SESSION['userData'])  && $_SESSION['userData']['success']) : ?>
            <a class="nav-link ml-auto" href="#">Привет, <?=$_SESSION['userData'][0]->name?></a> 
            <a class="nav-link" href="/logout">Выйти</a> 
          <?php else: ?>
            <a class="nav-link ml-auto" href="/login">Авторизоваться</a>
          <?php endif; ?>
        </nav>
    </div>
</div>
