<?php
/**
* 	配置账号信息
*/

class WxPayConfig
{
	public static $APPID;
	public static $MCHID;
	public static $KEY;
	public static $APPSECRET;
	public static $SSLCERT_PATH;
	public static $SSLKEY_PATH;
	const CURL_PROXY_HOST = "0.0.0.0";//"10.152.18.220";
	const CURL_PROXY_PORT = 0;//8080;
	const REPORT_LEVENL = 1;
	public static function init($wx){
		self::$APPID = $wx['appid'];
		self::$MCHID = $wx['mchid'];
		self::$KEY = $wx['mchkey'];
		self::$APPSECRET = $wx['appkey'];
		self::$SSLCERT_PATH =ROOT_PATH.$wx['sslcert_path'];
		self::$SSLKEY_PATH=ROOT_PATH.$wx['sslkey_path'];
	}
}
