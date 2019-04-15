	<noscript>
		<div class="alert alert-danger">{LANG.nojs}</div>
	</noscript>
<body class="hold-transition skin-blue sidebar-mini menu-hover">
    <div class="wrapper">
        <header class="main-header">
            <!-- BEGIN: image -->
            <a title="{SITE_NAME}" href="{THEME_SITE_HREF}" class="logo"><img src="{LOGO_SRC}" width="{LOGO_WIDTH}" height="{LOGO_HEIGHT}" alt="{SITE_NAME}" class="logo-img" /></a>
            <!-- END: image -->
            <!-- BEGIN: swf -->
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="{LOGO_WIDTH}" height="{LOGO_HEIGHT}">
                <param name="wmode" value="transparent" />
                <param name="movie" value="{LOGO_SRC}" />
                <param name="quality" value="high" />
                <param name="menu" value="false" />
                <param name="seamlesstabbing" value="false" />
                <param name="allowscriptaccess" value="samedomain" />
                <param name="loop" value="true" />
                <!--[if !IE]> <-->
                <object type="application/x-shockwave-flash" width="{LOGO_WIDTH}" height="{LOGO_HEIGHT}" data="{LOGO_SRC}">
                    <param name="wmode" value="transparent" />
                    <param name="pluginurl" value="http://www.adobe.com/go/getflashplayer" />
                    <param name="loop" value="true" />
                    <param name="quality" value="high" />
                    <param name="menu" value="false" />
                    <param name="seamlesstabbing" value="false" />
                    <param name="allowscriptaccess" value="samedomain" />
                </object>
                <!--> <![endif]-->
            </object>
            <!-- END: swf -->
            <!-- BEGIN: site_name_h1 -->
            <h1 class="hidden">{SITE_NAME}</h1>
            <h2 class="hidden">{SITE_DESCRIPTION}</h2>
            <!-- END: site_name_h1 -->
            <!-- BEGIN: site_name_span -->
            <span class="site_name hidden">{SITE_NAME}</span> <span class="site_description hidden">{SITE_DESCRIPTION}</span>
            <!-- END: site_name_span -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu">[NOTIFICATION]</li>
                        <li class="dropdown user user-menu ">[PERSONALAREA]</li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">[CONTACT_DEFAULT]</div>
                <!-- BEGIN: sitemod_area  -->
                <div class="headerSearch sidebar-form">
                    <div class="input-group">
                        <input type="text" class="form-control" maxlength="{NV_MAX_SEARCH_LENGTH}" placeholder="{LANG.search}...">
                        <span class="input-group-btn"><button type="button" class="btn btn-info" data-url="{THEME_SEARCH_URL}" data-minlength="{NV_MIN_SEARCH_LENGTH}" data-click="y">
                                <em class="fa fa-search fa-lg"></em>
                            </button></span>
                    </div>
                </div>
                <!-- END: sitemod_area  -->
                [MENU_SITE]
            </section>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {SITE_NAME} <small>{SITE_DESCRIPTION}</small>
                </h1>
                <!-- BEGIN: breadcrumbs -->
                <ol class="breadcrumb">
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{THEME_SITE_HREF}" itemprop="url" title="{LANG.Home}"><span itemprop="title"><i class="fa fa-dashboard"></i>{LANG.Home}</span></a></li>
                    <!-- BEGIN: loop -->
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{BREADCRUMBS.link}" itemprop="url" title="{BREADCRUMBS.title}"><span class="txt" itemprop="title">{BREADCRUMBS.title}</span></a></li>
                    <!-- END: loop -->
                </ol>
                <!-- END: breadcrumbs -->
            </section>
            [THEME_ERROR_INFO]