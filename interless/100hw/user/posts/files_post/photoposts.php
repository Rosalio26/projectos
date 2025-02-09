
<div>
<?php if (!empty($posts_photo)): ?>
		<?php foreach ($posts_photo as $post): ?>
			<div class="post">
				<div class="post-title"><?php echo htmlspecialchars($post['title_post']); ?></div>
				<div class="post-date"><?php echo htmlspecialchars($post['created_at']); ?></div>
				<div class="post-content"><?php echo nl2br(htmlspecialchars($post['content_post'])); ?></div>
				<?php if (!empty($post['media_url'])): ?>
					<div class="post-media">
						<img src="<?php echo htmlspecialchars($post['media_url']); ?>" alt="Foto">
					</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	<?php else: ?>
		<p>Nenhum post de fotos encontrado.</p>
	<?php endif; ?>
</div>