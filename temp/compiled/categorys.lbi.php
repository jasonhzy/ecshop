<?php if ($this->_var['cat_list']): ?>
<div class="mod1 mod2 blank" id="historybox" style="background-color:#FFFFFF;">
<h1 class="mod2tit">产品目录</h1>
<div class="cagegoryCon clearfix">
<ul>
	 <?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
    <li style="background:url(themes/68ecshop_jumeifree/images/helpIcon001.gif) left center no-repeat; text-indent:15px; height:25px; line-height:25px;"><a href="<?php echo $this->_var['cat']['url']; ?>" ><b><?php echo htmlspecialchars($this->_var['cat']['cat_name']); ?></b> <?php if ($this->_var['cat']['goods_num']): ?>(<?php echo $this->_var['cat']['goods_num']; ?>)<?php endif; ?></a></li>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </ul>
</div>
<div class=" blank"></div>
</div>
<?php endif; ?>