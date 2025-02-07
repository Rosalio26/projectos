
<div class="my-col-post">
	<div class="cnt_new_not">
		<form class="find_friend">
			<button class="bnt-sub-icons-back">
				<img class="img-icon" src="../static/style/icon/search-icon-white-666.png" alt="Lumpa Icon">
			</button>
			<input type="text" name="">
		</form>
	</div>

	<nav class="nav-post cnt-post-itm">
		<ul class="cnt-itm-post">
			<li class="inv-itm-link"><a class="itm-link-ven" href="http://localhost/projectos/interless/100hw/pass_conf.php?confPages=new_friend">New</a></li>
			<li class="inv-itm-link"><a class="itm-link-ven" href="?confProfilePages=my_friend&postPagesContentFriends=my_friends_accepted">Amigos</a></li>
			<li class="inv-itm-link"><a class="itm-link-ven" href="?confProfilePages=my_friend&postPagesContentFriends=my_friends_pedding">pedentes</a></li>
			<li class="inv-itm-link"><a class="itm-link-ven" href="?confProfilePages=my_friend&postPagesContentFriends=my_friends_accepted">Aceitos</a></li>
			<li class="inv-itm-link"><a class="itm-link-ven" href="?confProfilePages=my_friend&postPagesContentFriends=my_friends_rejected">Recusados</a></li>
		</ul>
	</nav>

	<div>
		<?php
            switch (@$_REQUEST["postPagesContentFriends"]) {

                case 'my_friends_accepted':
                    include('friend/accepted_friend.php');
                    break;

                case 'my_friends_pedding':
                    include('friend/peding_friend.php');
                    break;

                case 'my_friends_rejected':
                    include('friend/rejected_friend.php');
                    break;

                default:
                    include('friend/accepted_friend.php');
                    break;
            }
        ?>
	</div>
</div>