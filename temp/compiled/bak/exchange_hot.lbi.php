<?php if ($this->_var['hot_goods']): ?>
<div class="box">
  <div class="box_1">
    <h3><span>积分商品推荐</span></h3>
      <div class="centerPadd">
     <div class="clearfix goodsBox" style="border:none;">
    <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <div class="goodsItemo">
        <div class="goodsimglist"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a></div>
        <div class="name"><p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p></div>
        <?php echo $this->_var['lang']['exchange_integral']; ?><font class="f1"><?php echo $this->_var['goods']['exchange_integral']; ?></font>
      </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
  </div>
  </div>
</div>
<div class="blank5"></div>
<?php endif; ?>
