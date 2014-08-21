<?php $this->assign('categories', get_categories_tree());?>
<div class="classtit"><b>分类筛选</b></div>
 <div class="box">
 <div class="box_1">
  <div id="category_tree"> 
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_96961700_1374022060');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_96961700_1374022060']):
?>
     <dl>
     <dt><div <?php if ($this->_var['category'] == $this->_var['cat_0_96961700_1374022060']['id']): ?>class="chov"<?php else: ?>class="clink"<?php endif; ?>><a href="<?php echo $this->_var['cat_0_96961700_1374022060']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_96961700_1374022060']['name']); ?></a></div></dt>
     <?php if ($this->_var['topcat_id'] == $this->_var['cat_0_96961700_1374022060']['id']): ?> 
     <?php $_from = $this->_var['cat_0_96961700_1374022060']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_96995700_1374022060');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_96995700_1374022060']):
?>
     <dd><div <?php if ($this->_var['category'] == $this->_var['child_0_96995700_1374022060']['id']): ?>class="d2hov"<?php else: ?>class="d2link"<?php endif; ?>><a href="<?php echo $this->_var['child_0_96995700_1374022060']['url']; ?>"><?php echo htmlspecialchars($this->_var['child_0_96995700_1374022060']['name']); ?></a></div></dd>
       <?php $_from = $this->_var['child_0_96995700_1374022060']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_97018900_1374022060');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_97018900_1374022060']):
?>
       <dd><div <?php if ($this->_var['category'] == $this->_var['childer_0_97018900_1374022060']['id']): ?>class="d3hov"<?php else: ?>class="d3link"<?php endif; ?>><a href="<?php echo $this->_var['childer_0_97018900_1374022060']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer_0_97018900_1374022060']['name']); ?></a></div></dd>   
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <?php endif; ?> 
       </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
 </div>
</div>
<div class="blank5"></div>
