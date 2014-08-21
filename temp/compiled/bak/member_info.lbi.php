<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<?php echo $this->_var['lang']['hello']; ?>，<font class="f1"><?php if ($_COOKIE['ECS']['qq_nickname']): ?><?php echo htmlspecialchars($_COOKIE['ECS']['qq_nickname']); ?><?php else: ?><?php echo $this->_var['user_info']['username']; ?><?php endif; ?></font>，<?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>|
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
<?php else: ?>
 <?php echo $this->_var['lang']['welcome']; ?>
 <a class="link-regist" href="user.php?act=login">请登录</a> ，新用户？ <a class="link-regist" href="user.php?act=register">免费注册</a>
<?php endif; ?>
