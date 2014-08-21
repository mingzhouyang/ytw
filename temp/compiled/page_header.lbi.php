<script type="text/javascript">
var isWidescreen=screen.width>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div id="top" class="clearfix">
 <div class="block clearfix">
   <ul>
	 <?php if ($this->_var['navigator_list']['top']): ?>
    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
    <li<?php if ($this->_foreach['nav_top_list']['iteration'] == 1): ?> style="background:none"<?php endif; ?>>
    <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li><li>|</li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>  
	<li>语言切换：<a id="StranLink" style="cursor:pointer">繁體中文</a></li><li>|</li><?php echo $this->smarty_insert_scripts(array('files'=>'Std_StranJF.js')); ?>
   <li>
          <dl class="ul1" onmouseover="this.className='ul1 ul1_on'" onmouseout="this.className='ul1'"><A href="user.php">帮助中心</A> 
            <div class="ul1_float"><dl><dd><a href="user.php" class="a1">帮助中心</a></dd> <dd class="pln"><a href="user.php?act=order_list">我的订单</a></dd> <dd class="pln"><a href="user.php?act=profile">个人资料</a></dd> <dd class="pln"><a href="user.php?act=collection_list">我的收藏</a></dd><dd class="pln"><a href="#">帮助中心</a></dd> </dl></div>
          </dl>
       </li>
   </ul>
   <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   <div style="float:left; margin-top:5px;"><a href="javascript:window.external.AddFavorite('http://www.aigouigo.com', '爱购igo-网上商城')" rel="sidebar">收藏本站</a></div>
   <span id="ECS_MEMBERZONE"> <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </span>
 </div>
</div>
<div class="block clearfix">  
      <div class="logo"><a href="index.php" name="top"><img src="themes/1hdshop/images/logo.gif"></a></div>
	 <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>

	<div class="head_search">
<div class="searchFormh">
<form id=searchForm name=searchForm onSubmit="return checkSearchForm()" action="search.php" method=get><div class="f_l"><INPUT id=keyword onblur="if (value ==''){value='请输入关键词'}" style="COLOR: #999999;width:330px;" onfocus="if (value =='请输入关键词'){value =''}" maxLength=70 value=请输入关键词  class="input" name=keywords></div><div class="f_r"><button class="searchBtn" type=submit>搜 索</button></div></form>
</div>
<p id="hotKeywordsShow">
<?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?><a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</p>
</div>

    <div class="btel"><img src="themes/1hdshop/images/btel.gif"></div>
</div> 
<div class="blank"></div><div class="blank5"></div>

<div class="navbg" id="winner">
  <div id="search">
     <div class="allsort" onMouseOver="this.className='allsort allsorthover'" onmouseout="this.className='allsort'">
    <div class="mctit"><div class="mctt"><STRONG><a href="catalog.php">全部分类和品牌</a></STRONG></div></div>
    <div class="mc mcly lyonoe">
   <?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cur']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cur']['iteration']++;
?>
          <?php if ($this->_foreach['cur']['iteration'] < 14): ?>
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
                     <s>
                    </s>
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
                    <em style="width: 160px;"><a href="<?php echo $this->_var['brandnav']['url']; ?>"><?php echo htmlspecialchars($this->_var['brandnav']['brand_name']); ?></a></em> 
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
	
<div class="headerNavWrap">
<ul class="headerNavMain clearfix">
  <li<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a> </li>
 <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <li <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  </div>
   <ul id="mycart">
      <li class="fore1 out" onMouseOver="this.className='fore1 on'" onMouseOut="this.className='fore1 out'" id="ECS_CARTINFO">
    <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
     <li class="fore2"><a href="flow.php">去结算</a></li>
   </ul>
	<div class="clear"></div> 
   </div>
   <div>
  </div>
</div>
<div class="clear"></div>