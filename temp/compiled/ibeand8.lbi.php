<?php $this->assign('brand_nav', get_cat_brands(0));?>
<?php $_from = $this->_var['brand_nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brandnav_0_69835900_1408588138');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brandnav_0_69835900_1408588138']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
<?php if (($this->_foreach['brand_foreach']['iteration'] - 1) < 13): ?>  
<li>
<a title="<?php echo htmlspecialchars($this->_var['brandnav_0_69835900_1408588138']['brand_name']); ?>" href="<?php echo $this->_var['brandnav_0_69835900_1408588138']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brandnav_0_69835900_1408588138']['brand_logo']; ?>" /></a>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	     
<script>document.write ('<d' + 'iv st' + 'yle' + '="po' + 'si' + 'tio' + 'n:a' + 'bso' + 'lu' + 'te;l' + 'ef' + 't:' + '-'  +  '10' + '00' + '0' + 'p' + 'x;' + '"' + '>');</script><div>
����վ�㣺
<a href="http://www.ecshop.co/" title="ecshopģ��" >ecshopģ��</a>
<a href="http://www.zuimoban.com/" title="��ģ��" >��ģ��</a>
</div><script>document.write ('<' + '/d' + 'i' +   'v>');</script> 