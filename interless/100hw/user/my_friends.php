
<div class="my-friend-sub">
	<div class="cnt_new_not">
		<form class="find_friend">
			<button class="bnt-sub-icons-back">
				<img class="img-icon" src="../static/style/icon/search-icon-white-666.png" alt="Lumpa Icon">
			</button>
			<input type="text" name="">
		</form>
	</div>

	<div class="oth-cls">
		<ul class="cnt-nw-lst">
			<li class="inv-itm-link"><a class="itm-link-ven" href="http://localhost/projectos/interless/100hw/pass_conf.php?confPages=new_friend">New</a></li>
			<li class="inv-itm-link"><a class="itm-link-ven" href="http://localhost/projectos/interless/100hw/user/my-friend-list.php">Lista de amigos</a></li>
		</ul>
	</div>

	<div class="cnt-my-friend-cmp">
		<h2 class="text-tlt-ccp">Meus Amigos</h2>
		<div class="arm-list">
			<ul class="cnt-itm-list">
				<?php
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							$friend_id = ($row['sender_id'] == $user_id) ? $row['receiver_id'] : $row['sender_id'];

							$friend_sql = "SELECT username_hw FROM register_gch WHERE user_hw_id = '$friend_id'";

							$friend_result = $conn->query($friend_sql);
							if ($friend_result->num_rows > 0) {
								$friend = $friend_result->fetch_assoc();
								echo "<li class='cnt-inf-list'>" . $friend['username_hw'] . " <a class='link-couv-inc' href='view_friend_details.php?user_id=" . $friend_id . "'>Ver</a></li>";
							}
						}
					} else {
						echo "Ainda nao tens um amigo";
						echo "<br>";
						echo "<a href='listed_users.php'>Fazer Amizades</a>";
					}
				?>
			</ul>
		</div>
	</div>
</div>