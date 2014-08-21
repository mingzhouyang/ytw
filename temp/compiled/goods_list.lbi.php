<div class="rankOp clearfix mt">
<form method="GET" name="listform">
<ul class="rank clearfix">
  <li class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><span>上架时间</span></a> 
  </li>
  <li class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><span>价格</span></a> 
  </li>
  <li class="<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><span>更新时间</span></a> 
  </li>
  <li class="<?php if ($this->_var['pager']['sort'] == 'click_count'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=click_count&order=<?php if ($this->_var['pager']['sort'] == 'click_count' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><span>点击人气</span></a> 
  </li>
</ul>
  <ul class="page clearfix">
  <li><?php if ($this->_var['pager']['page_prev']): ?><a class="prev" href='<?php echo $this->_var['pager']['page_prev']; ?>'></a><?php else: ?><a class="prev prevNo" href="javascript:void(0);"></a><?php endif; ?>
  <?php if ($this->_var['pager']['page_next']): ?><a class="next" href='<?php echo $this->_var['pager']['page_next']; ?>'></a><?php else: ?><a class="next nextNo" href="javascript:void(0);"></a><?php endif; ?>
  </li>
  </ul>  
  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
</form>
</div>
<div class="blank"></div>
    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_72942100_1408588154');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_72942100_1408588154']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li>
    <br>
    <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods_0_72942100_1408588154']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods_0_72942100_1408588154']['goods_name']); ?>','<?php echo $this->_var['goods_0_72942100_1408588154']['type']; ?>')" class="f6">比较</a>
    </li>
    <li class="thumb"><a href="<?php echo $this->_var['goods_0_72942100_1408588154']['url']; ?>"><img src="<?php echo $this->_var['goods_0_72942100_1408588154']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_72942100_1408588154']['goods_name']; ?>" /></a></li>
    <li class="goodsName">
    <a href="<?php echo $this->_var['goods_0_72942100_1408588154']['url']; ?>">
        <?php if ($this->_var['goods_0_72942100_1408588154']['goods_style_name']): ?>
        <?php echo $this->_var['goods_0_72942100_1408588154']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods_0_72942100_1408588154']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods_0_72942100_1408588154']['goods_brief']): ?>
    <span><?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_72942100_1408588154']['goods_brief']; ?></span><br />
    <?php endif; ?>
    </li>
    <li>
    <?php if ($this->_var['goods_0_72942100_1408588154']['promote_price'] != ""): ?>
    <font class="shop"><?php echo $this->_var['goods_0_72942100_1408588154']['promote_price']; ?></font><br />
    <?php else: ?>
    <font class="shop"><?php echo $this->_var['goods_0_72942100_1408588154']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    <li class="action">
    <a href="javascript:addToCart(<?php echo $this->_var['goods_0_72942100_1408588154']['goods_id']; ?>)"><img src="themes/1hdshop/images/buy.gif"></a> &nbsp;
    <a href="javascript:collect(<?php echo $this->_var['goods_0_72942100_1408588154']['goods_id']; ?>);"><img src="themes/1hdshop/images/collect.gif"></a>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
    <div class="clearfix">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_72983900_1408588154');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_72983900_1408588154']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php if ($this->_var['goods_0_72983900_1408588154']['goods_id']): ?>
    <div class="goodsItemh" onmouseover="this.className='goodsItemh goodsItemhover'" onmouseout="this.className='goodsItemh'">
		<div class="goodsItem">
			<div class="goodsimg"><a href="<?php echo $this->_var['goods_0_72983900_1408588154']['url']; ?>"><img src="<?php echo $this->_var['goods_0_72983900_1408588154']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_72983900_1408588154']['goods_name']; ?>" /></a></div> 
			<div class="name"><p><a href="<?php echo $this->_var['goods_0_72983900_1408588154']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_72983900_1408588154']['name']); ?>"><?php echo $this->_var['goods_0_72983900_1408588154']['goods_name']; ?></a></p></div> 
			 <p>
			  <?php if ($this->_var['goods_0_72983900_1408588154']['promote_price'] != ""): ?><font class="f1"><b><?php echo $this->_var['goods_0_72983900_1408588154']['promote_price']; ?></b></font><?php else: ?><font class="f1"><b><?php echo $this->_var['goods_0_72983900_1408588154']['shop_price']; ?></b></font><?php endif; ?> <font class="market_s"><?php echo $this->_var['goods_0_72983900_1408588154']['market_price']; ?></font>
			 </p>
		</div>
		<div class="gbuycx"><?php if ($this->_var['goods_0_72983900_1408588154']['watermark_img']): ?><img src="themes/1hdshop/images/h_promote.gif" /><?php endif; ?><?php if ($this->_var['goods_0_72983900_1408588154']['watermark_img1']): ?><img src="themes/1hdshop/images/h_new.gif" /><?php endif; ?><?php if ($this->_var['goods_0_72983900_1408588154']['watermark_img2']): ?><img src="themes/1hdshop/images/h_best.gif" /><?php endif; ?><?php if ($this->_var['goods_0_72983900_1408588154']['watermark_img3']): ?><img src="themes/1hdshop/images/h_hot.gif" /><?php endif; ?></div>
		<div class="gbuy clearfix">
			 <div class="gnum">
             <input name="goods_number_<?php echo $this->_var['goods_0_72983900_1408588154']['goods_id']; ?>" id="goods_number_cat_<?php echo $this->_var['goods_0_72983900_1408588154']['goods_id']; ?>" type="text" class="goodsBuyBox" value="1" size="4" onblur="changePrice();"/>
			 </div>
             <div class="gbuycart"><a href="javascript:addToCart(<?php echo $this->_var['goods_0_72983900_1408588154']['goods_id']; ?>)"><img src="themes/1hdshop/images/buylist.gif" /></a></div>
		</div>
	</div>	
	<?php if ($this->_foreach['foo']['iteration'] % 4 == 0): ?><div class="goodsLine"></div><?php endif; ?>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_73027900_1408588154');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_73027900_1408588154']):
?>
     <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li style="margin-right:15px;">
    <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods_0_73027900_1408588154']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods_0_73027900_1408588154']['goods_name']); ?>','<?php echo $this->_var['goods_0_73027900_1408588154']['type']; ?>')" class="f6"><?php echo $this->_var['lang']['compare']; ?></a>
    </li>
    <li class="goodsName">
    <a href="<?php echo $this->_var['goods_0_73027900_1408588154']['url']; ?>" class="f6">
        <?php if ($this->_var['goods_0_73027900_1408588154']['goods_style_name']): ?>
        <?php echo $this->_var['goods_0_73027900_1408588154']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods_0_73027900_1408588154']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods_0_73027900_1408588154']['goods_brief']): ?>
    <span><?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_73027900_1408588154']['goods_brief']; ?></span><br />
    <?php endif; ?>
    </li>
    <li>
    <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods_0_73027900_1408588154']['market_price']; ?></font><br />
    <?php endif; ?>
    <?php if ($this->_var['goods_0_73027900_1408588154']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods_0_73027900_1408588154']['promote_price']; ?></font><br />
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods_0_73027900_1408588154']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    <li class="action">
    <a href="javascript:addToCart(<?php echo $this->_var['goods_0_73027900_1408588154']['goods_id']; ?>)"><img src="themes/1hdshop/images/buy.gif"></a> &nbsp;
    <a href="javascript:collect(<?php echo $this->_var['goods_0_73027900_1408588154']['goods_id']; ?>);"><img src="themes/1hdshop/images/collect.gif"></a>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>


<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_73075900_1408588154');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_73075900_1408588154']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_73075900_1408588154']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>