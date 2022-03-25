<?php include APPROOT.'/views/includes/header.php'; ?>
<link rel="stylesheet" href="public/css/Contact.css">
    <div class="row">
        <div class="leftcolumn">
            <div class="box">
                <h2>CONTACT US</h2>
                <p>Have any questions?</p>
                <p>Send us an email and we will answer as soon as possible!</p>

                <div class="container">
                    <form action="#">
                        <label for="first-name">First Name*</label>
                        <input type="text" id="first-name" pattern="[A-Za-z]{2,}" placeholder="E.g. John" required>

                        <label for="last-name">Last Name*</label>
                        <input type="text" id="last-name" pattern="[A-Za-z]{2,}" placeholder="E.g. Doe" required>

                        <label for="email">Email Address*</label>
                        <input type="text" id="email" pattern=".+@gmail\.com" placeholder="E.g. JohnDoe@gmail.com"
                            required>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Example text..."
                            style="height:200px"></textarea>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>

        <div class="rightcolumn ">
            <div class="box ">
                <h3>Follow Travel Tsunami</h3>
                <img src="https://img.icons8.com/fluency/24/000000/facebook-new.png" />
                <img src="https://img.icons8.com/fluency/24/000000/instagram-new.png" />
                <img src="https://img.icons8.com/color/24/000000/twitter--v2.png" />
                <img src="https://img.icons8.com/doodle/24/000000/youtube-play--v2.png" />
                <p><a href="https://www.instagram.com/explore/search/keyword/?q=world%20traveler">instagram -> @World
                        traveler</a></p>
                <p><a href="https://www.facebook.com/search/top?q=bbc%20travel">Facebook -> @BBC Travel</a></p>
                <p><a href="https://twitter.com/TravelTsunami">Twitter -> @Travel_Tsunami</a></p>
                <p><a href="https://www.youtube.com/">Youtube</a></p>
            </div>

            <div class="box ">
                <h2>Covid-19 News</h2>
                <div class="covid-image " style="height:100px; "></div>
                <p>There are temporary changes for all travellers, including Canadian citizens, regardless of their
                    vaccination status. The virus can spread from an infected person’s mouth or nose in small liquid
                    particles when they cough, sneeze, speak,
                    sing or breathe. These particles range from larger respiratory droplets to smaller aerosols.
                </p>
            </div>
        </div>
    </div>

<?php include APPROOT.'/views/includes/footer.php'; ?>