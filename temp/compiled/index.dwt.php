<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="qc:admins" content="73412725776117751776375" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" /> 
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/1hdshop/home.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script type="text/javascript" src="themes/1hdshop/js/site.js"></script>
<script type="text/javascript" src="themes/1hdshop/js/script.js"></script>
<script type="text/javascript" src="themes/1hdshop/js/transport_ec.js"></script>

<script type="text/javascript">
var URLPrefix = {};
var headerType="base";
var favorite="";
var hostUrl="";
var httpUrl="";
var no3wUrl="";
var simpleUrl="1mall";
var chineseUrl="";
var imagePath="";
var currSiteId=1;
var currBsSiteId=1;
var currSiteType=2;
var siteStyle=1;
var siteFlag=1;
var currDomain="";
var oppositeDomain="";
var busystock = "";
var multiSearch="false";
var isIndex = 0;
var currVersionNum= 512555; //
var currProvinceId=20;
var lazyLoadImageObjArry = lazyLoadImageObjArry || [];
var isFixTopNav = false
var hotwordReadAdv = true;</script>

<?php 
   require_once("themes/".$GLOBALS['_CFG']['template']."/diyfile.php");
   $this->assign('TemplatePath','themes/'.$GLOBALS['_CFG']['template']);
?>
</head>
<body>
<script type="text/javascript">
var isWidescreen=screen.width>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<?php echo $this->fetch('library/index_header.lbi'); ?>
<div class="areabg">
<div class="block clearfix">
		 <div class="AreaiL">
		  <?php echo $this->fetch('library/imenu.lbi'); ?>
		</div>
		<div class="f_l tsMain">
<?php echo $this->fetch('library/iflash.lbi'); ?> 
<div class="tsChannel">
<div class="f_l panicBuy">
<div class="wh3">
<a href="#" target="_blank">天天疯抢 每日12:21开抢</a>
</div>

<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
<div class="f_l brandSale">
<div class="wh3"><a href="#" target="_blank"></a></div>
<div>
<div class="imgl first">

<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
<div class="imgl">

<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
<div class="imgl">

<?php $this->assign('ads_id','4'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>

</div>
</div> </div>
<div class="tsAd">
<div class="imgl">

<?php $this->assign('ads_id','5'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div> 
<div class="imgl">

<?php $this->assign('ads_id','6'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
<div class="imgl">

<?php $this->assign('ads_id','7'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>

</div>
</div>
<div class="f_l tsLeft">
<ul class="policy" id="indexServiceId">
<li><img alt="正品保障" title="正品保障" src="themes/1hdshop/images/bz1.jpg"></li>
<li><img alt="七天包退" title="七天包退" src="themes/1hdshop/images/bz2.jpg"></li>
<li><img alt="假一赔三" title="假一赔三" src="themes/1hdshop/images/bz3.jpg"></li>
</ul>
<div class="tuangou">
<h3>天豫团</h3>

<?php $this->assign('ads_id','8'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<?php if ($this->_var['group_buy_goods']): ?>
<SCRIPT type="text/javascript">
var Tday = new Array();
var daysms = 24 * 60 * 60 * 1000
var hoursms = 60 * 60 * 1000
var Secondms = 60 * 1000
var microsecond = 1000
var DifferHour = -1
var DifferMinute = -1
var DifferSecond = -1
function clock(key)
  {
   var time = new Date()
   var hour = time.getHours()
   var minute = time.getMinutes()
   var second = time.getSeconds()
   var timevalue = ""+((hour > 12) ? hour-12:hour)
   timevalue +=((minute < 10) ? ":0":":")+minute
   timevalue +=((second < 10) ? ":0":":")+second
   timevalue +=((hour >12 ) ? " PM":" AM")
   var convertHour = DifferHour
   var convertMinute = DifferMinute
   var convertSecond = DifferSecond
   var Diffms = Tday[key].getTime() - time.getTime()
   DifferHour = Math.floor(Diffms / daysms)
   Diffms -= DifferHour * daysms
   DifferMinute = Math.floor(Diffms / hoursms)
   Diffms -= DifferMinute * hoursms
   DifferSecond = Math.floor(Diffms / Secondms)
   Diffms -= DifferSecond * Secondms
   var dSecs = Math.floor(Diffms / microsecond)
   
   if(convertHour != DifferHour) a="<b>"+DifferHour+"</b>天";
   if(convertMinute != DifferMinute) b="<b>"+DifferMinute+"</b>时";
   if(convertSecond != DifferSecond) c="<b>"+DifferSecond+"</b>分"
     d="<b>"+dSecs+"</b>秒"
     if (DifferHour>0) {a=a} 
     else {a=''}
   document.getElementById("leftTime"+key).innerHTML ="剩:"+ a + b + c + d; //显示倒计时信息
  }
</SCRIPT>
<?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['curn']['iteration']++;
?>
<?php if ($this->_foreach['curn']['iteration'] < 2): ?>
<p class="buy"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">立即团</a><strong>¥<?php echo $this->_var['goods']['last_price']; ?></strong><del>¥<?php echo $this->_var['goods']['market_price']; ?></del></p>
<p class="sellInfo">
<span>已售:<b><?php if ($this->_var['goods']['isg_rs'] == 1): ?><?php echo $this->_var['goods']['group_rs']; ?><?php else: ?><?php echo $this->_var['goods']['valid_goods']; ?><?php endif; ?></b>件</span>
 <span class="sellAmout" id="leftTime<?php echo $this->_var['key']; ?>"><?php echo $this->_var['lang']['please_waiting']; ?></span>
</p>
  <SCRIPT type="text/javascript">
		Tday[<?php echo $this->_var['key']; ?>] = new Date("<?php echo $this->_var['goods']['gmt_end_time']; ?>");   
		window.setInterval(function()     
		{clock(<?php echo $this->_var['key']; ?>);}, 1000);     
  </SCRIPT>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
</div>
	 <dl class="notice">
		<dt>天豫商城公告</dt>
		 <?php echo $this->fetch('library/new_articles.lbi'); ?>
		</dl>
   </div>
   <div class="right_tab">
	  <h2 id="two1" onmousemove="setTab('two',1,2)" class="hover" style="border-right:1px solid #ddd; width:105px">订单查询</h2>
	  <h2 id="two2" onmousemove="setTab('two',2,2)">发货清单</h2>
	  <div style="clear:both"></div>
	  <div class="right_tab_box clearfix">
		<div id="con_two_1">
		 <?php echo $this->fetch('library/order_query.lbi'); ?>
		 <p class="dingdan">您也可以<a href="user.php" target="_blank">登录</a>后进入<a href="user.php?act=order_list" target="_blank">订单中心</a></p>
		</div>
		<div id="con_two_2" style="display:none;">
		  <?php echo $this->fetch('library/invoice_query.lbi'); ?>
		</div>
	  </div>
	</div>  
</div>
</div>

</div>

<div class="block">
<div class="floor floor_0" id="floor_0">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="search.php=intro=new" target="_blank">NEW 新品上市</a></h2>

<?php $this->assign('ads_id','9'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
<?php $_from = $this->_var['cat_rec']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['rec_data']):
        $this->_foreach['curn']['iteration']++;
?>
<?php if ($this->_foreach['curn']['iteration'] < 11): ?> 
<li>
<a href="category.php?id=<?php echo $this->_var['rec_data']['cat_id']; ?>" title="<?php echo $this->_var['rec_data']['cat_name']; ?>" target="_blank">
<span><?php echo $this->_var['rec_data']['cat_name']; ?></span>
</a>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
<ul class="fl floorMain">
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','10'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','11'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


<?php $this->assign('ads_id','12'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


<?php $this->assign('ads_id','13'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


<?php $this->assign('ads_id','14'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand.lbi'); ?>
</ul></div>
<div class="floor floor_1" id="floor_1" lazyImg="y">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">1F 美妆、珠宝、钟表</a></h2>

<?php $this->assign('ads_id','15'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat1.lbi'); ?>
</ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_39']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_39']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','24'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','25'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','26'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','27'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','28'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand1.lbi'); ?>
</ul></div>
<div class="floor floor_2">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">2F 女装、男装、内衣</a></h2>

<?php $this->assign('ads_id','17'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat2.lbi'); ?>
</ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','29'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','30'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','31'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','32'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','33'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand2.lbi'); ?>
</ul></div>
<div class="floor floor_3">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">3F 鞋靴、运动、箱包</a></h2>

<?php $this->assign('ads_id','18'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat3.lbi'); ?>
</ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_39']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_39']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','34'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','35'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','36'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','37'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','38'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand3.lbi'); ?>
</ul></div>
<div class="floor floor_4">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">4F 家居、家纺、建材</a></h2>

<?php $this->assign('ads_id','19'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat4.lbi'); ?>
</ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','39'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','40'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','41'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','42'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','43'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand4.lbi'); ?>
</ul></div>
<div class="floor floor_5">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">5F 数码、家电</a></h2>

<?php $this->assign('ads_id','20'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat5.lbi'); ?>
</ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_39']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_39']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','44'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','45'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','46'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','47'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','48'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand5.lbi'); ?>
</ul></div>
<div class="floor floor_6">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">6F 母婴之家</a></h2>

<?php $this->assign('ads_id','21'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat6.lbi'); ?>
</ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','49'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','50'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','51'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','52'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','53'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand6.lbi'); ?>
</ul></div>
<div class="floor floor_7">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">7F 图书、音像</a></h2>

<?php $this->assign('ads_id','22'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat7.lbi'); ?>
 </ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_39']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_39']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','54'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','55'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','56'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','57'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','58'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand7.lbi'); ?>
</ul></div>
<div class="floor floor_8">
<div class="floorCon">
<div class="fl floorLeft">
<h2><a href="#" target="_blank">8F 保健、滋补、器械</a></h2>

<?php $this->assign('ads_id','23'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<ul>
 <?php echo $this->fetch('library/icat8.lbi'); ?>
</ul>
</div>
<ul class="fl floorMain">

<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</ul>
<div class="fl floorRight">

<?php $this->assign('ads_id','59'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','60'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','61'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','62'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 

<?php $this->assign('ads_id','63'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>
</div>
<ul class="brandList">
<?php echo $this->fetch('library/ibeand8.lbi'); ?>
</ul>
</div>
    <div class="blank"></div>
	<div class="footer_banner">
	<script language=javascript>if (screen.width >= 1280){ document.write('<?php 
$k = array (
  'name' => 'ads',
  'id' => '64',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>') }   else {document.write('<?php 
$k = array (
  'name' => 'ads',
  'id' => '65',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>')}</script>
	</div>
</div>
</div>

</div>

<div class="block">
<ul class="footer_cat clearfix">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cur']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cur']['iteration']++;
?>
<?php if ($this->_foreach['cur']['iteration'] < 9): ?>
<li>
<a target="_blank" class="cat_img" href="#">
<img src="themes/1hdshop/images/class/<?php echo $this->_foreach['cur']['iteration']; ?>.jpg">
</a>
<p>
<a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
</p>
<div>
<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['childcur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childcur']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['childcur']['iteration']++;
?>
<?php if ($this->_foreach['childcur']['iteration'] < 8): ?>
 <a href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>|
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
</div>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</ul>
</div>
<?php echo $this->fetch('library/index_footer.lbi'); ?>


<script type="text/javascript" src="themes/1hdshop/js/global_site_top-mall.js"></script>
<script type="text/javascript" src="themes/1hdshop/js/mall_index.js"></script>

</body>
</html>
