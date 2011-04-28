<?php 
class i18n
{
	var $lang = 'zh-TW';
	var $l10n_sets = array
	(
	'en' => array(
		 '首頁' => 'Home',
		 '台灣台北' => 'Taipei, Taiwan',
		 '加到 Google 日曆' => 'Add to Google Calendar',
		 'Facebook 粉絲團' => 'Facebook Page',
		 'Twitter' => 'Twitter',
		 '噗浪' => 'Plurk',
		 '部落格 RSS Feed' => 'Blog RSS Feed',
		 '2011 年 8 月 20 - 21 日' => 'August 20th - 21st, 2011',
		 'HOME_URI_APPENDS' => 'en/',
		 'COPYRIGHT' => '&copy; 2011 COSCUP. <a href="http://coscup.org/2011-beta/en/contact/">Contact us</a>.'
		 ),
	'zh-CN' => array(
		 '首頁' => '首页',
		 '開源人年會' => '开源爱好者年会',
		 '台灣台北' => '台湾台北',
		 '加到 Google 日曆' => '加到 Google 日历',
		 'Facebook 粉絲團' => 'Facebook 粉丝页面',
		 'Twitter' => 'Twitter',
		 '噗浪' => '噗浪',
		 '部落格 RSS Feed' => '博客 RSS 种子',
		 'HOME_URI_APPENDS' => 'zh-cn/',
		 'COPYRIGHT' => '&copy; 2011 COSCUP。<a href="http://coscup.org/2011-beta/zh-cn/contact/">联系我们</a>。'
		 ),
	'zh-TW' => array(
		 'HOME_URI_APPENDS' => 'zh-tw/',
		 'COPYRIGHT' => '&copy; 2011 COSCUP。<a href="http://coscup.org/2011-beta/zh-tw/contact/">聯絡我們</a>。'
		 )
	);

	function _($s)
	{

		if ( isset($this->l10n_sets[$this->lang]) && isset($this->l10n_sets[$this->lang][$s]) )
		{
			return $this->l10n_sets[$this->lang][$s];
		}
		return $s;
	}
}
