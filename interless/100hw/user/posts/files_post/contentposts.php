<div>
		<p class='tlt-nm-post'>Conteudos</p>
		<?php if (!empty($posts_content)): ?>
			<?php foreach ($posts_content as $post): ?>
				<div class='post-content-block cnt-info-posts'>
					<h4 class="tlt-content-post"><?php echo htmlspecialchars($post['text_title']); ?></h4>
					<div class="post-date"><?php echo htmlspecialchars($post['created_at']); ?></div>
					<div class="cnt-item-content-post"><?php echo nl2br(htmlspecialchars($post['text_content'])); ?></div>
				</div>
			<?php endforeach; ?>
		<?php else: ?>
			<div class='cnt-info-hidden'>
				<p class='no-post nothing-et'>Ainda não tens nenhum post disponivel.</p>
				<a href='./pass_conf.php?confPages=new_post' class='no-post create-et'>Criar novo post.</a>
			</div>
		<?php endif; ?>
</div>