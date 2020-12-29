<!DOCTYPE html>
<html>
<?php echo $this->fetch('head.html'); ?>

<body>
<div class="tabs-border">
	<a class="item active" href="/admin.php?m=dataapi">单页管理</a>
	<a class="item" href="/admin.php?m=dataapi&a=add">单页添加</a>
</div> 
<div class="main-body">
    <form method='post' action='admin.php?m=dataapi&a=save'>
      <input type='hidden' name='id' style='display:none;' value='<?php echo $this->_var['data']['id']; ?>' >
      <table class='table table-bordered' width='100%'>
        <tr>
          <td width="100">标题：</td>
          <td><input type='text' name='title' id='title' value='<?php echo $this->_var['data']['title']; ?>' ></td>
        </tr>
        <tr>
          <td>唯一代号：</td>
          <td><input type='text' name='word' id='word' value='<?php echo $this->_var['data']['word']; ?>' ></td>
        </tr>
        <tr>
          <td>数据类型：</td>
          <td>
          <select name="type_id">
          <?php $_from = $this->_var['type_list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('k', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['c']):
?>
          <option value="<?php echo $this->_var['k']; ?>" <?php if ($this->_var['data']['type_id'] == $this->_var['k']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['c']; ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </select>
           </td>
        </tr>
        <tr>
          <td>调用方法：</td>
          <td><input type='text' name='equation' id='equation' value='<?php echo $this->_var['data']['equation']; ?>' >(*可以留空)</td>
        </tr>
        <tr>
          <td>简介：</td>
          <td> <script type="text/plain" id="info" name="info" ><?php echo $this->_var['data']['info']; ?></script></td>
        </tr>
        <?php if ($this->_var['data']): ?>
        <tr>
          <td>添加时间：</td>
          <td><?php echo date("Y-m-d H:m",$this->_var['data']['dateline']); ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td>内容：</td>
          <td> <script type="text/plain" id="content" name="content" ><?php echo $this->_var['data']['content']; ?></script></td>
        </tr>
        <tr>
          <td>状态：</td>
          <td><input type="radio" name="status" value="1" <?php if ($this->_var['data']['status'] == 1): ?> checked="checked"<?php endif; ?> />隐藏 &nbsp; 
          <input type="radio" name="status" value="2" <?php if ($this->_var['data']['status'] == 2): ?> checked="checked"<?php endif; ?> />显示</td>
        </tr>
        <tr>
          <td></td>
          <td><input type='submit' value='保存' class='btn btn-success'></td>
        </tr>
      </table>
    </form>
  </div>
 
<?php echo $this->fetch('footer.html'); ?>
<?php loadEditor();;?>
<script>
	var editor=UE.getEditor('content',options);
</script>
</body>
</html>