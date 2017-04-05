<?php
	$project = '/';
	define('SITE_PATH', 'http://'.$_SERVER['SERVER_NAME'].$project); //echo SITE_PATH;die;
	define('SITE_HTTPS_PATH', str_replace('http', 'https', SITE_PATH));
	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].$project);
	define('IP', $_SERVER['REMOTE_ADDR']);
	define('PAGINATION', 20);
	define('ADMIN_PAGE_TITLE', 'Recruitment Agency');
	define('REGARDS_TEAM', 'Recruitment Agency Team.');
	define('ADMIN_EMAIL_FROM', 'support@recruitment-agency.com');
	define('GLOBAL_HELPER_COMPONENT', 'Sport');
	define('IMAGE_TYPES', serialize(array('image/png','image/jpg','image/jpeg')));
	define('CONTACT_EMAILS', serialize(array('chauhanarun10@gmail.com')));
?>