<div class="block clearfix">
<div class="footer">
<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['curn']['iteration']++;
?>
<dl>
<dt><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
         <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
           <dd><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></dd>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>

<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div class="block">
  <div class="links clearfix">
    友情链接：<?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
</div>
<div class="blank"></div>
<?php endif; ?>

<ul class="footer_service">
<li><a target="_blank" href="#"><em>正</em><span>正品保障</span></a></li>
<li><a target="_blank" href="#"><em>保</em><span>七天包退</span></a></li>
<li class="last"><a target="_blank" href="#"><em>信</em><span>假一赔三</span></a></li>
</ul>
<div class="footer_busi_info">
<div>
<p> <?php if ($this->_var['navigator_list']['bottom']): ?>
               <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_94257900_1408588148');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_94257900_1408588148']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
                   <a href="<?php echo $this->_var['nav_0_94257900_1408588148']['url']; ?>" <?php if ($this->_var['nav_0_94257900_1408588148']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_94257900_1408588148']['name']; ?></a>
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
 <?php endif; ?> <?php if ($this->_var['icp_number']): ?>
		        <a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
                <?php endif; ?> <?php if ($this->_var['stats_code']): ?><?php echo $this->_var['stats_code']; ?><?php endif; ?></p> </div>
<a href="#" target="_blank"><img src="themes/1hdshop/images/unionpay.gif"></a>
<a href="#" target="_blank"><img src="themes/1hdshop/images/footer_pic_05.gif"></a>
</div>
<div class="blank"></div>
<script type=text/javascript>
var obj11 = document.getElementById("winner");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
window.onscroll = function(){
	var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	if (bodyScrollTop > top11){
		obj11.style.position = (isIE6) ? "absolute" : "fixed";
		obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
	} else {
		obj11.style.position = "static";
	}
}
function getTop(e){
	var offset = e.offsetTop;
	if(e.offsetParent != null) offset += getTop(e.offsetParent);
	return offset;
}
</script>
<a href="#" title="回到顶部" id="scrollTop"></a>