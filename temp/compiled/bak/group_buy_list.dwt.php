<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/1hdshop/stylecommon.css" rel="stylesheet" type="text/css" />
<link href="themes/1hdshop/group.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank"></div>
<div class="block">
  <div class="tuan">
	<ul class="tuan_list clearfix">
	<?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'group_buy');$this->_foreach['groupname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupname']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['group_buy']):
        $this->_foreach['groupname']['iteration']++;
?>
	<li onmouseover="this.className='cur'" onmouseout="this.className=''">
	<div>
	<h3>
	<a target="_blank" href="<?php echo $this->_var['group_buy']['url']; ?>"><?php if ($this->_var['group_buy']['group_title']): ?><?php echo $this->_var['group_buy']['group_title']; ?><?php else: ?><?php echo $this->_var['group_buy']['act_name']; ?><?php endif; ?></a>
	</h3>
	<a target="_blank" href="<?php echo $this->_var['group_buy']['url']; ?>">
	<img src="<?php echo $this->_var['group_buy']['group_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['group_buy']['act_name']); ?>" height="200" width="300">
	</a>
	<p class="buy"><a target="_blank" href="<?php echo $this->_var['group_buy']['url']; ?>">立即抢购</a><s>¥</s><?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['foo']['iteration']++;
?><?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?><?php echo $this->_var['item']['price']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
	<p class="buy_info">
	<span class="first" id="marketPrice">原价：<b><?php echo $this->_var['group_buy']['market_price']; ?></b></span>
	<span id="discount">折扣：<b><?php echo $this->_var['group_buy']['t_discount']; ?></b>折</span>
	<span class="last" id="buyCount">购买<strong><?php if ($this->_var['group_buy']['isg_rs'] == 1): ?><?php echo $this->_var['group_buy']['group_rs']; ?><?php else: ?><?php echo $this->_var['group_buy']['cur_amount']; ?><?php endif; ?></strong>件</span>
	</p>
	</div>
	</li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>        
	</ul>
	</div>
	<div class="blank"></div>
	 <?php echo $this->fetch('library/pages.lbi'); ?>
</div>
<div class="blank"></div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
