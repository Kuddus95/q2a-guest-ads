<?php


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

qa_register_plugin_layer('qa-guestads-layer.php', 'Q2A Guest Ads');
qa_register_plugin_module('module', 'qa-guestads-options.php', 'pt_qa_guestads', 'Guest Ads Options');
	
?>
