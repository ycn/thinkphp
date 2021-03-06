<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie ie6" lang="zh"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie ie7" lang="zh"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie ie8" lang="zh"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie ie9" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="zh"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>{$title} - {&SITE_NAME}</title>
	<meta name="copyright" content="{&SITE_DOMAIN}" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script>function bust(){document.write='';window.top.location=window.self.location;setTimeout(function(){document.body.innerHTML='';},0);window.self.onload=function(evt){document.body.innerHTML='';};}if(window.top !== window.self){try{if (window.top.location.host){}else{bust();}}catch(ex){bust();}}</script>
	<link rel="shortcut icon" type="image/x-icon" href="{&STATIC_SERVER}/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="{&STATIC_SERVER}/css/common.css?{&STATIC_VERSION}" />
	<script src="{&STATIC_SERVER}/js/bootstrap.js?{&STATIC_VERSION}"></script>

	<present name="alTinyObj">
	<script>alTiny.initialize({$alTinyObj});</script>
	<literal>
	<script>
	$LAB.setOptions({BasePath: alTiny.app.scriptRoot + '/'})
		.script('jquery.js')
	</literal><present name="scriptQueue">
		.wait().script({$scriptQueue})</present><literal>
		.wait(function(){ alTiny.fireReady(); });
	</script>
	</literal>
	</present>

	<!--[if lt IE 7 ]>
	<script type="text/javascript" src="{&STATIC_SERVER}/js/pngfix.js?{&STATIC_VERSION}"></script>
	<![endif]-->
</head>
<body>