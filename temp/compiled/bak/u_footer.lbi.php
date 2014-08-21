<div class="blank"></div>
<ul class="footer_service">
<li><a target="_blank" href="#"><em>正</em><span>正品保障</span></a></li>
<li><a target="_blank" href="#"><em>保</em><span>七天包退</span></a></li>
<li class="last"><a target="_blank" href="#"><em>信</em><span>假一赔三</span></a></li>
</ul>
<div class="footer_busi_info">
<div>
<p> <?php if ($this->_var['navigator_list']['bottom']): ?>
               <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
                   <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                    <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
                       |
                    <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?></p><p><?php echo $this->_var['copyright']; ?>
 <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?>
 <?php if ($this->_var['service_phone']): ?>
      Tel: <?php echo $this->_var['service_phone']; ?>
 <?php endif; ?>
 <?php if ($this->_var['service_email']): ?>
      E-mail: <?php echo $this->_var['service_email']; ?>
 <?php endif; ?><?php if ($this->_var['icp_number']): ?>
		        <a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
                <?php endif; ?> <?php if ($this->_var['stats_code']): ?><?php echo $this->_var['stats_code']; ?><?php endif; ?></p> </div>
<a href="#" target="_blank"><img src="themes/1hdshop/images/unionpay.gif"></a>
<a href="#" target="_blank"><img src="themes/1hdshop/images/footer_pic_05.gif"></a>
</div>
<div class="blank"></div>
<a href="javascript:void(0);" title="回到顶部" id="scrollTop"></a>