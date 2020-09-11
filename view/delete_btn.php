<div class="btn-group">
  <form action=<?=$site?> method="post" onsubmit="if(!confirm('삭제하시겠습니까?')){return false;}"> 
    <input type="hidden" name="no" value=<?=$_GET['no']?>>
    <input type="submit" class="btn btn-primary" value="삭제">
  </form>
</div>