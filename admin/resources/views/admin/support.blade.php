<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>客户支持页面</title>
<link rel="stylesheet" href="admins/css/style.default.css" type="text/css" />
<script type="text/javascript" src="admins/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="admins/js/custom/general.js"></script>
<script type="text/javascript" src="admins/js/custom/support.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="admins/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="admins/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="admins/js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    @include('admin.header')
    @include('admin.leftmenu') <!-- 左侧菜单 -->
        
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Customer Support</h1>
            <span class="pagedesc">This is a sample description of a page</span>
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper withrightpanel">
        
        	<div class="subcontent chatcontent">
                   
                   <div id="chatmessage" class="chatmessage radius2">
                   		<div id="chatmessageinner"></div><!--chatmessageinner-->
                   </div><!--chatmessage-->
                   	
                   <div class="messagebox radius2">
                   		<button>Send</button>
                   		<span class="inputbox">
                   			<input type="text" id="msgbox" name="msgbox"  />
                        </span>
                        
                   </div>
                   
            </div><!--subcontent-->
        
        </div><!--contentwrapper-->
        
        
        <div class="rightpanel">
        	<div class="rightpanelinner">
                <div class="widgetbox uncollapsible">
                	<div class="title"><h4>Online Users</h4></div>
                    <div class="widgetcontent nopadding">
                    	<div class="chatsearch">
                        	<input type="text" name="" value="Search" />
                        </div>
                    	<ul class="contactlist">
                        	<li class="online new"><a href=""><img src="admins/images/thumbs/avatar5.png" alt="" /> <span>Hiccup Haddock III</span></a><span class="msgcount">3</span></li>
                            <li><a href=""><img src="admins/images/thumbs/avatar6.png" alt="" /> <span>Astrid Hofferson</span></a></li>
                            <li class="online"><a href=""><img src="admins/images/thumbs/avatar7.png" alt="" /> <span>Vector</span></a></li>
                            <li class="online"><a href=""><img src="admins/images/thumbs/avatar8.png" alt="" /> <span>Puss in Boots</span></a></li>
                            <li class="online new"><a href=""><img src="admins/images/thumbs/avatar9.png" alt="" /> <span>Humpty Dumpty</span></a><span class="msgcount">1</span></li>
                            <li><a href=""><img src="admins/images/thumbs/avatar10.png" alt="" /> <span>Shrek</span></a></li>
                            <li><a href=""><img src="admins/images/thumbs/avatar11.png" alt="" /> <span>Princess Fiona</span></a></li>
                        </ul>
                    </div><!--widgetcontent-->
                </div><!--widgetbox-->
            </div><!--rightpanelinner-->
        </div><!--rightpanel-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>
