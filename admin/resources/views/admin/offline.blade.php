<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>错误页面</title>
<link rel="stylesheet" href="admins/css/style.default.css" type="text/css" />
<script type="text/javascript" src="admins/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="admins/js/custom/general.js"></script>
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

<body>
<div class="bodywrapper">
    <div class="topheader orangeborderbottom5">
        <div class="left">
            <h1 class="logo">Ama.<span>Admin</span></h1>
            <span class="slogan">后台管理系统</span>
            
            <div class="search">
            	<form action="" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<!--
			<div class="notification">
                <a class="count" href="notifications"><span>9</span></a>
        	</div>
			-->
            <div class="userinfo">
            	<img src="admins/images/thumbs/avatar.png" alt="" />
                <span>Juan Dela Cruz</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">            	<div class="avatar">
                	<a href=""><img src="admins/images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                    	Change theme: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
<div class="userdata">
                	<h4>Juan Dela Cruz</h4>
                    <span class="email">youremail@yourdomain.com</span>
                    <ul>
                    	<li><a href="editprofile">Edit Profile</a></li>
                        <li><a href="accountsettings">Account Settings</a></li>
                        <li><a href="help">Help</a></li>
                        <li><a href="index">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="contentwrapper padding10">
    	<div class="errorwrapper error403">
        	<div class="errorcontent">
                <h1>Update in Progress</h1>
                <h3>Please come back again soon as we're working on the issue now.</h3>
                
                <p>Sorry this site is temporarily unavailable while an essential software update is being performed. <br />Please try again in an hour or less when the update should be complete.</p>
                <br />
                <button class="stdbtn btn_black" onclick="history.back()">Go Back to Previous Page</button> &nbsp; 
                <button onclick="location.href='dashboard'" class="stdbtn btn_orange">Go Back to Dashboard</button>
            </div><!--errorcontent-->
        </div><!--errorwrapper-->
    </div>    
    
    
</div><!--bodywrapper-->

</body>
</html>
