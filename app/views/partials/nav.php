<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Service desk</a>
          <a class="nav-link" href="#" onclick="showTaskCreateForm()">Create a new task</a>
          <?php if (isset($_SESSION['userData'])  && $_SESSION['userData']['success']) : ?>
            <a class="nav-link ml-auto" href="#"><?=$_SESSION['userData'][0]->name?></a> 
            <a class="nav-link" href="/logout">logout</a> 
          <?php else: ?>
            <a class="nav-link ml-auto" href="/login">login</a>
          <?php endif; ?>
        </nav>
    </div>
</div>
