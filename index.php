<!DOCTYPE html>
<html>
<head lang="ru">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Задание</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

</head>
<body>
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Disney</a></li>
                    <li><a href="#">Cartoons</a></li>
                    <li><a href="#" class="active">Concretno etot film</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <aside class="col-sm-3 col-md-3 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="http://yandex.ru">Overview</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>

            <ul class="nav nav-sidebar">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>

            <form class="form-signin" role="form">
                <h4 class="form-signin-heading">Admin Login</h4>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form_control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </aside>

        <article class="col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-1 master">
            <div class="main">
                <img src="images/cartoon.png">
                <h4>Animated musical adventure-comedy film </h4>
                <p>Loren ipsum etc.</p>
            </div>
            <div class="comments">
                <div class="comment">
                    <div class="comment_date" align="right">10/11/12</div>
                    <div class = "avatar">
                        <img src="images/mr-proof.png" align="left">
                    </div>
                    <div class = "comment_text">
                        <h4>Gimmi</h4>
                        <p>Loren ipsum tratata!</p>
                    </div>
                </div>
                <div class="comment">
                    <div class="comment_date" align="right">10/11/12</div>
                    <div class = "avatar">
                        <img src="images/mr-proof.png" align="left">
                    </div>
                    <div class = "comment_text">
                        <h4>Gimmi</h4>
                        <p>Loren ipsum tratata!</p>
                    </div>
                </div>
                <div class="comment">
                    <div class="comment_date" align="right">10/11/12</div>
                    <div class = "avatar">
                        <img src="images/mr-proof.png" align="left">
                    </div>
                    <div class = "comment_text">
                        <h4>Gimmi</h4>
                        <p>Loren ipsum tratata!</p>
                    </div>
                </div>
                <div class="comment">
                    <div class="comment_date" align="right">10/11/12</div>
                    <div class = "avatar">
                        <img src="images/no_avatar.jpg" align="left" height="64">
                    </div>
                    <div class = "comment_text">
                        <h4>Gimmi</h4>
                        <p>Loren ipsum tratata!</p>
                    </div>
                </div>
                <?php
                $json_comments = file_get_contents('comments.json');
                $json_cmts_arr = explode('\n\\=\\', $json_comments);
                foreach($json_cmts_arr as $json_value){
                    $comment = json_decode($json_value);
                ?>
                    <div class="comment">
                        <div class="comment_date" align="right"><?php $comment["date"]; ?></div>
                        <div class = "avatar">
                            <img src="images/no_avatar.jpg" align="left" height="64">
                        </div>
                        <div class = "comment_text">
                            <h4><?php $comment["name"]; ?></h4>
                            <p><?php $comment["comment"]; ?></p>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
            <div class="add_comment">
                <form action="add_coment.php" method="post" class="form_comment" role="form">
                    <h4 class="form_signin_heading">New Comment</h4>
                    <input type="text" name="user_name" id="inputName" class="form_control" placeholder="Your Name" required>
                    <input type="text" name="user_email" id="inputEmail" class="form_control" placeholder="email address" required>
                    <textarea name="user_comment" id="add_comm_message" class="form_control" placeholder="Comment text" required></textarea>
                    <input  type="submit" class="btn btn-primary" value="Add comment">
                </form>
            </div>
        </article>
    </div>

</div>
</body>
</html>