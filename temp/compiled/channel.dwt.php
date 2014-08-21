<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/1hdshop/channel.css" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js')); ?>
<script type="text/javascript" src="themes/1hdshop/js/site.js"></script>
<script type="text/javascript" src="themes/1hdshop/js/scrollpic.js"></script>
</head>
<body>
<script type="text/javascript">
var isWidescreen=screen.width>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank5"></div>
<div class="block clearfix">
  
<div class="AreaL">
	<div id="beautycare">
	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
	<?php if ($this->_var['category'] == $this->_var['cat']['id']): ?>
	<h1 class="beautytitle"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></h1>
	<?php if ($this->_var['topcat_id'] == $this->_var['cat']['id']): ?> 
		 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
	<div class="facecare">
		<h2 class="facetitle"> <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></h2>
		<ul style="overflow: hidden;">
		   <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['curn']['iteration']++;
?>
			<li>    <a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></li>
			<?php if (! ($this->_foreach['curn']['iteration'] == $this->_foreach['curn']['total'])): ?><li>|</li><?php endif; ?> 
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<div class="clear"></div>
	
		</ul>
	</div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	<?php endif; ?> 
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	</div>
     <div class="blank5"></div>
     <?php echo $this->fetch('library/top10.lbi'); ?>
     <?php echo $this->fetch('library/history.lbi'); ?>
    
  </div>
  
  
     <div id="middle" class="f_l">
 <div id="fade_focus">
           <?php if ($this->_var['ecy_adflash']): ?>
            <div class="loading"><?php $_from = $this->_var['ecy_adflash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['fnum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fnum']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['fnum']['iteration']++;
?><?php if (($this->_foreach['fnum']['iteration'] <= 1)): ?><a href="<?php echo $this->_var['item']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['item']['brand_logo']; ?>" alt="<?php echo $this->_var['item']['brand_name']; ?>" /></a><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
            <ul>     	
                   <?php $_from = $this->_var['ecy_adflash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                   <li><a href="<?php echo $this->_var['item']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['item']['brand_logo']; ?>" alt="<?php echo $this->_var['item']['brand_name']; ?>" /></a></li>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php else: ?>
             请在后台封面页扩展上传图片
            <?php endif; ?>
       </div>
        
<div class="lowarea mt10">
<div class="f_l lowareanav pointer"id="leftbtn1" ><a href="javascript:void(0);" ><img src="themes/1hdshop/images/index_pr.gif"/></a></div>
	                      <div class="f_l lowareabox" id="rollphoto1">
                                  <div class="panel">
									<ul>
							<?php $_from = $this->_var['ecy_adflash1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
						   <li><a href="<?php echo $this->_var['item']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['item']['brand_logo']; ?>" alt="<?php echo $this->_var['item']['brand_name']; ?>" /></a></li>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						  </ul>
								</div>
	                      </div>
<div class="fr lowareanav pointer" id="rightbtn1"><a href="javascript:void(0);" ><img src="themes/1hdshop/images/index_next.gif"/></a></div>
			<SCRIPT language=javascript type=text/javascript>
							var scrollPic_01 = new ScrollPic();
							scrollPic_01.scrollContId   = "rollphoto1"; //内容容器ID
							scrollPic_01.arrLeftId      = "leftbtn1";//左箭头ID
							scrollPic_01.arrRightId     = "rightbtn1"; //右箭头ID
							if (screen.width >= 1280){scrollPic_01.frameWidth    = 695;}else {scrollPic_01.frameWidth     = 480;}
							scrollPic_01.pageWidth      = 120; //翻页宽度	
							scrollPic_01.speed          = 10; //移动速度(单位毫秒，越小越快)
							scrollPic_01.space          = 10; //每次移动像素(单位px，越大越快)
							scrollPic_01.autoPlay       = true; //自动播放
							scrollPic_01.autoPlayTime   = 3; //自动播放间隔时间(秒)
							scrollPic_01.initialize(); //初始化
                        </SCRIPT>
</div>

<div class="midcolumn mt10">
    <div class="midcolumntitle">
        <h3 class="newproduct">每周推荐</h3>
        <p class="more color_gary"><a href="#" target="_blank">更多</a></p>
    </div>
    <div class="newimgs mt10" style="position:relative">
	 	   <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['curn']['iteration']++;
?>
        <div class="newsimgeg f_l">
           <?php if (($this->_foreach['curn']['iteration'] <= 1)): ?><div class="channel_tagsprites9"></div><?php endif; ?>
                <a class="newproimg"  href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a>
                <div class="newtxt">
                    <div class="newtxtitle">
	                    <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a>                    </div>
                    <p><span class="proprice"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span><span class="propricelinethrough"><?php echo $this->_var['goods']['market_price']; ?></span>                    </p>
                </div>
            </div>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <div class="clear"></div>
        </div>
    </div>
	
	    <?php $this->assign('get_child_list',get_child_treec($this->_var['category']));?>
  <?php $_from = $this->_var['get_child_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cname');if (count($_from)):
    foreach ($_from AS $this->_var['cname']):
?>
  <div class="midcolumn mt10">
    <div class="midcolumntitle">
        <h3 class="newproduct"><?php echo $this->_var['cname']['name']; ?></h3>
        <p class="more color_gary"><a href="category.php?id=<?php echo $this->_var['cname']['id']; ?>" target="_blank">更多</a></p>
    </div>
    <div class="newimgs mt10" style="position:relative">
	<?php $this->assign("cat_goods",ecy_cat_goods($GLOBALS['smarty']->_var['cname']['id'],5));?>
	<?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cur']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cur']['iteration']++;
?>
        <div class="newsimgeg f_l">
               <a class="newproimg"  href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a>
                <div class="newtxt">
                    <div class="newtxtitle">
	                     <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a>                    </div>
                     <p><span class="proprice"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span><span class="propricelinethrough"><?php echo $this->_var['goods']['market_price']; ?></span></p>
                </div>
        </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <div class="clear"></div>
      </div>
    </div>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </div>
              
<div id="sidebarright"  class="f_r">
<div class="hotranking hotrankingtime">
    <div class="hotitle"><h4 class="limitime">限时抢购</h4></div>
    <div class="timecon">
        <div class="timebg">
            <span><input type="text" value="" id="_lefttime"></span><span><input type="text" value="" id="_lefttime1"></span><span><input type="text" value="" id="_lefttime2"></span>
        </div>
		  <SCRIPT LANGUAGE="Javascript">
                            function _fresh() {
                                var endtime = new Date("October 15, 2031 00:00:00");
                                var nowtime = new Date();
                                var leftsecond = parseInt((endtime.getTime() - nowtime.getTime()) / 1000);
                                if (leftsecond < 0) {
                                    leftsecond = 0;
                                };
                                __d = parseInt(leftsecond / 3600 / 24);
                                __h = parseInt((leftsecond / 3600) % 24);
                                __m = parseInt((leftsecond / 60) % 24);
                                __s = parseInt(leftsecond % 60);
                                __all = __h + "小时" + __m + "分" + __s + "秒";
                                __all = __all.replace(/([0-9]{1})/g, '$1');
                                document.getElementById("_lefttime").value = __h;
                                document.getElementById("_lefttime1").value = __m;
                                document.getElementById("_lefttime2").value = __s;
                            };
                            _fresh();
                            setInterval(_fresh, 1000);
           </SCRIPT>
<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['curn']['iteration']++;
?>       
        <div class="timeproduct<?php if (($this->_foreach['curn']['iteration'] == $this->_foreach['curn']['total'])): ?> timeproductlast<?php endif; ?>">
            <div class="channel_timeapdiv"></div>
            <div class="timeproductimg">
			  <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="timeproductimgbig" target="_blank"><img  src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" width="115" height="115" /></a>
			  </div>
              <p class="timeproductxt color_gary"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></p>
			
            <p class="timeproductxt color_gary">市场价：<?php echo $this->_var['goods']['market_price']; ?></p>

            <p class="timeproductxt color_gary">抢购价：<span class="buyingprice"><?php echo $this->_var['goods']['promote_price']; ?></span></p>
        </div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		
    </div>
    
</div>

			
		<?php $_from = $this->_var['ecy_adflash2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
						   <div class="smallpic mt10"><a href="<?php echo $this->_var['item']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['item']['brand_logo']; ?>" alt="<?php echo $this->_var['item']['brand_name']; ?>" style="width:203px;" /></a></div>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
<div class="hotranking mt10">
    <div class="hotitle">本周热销单品</div>
    <div class="hotimgs">
	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cur']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cur']['iteration']++;
?>
        <div class="hoteg">
              <div class="hotimg"><a class="hotimgsmall" href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="40" height="40" /></a></div>
            <div class="hotimgtxt">          
                <div class="newtxtitle">
                  <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['name']; ?></a>
                </div>
                <p class="hotprice"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?></font><?php endif; ?></p>
            </div>
            <div class="clear"></div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>
<div class="hotranking mt10">
    <div class="hotitle">最新排行</div>
    <div class="hotimgs">
       	<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cur'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cur']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cur']['iteration']++;
?>
        <div class="hoteg">
              <div class="hotimg"><a class="hotimgsmall" href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="40" height="40" /></a></div>
            <div class="hotimgtxt">          
                <div class="newtxtitle">
                  <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['name']; ?></a>
                </div>
                <p class="hotprice"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?></font><?php endif; ?></p>
            </div>
            <div class="clear"></div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
	 
</div>
<div class="blank"></div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="themes/1hdshop/js/hotProduct.js"></script>
</body>
</html>
