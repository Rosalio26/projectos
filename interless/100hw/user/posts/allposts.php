
<div style="z-index: 1000;">
<h1>Posts</h1>
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <div class="post-title"><?php echo htmlspecialchars($post['title_post']); ?></div>
                <div class="post-date"><?php echo htmlspecialchars($post['created_at']); ?></div>
                <div class="post-content"><?php echo nl2br(htmlspecialchars($post['content_post'])); ?></div>
                <?php if (!empty($post['media_url'])): ?>
                    <div class="post-media">
                        <?php if ($post['media_type'] == 'video_post'): ?>
                            <video controls>
                                <source src="<?php echo htmlspecialchars($post['media_url']); ?>" type="video/mp4">
                                Seu navegador não suporta a tag de vídeo.
                            </video>
                        <?php elseif ($post['media_type'] == 'music_post'): ?>
                            <audio controls>
                                <source src="<?php echo htmlspecialchars($post['media_url']); ?>" type="audio/mpeg">
                                Seu navegador não suporta a tag de áudio.
                            </audio>
                        <?php elseif ($post['media_type'] == 'photo_post'): ?>
                            <img src="<?php echo htmlspecialchars($post['media_url']); ?>" alt="Foto">
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum post encontrado.</p>
    <?php endif; ?>
</div>





<?php

// echo "<p class='tlt-nm-post'>Todos os posts</p>";
// if ($result_user_log_post->num_rows > 0) {
//     while ($row = $result_user_log_post->fetch_assoc()) {
// 		echo "<div class='post-content-block cnt-info-posts'>";
//         echo "<h4 class='tlt-content-post'>" . $row['title_post'] . "</h4>";
//         echo "<p class='cnt-item-content-post'>" . $row['content_post'] . "</p>";
// 		echo "</div>";
//     }
// } else {
// 	echo "<div class='cnt-info-hidden'>";
//     echo "<p class='no-post nothing-et'>Ainda não tens nenhum post disponivel.</p>";
//     echo "<a href='../pass_conf.php?confPages=new_post' class='no-post create-et'>Criar novo post.</a>";
//     echo "</div>";
// }

?>