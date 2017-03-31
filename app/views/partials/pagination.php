<?php
//if filtertd
if (isset($_GET['status'])) {
            $pUri = ($_SERVER["REQUEST_URI"]) . '&';;
} else {
    $pUri = '?';
}

$elemOnPage = 3;
$page = $_GET['page'] ?? 1;
$pagesArray = array_chunk($tasks, $elemOnPage);
$tasks = $pagesArray[$page-1];


?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?= ($page <= 1)?'disabled':''?>">
        <a class="page-link" href="<?= $pUri ?>page=<?= $page - 1 ?>">Previous</a>
    </li>
    <?php for($i = 1; $i <= count($pagesArray); $i++): ?>
        <li class="page-item <?= ($page == $i)?'active':''?>">
            <a class="page-link" href="<?= $pUri ?>page=<?= $i ?>"><?= $i ?></a>
        </li>
    <?php endfor;?>    
    <li class="page-item <?= ($page > count($pagesArray)-1)?'disabled':'' ?>">
        <a class="page-link" href="<?= $pUri ?>page=<?= $page + 1 ?>">Next</a>
    </li>

  </ul>
</nav>


