<h2 class="ct">新增商品</h2>
<form action="./api/save_goods.php">
    <table class="all">
        <tr>
            <td class="tt ct">所屬大分類</td>
            <td class="pp"></td>
        </tr>
        <tr>
            <td class="tt ct">所屬中分類</td>
            <td class="pp"></td>
        </tr>
        <tr>
            <td class="tt ct">商品編號</td>
            <td class="pp"><input type="text"></td>
        </tr>
        <tr>
            <td class="tt ct">商品名稱</td>
            <td class="pp"><input type="text"></td>
        </tr>
        <tr>
            <td class="tt ct">商品價格</td>
            <td class="pp"><input type="text"></td>
        </tr>
        <tr>
            <td class="tt ct">規格</td>
            <td class="pp"><input type="text"></td>
        </tr>
        <tr>
            <td class="tt ct">庫存量</td>
            <td class="pp"><input type="text"></td>
        </tr>
        <tr>
            <td class="tt ct">商品圖片</td>
            <td class="pp"><input type="file"></td>
        </tr>
        <tr>
            <td class="tt ct">商品介紹</td>
            <td class="pp"><textarea name="intro" id="intro"></textarea></td>
        </tr>
    </table>
    <div class="ct">
    <input type="submit" value="新增">|<input type="reset" value="重置">|<input type="button" value="返回">
    </div>
</form>

<script>
getBigs()
$("#big").on('change',()=>{
    let big=$("#big").val();
        getMids(big);
})
function getBigs(){
    $.get("./api/get_types.php",{type:'big',parent:0},(list)=>{
        $("#big").html(list)
        let big=$("#big").val();
        getMids(big);
    })
}
function getMids(big){
    $.get("./api/get_types.php",{type:'mid',parent:big},(list)=>{
        $("#mid").html(list)
    })
}
</script>