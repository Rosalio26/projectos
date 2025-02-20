

<div id="cnt-lef-itm" class="cnt-tr-itm cnt-lef-itm">
    <div class="acn-ac-nav">

        <div class="ass-spa-cnt">
            <button 
                id="fecharcnt" 
                class="btn btn-close-nav btn-cnt-close">x</button>
        </div>

        <div class="cnt-act-hed">

            <div id="cnt-image-inf" onclick="infImage()" class="item-cnt-lef cnt-lef-username">
                <?php if ($user_details['profile_image']): ?>
                    <button class="cnt-user-icon">
                        <img class="icon-sml-img" src="conf_home/profile_conf/uploads/<?php echo $user_details['profile_image'];?>" alt="user icon">
                    </button>
                <?php else: ?>
                    <button class="cnt-user-icon">
                        <img class="icon-sml-img" src="./static/midia/img/user.png" alt="user icon">
                    </button>
                <?php endif; ?>
            </div>

            <div class="cnt-inf-imagem">
                <div class="cnt-close-btn">
                    <button id="btn-close" class="btn btn-close">x</button>
                </div>
                <nav class="cnt-list-inf">
                    <ul class="itm-ms-inf">
                        <li class="cnt-user"><?php echo $_SESSION['username_hw'];?></li>
                        <li><a class="cnt-lk-inf">edit</a></li>
                        <li><a href="includes/logount.php" class="cnt-lk-inf dangerous-act"><img class="icon-img" src="./static/style/icon/turn-off.png">logout</a></li>
                    </ul>
                </nav>
                
            </div>

            <div class="item-cnt-lef cnt-lef-quick-view">

                <button class="icon-ls itm-icon-qui">
                    <img 
                        class="icon-sml-img" 
                        src="./static/midia/img/refresh-888.png" 
                        alt="quick settings icon">
                </button>

                <span class="icon-txt itm-icon-qui">
                    <ul></ul>
                </span>
            </div>
            <span class="cnt-user-txt"><?php echo $_SESSION['username_hw'];?></span>

        </div>
    </div>

    <div class="item-cnt-lef">
        <nav class="navbar sst-inc nav-inc">
            <button type="button" class="btn btn-nav btn-menu btn-menu-navbar"></button>
            <ul id="home-nav-cnt" class="cnt-nav nav-cnt-home">
                <div class="ass-spa"><button id="btnCloseNavBar" class="btn btn-close-nav">x</button></div>
                <div class="conf conf-sit itm-sit">
                    <li class="cnt-lk lk-esc-fr-itm">
                        <a href="pass_conf.php?confPages=newOfficcePage"><img class="icon-img" src="./static/style/icon/more.png">New</a>
                    </li>

                    <li class="cnt-lk lk-esc-fr-itm">
                        <a href="index.php"><img class="icon-img" src="./static/style/icon/casa-1.png">Home</a>
                    </li>

                    <li class="cnt-lk lk-esc-fr-itm"><a href="profile.php"><img class="icon-img" src="./static/style/icon/user.png">Profile</a></li>
                    <li class="cnt-lk lk-esc-fr-itm"><a href="?pagesCenter=ficheiros"><img class="icon-img" src="./static/style/icon/folder.png">Ficheiros</a></li>
                    <li class="cnt-lk lk-esc-fr-itm"><a href="?pagesCenter=platform"><img class="icon-img" src="./static/style/icon/responsive.png">Plataformas</a></li>
                </div>
                <div class="conf conf-sst">
                    <li class="cnt-lk lk-esc-fr-itm">
                        <a href="?pagesCenter=settings"><img class="icon-img" src="./static/style/icon/settings-2.png">Definições</a>
                    </li>

                    <li class="cnt-lk lk-esc-fr-itm dangerous-act"><a href="form_reg_log/logount.php"><img class="icon-img" src="./static/style/icon/logout.png">Logout</a></li>
                </div>
            </ul>
        </nav>
    </div>
</div>

<script>
    
    // function toogleNavLef() {
    //     console.log(toogleNavLef())
    // }
    var btnNavBar = document.querySelector('.btn-menu-navbar');
    var navItm = document.querySelector('.nav-cnt-home');
    var btnCloseNav = document.querySelector('.btn-close-nav');

    btnNavBar.addEventListener('click', function() {
        navItm.classList.add('openNavBar');
        btnNavBar.style.display = 'none';
        

        navItm.addEventListener('click', function(event) {
            if(event.target.id == 'btnCloseNavBar'){
                navItm.classList.remove('openNavBar');
                btnNavBar.style.display = 'block';
            }
        });

    });

    

    function infImage() {
        var btnNavBar = document.querySelector('.cnt-image-inf');
        var navItm = document.querySelector('.cnt-inf-imagem');
        var btnCloseNav = document.querySelector('.btn-close');

        navItm.style.display = 'block';

        navItm.addEventListener('click', function(event) {
            if(event.target.id == 'btn-close'){
                navItm.style.display = 'none';
            }
        });
    }
</script>