<?php if ($this->_var['invoice_list']): ?>
    <div id="brtup" style="overflow:hidden; height: 114px;">
         <div id="brtup1"> 
                 <ul id="brtup1ul"> 
                 <?php $_from = $this->_var['invoice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'invoice');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['invoice']):
        $this->_foreach['curn']['iteration']++;
?>
                  <li style="padding-top:6px;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0"> <tr> <td width="60" align="left">&nbsp;<?php echo $this->_var['lang']['order_number']; ?>:&nbsp;</td> <td><?php echo $this->_var['invoice']['order_sn']; ?></td> </tr> <tr > <td align="left">&nbsp;<?php echo $this->_var['lang']['consignment']; ?>:&nbsp;</td> <td ><?php echo $this->_var['invoice']['invoice_no']; ?></td> </tr> </table> 
                   <?php if (! ($this->_foreach['curn']['iteration'] == $this->_foreach['curn']['total'])): ?><div style="height:10px; border-bottom:1px dashed #ccc; width:250px;"></div><?php endif; ?>
                   </li> 
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <div style="height:10px; border-bottom:1px dashed #ccc; width:250px;"></div> 
                  </li> 
                  </ul> 
          </div> 
          <div id="brtup2"> </div> 
      </div>
<script type="text/javascript">
var speed=30;
var brtup=document.getElementById('brtup');
var brtup1=document.getElementById('brtup1');
var brtup2=document.getElementById('brtup2');
var brtup1ul=document.getElementById('brtup1ul');
var result = "";
for(var i=0; i<25; i++) result += brtup1ul.innerHTML;
brtup1ul.innerHTML=result
brtup2.innerHTML=brtup1.innerHTML
function Marquee1(){
if(brtup2.offsetHeight-brtup.scrollTop<=0)
brtup.scrollTop-=brtup1.offsetHeight
else{
brtup.scrollTop++
}
}
var MyMar1=setInterval(Marquee1,speed)
brtup.onmouseover=function() {clearInterval(MyMar1)}
brtup.onmouseout=function() {MyMar1=setInterval(Marquee1,speed)}
</script>
<?php endif; ?>
                