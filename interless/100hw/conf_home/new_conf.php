
<div class="cnt-cant logic-new-forum">
    <div class="cnt-new-asp" id="asp-new">
        <h2>New</h2>
        <div class="new-itm">
            <div class="post-friend friend">
                <a class="lk-oct" href="?confPages=new_friend">Friend</a>
            </div>
            <div class="post-friend post">
                <a class="lk-oct" href="?confPages=new_post">Post</a>
            </div>
        </div>
    </div>
    <div class="adv-oth">
        <div class="cnt-links-new-set">
            <div class="add-conf-link">
                <a href="index.php"><img src="./static/style/icon/user.png" alt=""> Home</a>
                <a href="profile.php"><img src="./static/style/icon/user.png"> Profile</a>
                <a href=""><img src="./static/style/icon/user.png"> Chat</a>
            </div>
            <div class="cnt-asc-temp-link">
                <a href="pass_conf.php?confPages=newOfficcePage&newViewInfo=myAllPosts" class="link-new">Meus Postes</a>
                <a href="pass_conf.php?confPages=newOfficcePage&newViewInfo=myAllFriends" class="link-new">Meus Amigos</a>
            </div>
        </div>
        <div class="cnt-link-request">
            <?php
                switch (@$_REQUEST["newViewInfo"]) {
                    case "myAllPosts":
                        include("user/posts/allposts.php");
                        break;

                    case "myAllFriends":
                        include("user/friend/accepted_friend.php");
                        break;
                    
                    default:
                    include("user/friend/accepted_friend.php");
                        break;
                }
            ?>
        </div>
    </div>
</div>