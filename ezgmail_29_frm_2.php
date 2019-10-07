<?php
$p_id='frm_2';
$rel_path='';
$p_name='lab2.html';
$p_dir='';
$use_captcha=true;
$send_to='your@email.here';
$send_to_bcc='';
$forbid_urls=FALSE;
$page_encoding='UTF-8';
$re_upfields=array();
$re_fields=array("name","Field9","field10","address","city","country","email5");
$field_labels=array("name"=>"name","Field9"=>"Field9","field10"=>"field10","address"=>"address","city"=>"city","country"=>"country","email5"=>"email5","Ghichu"=>"Ghichu","Field7"=>"Field7");
$mail_fields=array("email5");
$lang_uc=array("Email not valid"=>"E-mail address is not valid. Please change it and try again...","Emails do not match"=>"Email confirmation does not match your Email","Required Field"=>"Required Field","Checkbox unchecked"=>"Field must be checked","Captcha Message"=>"Verification code does not match","validation failed"=>"Please correct the errors on this form.","post waiting approval"=>"Your message was posted, but waiting for approval. Once approved, it will appear on page.","login on comments"=>"Please Login to post comments!","dear"=>"Dear","email in use"=>"email in use","submit_btn"=>"submit","loading"=>"Loading...","total votes"=>"Total Votes","votes"=>"votes","ranking"=>"ranking","ranking mandatory"=>"Ranking is mandatory!","Sunday"=>"Sunday","Monday"=>"Monday","Tuesday"=>"Tuesday","Wednesday"=>"Wednesday","Thursday"=>"Thursday","Friday"=>"Friday","Saturday"=>"Saturday","January"=>"January","February"=>"February","March"=>"March","April"=>"April","May"=>"May","June"=>"June","July"=>"July","August"=>"August","September"=>"September","October"=>"October","November"=>"November","December"=>"December","second"=>"second","seconds"=>"seconds","minute"=>"minute","minutes"=>"minutes","hour"=>"hour","hours"=>"hours","day"=>"day","days"=>"days","week"=>"week","weeks"=>"weeks","month"=>"month","months"=>"months","year"=>"year","years"=>"years");
$AllowedTypes='gif|jpg|jpeg|png|svg|mp3|swf|asf|avi|mpg|mpeg|wav|wma|mid|wmw|mov|ram|bmp|pdf|doc|docx|xls|csv|xlsx|txt|odt|zip|dwg|stp|x_t|';
$subject="Request";
$submit_url="";
$reply_enabled=0;
$max_imagesize=0;
$visual=true;

$submit_body=<<<MSG
Thank you
MSG;
$main_message=<<<MSG
%FORM_DATA%
MSG;
$reply_message=<<<MSG
Thank you for your request!
MSG;
$sendto_array=explode(";",$send_to);
$reply_from='';if($reply_from=='')$reply_from=$sendto_array[0];
$reply_subject="reply";
$lang_l=array("settings"=>"settings","mails log"=>"mails log","logout[admin]"=>"logout[admin]","logout"=>"logout","administration"=>"administration","profile"=>"profile","sitemap"=>"sitemap","date"=>"date","page"=>"page","recipient/from"=>"recipient/from","subject/message/attachments"=>"subject/message/attachments","status"=>"status","remove"=>"remove","sent"=>"sent","re-send"=>"re-send","clear log MSG"=>"clear log MSG","clear log"=>"clear log","failed"=>"failed");
$mobile_detect_mode="0";

include_once($rel_path.'ezg_data/functions.php');
include_once($rel_path.'ezg_data/ezgmail.php');

?>
