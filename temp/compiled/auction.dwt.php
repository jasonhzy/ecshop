<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
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
<div class="block1">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
</div>
<div class="block1 clearfix">
  <div id="pageLeft" class="fl">
	 
	 <?php echo $this->fetch('library/category_tree.lbi'); ?> 
	 
	 <?php echo $this->fetch('library/promotion_info.lbi'); ?>
     <?php echo $this->fetch('library/history.lbi'); ?>
   
	</div>
	<div id="pageRight" class="fr">
	
  <div class="mod1 blank" id="auction_goods_info">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod1tit"><?php echo $this->_var['lang']['auction_goods_info']; ?></h1>
	<div class="mod1con">
		<div class="grouplist clearfix">
					<div class="group_buy_list clearfix" style="border-bottom:none;">
						<div class="fl groupImg">
							<a href="<?php echo $this->_var['auction_goods']['url']; ?>"><img src="<?php echo $this->_var['auction_goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['auction_goods']['goods_name']); ?>" /></a>
						</div>
						<div class="fl">
                        <table border="0">
							<form name="theForm" action="auction.php" method="post">
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['goods_name']; ?>：</font><font class="f14b"><?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?></font>
                            </td></tr>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_current_price']; ?>：</font>
                            <font class="price"><?php echo $this->_var['auction']['formated_current_price']; ?></font></td></tr>
							<tr height="25"><td><font class="ac_font">起止时间：</font><font class="f1 f14b"><?php echo $this->_var['auction']['start_time']; ?> -- <?php echo $this->_var['auction']['end_time']; ?>
                            </font></td></tr>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_start_price']; ?>：</font>
                            <font class="price"><?php echo $this->_var['auction']['formated_start_price']; ?></font></td></tr>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_amplitude']; ?>：</font>
                            <font class="price"><?php echo $this->_var['auction']['formated_amplitude']; ?></font></td></tr>
							<?php if ($this->_var['auction']['end_price'] > 0): ?>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_end_price']; ?>：<?php echo $this->_var['auction']['formated_end_price']; ?></font></td></tr>
							<?php endif; ?>
							<?php if ($this->_var['auction']['deposit'] > 0): ?>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_deposit']; ?>：</font>
                            <font class="price"><?php echo $this->_var['auction']['formated_deposit']; ?></font></td></tr>
							<?php endif; ?>
                            
							<?php if ($this->_var['auction']['status_no'] == 0): ?>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_pre_start']; ?></font>
							<?php elseif ($this->_var['auction']['status_no'] == 1): ?>
							<tr height="25"><td><font class="f1 f14b"><?php echo $this->_var['lang']['au_under_way']; ?><font id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font></font></td></tr>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_i_want_bid']; ?>：</font>
							<input name="price" type="text" class="InputBorder" id="price" size="8" style="position:relative; top:3px;" />
							<input name="bid" type="submit" class="bnt_number2" id="bid" value="<?php echo $this->_var['lang']['button_bid']; ?>" style="position:relative; top:1px; *top:-2px; "/>
							<input name="act" type="hidden" value="bid" />
							<input name="id" type="hidden" value="<?php echo $this->_var['auction']['act_id']; ?>" /></td></tr>
							<?php else: ?>
							<?php if ($this->_var['auction']['is_winner']): ?>
							<tr height="25"><td><font class="f1"><?php echo $this->_var['lang']['au_is_winner']; ?></font></td></tr>
							<input name="buy" type="submit" class="bnt_number2" value="<?php echo $this->_var['lang']['button_buy']; ?>" />
							<input name="act" type="hidden" value="buy" />
							<input name="id" type="hidden" value="<?php echo $this->_var['auction']['act_id']; ?>" />
							<?php else: ?>
							<tr height="25"><td><font class="ac_font"><?php echo $this->_var['lang']['au_finished']; ?></font></td></tr>
							<?php endif; ?>
							<?php endif; ?>
							</form>
                         </table>
						</div>
					</div>
	  </div>
	</div>
	</div>
	<script type="text/javascript">divheight("auction_goods_info");</script>

  <div class="goodsTitle blank"><?php echo $this->_var['lang']['activity_intro']; ?></div>
	<div class="mod2con" style="margin-bottom:10px;">
	<?php echo nl2br(htmlspecialchars($this->_var['auction']['act_desc'])); ?>
	</div>
	
	<div class="goodsTitle blank"><?php echo $this->_var['lang']['bid_record']; ?></div>
	<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" align="center">
      <tr>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_user']; ?></th>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_price']; ?></th>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_time']; ?></th>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_status']; ?></th>
      </tr>
<?php $_from = $this->_var['auction_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'log');$this->_foreach['fe_bid_log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_bid_log']['total'] > 0):
    foreach ($_from AS $this->_var['log']):
        $this->_foreach['fe_bid_log']['iteration']++;
?>
      <tr>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['log']['user_name']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['log']['formated_bid_price']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['log']['bid_time']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php if (($this->_foreach['fe_bid_log']['iteration'] <= 1)): ?> <?php echo $this->_var['lang']['au_bid_ok']; ?><?php else: ?>&nbsp;<?php endif; ?></td>
      </tr>
    <?php endforeach; else: ?>
    <tr>
      <td colspan="4" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['no_bid_log']; ?></td>
    </tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </table>


	</div>
</div>

<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['auction']['gmt_end_time']) ? '0' : $this->_var['auction']['gmt_end_time']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
var now_time = <?php echo $this->_var['now_time']; ?>;
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function()
{
  try
  {
    onload_leftTime(now_time);
  }
  catch (e)
  {}
}

</script>
</html>
