    <?php
    $selevent = $conn1->query("SELECT * FROM slotsreserved WHERE eventDate > now()  ORDER BY eventDate ASC ");
    if ($selevent->rowCount() > 0) {
        $seleventRow = $selevent->fetch(PDO::FETCH_ASSOC);
        $TODATE = $seleventRow['eventDate'];
        $titledate = $seleventRow['title'];
    } else {
        $TODATE = date('m/d/Y H:i:s');
        $titledate = "(No event found)";
    }
    // echo $TODATE;
    // echo  $titledate;
    ?>
    <!-- DATE_FORMAT(time_of_last_update, '%Y-%m-%d %H:%i:%s') -->



    <footer id="footerApplycss" style="margin-bottom: 0%; padding-bottom: 0%;">
        <link rel="stylesheet" type="text/css" href="css/footer.css">

        <div style=" padding-bottom: 0%; margin: 0%; margin-bottom: 0%;" class="footer-top">
            <div class="container">
                <div class="container">
                    <div class="row-fluid block-content collapse in ">
                        <div class="span4 col-md-2 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="">About DELIVERANCE CHURCH DONHOLM</a></li>
                                <li><a href="">CHURCH Policy</a></li>
                                <li><a href="">Apply for Membership</a></li>
                                <li><a href="">Downloads</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="span4 col-md-5 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                            <h2>Our Partiners</h2>
                            <ul>
                                <li><a href="">Nairobi SDA church</a></li>
                                <li><a href="">Fedha Fellowship Church</a></li>
                                <li><a href="">Top max christian union</a></li>
                                <li><a href="">Cathoric</a></li>
                                <li><a href="">Nairobi University</a></li>
                                <li><a href="">American VOK</a></li>
                            </ul>
                        </div>
                        <div class="span4 col-md-5 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                            <h2>CONTACT DETAILS</h2>
                            <p>Address: DELIVERANCE CHURCH DONHOLM,
                                P.O BOX 38521 - 00100
                                Nairobi, Pipeline(Fedha), Nairobi-Embakasi Road,53720 Lahore – Kenya</p>
                            <p>Telephones: +2547 20 662 991 / 0719 429 208 /<br>
                                +2547 19 104 711</p>
                            <p>E-mail: CHURCHDELIVERANCE@gmail.com</p>
                        </div>
                    </div>
                    <div class="row-fluid block-content collapse in ">
                        <div class="span7 col-md-6 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                            <h3>DELIVERANCE CHURCH DONHOLM CENTRE FOR TRANSFORMATION</h3>
                            <hr style="color: white;">
                            <p> We desire to help you grow in your walk with God.
                                As our lives are transformed with the saving knowledge
                                of Christ, we in turn transform our families and
                                the communities in which we live.
                            </p>
                        </div>
                        <div class="span5 col-md-6 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                            <br>
                            <h3>Countdown Clock To <?php echo $titledate ?></h3>
                            <!-- <h1>Countdown Clock</h1> -->
                            <div id="clockdiv">
                                <div>
                                    <span class="days" id="day"></span>
                                    <div class="small">Days</div>
                                </div>
                                <div>
                                    <span class="hours" id="hour"></span>
                                    <div class="small">Hours</div>
                                </div>
                                <div>
                                    <span class="minutes" id="minute"></span>
                                    <div class="small">Minutes</div>
                                </div>
                                <div>
                                    <span class="seconds" id="second"></span>
                                    <div class="small">Seconds</div>
                                </div>
                            </div>
                            <p id="demo"></p>
                        </div>
                    </div>
                </div>
            </div>
            <p style="color: white;" class="footer-bottom-text">CopyRights © reserved by
                <b>DELIVERANCE CHURCH DONHOLM : </b> <?php echo date("Y"); ?>
                <b class="pull-right" align='right' style="text-align: right; color:green; font-size:smaller;" id="CopyRights"></b>
            </p>
        </div>
    </footer>
    </div>
    </body>

    </html>
    <script>
        var deadline1 = new Date("<?php echo $TODATE ?>").getTime();
        // document.getElementById("demo").innerHTML = deadline;
        var x = setInterval(function() {

            var now = new Date().getTime();
            var t = deadline1 - now;
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((t % (1000 * 60)) / 1000);
            document.getElementById("day").innerHTML = days;
            document.getElementById("hour").innerHTML = hours;
            document.getElementById("minute").innerHTML = minutes;
            document.getElementById("second").innerHTML = seconds;
            if (t < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "TIME UP";
                document.getElementById("day").innerHTML = '0';
                document.getElementById("hour").innerHTML = '0';
                document.getElementById("minute").innerHTML = '0';
                document.getElementById("second").innerHTML = '0';
            }
        }, 1000);


        function checkSlots1() {
            event.preventDefault();
            var status = document.getElementById("errorMessage");
            var submit = document.getElementById("submit");

            status.innerHTML = "You Are Ok To Submit";
            status.style.color = color = 'green';
            submit.removeAttribute("disabled");

            if (document.getElementById("slots").value === "") {
                status.style.color = color = 'red';
                status.innerHTML = "Check On Your Slots, they mustbe less than or equal to the remaining slots";
                submit.setAttribute("disabled", "disabled");
            }
            return;

            if (document.getElementById("slotsAvailable").value >= document.getElementById("slots").value)

                status.style.color = color = 'red';
            status.innerHTML = "Check On Your Slots, they mustbe less than or equal to the remaining slots And not Empty";
            submit.setAttribute("disabled", "disabled");
        }

        function checkSlots() {
            event.preventDefault();
            var status = document.getElementById("errorMessage");
            var submit = document.getElementById("submit");

            status.innerHTML = "You Are Ok To Submit";
            status.style.color = color = 'green';
            submit.removeAttribute("disabled");

            if (document.getElementById("slots").value === "") {
                status.style.color = color = 'red';
                status.innerHTML = "Check On Your Slots, they mustbe less than or equal to the remaining slots";
                submit.setAttribute("disabled", "disabled");
                return;
            }

            if (document.getElementById("slotsAvailable").value >= document.getElementById("slots").value)
                return;
            status.style.color = color = 'red';
            status.innerHTML = "Check On Your Slots, they mustbe less than or equal to the remaining slots And not Empty";
            submit.setAttribute("disabled", "disabled");
        }

        //   document.getElementById("slotsAvailable").addEventListener("change", function(event) {
        //       checkSlots();
        //   });
        //   document.getElementById("slots").addEventListener("onblur", function(event) {
        //       checkSlots();
        //   });
        //   document.getElementById("slots").addEventListener("Keydown", function(event) {
        //       checkSlots();
        //   });
        //   document.getElementById("slots").addEventListener("onblur", function(event) {
        //       checkSlots();
        //   });
    </script>