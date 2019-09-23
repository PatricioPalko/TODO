<?php include_once "_partials/header.php" ?>

    <div class="page-header">
        <h1>VERY MUCH TODO LIST</h1>
    </div>

<?php $data = $database->select('items', ['id','text']); ?>

    <div class="content" style="display: flex;">

        <ul class="list-group col-sm-6">
            <?php
            foreach ( $data as $item ) {
                echo '<li class="list-group-item">';
                echo $item['text'];
                echo '<div class="controls">';
                echo '<a href="edit.php?id='.$item['id'].'" class="edit-link">edit</a>';
                echo '<a href="delete.php?id='.$item['id'].'" class="delete-link text-muted" style="margin-left: 10px;">X</a>';
                echo '</div>';
                echo '</li>';
            }
            ?>
        </ul>

        <form id="add-form" class="col-sm-6" action="_inc/add-item.php" method="post">
            <p class="form-group">
                <textarea class="form-control" name="message" id="text" rows="3" placeholder="is there [ /watch?v=GO3wwqikkF0 ] ?"></textarea>
            </p>
<!--            <p class="form-group">-->
<!--                <input class="btn-sm btn-danger" type="submit" value="add new thing">-->
<!--            </p>-->
        </form>
    </div>

<?php include_once "_partials/footer.php" ?>