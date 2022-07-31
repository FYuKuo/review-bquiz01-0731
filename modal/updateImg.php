<?php
$do = $_GET['do'];
include('../api/base.php');
?>

<h3 class="cent"><?=$STR->updateHeader?></h3>
<hr>
<form action="../api/updateImg.php" method="post" enctype="multipart/form-data">
    <table class="cent m-auto">
        <tr>
            <td><?=$STR->updateText[0]?></td>
            <td>
                <input type="file" name="img" class="w-90">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="hidden" name="table" value="<?=$do?>">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>