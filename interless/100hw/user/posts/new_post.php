
<div>
    <div class="cnt-act-hed">
        <div class="item-cnt-lef cnt-lef-username">
            <span class="cnt-user-icon"><img class="icon-sml-img" src="./static/midia/img/user.png" alt="user icon"></span>
        </div>
            <span class="cnt-user-txt"><?php echo $_SESSION['username_hw'];?></span>
    </div>

    <h1>Adicionar Post</h1>
    <form action="?confPages=save_post" method="POST" enctype="multipart/form-data">
        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title_post" required><br>
        
        <label for="media_type">Tipo de Mídia:</label><br>
        <select id="media_type" name="media_type" onchange="toggleInputs()" required>
            <option value="text_post">Texto</option>
            <option value="video_post">Vídeo</option>
            <option value="music_post">Música</option>
            <option value="photo_post">Foto</option>
        </select><br>

        <div id="content_div">
            <label for="content">Conteúdo:</label><br>
            <textarea id="content" name="content_post"></textarea><br>
        </div>
        
        <div id="file_input_div" style="display: none;">
            <label for="media_file">Arquivo de Mídia:</label><br>
            <input type="file" id="media_file" name="media_file"><br>
        </div>
        
        <input type="submit" value="Adicionar Post">
    </form>
</div>