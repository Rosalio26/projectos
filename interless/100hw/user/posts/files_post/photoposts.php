
<div>
<?php if (!empty($posts_photo)): ?>
		<?php foreach ($posts_photo as $post): ?>
			<div class="post">
				<div class="post-title"><?php echo htmlspecialchars($post['image_title']); ?></div>
				<div class="post-date"><?php echo htmlspecialchars($post['created_at']); ?></div>
				<?php if (!empty($post['post_type'] == 'image')): ?>
					<div class="post-media">
						<img src="<?php echo htmlspecialchars($post['image_url']); ?>" alt="Foto">
					</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	<?php else: ?>
		<p>Nenhum post de fotos encontrado.</p>
	<?php endif; ?>
</div>