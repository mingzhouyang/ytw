<?php if ($this->_var['hot_goods']): ?>
<div class="box_1 clearfix">
    <div class="category_all"><div class="tit">一周销售排行</div></div>
    <div class="newpro"> 
          <div class="cat_top10">
		   <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>	
			<ul class="ul_list clearfix" id=top1s<?php echo $this->_foreach['top_goods']['iteration']; ?> onmouseover="show_goodspic(<?php echo $this->_foreach['top_goods']['iteration']; ?>,'top1')">
				<div class="name clearfix"<?php if (($this->_foreach['top_goods']['iteration'] - 1) == 10): ?> style="border-bottom:0px;"<?php endif; ?>>
				<div class="no"><?php echo $this->_foreach['top_goods']['iteration']; ?></div>
                <div class="proname"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a></div>
				<div class="jp"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
            <font class="shopjp"><?php echo $this->_var['goods']['promote_price']; ?></font>
            <?php else: ?>
           <font class="shopjp"><?php echo $this->_var['goods']['shop_price']; ?></font>
            <?php endif; ?></div>
				</div>
			</ul>
			<ul class="clearfix ul_box" id=top1b<?php echo $this->_foreach['top_goods']['iteration']; ?> style="DISPLAY: none;">
				<li class="no"><?php echo $this->_foreach['top_goods']['iteration']; ?></li>
				<li class="goodsimg"><p class="namel"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a></p></li>
				<li class="pleft"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="thumb" /></a></li>
				 <li class="pleft"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
            <?php echo $this->_var['lang']['promote_price']; ?><font class="shopjp"><?php echo $this->_var['goods']['promote_price']; ?></font>
            <?php else: ?>
            <?php echo $this->_var['lang']['shop_price']; ?><font class="shopjp"><?php echo $this->_var['goods']['shop_price']; ?></font>
            <?php endif; ?></li>
			</ul>
		   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
           <SCRIPT type=text/javascript>show_goodspic(1,'top1');</SCRIPT>
  </div>
  </div>
</div>
<div class="blank5"></div>
<?php endif; ?>
