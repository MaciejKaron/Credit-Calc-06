<?php

require_once dirname(__FILE__).'/Config.class.php';

$conf = new Config();

$conf->server_name = 'localhost:8080';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Credit-Calc-06';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);
$conf->action_root = $conf->app_root.'/app/control.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;

?>