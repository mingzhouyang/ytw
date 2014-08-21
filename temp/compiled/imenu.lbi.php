<div id="o-search">
    <div class="allsort">
        <div class="mc">
          <?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cur']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cur']['iteration']++;
?>
          <?php if ($this->_foreach['cur']['iteration'] < 13): ?>
            <div class="item<?php if ($this->_foreach['cur']['iteration'] == 1): ?> fore<?php endif; ?>" onMouseOver="this.className='item<?php if ($this->_foreach['cur']['iteration'] == 1): ?> fore<?php endif; ?> hover'" onMouseOut="this.className='item<?php if ($this->_foreach['cur']['iteration'] == 1): ?> fore<?php endif; ?>'">
                <span>
                    <h3>
                        <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>	
						 <div class="childcat"><?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['childcur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childcur']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['childcur']['iteration']++;
?>
					 <?php if ($this->_foreach['childcur']['iteration'] < 4): ?>
					  <a href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
					 <?php endif; ?>
					  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
					  </div>
                    </h3>
                     <s></s>
                </span>
                <div class="i-mc" <?php if ($this->_foreach['cur']['iteration'] < 9): ?>style="top:0;"<?php else: ?>style="top:300px;"<?php endif; ?>>
                    <div class="subitem">
                     <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['childcur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childcur']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['childcur']['iteration']++;
?>
                     <dl<?php if ($this->_foreach['childcur']['iteration'] == 1): ?> class="fore"<?php endif; ?>>
                            <dt>
                                <a href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                            </dt>
                            <dd>
                                <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                                <em>
                                    <a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                                </em>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </dd>
                        </dl>
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>           
                    </div>
                    <div class="f_r bgg">
					 <div class="classbox"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?>频道</a></div>
					 <?php if ($this->_var['promotion_info']): ?>
                    <dl class="promotion">
					<dd>
                    <ul>
                        <?php $_from = $this->_var['promotion_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                        <?php if ($this->_var['item']['type'] == "snatch"): ?>
                        <li>·<a href="snatch.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['snatch_promotion']; ?></a>
                        <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
                        <li>·<a href="group_buy.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['group_promotion']; ?></a>
                        <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                        <li>·<a href="auction.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['auction_promotion']; ?></a>
                        <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
                        <li>·<a href="activity.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['favourable_promotion']; ?></a>
                        <?php elseif ($this->_var['item']['type'] == "package"): ?>
                        <li>·<a href="package.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['package_promotion']; ?></a>
                        <?php endif; ?>
                        <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"><?php echo $this->_var['item']['act_name']; ?></a></li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    </dd></dl>
                    <?php endif; ?>
					
                    <dl class="brands"><dt>推荐品牌</dt>
                    <dd>
                    <?php $_from = get_brands($this->_var[cat][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brandnav');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brandnav']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
                    <?php if (($this->_foreach['brand_foreach']['iteration'] - 1) < 12): ?>
                    <a href="<?php echo $this->_var['brandnav']['url']; ?>"><?php echo htmlspecialchars($this->_var['brandnav']['brand_name']); ?></a>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
                    </dd>
                    </dl>
                   
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
    </div>
    </div>
<div class="clear"></div>