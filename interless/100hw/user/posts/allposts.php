
<div>
	<?php
		echo "<p class='tlt-nm-post'>Todos os posts</p>";
	    if ($result->num_rows > 0) {
	        while ($row = $result->fetch_assoc()) {
        		echo "<div class='post-content-block cnt-info-posts'>";
	            echo "<h4 class='tlt-content-post'>" . $row['title_post'] . "</h4>";
	            echo "<p class='cnt-item-content-post'>" . $row['content_post'] . "</p>";
        		echo "</div>";
	        }
	    } else {
	    	echo "<div class='cnt-info-hidden'>";
	        echo "<p class='no-post nothing-et'>Ainda não tens nenhum post disponivel.</p>";
	        echo "<a href='../pass_conf.php?confPages=new_post' class='no-post create-et'>Criar novo post.</a>";
	        echo "</div>";
	    }

	?>
</div>