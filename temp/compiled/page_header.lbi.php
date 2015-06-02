<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script language="javascript"> 
<!--
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>

<div class="page-header clearfix">
  <div class="block1"> 
    
    <div class="top_menu">
      <div class="top_nav fl"> <span class="current1 fl"><a target="_blank" href="http://www.68ecshop.com">68ecshop官网&nbsp;</a></span>
        <div class="t_tdcode" style="z-index:9999999;" onmouseover="this.className='t_tdcode tdcode_show'" onmouseout="this.className='t_tdcode'">
          <div class="tdcode_outter">
            <div class="tdcode_inner"> <i class="arrow_outter">◆</i><i class="arrow_inner">◆</i>
              <div class="pic"></div>
              <p class="txt">扫描二维码，关注有好礼！</p>
            </div>
          </div>
        </div>
        <a target="_blank" href="http://e.t.qq.com/ecshop_moban" class="t_qq" title="关注68ecshop官方腾讯微博"><span class="hide_clip">腾讯微博</span> </a> <a target="_blank" href="http://e.weibo.com/68ecshopcom" class="t_sina" title="关注68ecshop官方新浪微博"><span class="hide_clip">新浪微博</span></a> </div>
      <div class="top_nav fr"> <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?> <font id="ECS_MEMBERZONE" style="margin-right:5px;"> <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font> 
        <?php if ($this->_var['navigator_list']['top']): ?> 
        <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?> 
        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a> 
        <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?> 
        | 
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?> 
      </div>
    </div>
    <div class="clear"></div>
     
    
    <div class="logo fl"><a href="index.php" title=""><img src="themes/68ecshop_jumeifree/images/logo.gif" alt="" /></a></div>
    <div class="topArea fr">
      <div class="topLeft">
      	<img src="themes/68ecshop_jumeifree/images/top_service.png" width="367" height="33" />
      </div>
      <div class="head_r fr">
        <a href="flow.php"><div class="qq_jiesuan" onmouseover="this.className='qq_jiesuan jiesuan_over'" onmouseout="this.className='qq_jiesuan'"></div></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div class="globa-nav" style="position:relative; _margin-top:-6px;">
  <div class="shadow"> </div>
  <div class="block1 clearfix">
    
    <div class="allMenu fl"> <a href="index.php" title="" <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?> style="font-size:15px;"><?php echo $this->_var['lang']['home']; ?></a> 
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?> 
      <?php if ($this->_foreach['nav_middle_list']['iteration'] < 8): ?> 
      <a href="<?php echo $this->_var['nav']['url']; ?>" style="font-size:15px;" <?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?> <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> title="<?php echo $this->_var['nav']['name']; ?>" ><?php echo $this->_var['nav']['name']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <div class="menu_right">
      <div class="Search fl"> 
        <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
          <input class="fl" name="keywords" type="text" id="keyword" value="请输入你要查找的商品" onclick="javascript:this.value='';"/>
          <input class="fr btsearch" name="btsearch" type="submit" id="btsearch" value="" />
        </form>
      </div>
    </div>
  </div>
</div>
