
<?php require('app/views/partials/header.php'); ?>
<?php require('app/views/partials/taskCreateForm.php'); ?>
<?php require('app/views/partials/preview.php');?>
<?php require('app/views/partials/filterForm.php');?>



<div class="container">
<h5>All tasks:</h5>

<?php require('app/views/partials/pagination.php');?>

<?php if (isset($tasks)) : ?>
<?php foreach ($tasks as $task) :?>
<div class="row">
    <div class="col-lg-5 col-md-6">
        <div class="img"><img src="<?='/'. $task->image?>"></div> 
    </div>
    <div class="col-lg-7 col-md-6">
        <h6>Task id: <?=$task->id?></h6>
        <h7><i>Posted by: <?=$task->username?></i></h7>
        <p><i><?=$task->useremail?></i></p>
        <p class="taskId-<?=$task->id?>"><?=$task->text?></p>  
        <?php echo $task->status ?
          "<button type='button' class='btn btn-success'>DONE</button>" :
          "<button type='button' class='taskId-{$task->id} btn btn-warning'>ACTIVE</button>" ;
        ?>
        <?php if (isset($_SESSION['userData'])  && $_SESSION['userData']['success']) : ?>
             <button type='button' class='btn btn-primary' onclick="markAsDone(<?= $task->id ?>)">CLOSE</button>
             <button type='button' class='btn btn-secondary' onclick="editModal(<?= $task->id ?>)">EDIT</button>
        <?php endif; ?>
    </div>  
</div>
<hr>   



<?php endforeach;?>
<?php endif; ?>
</div>
</div> <!-- end container -->
<?php require('app/views/partials/modal_edit.php');?>

<?php require('app/views/partials/footer.php'); ?>