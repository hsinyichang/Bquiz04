<?php
$id=$_GET['id'];
$row=$Mem->find($id);
?>
<h2 class="ct">編輯會員資料</h2>
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><?=$row['acc']?></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><?=str_repeat('*',strlen($row['pw']));?></td>
    </tr>
    <tr>
        <td class="tt ct">累積交易額</td>
        <td class="pp"></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name" value="<?=$row['name']?>"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email" value="<?=$row['email']?>"></td>
    </tr>
    <tr>
        <td class="tt ct">住址</td>
        <td class="pp"><input type="text" name="addr" id="addr" value="<?=$row['addr']?>"></td>
    </tr>
    <tr>
        <td class="tt ct">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel" value="<?=$row['tel']?>"></td>
    </tr>
</table>
<div class="ct">
    <button onclick="edit('mem')">編輯</button>
    <button onclick="loction.reload()">重置</button> <!--將畫面重整 資料就又是原本的，這裡不是清空-->
    <button onclick="location.href='?do=mem'">取消</button>
</div>

<script>
    function edit(table,id){
        let form=$('table input').serializeArray()
        $.post("./api/edit.php",{table,form,id},(res)=>{
        location.href=`?do=${table}`;
        //location.href='?do=mem';
    })
    }
</script>