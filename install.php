<?php
 
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

$sql ="
CREATE TABLE `pre_haoxinqing_me_cj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `page_regex` varchar(50) DEFAULT NULL,
  `list_regex` varchar(50) DEFAULT NULL,
  `title_regex` varchar(50) DEFAULT NULL,
  `content_regex` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  `fid` int(8) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `src_pre` varchar(50) DEFAULT NULL,
  `html_on` varchar(50) DEFAULT NULL,
   `type` tinyint(1) DEFAULT '0',
   `download` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of pre_haoxinqing_me_cj
-- ----------------------------
INSERT INTO  `pre_haoxinqing_me_cj` (`id`, `name`, `page_regex`, `list_regex`, `title_regex`, `content_regex`, `url`, `num`, `fid`, `user_name`, `path`, `src_pre`, `html_on`) VALUES ('1', '".$installlang['install_1']."', '#page_sytle', '.tj3_1 a', '.l_tit', '#articleText', 'http://news.youth.cn/gn/?src=index', '1', '2', 'admin|admin', 'gn', '', '0');
INSERT INTO  `pre_haoxinqing_me_cj` (`id`, `name`, `page_regex`, `list_regex`, `title_regex`, `content_regex`, `url`, `num`, `fid`, `user_name`, `path`, `src_pre`, `html_on`) VALUES ('2', '".$installlang['install_2']."', '#fd_page_bottom a', '#threadlisttableid .xst', '#thread_subject', '.t_f', 'http://www.kuozhan.net/forum-71-1.html', '1', '2', 'admin|admin', '', 'file', '0');
INSERT INTO  `pre_haoxinqing_me_cj` (`id`, `name`, `page_regex`, `list_regex`, `title_regex`, `content_regex`, `url`, `num`, `fid`, `user_name`, `path`, `src_pre`, `type`) VALUES ('3', 'WeiXin', '', '', '#activity-name', '#js_content', 'http://weixin.sogou.com/gzhjs?cb=sogou.weixin.gzhcb&openid=oIWsFt0D3t5615WcW4c_WnvqFNRw&eqs=uVsAovSgibYfo%2F%2BXoQM55urmCauV6ZYJuHN2JTCfkCcr2em%2BaMf3HLsn8lQqucOe426pa&ekv=7&page=2&t=1438656034445', '1', '2', 'admin|admin', '', '', '1');
";

runquery($sql);
$finish = true;
?>