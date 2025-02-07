

<div class="my-col-post">
    <div class="cnt_new_post">
        <a class="lk_btn_nw" href="../pass_conf.php?confPages=new_post">New</a>
    </div>

    <nav class="nav-post cnt-post-itm">
        <ul class="cnt-itm-post">
            <li class="cnt-link-post-btn-et"><a class="link-post-btn-et" href="?confProfilePages=new_post&postPagesContent=allPosts">Todos</a></li>
            <li class="cnt-link-post-btn-et"><a class="link-post-btn-et" href="?confProfilePages=new_post&postPagesContent=contentPosts">Conteúdos</a></li>
            <li class="cnt-link-post-btn-et"><a class="link-post-btn-et" href="?confProfilePages=new_post&postPagesContent=videoPosts">Videos</a></li>
            <li class="cnt-link-post-btn-et"><a class="link-post-btn-et" href="?confProfilePages=new_post&postPagesContent=musicPosts">Musicas</a></li>
            <li class="cnt-link-post-btn-et"><a class="link-post-btn-et" href="?confProfilePages=new_post&postPagesContent=photoPosts">Fotos</a></li>
        </ul>
    </nav>
    <h2 class="tlt-post">Meus Posts</h2>

    <div>
        <?php
            switch (@$_REQUEST["postPagesContent"]) {
                case 'allPosts':
                    include('posts/allposts.php');
                    break;
                case 'contentPosts':
                    include('posts/contentposts.php');
                    break;

                case 'videoPosts':
                $sql = "SELECT * FROM posts_videos WHERE user_id='$user_id'";
                $result = $conn->query($sql);
                    include('posts/videoposts.php');
                $conn->close();
                    break;

                case 'musicPosts':
                $sql = "SELECT * FROM posts_musics WHERE user_id='$user_id'";
                $result = $conn->query($sql);
                    include('posts/musicposts.php');
                $conn->close();
                    break;

                case 'photoPosts':
                $sql = "SELECT * FROM posts_photos WHERE user_id='$user_id'";
                $result = $conn->query($sql);
                    include('posts/photoposts.php');
                    break;
                $conn->close();

                default:
                    include('posts/allposts.php');
                    break;
            }
        ?>
    </div>
</div>