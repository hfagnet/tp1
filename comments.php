<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
require_once 'models/database.php';
$db = initDatabse();
$recipesStatement = $db->prepare('SELECT * FROM lpweb_mvc.comments WHERE post_id ='.$_GET['id']);
$recipesStatement->execute();
$data = $recipesStatement->fetchAll();

?>

<table class="table table-bordered table-stripped">
    <thead>
        <th><?php  ?></th>
    </thead>
    <tbody>
        <?php foreach ($data as $d):?>
        <tr>
            <td><?php echo $d['id'] ?></td>
            <td><?php echo $d['description'] ?></td>
            <td><?php echo $d['post_id'] ?></td>
            <td><?php echo $d['created_at'] ?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>