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
   <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
   <div style="float:left; margin-top:5px;"><a href="javascript:window.external.AddFavorite('http://www.zuimoban.com', '最模板')" rel="sidebar">收藏本站</a></div>
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
<div class="navbg">
  <div id="search">
    <div class="allsorttop">
    <div class="mtc">
        <strong>
            <a href="catalog.php">全部分类和品牌</a>
        </strong>
        <div class="extra">
            &nbsp;
        </div>
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