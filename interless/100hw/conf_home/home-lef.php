

<div id="cnt-lef-itm" class="cnt-tr-itm cnt-lef-itm">
    <div class="acn-ac-nav">
        <div class="ass-spa-cnt"><button id="fecharcnt" class="btn btn-close-nav btn-cnt-close">x</button></div>
        <div class="cnt-act-hed">
            <div class="item-cnt-lef cnt-lef-username">
                <?php if ($user['profile_image']): ?>
                    <a href="?pagesStamen=uploadImagem" class="cnt-user-icon">
                        <img class="icon-sml-img" src="conf_home/profile_conf/uploads/<?php echo $user['profile_image'];?>" alt="user icon">
                    </a>
                <?php else: ?>
                    <a href="?pagesStamen=uploadImagem" class="cnt-user-icon">
                        <img class="icon-sml-img" src="./static/midia/img/user.png" alt="user icon">
                    </a>
                <?php endif; ?>
                <span class="cnt-user-txt"><?php echo $_SESSION['username_hw'];?></span>
            </div>
            <div class="item-cnt-lef cnt-lef-quick-view">
                <span class=" icon-ls itm-icon-qui"><img class="icon-sml-img" src="./static/midia/img/rapid.png" alt="quick settings icon"></span>
                <span class="icon-txt itm-icon-qui"></span>
            </div>
        </div>
    </div>

    <div class="item-cnt-lef">
        <nav class="navbar sst-inc nav-inc">
            <button type="button" class="btn btn-nav btn-menu btn-menu-navbar"></button>
            <ul id="home-nav-cnt" class="cnt-nav nav-cnt-home">
                <div class="ass-spa"><button id="btnCloseNavBar" class="btn btn-close-nav">x</button></div>
                <div class="conf conf-sit itm-sit">
                    <li class="cnt-lk lk-esc-fr-itm"><a href="pass_conf.php?confPages=newOfficcePage">New</a></li>
                    <li class="cnt-lk lk-esc-fr-itm"><a href="user/profile.php">Profile</a></li>
                    <li class="cnt-lk lk-esc-fr-itm"><a href="?pagesCenter=platform">Plataformas</a></li>
                </div>
                <div class="conf conf-sst">
                    <li class="cnt-lk lk-esc-fr-itm"><a href="?pagesCenter=settings">Definições</a></li>
                    <li class="cnt-lk lk-esc-fr-itm"><a href="includes/logount.php">Logout</a></li>
                </div>
            </ul>
        </nav>
    </div>
</div>