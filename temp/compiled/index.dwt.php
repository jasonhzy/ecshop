<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>
<script type="text/javascript" src="themes/68ecshop_jumeifree/js/action.js"></script>
<script type="text/javascript" src="themes/68ecshop_jumeifree/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/68ecshop_jumeifree/js/roll.js"></script>
<script src="themes/68ecshop_jumeifree/js/common.min.js"></script>
<script language="JavaScript" src="themes/68ecshop_jumeifree/js/index.min.js?0622"></script>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank" style="position:relative; width:1190px; margin:0 auto;">
	<?php echo $this->fetch('library/category_tree_index.lbi'); ?>
</div>
    <?php echo $this->fetch('library/index_ad3.lbi'); ?>
<div style=" height:10px; line-height:10px; clear:both;"></div>
<div class="block1 clearfix">
  <div id="pageLeft" class="fl">
    <div class="w230 bg blank">
      <div class="mod1" >
        <h1 class="mod1tit"><?php echo $this->_var['lang']['shop_notice']; ?></h1>
        <div class="mod1con shop_notice"> 
<?php $this->assign('articles',$this->_var['articles_12']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_12']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
 </div>
      </div>
      <script type="text/javascript">divheight("mod1");</script> 
    </div>

    <div class="bg"> <?php echo $this->fetch('library/top10.lbi'); ?></div>
    <div class="w230"> <?php echo $this->fetch('library/brands.lbi'); ?> </div>
    <div class="w230"> <?php echo $this->fetch('library/invoice_query.lbi'); ?></div>
  </div>
  <div id="pageRight" class="fr bg clearfix" > 
    
     
    
    <?php if ($this->_var['hot_goods']): ?> 
    <?php echo $this->fetch('library/recommend_hot.lbi'); ?> 
    <?php endif; ?> 
    
     
    
    <?php if ($this->_var['best_goods']): ?> 
    
    <?php echo $this->fetch('library/recommend_best.lbi'); ?> 
    
    <?php endif; ?> 
    <?php echo $this->fetch('library/recommend_new.lbi'); ?> </div>
</div>
<div style=" height:10px; line-height:10px; clear:both;"></div>
<div class="block1"> 
<?php $this->assign('cat_goods',$this->_var['cat_goods_6']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_6']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 </div>
<div style=" height:10px; line-height:10px; clear:both;"></div>
<div class="block1"> 
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 </div>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<SCRIPT type=text/javascript>(function(){window._currentWidth=document.body.clientWidth;window.onresize=function(){window._currentWidth=document.body.clientWidth;index=0;autoRun();};})();var imgDom=M.$("a","#JS_side_stage");for(var i=0,ii=imgDom.length;i<ii;i++){imgDom[i].style.cssText="background:url("+imgDom[i].getAttribute("data-bg")+") center center no-repeat";imgDom[i].removeAttribute("data-bg");}var stage=M.$("#JS_side_stage"),imgList=M.$("a",stage),handler=M.$("a","#JS_side_nav"),len=handler.length,current=0,index=0;for(var k=0,kk=len;k<kk;k++){handler[k]._key=k;handler[k].onmouseover=function(){index=this._key;clearInterval(auto);autoRun();};handler[k].onmouseout=function(){auto=setInterval(function(){autoRun();},5000);};}var autoRun=function(){M.removeClass(handler[current],"current");M.addClass(handler[index],"current");M.Animate(stage,{marginLeft:(0-index)*window._currentWidth+"px"},200);current=index;index=(index>=len-1)?0:index+1;};var auto=setInterval(function(){autoRun();},5000);</SCRIPT>
<script type="text/javascript">divheight("links");</script>	
</body>
</html>
