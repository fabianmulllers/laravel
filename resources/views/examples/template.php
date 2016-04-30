<?php
/**
 * Created by PhpStorm.
 * User: fabian
 * Date: 24-04-16
 * Time: 19:01
 */?>

<?php include(__DIR__ .'/header.php');?>
<h1> este es mi views</h1>

<?php if (isset($user)){ ?>
<p> hola mi nombre es <?php echo $user?></p>

<?php }else{?>
[login]

<?php }?>
<?php include(__DIR__ .'/footer.php');?>