<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> 
<div class="blank"></div>
 
<?php if ($this->_var['action'] == 'login'): ?> 

<div class="container" style=" width:1190px; margin:0 auto; margin-bottom:0px;">
  <div class="reg clearfix "> 
    
    
    <div class="us_login" style="float:left;">
      <div class="mbox bg" style="width:580px; _width: 577px; height:430px; ">
        <div class="login_tit blank" style="margin-top:15px; margin-left:80px;"><strong style="font-size:18px;">登录</strong> &nbsp;&nbsp;&nbsp;&nbsp;已经注册，请在此登录</div>
        <div class="contentNew">
          <div class="l_box">
            <p>已注册用户请从这里登录</p>
            <form action="user.php" method="post" name="loginForm" id="loginForm" onSubmit="return userLogin()">
              <label> <span><?php echo $this->_var['lang']['label_username']; ?></span>
                <input type="text" class="inputBg" name="username" size="25" />
              </label>
              <label> <span><?php echo $this->_var['lang']['label_password']; ?></span>
                <input type="password" class="inputBg" name="password" size="25" />
              </label>
              <?php if ($this->_var['enabled_captcha']): ?>
              <label class="verify"> <span><?php echo $this->_var['lang']['comment_captcha']; ?></span>
                <input type="text" size="8" name="captcha" class="inputBg" />
                <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" name="captcha" alt="captcha" id="captchaImg" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </label>
              <p class="verify">点击图片换一张</p>
              <?php endif; ?>
              <div class="btns">
                <input type="submit" value="" class="btn_submit_b" />
                <input type="hidden" name="act" value="act_login" />
                <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                <p class="forgot1"><a href="user.php?act=qpassword_name"><?php echo $this->_var['lang']['get_password_by_question']; ?></a></p>
              </div>
              <div class="tempotherLoginTail"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="us_login" style="float:left; margin-left:10px;">
      <div class="mbox bg" style="width:580px; _width: 577px; height:430px;">
        <div class="reg2_tit blank" style="width:580px; _width: 577px; margin-top:15px;"><strong style="font-size:18px; margin-left:28px;">注册</strong> &nbsp;&nbsp;&nbsp;&nbsp; 新用户？ 立即注册，享受多重惊喜。</div>
        <div class="blank1" style="margin-top:15px;"></div>
        <form action="user.php" method="post" name="formUser" onsubmit="return register();">
          <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
            <tr>
              <td width="15%" align="right"><?php echo $this->_var['lang']['label_username']; ?></td>
              <td width="85%"><input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="inputBg"/>
                <span id="username_notice" style="color:#FF0000"> *</span></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_email']; ?></td>
              <td><input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="inputBg"/>
                <span id="email_notice" style="color:#FF0000"> *</span></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_password']; ?></td>
              <td><input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="inputBg" style="width:179px;" />
                <span style="color:#FF0000" id="password_notice"> *</span></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_password_intensity']; ?></td>
              <td><table width="145" border="0" cellspacing="0" cellpadding="1">
                  <tr align="center">
                    <td width="33%" id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></td>
                    <td width="33%" id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></td>
                    <td width="33%" id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_confirm_password']; ?></td>
              <td><input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="inputBg" style="width:179px;"/>
                <span style="color:#FF0000" id="conform_password_notice"> *</span></td>
            </tr>
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?> 
            <?php if ($this->_var['field']['id'] == 6): ?>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['passwd_question']; ?></td>
              <td><select name='sel_question'>
                  <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
                  
	  <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
	  
                </select></td>
            </tr>
            <tr>
                <td align="right" 
              <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?>
                </td>
              <td><input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt='20'/>
                <?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?></td>
            </tr>
            <?php else: ?>
            <tr>
                <td align="right" 
              <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>
              <td><input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" size="25" class="inputBg" />
                <?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?></td>
            </tr>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php if ($this->_var['enabled_captcha']): ?>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
              <td><input type="text" size="8" name="captcha" class="inputBg" />
                <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                  <input name="agreement" type="checkbox" value="1" checked="checked" />
                  <?php echo $this->_var['lang']['agreement']; ?></label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td align="left"><div class="btns">
                  <input class="btn_submit" name="Submit" type="submit" value="" />
                  <input name="act" type="hidden" value="act_register" >
                  <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="actionSub"><a href="user.php?act=get_password"><?php echo $this->_var['lang']['forgot_password']; ?></a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endif; ?> 
 


<div class="container" style=" width:1190px; margin:0 auto">
  <div class="reg clearfix "> 
    <?php if ($this->_var['action'] == 'register'): ?>
    <div class="us_login" style="float:left;">
      <div class="mbox bg" style="width:580px; _width: 577px; height:430px; ">
        <div class="login_tit blank" style="margin-top:15px;"><strong style="font-size:18px;">登录</strong> &nbsp;&nbsp;&nbsp;&nbsp;已经注册，请在此登录</div>
        <div class="contentNew">
          <div class="l_box">
            <p>已注册用户请从这里登录</p>
            <form action="user.php" method="post" name="loginForm" id="loginForm" onSubmit="return userLogin()">
              <label> <span><?php echo $this->_var['lang']['label_username']; ?></span>
                <input type="text" class="inputBg" name="username" size="25" />
              </label>
              <label> <span><?php echo $this->_var['lang']['label_password']; ?></span>
                <input type="password" class="inputBg" name="password" size="15" />
              </label>
              <?php if ($this->_var['enabled_captcha']): ?>
              <label class="verify"> <span><?php echo $this->_var['lang']['comment_captcha']; ?></span>
                <input type="text" size="8" name="captcha" class="inputBg" />
                <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" name="captcha" alt="captcha" id="captchaImg" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </label>
              <p class="verify">点击图片换一张</p>
              <?php endif; ?>
              <div class="btns">
                <input type="submit" value="" class="btn_submit_b" />
                <input type="hidden" name="act" value="act_login" />
                <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                <p class="forgot1"><a href="user.php?act=qpassword_name"><?php echo $this->_var['lang']['get_password_by_question']; ?></a></p>
              </div>
              <div class="tempotherLoginTail"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <?php if ($this->_var['shop_reg_closed'] == 1): ?>
    
    <div class="usBox">
      <div class="usBox_2 clearfix">
        <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
      </div>
    </div>
    <?php else: ?> 
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <div class="us_login" style="float:left;">
      <div class="mbox bg" style="width:580px; _width: 577px; height:430px;">
        <div class="reg2_tit blank" style="width:580px; _width: 577px; margin-top:15px;"><strong style="font-size:18px;">注册</strong> &nbsp;&nbsp;&nbsp;&nbsp; 新用户？ 立即注册，享受多重惊喜。</div>
        <div class="blank1" style="margin-top:15px;"></div>
        <form action="user.php" method="post" name="formUser" onsubmit="return register();">
          <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
            <tr>
              <td width="15%" align="right"><?php echo $this->_var['lang']['label_username']; ?></td>
              <td width="85%"><input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="inputBg"/>
                <span id="username_notice" style="color:#FF0000"> *</span></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_email']; ?></td>
              <td><input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="inputBg"/>
                <span id="email_notice" style="color:#FF0000"> *</span></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_password']; ?></td>
              <td><input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="inputBg" style="width:179px;" />
                <span style="color:#FF0000" id="password_notice"> *</span></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_password_intensity']; ?></td>
              <td><table width="145" border="0" cellspacing="0" cellpadding="1">
                  <tr align="center">
                    <td width="33%" id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></td>
                    <td width="33%" id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></td>
                    <td width="33%" id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['label_confirm_password']; ?></td>
              <td><input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="inputBg" style="width:179px;"/>
                <span style="color:#FF0000" id="conform_password_notice"> *</span></td>
            </tr>
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?> 
            <?php if ($this->_var['field']['id'] == 6): ?>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['passwd_question']; ?></td>
              <td><select name='sel_question'>
                  <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
                  
	  <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
	  
                </select></td>
            </tr>
            <tr>
                <td align="right" 
              <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?>
                </td>
              <td><input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt='20'/>
                <?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?></td>
            </tr>
            <?php else: ?>
            <tr>
                <td align="right" 
              <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>
              <td><input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" size="25" class="inputBg" />
                <?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?></td>
            </tr>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php if ($this->_var['enabled_captcha']): ?>
            <tr>
              <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
              <td><input type="text" size="8" name="captcha" class="inputBg" />
                <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                  <input name="agreement" type="checkbox" value="1" checked="checked" />
                  <?php echo $this->_var['lang']['agreement']; ?></label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td align="left"><div class="btns">
                  <input class="btn_submit" name="Submit" type="submit" value="" />
                  <input name="act" type="hidden" value="act_register" >
                  <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="actionSub"><a href="user.php?act=get_password"><?php echo $this->_var['lang']['forgot_password']; ?></a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <?php endif; ?> 
    <?php endif; ?> 
  </div>
</div>
 

 
<?php if ($this->_var['action'] == 'get_password'): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="block1">
  <div class="usBox bg">
    <div class="usBox_2 clearfix">
      <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
            <td><input name="email" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="send_pwd_email" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
          </tr>
        </table>
        <br />
      </form>
    </div>
  </div>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'qpassword_name'): ?>
<div class="block1">
  <div class="usBox bg">
    <div class="usBox_2 clearfix">
      <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="get_passwd_question" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
          </tr>
        </table>
        <br />
      </form>
    </div>
  </div>
</div>
<?php endif; ?> 

 

<?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="block1">
  <div class="usBox bg">
    <div class="usBox_2 clearfix">
      <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
            <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
            <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td><input type="text" size="8" name="captcha" class="inputBg" />
              <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></td>
          </tr>
          <?php endif; ?>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="check_answer" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
          </tr>
        </table>
        <br />
      </form>
    </div>
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['action'] == 'reset_password'): ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="block1">
  <div class="usBox">
    <div class="usBox_2 clearfix">
      <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
        <br />
        <table width="80%" border="0" align="center">
          <tr>
            <td><?php echo $this->_var['lang']['new_password']; ?></td>
            <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
          </tr>
          <tr>
            <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
            <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="hidden" name="act" value="act_edit_password" />
              <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
              <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" /></td>
          </tr>
        </table>
        <br />
      </form>
    </div>
  </div>
</div>
<?php endif; ?> 


 <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
