<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <title>Lemonade Studio</title>
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
                        <div class="header item"><i class="counterclockwise rotated green large lemon icon"></i>Lemonade Studio</div>
                        <a class="active item">Home</a>
                        <a class="item">Messages</a>
                        <a class="item">Profile</a>
                        <div class="right menu">
                        <div class="item">
                            <div class="ui icon input">
                                <input type="text" placeholder="Search...">
                                <i class="brown search link icon"></i>
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
                                <div class="ui divider" style="padding-bottom: 10px;"></div> 
                                <div class="ui secondary vertical pointing fluid menu">
                                    <a class="item"><i class="brown bell outline icon"></i>Alerts</a>
                                    <a class="item"><i class="brown bullhorn icon"></i>Notifications</a>
                                </div>
                                <div class="ui divider" style="padding-bottom: 10px;"></div>
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
                                <div class="ui very padded segment content-segment">
                                    <!--- Start Account Settings Tabs-->
                                    <div class="ui form-tabs">
                                        <ul class="tabs">
                                            <li class="tab-link current" data-tab="tab-1">Personal</li>
                                            <li class="tab-link" data-tab="tab-2">Billing</li>
                                        </ul>
                                        <div id="tab-1" class="tab-content current">
                                                <div class="ui form">
                                                    <div class="field">
                                                        <input type="text" name="firstname" placeholder="First name">
                                                    </div>
                                                    <div class="field">
                                                        <input type="text" name="lastname" placeholder="Last name">
                                                    </div>
                                                    <div class="field ui calendar">
                                                        <div class="ui input left icon">
                                                            <i class="brown calendar icon"></i>
                                                            <input type="text"  id="dateofbirth" placeholder="Date of Birth">
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <textarea placeholder="Tell us somthing about you..."></textarea>
                                                    </div>
                                                    <div class="inline field"> 
                                                        <div class="ui toggle checkbox"> 
                                                            <input type="checkbox" 
                                                                tabindex="0" class="hidden selected"> 
                                                            <label>Terms & Conditions Accepted</label> 
                                                        </div> 
                                                    </div>
                                                    <div class="ui divider"></div>
                                                    <div class="extra content right"> 
                                                        <button class="ui success button"> 
                                                            Update Profile 
                                                        </button>
                                                        <button class="ui danger button"> 
                                                            Cancel Update 
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-content">
                                    <div class="field">
                                        <label>Card Type</label>
                                        <div class="ui selection dropdown">
                                        <input type="hidden" name="card[type]">
                                        <div class="default text">Type</div>
                                        <i class="dropdown icon"></i>
                                        <div class="menu">
                                            <div class="item" data-value="visa">
                                            <i class="visa icon"></i>
                                            Visa
                                            </div>
                                            <div class="item" data-value="amex">
                                            <i class="amex icon"></i>
                                            American Express
                                            </div>
                                            <div class="item" data-value="discover">
                                            <i class="discover icon"></i>
                                            Discover
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="seven wide field">
                                        <label>Card Number</label>
                                        <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
                                        </div>
                                        <div class="three wide field">
                                        <label>CVC</label>
                                        <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
                                        </div>
                                        <div class="six wide field">
                                        <label>Expiration</label>
                                        <div class="two fields">
                                            <div class="field">
                                            <select class="ui fluid search dropdown" name="card[expire-month]">
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            </div>
                                            <div class="field">
                                            <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--- End Account Settings Tabs-->
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