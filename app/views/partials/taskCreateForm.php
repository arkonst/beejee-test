<div class="container default-hide" id="task-create">

    <form action="/tasks" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="userName" class="col-2 col-form-label">Автор:</label>
            <div class="col-10">
                <input type="name" class="form-control" id="userName" name="userName" required>
            </div>
            
        </div>
        <div class="form-group row">
            <label for="email" class="col-2 col-form-label">Email:</label>
            <div class="col-10">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-2 col-form-label">Текст задачи:</label>
            <div class="col-10">
            <textarea type="text" class="form-control" id="text" name="text" required></textarea>
            </div>
        </div>        
        <button type="button" class="btn btn-secondary" onclick="hideForm()" >Закрыть</button>
        <button type="button" class="btn btn-secondary" onclick="showPreview()">Предпросмотр</button>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>