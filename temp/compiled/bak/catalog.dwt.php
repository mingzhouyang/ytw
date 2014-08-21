<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $this->_var['page_title']; ?></title>

<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/1hdshop/flow.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank"></div>
<div class="block">
 <div> 
<div class="sortwidth">
    <ul class="tab-link tab">
        <li class="curr"><A href="#">所有商品分类</A> </li>
        <li><A href="brand.php">所有商品品牌</A> </li>
        <li><A href="message.php">所有商品问答</A> </li>
    </ul>`
</div>

<div class="tab-sort sortwidth">
    <div class="sorttab">
        <ul class="tab">
		   <?php $_from = $this->_var['cata_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
            <li class="l1"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</div>

<div class="allsortcate sortwidth" >
  <div class="f_l">
   <?php $_from = $this->_var['cata_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['catnum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catnum']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['catnum']['iteration']++;
?>
 <?php if ($this->_foreach['catnum']['iteration'] < 8): ?>
<div class="alonesort" onMouseOver="this.className='alonesortbg_select alonesort'" onMouseOut="this.className='alonesort'">
	<div class="mt">
		<h2>
			<a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
		</h2>
	</div>
	<div class="mc">
	 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['catgh'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catgh']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['catgh']['iteration']++;
?>
	<dl class="fore">
		<dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
		<dd>
		 <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['curn']['iteration']++;
?>
        <em><span><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?>(<?php echo $this->_var['childer']['num']; ?>)</a><?php if (! ($this->_foreach['curn']['iteration'] == $this->_foreach['curn']['total'])): ?> |<?php endif; ?></span></em> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</dd>
	</dl>
	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>
<?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
  
    <div class="f_r">
   <?php $_from = $this->_var['cata_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['catnum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catnum']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['catnum']['iteration']++;
?>
 <?php if ($this->_foreach['catnum']['iteration'] > 7): ?>
<div class="alonesort" onMouseOver="this.className='alonesortbg_select alonesort'" onMouseOut="this.className='alonesort'">
	<div class="mt">
		<h2>
			<a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
		</h2>
	</div>
	<div class="mc">
	 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['catgh'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catgh']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['catgh']['iteration']++;
?>
	<dl class="fore">
		<dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
		<dd>
		 <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['curn']['iteration']++;
?>
        <em><span><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?>(<?php echo $this->_var['childer']['num']; ?>)</a><?php if (! ($this->_foreach['curn']['iteration'] == $this->_foreach['curn']['total'])): ?> |<?php endif; ?></span></em> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</dd>
	</dl>
	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>
<?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>

   <span class="clr"></span>
</div>		
</div>
</div>
<div class="blank5"></div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
