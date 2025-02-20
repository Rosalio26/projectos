

<h2 class="tlt-post">Amigos</h2>

<ul class="cnt-itm-list">

    <?php if (!empty($friends_accepted)): ?>
        <?php foreach ($friends_accepted as $friend): ?>
            <div class="my-friend-cmp">
                <div class="friend-info">
                    <div class="cnt-user-mini-info">
						<?php if (!empty($friend['profile_image'])): ?>
							<img class="cnt-image-profile" src="./conf_home/profile_conf/uploads/<?php echo $friend['profile_image'];?>" alt="...">
						<?php else: ?>
							<img class="cnt-image-profile" src="static/style/icon/user.png" alt="...">
						<?php endif; ?>
						<span><?php echo htmlspecialchars($friend['username_hw']); ?></span>
					</div>
                </div>
				<form class="details-form" action="pass_conf.php?confPages=newOfficcePage&newConfStates=detailsFriend" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($friend['user_hw_id']); ?>">
                    <button class="details-button" type="submit">Ver</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum amigo aceito encontrado.</p>
    <?php endif; ?>



	<?php
		// if ($result_accepted_friend->num_rows > 0) {
		// 	while ($row = $result_accepted_friend->fetch_assoc()) {
		// 		echo "<li>
        //   <a href='../store_fun/chat/chat.php?friend_id=" . $row['user_hw_id'] . "'>" . $row['username_hw'] . " (" . $row['email_hw'] . ")</a>
		// 		<form method='get' action='profile_friend_details.php' style='display: inline;'>
		// 			<input type='hidden' name='user_hw_id' value='" . $row['user_hw_id'] . "'>
		// 			<input type='submit' value='ver'>
		// 		</form></li>";


		// 		// $friend_id = ($row['sender_id'] == $user_id) ? $row['receiver_id'] : $row['sender_id'];

		// 		// $friend_sql = "SELECT username_hw FROM register_gch WHERE user_hw_id = '$friend_id'";

		// 		// $friend_result = $conn->query($friend_sql);
		// 		// if ($friend_result->num_rows > 0) {
		// 		// 	$friend = $friend_result->fetch_assoc();
		// 		// 	echo "<li class='cnt-inf-list'>" . $friend['username_hw'] . " <a class='link-couv-inc' href='view_friend_details.php?user_id=" . $friend_id . "'>Ver</a></li>";
		// 		// }
		// 	}
		// } else {
	    // 	echo "<div class='cnt-info-hidden'>";
		//         echo "<p class='no-post nothing-et'>Ainda não tens nenhum amigo.</p>";
		//         echo "<a href='listed_users.php' class='no-post create-et'>Criar amizade</a>";
	    //     echo "</div>";
		// }
	?>
</ul>