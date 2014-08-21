<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div id="simple_header" class="clearfix">
  	<div class="block">
      <div class="simplelogo">
      	<a href="index.php" target="_blank">
	      		<img src="themes/1hdshop/images/loginlogo.jpg" height="55">
      	</a>
      </div>
      <div class="simplenav"> 
           		<p>
				   <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
			  	<span id="ECS_MEMBERZONE"> <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </span>
           		</p>
          
          <div class="tr"><a href="#" target="_blank" style="color:#666666">帮助中心</a></div>
      </div>
    </div>
</div>