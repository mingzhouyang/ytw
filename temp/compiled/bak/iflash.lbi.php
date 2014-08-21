<div class="tsSlide" id="content_tsSlide">
<ul style="left: 0px;" class="tsSlideList" id="tsSlideList">
<?php $this->assign('playerdb', get_flash_xml());?>
<?php $_from = $this->_var['playerdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_65303200_1373967511');$this->_foreach['fnum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fnum']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_65303200_1373967511']):
        $this->_foreach['fnum']['iteration']++;
?>
<li>
<a href="<?php echo $this->_var['item_0_65303200_1373967511']['url']; ?>" title="<?php echo $this->_var['item_0_65303200_1373967511']['text']; ?>" target="_blank"><img src="<?php echo $this->_var['item_0_65303200_1373967511']['src']; ?>" alt="<?php echo $this->_var['item_0_65303200_1373967511']['text']; ?>"></a>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<ul class="tsSlideSwitch">
<?php $_from = $this->_var['playerdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_65325700_1373967511');$this->_foreach['fnum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fnum']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_65325700_1373967511']):
        $this->_foreach['fnum']['iteration']++;
?>
<li<?php if ($this->_foreach['fnum']['iteration'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_foreach['fnum']['iteration']; ?></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<div class="tsSlideMask"></div>
 </div>