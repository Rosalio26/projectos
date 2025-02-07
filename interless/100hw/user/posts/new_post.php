
<div>
    <div class="cnt-act-hed">
        <div class="item-cnt-lef cnt-lef-username">
            <span class="cnt-user-icon"><img class="icon-sml-img" src="./static/midia/img/user.png" alt="user icon"></span>
        </div>
            <span class="cnt-user-txt"><?php echo $_SESSION['username_hw'];?></span>
    </div>

    <div class="form-search find-alies">
        <form action="user/save_post.php" method="POST" enctype="multipart/form-data">
            <div class="cnt-input">
                <h3 class="ltli-font">Titulo</h3>
                <input class="input input-text" type="text" name="title_post">
            </div>
            <div id="mak-input" class="cnt-input">
                <div class="res-post-tlt">
                    <h3 class="ltli-font">#Post</h3>
                    <span>Result Title</span>
                </div>
                <div class="esc-post-itm">
                    <textarea name="content_post"  id="textar-input"></textarea> <br>
                    <input type="file" name="image_post" id="upload-img" class="upload-img" placeholder="image"> <br>
                    <input type="file" name="video_post" id="upload-vid" class="upload-vid" placeholder="video">
                </div>
                 <div class="disc-vid-phot">
                    <ul>
                        <div class="ecapsul"></div>
                        <div class="sry-ecapsul">
                            <li id="btn-post-post" class="add-non-lk" onclick="postBlockPost()">Post</li>
                            <li id="btn-img-post" class="add-non-lk" onclick="imagemBlockPost()">Image</li>
                            <li id="btn-vid-post" class="add-non-lk" onclick="videoBLockPost()">Video</li>
                        </div>
                    </ul>
                 </div>
            </div>
            <div class="rest-set">
                <button type="submit">Post</button>
            </div>
        </form>
    </div>
</div>