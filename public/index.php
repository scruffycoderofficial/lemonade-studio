<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <title>Lemonade</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Lemonade Information System" />
    <meta name="author" content="Luyanda Siko" />

    <link href="css/semantic.min.css" rel="stylesheet" />
    <link href="css/app.css" rel="stylesheet" />

    <body>
        <div id="wrapper">
            <div id="container">
                <div class="ui container">
                    <div class="ui secondary menu">
                        <div class="header item">Lemonade</div>
                        <a class="active item">Home</a>
                        <a class="item">Messages</a>
                        <a class="item">Profile</a>
                        <div class="right menu">
                        <div class="item">
                            <div class="ui icon input">
                                <input type="text" placeholder="Search...">
                                <i class="search link icon"></i>
                            </div>
                        </div>
                        <a class="ui item">Logout</a>
                        </div>
                    </div>
                    <div class="ui divider"></div>
                        <br>
                        <div class="ui grid">
                            <div class="four wide column" style="text-align: right;">
                                <div class="ui secondary vertical pointing fluid menu">
                                    <a class="item active"><i class="brown suitcase icon"></i>Account</a>
                                    <a class="item"><i class="brown bell outline icon"></i>Alerts</a>
                                    <a class="item"><i class="brown bullhorn icon"></i>Notifications</a>
                                    <a class="item">Logout</a>
                                </div>
                            </div>
                            <div class="twelve wide column">
                                <h2 class="ui header">
                                    <i class="brown settings icon"></i>
                                    <div class="content" style="font-size: 15px;">
                                        Account
                                        <div class="sub header" style="font-size: 12px;color: #a2693d;font-weight:200;">Manage your preferences</div>
                                    </div>
                                </h2>
                                <div class="ui divider"></div>
                                <div class="ui form">
                                    <div class="field">
                                        <input type="text" name="first-name" placeholder="First name">
                                    </div>
                                    <div class="field">
                                        <textarea placeholder="Some example text..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer" class="ui column centered grid" style="margin-top: 30px;">
                    Made with <i class="icons"><i class="red heart icon"></i><i class="corner red heart icon"></i>
                </i></i> by <a href="#">Luyanda Siko</a>
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
        <script src="js/semantic.min.js"></script>
    </body>
</html>