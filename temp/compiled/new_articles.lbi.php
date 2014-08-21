<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['topnews'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topnews']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['topnews']['iteration']++;
?>
	<dd><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['short_title']; ?></a></dd>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
