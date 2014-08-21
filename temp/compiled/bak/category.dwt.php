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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<script type="text/javascript" src="themes/1hdshop/js/site.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank5"></div>

<div class="block">
 <div class="f_l">
 <div id="ur_herec">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
 </div>
 <div class="f_r categorynum">
  搜索结果(<font class="num"><?php echo $this->_var['pager']['record_count']; ?></font>)</div> 
</div>

<div class="blank5"></div>
<div class="block clearfix">
  
<div class="AreaL">
<?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
<?php if ($this->_var['topcat_id'] == $this->_var['cat']['id']): ?> 
<div class="classtit"><b><?php echo htmlspecialchars($this->_var['cat']['name']); ?></b></div>
 <div class="box">
 <div class="box_1">
  <div id="category_tree"> 
     <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
     <dl>
     <dt><div <?php if ($this->_var['category'] == $this->_var['child']['id']): ?>class="chov"<?php else: ?>class="clink"<?php endif; ?>><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></div></dt>
     <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['curn']['iteration']++;
?>
     <dd><div <?php if ($this->_var['category'] == $this->_var['childer']['id']): ?>class="d2hov"<?php else: ?>class="d2link"<?php endif; ?>><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></div></dd>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
 </div>
</div>
<div class="blank5"></div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php echo $this->fetch('library/top10.lbi'); ?>
 <?php echo $this->fetch('library/history.lbi'); ?>
    
  </div>
  
  
  <div class="AreaR">
   <?php if ($this->_var['best_goods']): ?>
     <div class="cbest">
       <div class="bestimg"></div>
       <div class="tit">热卖推荐</div>
       <div class="bestpro">
       <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
         <div class="bgoodsitem">
            <div class="thumb"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
            <div class="ttext">
               <div class="tname"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></div>
               <div class="tprice">今日特价:<font class="f1"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></font></div>
               <p><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="themes/1hdshop/images/buy.gif" alt="立即抢购"></a></p>
            </div>
         </div>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
     </div>
     <div class="blank5"></div>
     <?php endif; ?>
 
	 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
	  <div class="box">
		 <div class="box_3">
			<?php if ($this->_var['brands']['1']): ?>
			<div class="screeBox">
              <div class="screeBoxs">
			  <?php echo $this->_var['lang']['brand']; ?>：
				<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
					<span><?php echo $this->_var['brand']['brand_name']; ?></span>
					<?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>&nbsp;
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
               </div>
			</div>
			<?php endif; ?>
			<?php if ($this->_var['price_grade']['1']): ?>
			<div class="screeBox">
            <div class="screeBoxs">
			<?php echo $this->_var['lang']['price']; ?>：
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<span><?php echo $this->_var['grade']['price_range']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             </div>
			</div>
			<?php endif; ?>
			<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_46334800_1373975890');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_46334800_1373975890']):
?>
      <div class="screeBox">
           <div class="screeBoxs">
			<?php echo htmlspecialchars($this->_var['filter_attr_0_46334800_1373975890']['filter_attr_name']); ?>：
			<?php $_from = $this->_var['filter_attr_0_46334800_1373975890']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<span><?php echo $this->_var['attr']['attr_value']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
            </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         <div class="screeBox clearfix">
           <div class="screeBoxs">
            <div class="f_l">
			价格： <span>全部</span> </div> <div class="f_l pl10"><form action="" method="post" id="s_fm" onsubmit="return sbm();"><input class="inputt" name="price_start" id="minprice" maxlength="8" type="text">
	&nbsp;<label>至</label>&nbsp;<input class="inputt" name="price_end" id="maxprice" maxlength="8" type="text">
    <input value="确定" class="submitbtn" type="submit">
</form></div>
<script type="text/javascript">
         function sbm(){
         var $minprice;
         var $maxprice;
         $minprice=document.getElementById("minprice").value;
         $maxprice=document.getElementById("maxprice").value;
         document.getElementById("s_fm").action="category.php?id="+<?php echo $this->_var['category']; ?>+"&price_min="+$minprice+"&price_max="+$maxprice;
         }
        </script>
			</div>
            </div>
      
		 </div>
		</div>
		<div class="blank5"></div>
	  <?php endif; ?>
	 
  
  <?php echo $this->fetch('library/goods_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>
  <div class="blank"></div>
 <div class="searchColMainItem searchBottom">
		<div class="searchBox clearfix">
		<label>重新搜索：</label>
		<form id=searchForm name=searchForm action="search.php" method=get>
		<input name="keywords" id="keyword" value="" maxlength="50" style="color:#333333;" type="text"><button type=submit>搜索</button>
		</form>
		</div>
 </div>
  
</div>
</div>
<div class="blank5"></div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
