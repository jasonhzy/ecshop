<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<style>
.ur_here{width:1190px;}

</style>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript" src="themes/68ecshop_jumeifree/js/action.js"></script>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<script type="text/javascript" src="themes/68ecshop_jumeifree/js/action.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


<div class="block1 clearfix">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
  
	<div id="pageLeft" class="fl ">
	
	  <?php echo $this->fetch('library/categorys.lbi'); ?>
		<?php echo $this->fetch('library/promotion_info.lbi'); ?>
		<?php echo $this->fetch('library/top10.lbi'); ?>
        <?php echo $this->fetch('library/history.lbi'); ?>
	
	</div>
	
	
	<div id="pageRight" class="fr">
	
			
	<div class="mod1 blank bg" id="pickout">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod1tit"><?php echo $this->_var['lang']['search_result']; ?> (<?php echo $this->_var['count']; ?>)<?php if ($this->_var['count'] > 5): ?><a href="<?php echo $this->_var['url']; ?>" class="more">更多</a><?php endif; ?></h1>
	 <div class="mod1con grid">
			<?php $_from = $this->_var['pickout_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
					<div class="goodsbox">
					 <div class="imgbox"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"/></a></div>
					 <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
                    
                     <font class="goodspice market" style="color:#CCC">￥<?php echo $this->_var['goods']['market_price']; ?>元</font>
                     
					 <?php if ($this->_var['goods']['promote_price'] != ""): ?>
					 <b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br>
					 <?php else: ?>
					 <b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br>
					 <?php endif; ?>
					</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 </div>
	</div>
  <script type="text/javascript">divheight("pickout");</script>
		
		
	<div class="goodsTitle"><?php echo $this->_var['lang']['pick_out']; ?></div>
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" style="margin-bottom:8px;">
      <?php $_from = $this->_var['condition']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'caption');if (count($_from)):
    foreach ($_from AS $this->_var['caption']):
?>
      <tr>
        <td bgcolor="#e5ecfb">
          <img src="themes/68ecshop_jumeifree/images/note.gif" alt="no alt" />&nbsp;&nbsp;<font class="f1"><?php echo $this->_var['caption']['name']; ?></font></td>
      </tr>
      <?php $_from = $this->_var['caption']['cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
      <tr>
        <td bgcolor="#ffffff">&nbsp;&nbsp;<strong><?php echo $this->_var['cat']['cat_name']; ?></strong></td>
      </tr>
      <tr>
        <td bgcolor="#ffffff">&nbsp;&nbsp;
          <?php $_from = $this->_var['cat']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
          &nbsp;&nbsp;<a href="<?php echo $this->_var['list']['url']; ?>"><?php echo $this->_var['list']['name']; ?></a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
		
	</div>
	
</div>



<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
