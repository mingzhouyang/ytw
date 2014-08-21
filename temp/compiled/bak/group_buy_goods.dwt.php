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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank"></div>
<div class="block">
<div class="tuan_detail_sider">  
<p><img src="themes/1hdshop/images/group/lad1.jpg" /></p>
<div class="blank"></div>
	<div class="tuan_detail_side" style="float:right;">
	<h2>热门团购</h2>
	<ul>
	<?php $_from = $this->_var['gb_list_hot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy_0_41902100_1373990908');$this->_foreach['hotcun'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hotcun']['total'] > 0):
    foreach ($_from AS $this->_var['group_buy_0_41902100_1373990908']):
        $this->_foreach['hotcun']['iteration']++;
?>
	<?php if ($this->_foreach['hotcun']['iteration'] < 6): ?>
	<li>
	<p><a href="<?php echo $this->_var['group_buy_0_41902100_1373990908']['url']; ?>" class="hotbuy"><img width="180" height="120" src="<?php echo $this->_var['group_buy_0_41902100_1373990908']['group_img']; ?>" /></a></p>
	<p class="name"><a href="<?php echo $this->_var['group_buy_0_41902100_1373990908']['url']; ?>"><?php if ($this->_var['group_buy_0_41902100_1373990908']['group_title']): ?><?php echo $this->_var['group_buy_0_41902100_1373990908']['group_title']; ?><?php else: ?><?php echo $this->_var['group_buy_0_41902100_1373990908']['act_name']; ?><?php endif; ?></a></p>
	<p><strong class="price"><?php $_from = $this->_var['group_buy_0_41902100_1373990908']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['foo']['iteration']++;
?><?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?><?php echo $this->_var['item']['price']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>元</strong></p>
	<p><strong><?php if ($this->_var['group_buy_0_41902100_1373990908']['isg_rs'] == 1): ?><?php echo $this->_var['group_buy_0_41902100_1373990908']['group_rs']; ?><?php else: ?><?php echo $this->_var['group_buy_0_41902100_1373990908']['cur_amount']; ?><?php endif; ?></strong>件已购买</p>
	<a href="<?php echo $this->_var['group_buy_0_41902100_1373990908']['url']; ?>" class="qkk"></a>
	</li>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
	</div>
</div>
<div class="tuan_detail_info">
 <div class="wgoods">
	<h2><?php if ($this->_var['group_buy']['group_title']): ?><?php echo $this->_var['group_buy']['group_title']; ?><?php else: ?><?php echo $this->_var['group_buy']['act_name']; ?><?php endif; ?></h2> 
	 <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
	<div class="tuan_detail_buy">
	<div class="tuan_detail_buy_l">
	<p class="price"><span>¥</span> <?php echo $this->_var['group_buy']['formated_cur_price']; ?></p>
	<ul>
	<li>原价<del id="marketPrice"><?php echo $this->_var['group_buy']['market_price']; ?></del></li>
	<li>折扣<span id="rebate"><?php echo $this->_var['group_buy']['t_discount']; ?>折</span></li>
	<li>节省<span id="economize"><?php echo $this->_var['group_buy']['formated_rebate_price']; ?></span></li>
	</ul>
	<div class="ptdiv">购买数量：<input name="number" type="text" class="timenum" id="number" value="1" size="4" /></div>
	<p>
	 <?php if ($this->_var['group_buy']['status'] == 0): ?>
      <button class="swks"></button>
      <?php elseif ($this->_var['group_buy']['status'] == 1): ?>
      <input type="hidden" name="group_buy_id" value="<?php echo $this->_var['group_buy']['group_buy_id']; ?>" />
	   <button type="submit" class="buy_now">立即抢购</button>
      <?php elseif ($this->_var['group_buy']['status'] == 2): ?>
      <button class="yjs"></button>
      <?php elseif ($this->_var['group_buy']['status'] == 3): ?>
      <button class="ysw"></button>
      <?php elseif ($this->_var['group_buy']['status'] == 4): ?>
      <button class="jjkq"></button>
      <?php endif; ?>
	  
	</p>
	<p><strong class="total_buy"><?php if ($this->_var['group_buy']['isg_rs'] == 1): ?><?php echo $this->_var['group_buy']['group_rs']; ?><?php else: ?><?php if ($this->_var['group_buy']['isg_rs'] == 1): ?><?php echo $this->_var['group_buy']['group_rs']; ?><?php else: ?><?php echo $this->_var['group_buy']['valid_goods']; ?><?php endif; ?><?php endif; ?></strong>人已购买</p>
	   <?php if ($this->_var['group_buy']['status'] == 0): ?>
      <?php echo $this->_var['lang']['gbs_pre_start']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 1): ?>
      <p id="leftTime" class="timecolor">
	   正在载入中...
	   </p>
      <?php elseif ($this->_var['group_buy']['status'] == 2): ?>
      <p><?php echo $this->_var['lang']['gbs_finished']; ?> <?php echo $this->_var['lang']['gb_cur_price']; ?> <?php echo $this->_var['group_buy']['formated_cur_price']; ?> <br /><?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php if ($this->_var['group_buy']['isg_rs'] == 1): ?><?php echo $this->_var['group_buy']['group_rs']; ?><?php else: ?><?php echo $this->_var['group_buy']['valid_goods']; ?><?php endif; ?></p>
      <?php elseif ($this->_var['group_buy']['status'] == 3): ?>
      <p><?php echo $this->_var['lang']['gbs_succeed']; ?>
      <?php echo $this->_var['lang']['gb_final_price']; ?> <?php echo $this->_var['group_buy']['formated_trans_price']; ?><br />
      <?php echo $this->_var['lang']['gb_final_amount']; ?> <?php echo $this->_var['group_buy']['trans_amount']; ?></p>
      <?php elseif ($this->_var['group_buy']['status'] == 4): ?>
      <p><?php echo $this->_var['lang']['gbs_fail']; ?></p>
      <?php endif; ?>
	
		<?php if ($this->_var['group_buy']['succeed_time'] > '0'): ?>
		<div class="ptdiv"><?php echo $this->_var['group_buy']['succeed_time_date']; ?>达到最低团购人数：<?php echo empty($this->_var['group_buy']['lower_orders']) ? '0' : $this->_var['group_buy']['lower_orders']; ?> 人</div>
		<?php endif; ?>
		<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
         <div class="ptdiv"><?php echo $this->_var['spec']['name']; ?>：<?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /><?php echo $this->_var['value']['label']; ?></label>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                              <?php else: ?>
                                <select name="spec_<?php echo $this->_var['spec_key']; ?>">
                                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> </option>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </select>
                              <?php endif; ?>
                           </div>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php if ($this->_var['group_buy']['deposit'] > 0): ?>
       <div class="ptdiv"><?php echo $this->_var['lang']['gb_deposit']; ?> <?php echo $this->_var['group_buy']['formated_deposit']; ?></div>
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['restrict_amount'] > 0): ?>
     <div class="ptdiv"><?php echo $this->_var['lang']['gb_restrict_amount']; ?> <?php echo $this->_var['group_buy']['restrict_amount']; ?></div>
      <?php endif; ?>
	</div>
	<p class="pbig">
	<img width="540" height="360" src="<?php echo $this->_var['group_buy']['group_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['group_buy']['act_name']); ?>" /><br />
   </p>
		<div class="tuan_detail_otherinfo">
		   <div class="share_to f_l">
	<div id="bdshare" class="bdshare_b" style="line-height: 12px;">
	<img src="http://bdimg.share.baidu.com/static/images/type-button-1.jpg?cdnversion=20120831" />
	</div>
	<script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=0" ></script>
	<script type="text/javascript" id="bdshell_js"></script>
	<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
	</script>
	</div>
			 <div class="buyname f_r"><?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?></div>
		</div>
	</div>
	</form> 
	 </div>
	<div class="blank"></div>
    <div class="aboutthis" style="margin-bottom:10px;overflow:hidden;">
	<h2 class="aboutthish2">关于本单</h2>
	<div class="abouttips">团购详情</div>
	<div class="seporator"></div>
		<p class="tipstxt">
		<?php echo $this->_var['group_buy']['group_buy_desc']; ?>
		</p>
	</div>
</div>
</div>
<div class="blank"></div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
