  <span class="topcart"><div class="buyt">购物车</div><strong><?php echo $this->_var['str_num']; ?>件</strong></span>
      <?php if ($this->_var['goods']): ?>
        <div id="o-mycart-list">
          <div id="mycart-list">
            <div class="padditem">
			<?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_70453200_1408588138');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_70453200_1408588138']):
        $this->_foreach['goods']['iteration']++;
?>
                <dl>
                <dt class="p-imgcart"><a target="_blank" href="<?php echo $this->_var['goods_0_70453200_1408588138']['url']; ?>"><img src="<?php echo $this->_var['goods_0_70453200_1408588138']['goods_thumb']; ?>" width="50" border="0" title="<?php echo htmlspecialchars($this->_var['goods_0_70453200_1408588138']['goods_name']); ?>" /></a></dt>
                <dd class="p-name"><a href="<?php echo $this->_var['goods_0_70453200_1408588138']['url']; ?>"><?php echo $this->_var['goods_0_70453200_1408588138']['goods_name']; ?></a></dd>
                <dd class="extra"><strong><?php echo $this->_var['goods_0_70453200_1408588138']['goods_price']; ?>×<?php echo $this->_var['goods_0_70453200_1408588138']['goods_number']; ?></strong><br>
                  <a href="javascript:" onClick="deleteCartGoods(<?php echo $this->_var['goods_0_70453200_1408588138']['rec_id']; ?>)">删除</a></dd>
              </dl>
			 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <div class="total clearfix">
            <div class="checkall">共 <span><?php echo $this->_var['str_num']; ?></span> 件商品　金额总计：<span><?php echo $this->_var['str_price']; ?>元</span></div>
            <div class="tr"><a id="btn-payforgoods" title="去结算" href="flow.php"></a></div>
            </div> 
            <div class="clear"></div></div>
        </div>
        <?php else: ?>
         <div id="o-mycart-list">
          <div id="mycart-list">
		     <div class="nocart">您的购物车里还没有商品，欢迎选购！</div>
           <div class="clear"></div>
		   </div>
        </div>
        <?php endif; ?>
    
      
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script>

