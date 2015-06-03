
--
-- 表的结构 `weixin_config`
--

CREATE TABLE IF NOT EXISTS `weixin_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `appid` varchar(60) NOT NULL,
  `appsecret` varchar(60) NOT NULL,
  `followmsg` varchar(255) NOT NULL,
  `helpmsg` varchar(255) NOT NULL,
  `bindmsg` varchar(255) NOT NULL,
  `bonustype` int(11) NOT NULL COMMENT '绑定赠送红包类型',
  `bonustype2` tinyint(4) NOT NULL COMMENT '关注红包',
  `buynotice` tinyint(4) NOT NULL COMMENT '开启下单提醒',
  `sendnotice` tinyint(4) NOT NULL COMMENT '开启发货提醒',
  `access_token` varchar(50) NOT NULL,
  `expire_in` int(11) NOT NULL,
  `buymsg` varchar(200) NOT NULL COMMENT '下单提醒内容',
  `sendmsg` varchar(200) NOT NULL COMMENT '发货提醒内容',
  `reg_type` int(11) NOT NULL COMMENT '1关注注册2邮箱注册3邮箱+密码4用户名注册5用户名+密码注册6手机注册7手机+密码注册',
  `reg_notice` varchar(200) NOT NULL COMMENT '注册引导提示',
  `wap_url` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='微信基础配置' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `weixin_config`
--

INSERT INTO `weixin_config` (`id`, `token`, `appid`, `appsecret`, `followmsg`, `helpmsg`, `bindmsg`, `bonustype`, `bonustype2`, `buynotice`, `sendnotice`, `access_token`, `expire_in`, `buymsg`, `sendmsg`, `reg_type`, `reg_notice`, `wap_url`) VALUES
(1, 'qphp', 'wxccd8d5b98fd81a43', 'f2d266ba558267bde12c35c6604cdf0a', '感谢你的关注', 'helpmsg', '恭喜您绑定成功！', 2, 1, 1, 1, '', 0, '恭喜你订单提交成功！', '您购买的商品（订单号：$order_sn）已经发货请注意查收！快递号：$shoping_code', 3, '请填写你的邮箱和密码，使用+分割。', '/mobile/');

-- --------------------------------------------------------

--
-- 表的结构 `weixin_corn`
--

CREATE TABLE IF NOT EXISTS `weixin_corn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `createtime` int(11) NOT NULL,
  `sendtime` int(11) NOT NULL,
  `issend` tinyint(4) NOT NULL COMMENT '0未发送1成功2失败',
  `ecuid` int(11) NOT NULL COMMENT '系统用户ID',
  `sendtype` tinyint(1) NOT NULL COMMENT '0单人1所有',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='计划任务信息发送表' AUTO_INCREMENT=1 ;

--
-- 表的结构 `weixin_jflog`
--

CREATE TABLE IF NOT EXISTS `weixin_jflog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fake_id` varchar(32) NOT NULL,
  `jf_type` int(11) NOT NULL COMMENT '1 一次性赠送 2按日计算',
  `key_id` int(11) NOT NULL COMMENT '命令ID',
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `num` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fake_id` (`fake_id`),
  KEY `createymd` (`createymd`),
  KEY `key_id` (`key_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='积分（红包）记录表' AUTO_INCREMENT=1 ;

--
-- 表的结构 `weixin_keywords`
--
DROP TABLE IF EXISTS `weixin_keywords`;
CREATE TABLE IF NOT EXISTS `weixin_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(30) NOT NULL,
  `keys` varchar(100) NOT NULL,
  `jf_type` int(11) NOT NULL,
  `jf_num` int(11) NOT NULL,
  `jf_maxnum` int(11) NOT NULL,
  `keyname` varchar(100) NOT NULL,
  `clicks` INT NOT NULL,
  `diy_type` INT NOT NULL,
  `diy_value` VARCHAR( 200 ) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='命令配置表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `weixin_keywords`
--

INSERT INTO `weixin_keywords` (`id`, `key`, `keys`, `jf_type`, `jf_num`, `jf_maxnum`, `keyname`) VALUES
(1, 'best', 'best 推荐 极品', 2, 10, 100, '推荐商品'),
(2, 'hot', 'hot 热门 热门商品 最热', 2, 10, 100, '热门商品'),
(3, 'new', 'new 最新 新品', 1, 10, 0, '最新商品'),
(4, 'ddcx', 'ddcx 订单 订单查询', 0, 0, 0, '订单查询'),
(5, 'info', 'info 个人信息 资料', 0, 0, 0, '个人信息');

-- --------------------------------------------------------

--
-- 表的结构 `weixin_menu`
--

CREATE TABLE IF NOT EXISTS `weixin_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `value` varchar(200) NOT NULL,
  `order` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='自定义菜单表' AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `weixin_menu`
--

INSERT INTO `weixin_menu` (`id`, `pid`, `name`, `type`, `value`, `order`) VALUES
(1, 0, '微商城', 1, '', 100),
(15, 3, '解除绑定', 1, 'jcbd', 1),
(3, 0, '会员', 1, '', 99),
(4, 0, '更多', 1, '', 0),
(5, 1, '精品推荐', 1, 'best', 10),
(7, 1, '最新商品', 1, 'new', 1),
(8, 1, '热门商品', 1, 'hot', 2),
(9, 4, '网站首页', 2, 'http://www.qq.com', 1),
(13, 3, '绑定会员', 1, 'bdhy', 2),
(14, 3, '订单查询', 1, 'ddcx', 3),
(16, 3, '个人信息', 1, 'info', 4);

-- --------------------------------------------------------

--
-- 表的结构 `weixin_msg`
--

CREATE TABLE IF NOT EXISTS `weixin_msg` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `fake_id` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  PRIMARY KEY (`msgid`),
  KEY `uid` (`uid`),
  KEY `createymd` (`createymd`),
  KEY `fake_id` (`fake_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='微信内容' AUTO_INCREMENT=166 ;

--
-- 表的结构 `weixin_qcode`
--

CREATE TABLE IF NOT EXISTS `weixin_qcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `content` varchar(100) NOT NULL,
  `qcode` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='二维码表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `weixin_qcode`
--

INSERT INTO `weixin_qcode` (`id`, `type`, `content`, `qcode`) VALUES
(2, 2, '1', 'gQFX8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0YwenV1WDdsSEMxbE1ldUE5V0NsAAIEVdAaUwMEAAAAAA=='),
(1, 1, '567', 'gQHd8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzZFejM0cERsRmkxdmV4VEk3R0NsAAIE+88aUwMEAAAAAA=='),
(3, 1, '567', 'gQFz8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1RrejJCczNsR2kxalpMSWg3V0NsAAIELOMaUwMEAAAAAA==');

-- --------------------------------------------------------

--
-- 表的结构 `weixin_user`
--

CREATE TABLE IF NOT EXISTS `weixin_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `ecuid` int(11) NOT NULL COMMENT '绑定用户ID',
  `fake_id` varchar(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `isfollow` tinyint(1) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `sign_num` INT NOT NULL COMMENT  '连续签到次数',
  `access_token` varchar(40) NOT NULL COMMENT 'token',
  `expire_in` int(11) NOT NULL COMMENT 'token到期时间',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `fake_id` (`fake_id`),
  KEY `ecuid` (`ecuid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='微信用户表' AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `weixin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createtime` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `value` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='扫描登陆表' AUTO_INCREMENT=1 ;


INSERT INTO `ecs_admin_action` (`action_id`, `parent_id`, `action_code`, `relevance`) VALUES
(200, 0, 'weixin_manage', ''),
(201, 200, 'weixin_config', ''),
(202, 200, 'weixin_addconfig', ''),
(203, 200, 'weixin_menu', ''),
(204, 200, 'weixin_notice', ''),
(205, 200, 'weixin_keywords', ''),
(206, 200, 'weixin_fans', ''),
(207, 200, 'weixin_news', ''),
(208, 200, 'weixin_addqcode', ''),
(209, 200, 'weixin_qcode', ''),
(210, 200, 'weixin_reg', ''),
(211,200, 'weixin_oauth', ''),
(212,200, 'weixin_qiandao', ''),
(213,200, 'weixin_addkey', ''),
(214, 200, 'weixin_act', ''),
(215, 200, 'weixin_award', '');


CREATE TABLE IF NOT EXISTS `weixin_oauth` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `weburl` varchar(200) NOT NULL,
  `click` int(11) NOT NULL,
  `id` int(11) NOT NULL COMMENT '分站ID',
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `weixin_sign` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `wxid` int(11) NOT NULL,
  `signtime` int(11) NOT NULL,
  `signymd` date NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `wxid` (`wxid`,`signymd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='签到表' AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `weixin_signconf` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `startymd` date NOT NULL,
  `endymd` date NOT NULL,
  `num` int(11) NOT NULL,
  `bignum` int(11) NOT NULL,
  `addnum` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='签到配置表' AUTO_INCREMENT=1 ;


--
-- 表的结构 `weixin_act`
--

CREATE TABLE IF NOT EXISTS `weixin_act` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `isopen` tinyint(1) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1 每日 2合计',
  `num` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='活动配置表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `weixin_act`
--

INSERT INTO `weixin_act` (`aid`, `title`, `content`, `isopen`, `type`, `num`) VALUES
(1, '砸金蛋', '砸金蛋了哦亲！', 1, 2, 100);

-- --------------------------------------------------------

--
-- 表的结构 `weixin_actlist`
--

CREATE TABLE IF NOT EXISTS `weixin_actlist` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `awardname` varchar(200) NOT NULL,
  `randnum` decimal(6,2) NOT NULL,
  `num` int(11) NOT NULL,
  `isopen` tinyint(1) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='奖项明细' AUTO_INCREMENT=4 ;
INSERT INTO `weixin_actlist` (`lid`, `aid`, `title`, `awardname`, `randnum`, `num`, `isopen`) VALUES
(1, 1, '一等奖', 'ipad air', 0.50, 1, 1),
(2, 1, '二等奖', 'ipad mini', 10.00, 5, 1),
(3, 1, '三等奖', 'itouch', 20.00, 10, 1);

CREATE TABLE IF NOT EXISTS `weixin_actlog` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `class_name` varchar(200) NOT NULL,
  `createymd` date NOT NULL,
  `createtime` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `issend` tinyint(4) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `uid` (`uid`,`createymd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='抽奖明细' AUTO_INCREMENT=1 ;

ALTER TABLE  `weixin_actlist` ADD  `num2` INT NOT NULL AFTER  `num`;

INSERT INTO `weixin_signconf` (`cid`, `startymd`, `endymd`, `num`, `bignum`, `addnum`) VALUES
(1, '2014-06-14', '2018-06-28', 10, 50, 5);


ALTER TABLE `ecs_order_info` ADD `froms` CHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'pc' COMMENT 'pc:电脑,mobile:手机,app:应用'

ALTER TABLE `ecs_users` ADD `froms` CHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'pc' COMMENT 'pc:电脑,mobile:手机,app:应用'


ALTER TABLE  `weixin_config` ADD  `title` VARCHAR( 100 ) NOT NULL AFTER  `id`;

ALTER TABLE  `weixin_user` ADD  `from_id` INT NOT NULL;

ALTER TABLE  `weixin_user` ADD INDEX (  `from_id` );



ALTER TABLE  `weixin_act` ADD  `tpl` TINYINT NOT NULL ,
ADD  `overymd` DATE NOT NULL;

UPDATE `weixin_act` SET  `tpl` =  '1',`overymd` =  '2014-12-01' WHERE `aid` =1;
INSERT INTO `weixin_act` (`aid`, `title`, `content`, `isopen`, `type`, `num`, `tpl`, `overymd`) VALUES
(2, '刮刮卡', '刮刮卡！', 1, 2, 100, 2, '2014-12-01');
INSERT INTO `weixin_act` (`aid`, `title`, `content`, `isopen`, `type`, `num`, `tpl`, `overymd`) VALUES 
(3, '大转盘', '大转盘大转盘', '1', '2', '100', '3', '2014-12-30');

ALTER TABLE  `weixin_user` ADD  `Latitude` VARCHAR( 32 ) NOT NULL ,
ADD  `Longitude` VARCHAR( 32 ) NOT NULL ,
ADD  `Precision` VARCHAR( 32 ) NOT NULL;

ALTER TABLE  `weixin_actlog` ADD  `aid` INT NOT NULL AFTER  `uid`;