<?php if ($this->_var['new_goods']): ?>
 <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_65235800_1408588138');$this->_foreach['goodsnum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goodsnum']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_65235800_1408588138']):
        $this->_foreach['goodsnum']['iteration']++;
?>		
<li>
<a href="<?php echo $this->_var['goods_0_65235800_1408588138']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_65235800_1408588138']['name']); ?>" target="_blank">
<img src="<?php echo $this->_var['goods_0_65235800_1408588138']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_65235800_1408588138']['name']); ?>" />
</a>
<a class="name" href="<?php echo $this->_var['goods_0_65235800_1408588138']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_65235800_1408588138']['name']); ?>" target="_blank">
<?php echo htmlspecialchars($this->_var['goods_0_65235800_1408588138']['name']); ?>
</a>
<p>
<strong><?php if ($this->_var['goods_0_65235800_1408588138']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_65235800_1408588138']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_65235800_1408588138']['shop_price']; ?><?php endif; ?></strong>
<del><?php echo $this->_var['goods_0_65235800_1408588138']['market_price']; ?></del>
</p>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>          
<?php endif; ?>
