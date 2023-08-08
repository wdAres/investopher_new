<?php include('./dashboard/connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/responsive.css">
    <title>Investopher.in</title>

    <style>
        .btn-theme {
            width: 170px;
            height: 35px;
            border-radius: 4px;
            border: none;
            background: #00508f;
            color: white;
            line-height: 35px;
            text-decoration: none;
            text-align: center;
            font-size: 13px;
            font-weight: 600;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <header>
        <a href="index.php" class="logo"><img src="./assets/logo.png" alt=""></a>
        <nav>
            <a href="https://investopher.in/about-us/">Company</a>
            <div>Services
                <div class="drop_down">
                    <div>For Traders
                        <div class="drop_down2">
                            <a href="https://investopher.in/daily-recommendation/">Daily Recommendation</a>
                            <a href="https://investopher.in/btst/">BTST</a>
                        </div>
                    </div>
                    <div>For Investors
                        <div class="drop_down2">
                            <a href="https://investopher.in/short-term-investment">Short Term Investement</a>
                            <a href="https://investopher.in/long-term-investement">Long Term Investement</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://investopher.in/investor-charter/">Investor Charter</a>
            <a href="https://investopher.in/bank-details/">Bank Details</a>
            <a href="https://investopher.in/complaint-status/">Complaint Status</a>

            <div>Insights
                <div class="drop_down">
                    <a href="https://investopher.in/track-sheet">Track Sheet</a>
                    <a href="https://investopher.in/pricing/">Pricing</a>
                    <a href="https://investopher.in/research-reports/">Research and Report</a>
                    <a href="https://investopher.in/faq/">FAQ</a>
                    <a href="https://investopher.in/blogs/">Blogs</a>
                </div>
            </div>

            <a href="http://leads.investopher.in/">Quick Enquiry</a>
        </nav>
        <button><a href="tel:+91 9109939389">+91 9109939389</a></button>
        <button onclick="toggleSidebar()" class="toggle_button"><i class="fas fa-bars"></i></button>
    </header>
    <div class="sidebar">
        <div class="sidebar_header">
            <img src="./assets/logo.png" alt="">
            <button onclick="toggleSidebar()"><i class="fas fa-times"></i></button>
        </div>
        <div class="sidebar_body">
            <a href="https://investopher.in/about-us/">Company</a>
            <div>
                <button class="drop_down_handler">Services</button>
                <div class="sidebar_drop_down">
                    <div>
                        <button class="drop_down_handler">For Traders</button>
                        <div class="drop_down2">
                            <a href="https://investopher.in/daily-recommendation/">Daily Recommendation</a>
                            <a href="https://investopher.in/btst/">BTST</a>
                        </div>
                    </div>
                    <div>
                        <button class="drop_down_handler">For Investors</button>
                        <div class="drop_down2">
                            <a href="https://investopher.in/short-term-investment">Short Term Investement</a>
                            <a href="https://investopher.in/long-term-investement">Long Term Investement</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://investopher.in/investor-charter/">Investor Charter</a>
            <a href="https://investopher.in/bank-details/">Bank Details</a>
            <a href="https://investopher.in/complaint-status/">Complaint Status</a>

            <div>
                <button class="drop_down_handler">Insights</button>
                <div class="sidebar_drop_down">
                    <a href="https://investopher.in/track-sheet">Track Sheet</a>
                    <a href="https://investopher.in/pricing/">Pricing</a>
                    <a href="https://investopher.in/research-reports/">Research and Report</a>
                    <a href="https://investopher.in/faq/">FAQ</a>
                    <a href="https://investopher.in/blogs/">Blogs</a>
                </div>
            </div>

            <a href="http://leads.investopher.in/">Quick Enquiry</a>
        </div>
    </div>



    <!-- Section  -->
    <section class="form_section">
        <div>
            <h3>ABOUT US</h3>
            <h1>We Care About Your Life’s Important Things</h1>
            <p>
                Investopher Research Pvt Ltd is a SEBI registered research analyst and consulting firm that provides you
                guidance and consultancy to invest your wealth in the Indian stock market and get maximum return in
                every market either bullish and bearish. We are a team experienced financial analyst who provides you
                the best research analysis on each and every type of stock.
            </p>
            <div>
                <img src="./assets/i1.jpg" alt="">
                <img src="./assets/i2.jpg" alt="">
            </div>
            <button>Read More</button>
        </div>
        <div>
            <form method="POST" id="query_form" class="query_form">
                <h1>QUICK ENQUIRY</h1>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="phone" placeholder="Phone">
                <input type="email" name="email" placeholder="Email">
                <select name="options">
                    <option value="Stock cash">Stock cash</option>
                    <option value="HNI Cash">HNI Cash</option>
                    <option value="Stock Future">Stock Future</option>
                    <option value="HNI Future">HNI Future</option>
                    <option value="Stock Option">Stock Option</option>
                    <option value="HNI option">HNI option</option>
                    <option value="Index Future">Index Future</option>
                    <option value="Index Option">Index Option</option>
                    <option value="BTST">BTST</option>
                    <option value="Short term investment">Short term investment</option>
                    <option value="Long term investment">Long term investment</option>
                </select>
                <button type="submit">Send</button>
            </form>
            <?php

            if (isset($_REQUEST['name'])) {

                $name01 = htmlspecialchars($_REQUEST['name']);

                $email01 = htmlspecialchars($_REQUEST['email']);
                $phone = htmlspecialchars($_REQUEST['phone']);
                $company_name = htmlspecialchars($_REQUEST['options']);

                try {
                    $query = "insert into contact (name,email,phone,options) values ('$name01','$email01' , '$phone','$company_name')";
                    $subscribe = mysqli_query($conn, $query);
                    if ($subscribe) {

                        echo "<span class='text-white'>submitted successfuly.</span>";
                    } else {

                        echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
                    }
                } catch (\Exception $e) {
                    printf(mysqli_error($conn));
                }
            }

            ?>
        </div>
    </section>
    <!-- Section  -->




    <footer class="footer">
        <div class="footer_top">
            <div>
                <h1>Investopher Research Services PVT. LTD.</h1>
                <div>
                    <span><i class="fab fa-facebook"></i></span>
                    <span><i class="fab fa-twitter"></i></span>
                    <span><i class="fab fa-youtube"></i></span>
                </div>

                <p>
                    <span class="colored_span">
                        SEBI REGISTRATION - INH000008561
                    </span>
                    GSTIN - 23AAGCI0072B1ZA.
                    CIN - U74999MH2021PTC354669
                </p>
                <br>
                <p>
                    <span class="colored_span">SEBI Office Details:</span>
                    SEBI Bhavan BKC Address: Plot No.C4-A, 'G' Block Bandra-Kurla Complex, Bandra (East), Mumbai -
                    400051, Maharashtra | Tel : +91-22-26449000 / 40459000 | Fax : +91-22-26449019-22 / 40459019-22
                    Email: sebi@sebi.gov.in | Toll Free Investor Helpline: 1800 22 7575
                </p>
            </div>
            <div>
                <h3>Our Products</h3>
                <a href="https://investopher.in/stock-cash/">Stock Cash</a>
                <a href="https://investopher.in/hni-cash/">HNI Cash</a>
                <a href="https://investopher.in/stock-future/">Stock Future</a>
                <a href="https://investopher.in/hni-future">HNI Future</a>
                <a href="https://investopher.in/stock-option">Stock Option</a>
                <a href="https://investopher.in/index-future">Index Future</a>
                <a href="https://investopher.in/index-option">Index Option</a>
                <a href="https://investopher.in/btst">BTST</a>
                <a href="https://investopher.in/short-term-investment">Short Term Investment</a>
                <a href="https://investopher.in/long-term-investment">Long Term Investment</a>
            </div>
            <div>
                <h3>Quick Links</h3>
                <a href="index.php">Home</a>
                <a href="https://investopher.in/blogs">Blogs</a>
                <a href="https://investopher.in/research-reports">Research And Reports</a>
                <a href="https://investopher.in/pricing">Pricing</a>
                <a href="https://investopher.in/refund-policy">Refund Policy</a>
                <a href="https://investopher.in/grievance-redressal-process/">Grievance Redressal Process</a>
                <a href="https://investopher.in/disclosure-draft/">Disclosure</a>
                <a href="https://investopher.in/disclaimer">Disclaimer</a>
                <a href="https://investopher.in/contact-us">Contact us</a>
            </div>
            <div>
                <h3>Address List</h3>
                <a href="#!">Registered address - Unit No.-611, Reliable Pride, Anand Nagar,opp.Heera panna, Jogeshwari.(W) Mumbai 400120.</a>
                <a href="#!">Branch Address -201 C-21 business park, Second floor opp.raddison hotel</a>
                <a href="tel:+91 9109939389">+91 9109939389</a>
                <a href="mailto:support@investopher.in">support@investopher.in</a>
            </div>
        </div>
        <div class="footer_bottom">
            Copyright © 2021 Investopher | All Rights Reserved | Developed By Awarno
        </div>
    </footer>



    <script src="./script/jquery.min.js"></script>
    <script src="./script/index.js"></script>

    <script>
        $("#query_form").on("submit", function(e) {

            var dataString = $(this).serialize();

            var Ele = this;

            alert('form submitted!')

            e.preventDefault();

            $.ajax({

                type: "POST",

                url: "index.php",

                data: dataString,

                success: function() {

                    $('input').val("");

                    $('textarea').val("");

                }

            });

        });
    </script>
</body>

</html>