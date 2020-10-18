<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <title>Lemonade Manager</title>
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
                        <div class="header item"><i class="counterclockwise rotated green large lemon icon"></i>Lemonade Manager</div>
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
                        <a class="ui item"><i class="brown large lock icon"></i></a>
                        </div>
                    </div>
                        <br>
                        <div class="ui grid">
                            <div class="four wide column" style="text-align: right;">
                                <div class="ui secondary vertical pointing fluid menu">
                                    <a class="item active"><i class="brown suitcase icon"></i>Account</a>
                                </div> 
                                <div class="ui secondary vertical pointing fluid menu">
                                    <a class="item"><i class="brown bell outline icon"></i>Alerts</a>
                                    <a class="item"><i class="brown bullhorn icon"></i>Notifications</a>
                                </div>
                                <div class="ui secondary vertical pointing fluid menu">
                                    <a class="item"><i class="brown lock icon"></i>Logout</a>
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
                                <div class="ui divider" style="padding-bottom: 10px;"></div>
                                <div class="ui very padded segment content-segment">
                                    <div class="ui form">
                                        <div class="field">
                                            <label>First name</label>
                                            <input type="text" name="firstname" placeholder="First name">
                                        </div>
                                        <div class="field">
                                            <label>Last name</label>
                                            <input type="text" name="lastname" placeholder="Last name">
                                        </div>
                                        <div class="field">
                                            <label>Date of Birth</label>
                                            <input type="text" name="dateofbirth" placeholder="Date of Birth">
                                        </div>
                                        <div class="field">
                                            <label>Biography</label>
                                            <textarea placeholder="Tell us somthing about you..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer" class="ui column centered grid" style="margin-top: 30px;">
                    <div class="ui right floated horizontal list">
                        <div class="disabled item" href="#">©2020 | Digital Closuxe</div>
                            <a class="item" href="#">Terms</a>
                            <a class="item" href="#">Privacy</a>
                        </div>
                    <div class="ui horizontal list">
                        <a class="item" href="#">About Us</a>
                        <a class="item" href="#">Jobs</a>
                        <a class="item" href="#">Contact</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
        <script src="js/semantic.min.js"></script>
    </body>
</html>