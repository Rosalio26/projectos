<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../static/style/profile.css">
    <link rel="stylesheet" href="../static/style/index.css">
</head> -->
<!-- <body id="body_profile" class="body-gr body_profile">  -->
	<div class="cnt_new_post">
		<a class="lk_btn_nw" href="../pass_conf.php?confPages=new_post">New</a>
	</div>

    <h2>Meus Posts</h2>

    <div>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h4>" . $row['title_post'] . "</h4>";
                    echo "<p>" . $row['content_post'] . "</p>";
                }
            } else {
                echo "Not Post Found";
            }
        ?>
    </div>
<!-- </body>
</html> -->