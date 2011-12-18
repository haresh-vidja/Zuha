<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; __(' : Zuha Business Management'); ?></title>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="robots" content="index, follow" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta name="viewport" content="width=device-width"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('system');
	echo $this->Html->css('admin/jquery-ui-1.8.13.custom');
	echo $this->Html->css('admin/mobi');
	# no rhyme or reason about the directory structure here, needs to be cleaned up at some point
	echo $this->Html->script('jquery-1.5.2.min');
	echo $this->Html->script('admin/jquery-ui-1.8.13.custom.min');
	echo $this->Html->script('jquery.jeditable');
	echo $this->Html->script('admin/jquery.truncator');
	echo $this->Html->script('system/jquery.cookie');
	echo $this->Html->script('admin/admin');
	echo $scripts_for_layout;
	if (defined('__REPORTS_ANALYTICS')) :
		echo $this->Element('analytics', array(), array('plugin' => 'reports'));
	endif;
?>
</head>
<body class="<?php echo $this->request->params['controller']; echo ($this->Session->read('Auth.User') ? __(' authorized') : __(' restricted')); ?>" id="<?php echo !empty($this->request->params['pass'][0]) ? strtolower($this->request->params['controller'].'_'.$this->request->params['action'].'_'.$this->request->params['pass'][0]) : strtolower($this->request->params['controller'].'_'.$this->request->params['action']); ?>" lang="<?php echo Configure::read('Config.language'); ?>">
<div id="siteWrap">
  <?php #echo $this->Element('navigation', array('plugin' => 'webpages')); ?>
  <?php #echo $this->Element('admin/quick_nav'); ?>
  <?php #echo !empty($tabsElement) ? $this->Element($tabsElement.'/tabs', array(), array('plugin' => $this->request->params['plugin'])) : ''; ?>
  <div id="siteContent">
    <div id="contentWrap">
      <div id="content">
		<?php echo $this->Session->flash(); ?> <?php echo $this->Session->flash('auth'); ?>
        <?php $helper_text_for_layout = !empty($helper_text_for_layout) ? $helper_text_for_layout : null; ?>
        <?php echo $this->Element('admin/helper_text', array('overwrite' => $helper_text_for_layout)); ?>
        <!-- #compareChartHeader -->
        <div class="contentSection"> <?php echo $content_for_layout; ?> </div>
        <!-- #compareChart -->
      </div>
    </div>
  </div>
  <?php echo $this->Element('admin/footer_nav'); ?> <?php echo $this->Element('sql_dump');  ?> <?php echo !empty($dbSyncError) ? $dbSyncError : null; ?>
</div>
</body>
</html>