<?php require('app/views/partials/header.php'); ?>

<div class="container">
    <form action="users/login" method="GET">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>


<?php require('app/views/partials/footer.php'); ?>