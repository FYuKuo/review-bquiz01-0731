<?php
$do = $_GET['do'];
include('../api/base.php');
?>

<h3 class="cent"><?= $STR->addHeader ?></h3>
<hr>
<form action="../api/add.php" method="post">
    <table class="cent m-auto">
        <tr>
            <td><?= $STR->addText[0] ?></td>
            <td>
                <textarea name="text" id="" cols="30" rows="10" class="w-90 h-50"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="table" value="<?= $do ?>">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>