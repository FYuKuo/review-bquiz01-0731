<?php
$do = $_GET['do'];
include('../api/base.php');
?>

<h3 class="cent"><?=$STR->updateHeader?></h3>
<hr>
<form action="../api/addChild.php" method="post">
    <table class="cent m-auto">
        <tr>
            <td><?=$STR->updateText[0]?></td>
            <td><?=$STR->updateText[1]?></td>
            <td><?=$STR->updateText[2]?></td>
        </tr>
        <?php
        $DB = new DB($do);
        $rows = $DB->all(['parent'=>$_GET['id']]);
        foreach ($rows as $key => $row) {
        ?>
        <tr>
            <td>
                <input type="text" name="text[]" value="<?=$row['text']?>" class="w-90">
            </td>
            <td>
                <input type="text" name="href[]" value="<?=$row['href']?>" class="w-90">
            </td>
            <td>
                <input type="checkbox" name="del[]" value="<?=$row['id']?>">
            </td>
            <input type="hidden" name="id[]" value="<?=$row['id']?>">
        </tr>
        <?php
        }
        ?>
        <tr class="lastTR">
            <td colspan="2">
                <input type="hidden" name="parentId" value="<?=$_GET['id']?>">
                <input type="hidden" name="table" value="<?=$do?>">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
                <input type="button" value="更多次選單" id="addBtn">
            </td>
        </tr>
    </table>
</form>

<script>
    $("#addBtn").click(function(){
        $('.lastTR').before(`<tr>
            <td>
                <input type="text" name="textAdd[]" class="w-90">
            </td>
            <td>
                <input type="text" name="hrefAdd[]" class="w-90">
            </td>
        </tr>`)
    })
</script>