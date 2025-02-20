<!-- 
<div style="z-index: 1000;">
    <p class='tlt-nm-post'>Todos os posts</p>
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <div class='cnt-post-grl'>
                    <h4 class="title-post-conf">
                        <span class="post-date"><?php echo htmlspecialchars($post['created_at']); ?></span>
                    </h4>
                    <p class="arm-cnt-post">
                        <?php echo nl2br(htmlspecialchars($post['content_post'])); ?>
                    </p>
                </div>
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
        <div class='cnt-info-hidden'>
            <p class='no-post nothing-et'>Ainda não tens nenhum post disponivel.</p>
            <a href='../pass_conf.php?confPages=new_post' class='no-post create-et'>Criar novo post.</a>
        </div>
    <?php endif; ?>
</div>





<?php

// echo "";
// if ($result_user_log_post->num_rows > 0) {
//     while ($row = $result_user_log_post->fetch_assoc()) {
// 		echo "";
//         echo "";
//         echo "
// 		echo "</div>";
//     }

?> -->