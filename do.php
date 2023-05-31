<?php 
$ip_info = isset($_SERVER['HTTP_IP']) ? $_SERVER['HTTP_IP'] : 'Unknown';
$ip_city = isset($_SERVER['HTTP_IP_CITY']) ? $_SERVER['HTTP_IP_CITY'] : 'Unknown';
$ip_asn = isset($_SERVER['HTTP_IP_ASN']) ? $_SERVER['HTTP_IP_ASN'] : 'Unknown';
$ip_country = isset($_SERVER['HTTP_IP_COUNTRY']) ? $_SERVER['HTTP_IP_COUNTRY'] : 'Unknown';
$ip_http = isset($_SERVER['HTTP_IP_HTTP']) ? $_SERVER['HTTP_IP_HTTP'] : 'Unknown';
$ip_lat = isset($_SERVER['HTTP_IP_LAT']) ? $_SERVER['HTTP_IP_LAT'] : 'Unknown';
$ip_lon = isset($_SERVER['HTTP_IP_LON']) ? $_SERVER['HTTP_IP_LON'] : 'Unknown';
$ip_threat = isset($_SERVER['HTTP_IP_THREAT']) ? $_SERVER['HTTP_IP_THREAT'] : 'Unknown';
$ip_time = isset($_SERVER['HTTP_IP_TIME']) ? $_SERVER['HTTP_IP_TIME'] : 'Unknown';
$ip_ua = isset($_SERVER['HTTP_IP_UA']) ? $_SERVER['HTTP_IP_UA'] : 'Unknown';
$ip_zip = isset($_SERVER['HTTP_IP_ZIP']) ? $_SERVER['HTTP_IP_ZIP'] : 'Unknown';
$title = $t["ip_info"]; 

// 默认的翻译字符串
$translations = array(
    "my_ip_info" => "查看我的IP信息",
    "ip_info" => "IP",
    "ip_city" => "城市",
    "ip_asn" => "ASN",
    "ip_country" => "国家/地区",
    "ip_http" => "HTTP",
    "ip_longitude" => "经度",
    "ip_latitude" => "纬度",
    "ip_zipcode" => "邮编",
    "ip_threatindex" => "威胁指数",
    "ip_timezone" => "时区",
    "ip_ua" => "UA",
);

// 英文翻译字符串
$translations_en = array(
    "my_ip_info" => "View My IP Information",
    "ip_info" => "IP",
    "ip_city" => "City",
    "ip_country" => "Country",
    "ip_asn" => "ASN",
    "ip_http" => "HTTP",
    "ip_longitude" => "Longitude",
    "ip_latitude" => "Latitude",
    "ip_zipcode" => "Zip Code",
    "ip_threatindex" => "Threat Index",
    "ip_timezone" => "Time Zone",
    "ip_ua" => "UA",
);

// 中文翻译字符串
$translations_zh = array(
    "my_ip_info" => "查看我的IP信息",
    "ip_info" => "IP",
    "ip_city" => "城市",
    "ip_asn" => "ASN",
    "ip_country" => "国家/地区",
    "ip_http" => "HTTP",
    "ip_longitude" => "经度",
    "ip_latitude" => "纬度",
    "ip_zipcode" => "邮编",
    "ip_threatindex" => "威胁指数",
    "ip_timezone" => "时区",
    "ip_ua" => "UA",
);

// 尝试从浏览器语言首选项中获取语言代码
$locale = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$locale = substr($locale, 0, 2); // 取前两个字符作为语言代码

// 如果用户已选择语言，则使用其选择的语言
if (isset($_GET['lang'])) {
    $locale = $_GET['lang'];
}

// 选择正确的翻译数组
switch ($locale) {
    case "en":
        $t = $translations_en;
        break;
    case "zh":
        $t = $translations_zh;
        break;
    default:
        $t = $translations;
        break;
}
?>