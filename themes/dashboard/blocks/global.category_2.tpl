<!-- BEGIN: submenu -->
<ul class="treeview-menu">
    <!-- BEGIN: loop -->
    <li>
        <!-- BEGIN: strong --> <a href="{SUBMENU.link}" title="{SUBMENU.note}"{SUBMENU.target}><i class="fa fa-circle-o"></i>{SUBMENU.title_trim}</a> <!-- END: strong --> <!-- BEGIN: normal --> <a href="{SUBMENU.link}" title="{SUBMENU.note}"{SUBMENU.target}>{SUBMENU.title_trim}</a> <!-- END: normal --> <!-- BEGIN: item --> {SUB} <!-- END: item -->
    </li>
    <!-- END: loop -->
</ul>
<!-- END: submenu -->
<!-- BEGIN: main -->
<ul class="sidebar-menu visible-xs visible-sm" data-widget="tree">
    <!-- BEGIN: top_menu -->
    <li class="treeview" ><a style="cursor: pointer;">
    <i class="{TOP_MENU.css}"></i>
     <!-- BEGIN: icon -->
<!--             <div class="icon-img"> -->
<!--                 <img src="{TOP_MENU.icon}" alt="nav-cat" class="img-responsive"> -->
<!--             </div> -->
     <!-- END: icon -->
<span  onclick="window.location='{TOP_MENU.link}'" title="{TOP_MENU.title}">{TOP_MENU.title_trim}</span> <!--  BEGIN: iconsub --> <span class="pull-right-container material-button-toggle"> <i class="fa fa-angle-left pull-right"></i>
        </span> <!--  END: iconsub -->
    </a> <!-- BEGIN: sub --> {SUB} <!-- END: sub --></li>
    <!-- END: top_menu -->
    <div class="clear"></div>
</ul>
<!-- END: main -->
