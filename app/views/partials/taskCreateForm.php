<div class="container default-hide" id="task-create">

    <form action="/tasks" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="userName" class="col-2 col-form-label">Name:</label>
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
            <label for="text" class="col-2 col-form-label">Text:</label>
            <div class="col-10">
            <textarea type="text" class="form-control" id="text" name="text" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="image" class="col-2 col-form-label">Image:</label>
            <div class="col-10">
                <input type="file" class="form-control" id="image" name="image" onchange="readURL(this);" required>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" onclick="hideForm()" >Close</button>
        <button type="button" class="btn btn-secondary" onclick="showPreview()">Preview</button>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>