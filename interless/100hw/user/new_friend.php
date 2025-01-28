
<div>
    <div class="cnt-act-hed">
        <div class="cnt-oth-info">
            <ul class="dispo-info-acc">
                <li class="disp-cnn">
                    <ul class="cnt-cnn-itm">
                        <li class="ic-stp-sell btn-back"><-</li>
                        <li class="ic-stp-sell home-page"><a href="./index.php">Home</a></li>
                    </ul>
                </li>
                <li class="item-cnt-lef cnt-lef-username">
                    <span class="cnt-user-icon">
                        <img class="icon-sml-img" src="./static/midia/img/user.png" alt="user icon">
                    </span>
                    <span class="cnt-user-txt">
                        <?php echo $_SESSION['username_hw'];?>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="art-friend">

        <div class="my-find find-friend">
            <!-- <form method="GET" action="./user/find_new.php"> -->
            <div class="cnt-input">
                <div class="cnt-search-icon">
                    <img class="search-img-icon icon-img" src="./static/style/icon/search-icon-white-normal.png" alt="Search Icon">
                </div>
                <input class="input input-text" type="text" name="find_friend" id="find-friend-input" onkeyup="search_user()">
            </div>
            <div id="result_find"></div>
            <!-- </form> -->
        </div>

        <div class="cnt-my-friend-direction">
            <a href="user/my-friend-list.php">Meus Amigos</a>
        </div>

        <div class="my-find listed-users">
            <h3 class="ltli-font">Reques talvez conhecidos</h3>
            <ul class="cnt-listed-user list-itm">
                <?php 
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li class='link-li-sub'>" . $row['username_hw'] . "<a class='link-req' href='./user/inc/send_friend_request.php?receiver_id=" . $row['user_hw_id'] . "'>req +</a></li>";
                        }
                    } else {
                        echo "No user Found.";
                    }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php
$conn->close();
?>