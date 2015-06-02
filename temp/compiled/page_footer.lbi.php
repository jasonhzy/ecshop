 <?php if ($this->_var['helps']): ?>
<div class="contain">
	<div class="footer_line"></div>
	<div class="pageFooter">
  		<div class="artBox">
    <div class="artList"> 
     
      <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['helps'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['helps']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['helps']['iteration']++;
?>
      <div class="list" style="padding-top:15px; padding-bottom:15px;" <?php if (($this->_foreach['helps']['iteration'] <= 1)): ?>style="padding-left:0px;"<?php endif; ?>>
        <h4><?php echo $this->_var['help_cat']['cat_name']; ?></h4>
        <ul> 
          <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <li><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a> </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </ul>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <div class="footer_li fl"></div>
      <div class="fl list1" >
      <h4 style="border:none">68ecshop官方微信</h4>
      <img width="80px" height="80px" src="themes/68ecshop_jumeifree/images/foot_weixin.gif">
      </div>
      <div class="fl list1" >
      <h4 style="border:none">68ecshop手机端</h4>
      <img width="80px" height="80px" src="themes/68ecshop_jumeifree/images/foot_weixin.gif">
      </div>
    </div>

  </div>
	</div>
	<div class="footer_line"></div>
    <div class="block1">
    	<div class="footer_service"></div>
    </div>
</div>
 <?php endif; ?>

<div class="tc" style="margin-bottom:0px;"> 
  <?php if ($this->_var['navigator_list']['bottom']): ?> 
   <div class="footer_help" style="margin-bottom:5px;">
  <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_10797800_1384915533');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_10797800_1384915533']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
  <a href="<?php echo $this->_var['nav_0_10797800_1384915533']['url']; ?>" <?php if ($this->_var['nav_0_10797800_1384915533']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_10797800_1384915533']['name']; ?></a> 
  <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> 
  | 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
  </div>
  <?php endif; ?> 
    
    <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
    <div id="bottomNav" >
     <div class="box_1">
      <div class="links1 ">
        <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
     
       <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
       
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <div class="clear"></div>
        <a href="http://www.68ecshop.com" target="_blank">68ecshop</a>
        <a href="http://www.68ecshop.com/category-33-b0.html" target="_blank">68ecshop模板中心</a>
        <a href="http://bbs.68ecshop.com" target="_blank">68ecshop论坛</a>
        <?php if ($this->_var['txt_links']): ?>
        <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
        <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
        
            
      </div>
     </div>
    </div>
    <?php endif; ?>
    
  <?php echo $this->_var['copyright']; ?>
  <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> 
  <?php if ($this->_var['service_phone']): ?> 
  Tel: <?php echo $this->_var['service_phone']; ?> 
  <?php endif; ?> 
  <?php if ($this->_var['service_email']): ?> 
  E-mail: <?php echo $this->_var['service_email']; ?><br />
  <?php endif; ?> 
  <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><a href="http://www.68ecshop.com" style="display:none;">68ECSHOP模版中心</a><?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> <?php if ($this->_var['im']): ?> <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/68ecshop_jumeifree/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <img src="themes/68ecshop_jumeifree/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
  <?php if ($this->_var['icp_number']): ?> 
  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
  <?php endif; ?> 
  <div id="footer_ban">
  <a href="http://www.68ecshop.com" target="_blank">  <img src="themes/68ecshop_jumeifree/images/footer.jpg" alt="68ecshop版权所有" /></a>
  <a href="http://www.68ecshop.com" target="_blank"><p>68ecshop模板</p></a>
  </div>
</div>