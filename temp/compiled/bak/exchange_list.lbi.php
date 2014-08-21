<div class="box">
  <div class="box_1">
    <h3>
      <span><?php echo $this->_var['lang']['goods_list']; ?></span>
      <form method="GET" class="sort" name="listform">
        <?php echo $this->_var['lang']['btn_display']; ?>：
        <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/1hdshop/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
        <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/1hdshop/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
        <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/1hdshop/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>&nbsp;&nbsp;
        <select name="sort" style="border:1px solid #ccc;">
        <?php echo $this->html_options(array('options'=>$this->_var['lang']['exchange_sort'],'selected'=>$this->_var['pager']['sort'])); ?>
        </select>
        <select name="order" style="border:1px solid #ccc;">
        <?php echo $this->html_options(array('options'=>$this->_var['lang']['order'],'selected'=>$this->_var['pager']['order'])); ?>
        </select>
        <input type="image" name="imageField" src="themes/1hdshop/images/bnt_go.gif" alt="go"/>
        <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
        <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
        <input type="hidden" name="integral_min" value="<?php echo $this->_var['integral_min']; ?>" />
        <input type="hidden" name="integral_max" value="<?php echo $this->_var['integral_max']; ?>" />
        <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      </form>
    </h3>

    <form name="compareForm" method="post">
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
      <div class="goodsList">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_48282600_1374022068');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_48282600_1374022068']):
        $this->_foreach['goods_list']['iteration']++;
?>
        <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
          <li class="thumb"><a href="<?php echo $this->_var['goods_0_48282600_1374022068']['url']; ?>"><img src="<?php echo $this->_var['goods_0_48282600_1374022068']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_48282600_1374022068']['goods_name']; ?>" /></a></li>
          <li class="goodsName">
            <a href="<?php echo $this->_var['goods_0_48282600_1374022068']['url']; ?>">
            <?php if ($this->_var['goods_0_48282600_1374022068']['goods_style_name']): ?>
              <?php echo $this->_var['goods_0_48282600_1374022068']['goods_style_name']; ?><br />
            <?php else: ?>
              <?php echo $this->_var['goods_0_48282600_1374022068']['goods_name']; ?><br />
            <?php endif; ?>
            </a>
            <?php if ($this->_var['goods_0_48282600_1374022068']['goods_brief']): ?>
              <span><?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_48282600_1374022068']['goods_brief']; ?></span><br />
            <?php endif; ?>
          </li>
          <li>
            <?php echo $this->_var['lang']['exchange_integral']; ?><font class="shop_s"><?php echo $this->_var['goods_0_48282600_1374022068']['exchange_integral']; ?></font>
          </li>
        </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>

    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
      <div class="centerPadd">
        <div class="clearfix goodsBox" style="border:none;">
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_48349700_1374022068');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_48349700_1374022068']):
?>
          <?php if ($this->_var['goods_0_48349700_1374022068']['goods_id']): ?>
            <div class="goodsItemo">
              <div class="hoverlist"><a href="<?php echo $this->_var['goods_0_48349700_1374022068']['url']; ?>"><img src="<?php echo $this->_var['goods_0_48349700_1374022068']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_48349700_1374022068']['goods_name']; ?>" class="goodsimg" /></a></div>
              <div class="name"><p><a href="<?php echo $this->_var['goods_0_48349700_1374022068']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_48349700_1374022068']['name']); ?>"><?php echo $this->_var['goods_0_48349700_1374022068']['goods_name']; ?></a></p></div>
              <?php echo $this->_var['lang']['exchange_integral']; ?><font class="shop_s"><?php echo $this->_var['goods_0_48349700_1374022068']['exchange_integral']; ?></font><br />
            </div>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
      </div>

    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
      <div class="goodsList">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_48390700_1374022068');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_48390700_1374022068']):
?>
        <ul class="clearfix bgcolor" <?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
          <li class="goodsName">
            <a href="<?php echo $this->_var['goods_0_48390700_1374022068']['url']; ?>" class="f6 f5">
            <?php if ($this->_var['goods_0_48390700_1374022068']['goods_style_name']): ?>
              <?php echo $this->_var['goods_0_48390700_1374022068']['goods_style_name']; ?><br />
            <?php else: ?>
              <?php echo $this->_var['goods_0_48390700_1374022068']['goods_name']; ?><br />
            <?php endif; ?>
            </a>
            <?php if ($this->_var['goods_0_48390700_1374022068']['goods_brief']): ?>
            <span><?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_48390700_1374022068']['goods_brief']; ?></span><br />
            <?php endif; ?>
          </li>
          <li>
            <?php echo $this->_var['lang']['exchange_integral']; ?><font class="shop_s"><?php echo $this->_var['goods_0_48390700_1374022068']['exchange_integral']; ?></font>
          </li>
        </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    <?php endif; ?>
    </form>

  </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
  window.onload = function()
  {
    Compare.init();
    fixpng();
  }
  var button_compare = '';
</script>