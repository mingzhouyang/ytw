<?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_78029600_1373967511');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_78029600_1373967511']):
?>
<li>
<a href="<?php echo $this->_var['goods_0_78029600_1373967511']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_78029600_1373967511']['name']); ?>" target="_blank">
<img src="<?php echo $this->_var['goods_0_78029600_1373967511']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_78029600_1373967511']['name']); ?>" />
</a>
<a class="name" href="<?php echo $this->_var['goods_0_78029600_1373967511']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_78029600_1373967511']['name']); ?>" target="_blank">
<?php echo htmlspecialchars($this->_var['goods_0_78029600_1373967511']['name']); ?>
</a>
<p>
<strong><?php if ($this->_var['goods_0_78029600_1373967511']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_78029600_1373967511']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_78029600_1373967511']['shop_price']; ?><?php endif; ?></strong>
<del><?php echo $this->_var['goods_0_78029600_1373967511']['market_price']; ?></del>
</p>
</li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
