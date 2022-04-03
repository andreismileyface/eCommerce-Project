<?php include APPROOT.'/views/includes/header.php'; ?>
<link rel="stylesheet" href="public/css/Flights.css">
<div class="row">
        <div class="leftcolumn">
            <div class="box">
                <div class="container">
                    <form action="" method="POST">
                        <h2>Filter Results</h2>
                        <label for="Location">&#9992; Leaving from</label>
                        <select class="form-select" aria-label="From select" id="from" name="start">
                            <option value="Montreal" selected>Montreal</option>
                            <option value="Toronto">Toronto</option>
                            <option value="Quebec City">Quebec City</option>
                            <option value="New York">New York</option>
                            <option value="Florida">Florida</option>
                        </select>

                        <label for="Location">&#128205; Going to</label>
                        <select class="form-select" aria-label="From select" id="from" name="destination">
                            <option value="Montreal">Montreal</option>
                            <option value="Toronto" selected>Toronto</option>
                            <option value="Quebec City">Quebec City</option>
                            <option value="New York">New York</option>
                            <option value="Florida">Florida</option>
                        </select>
<!-- 
                        <label for="Departing">&#128197; Departing</label>
                        <input type="date" id="Departing" required>

                        <label for="Returning">&#128197; Returning</label>
                        <input type="date" id="Returning" required> -->

                        <input type="submit" value="Search" name="submit">
                    </form>
                </div>
            </div>

            <div class="box container">
                <?php 
                    if (!isset($data['filtered']))
                        echo '<h2>List of flights</h2>';
                    else
                        echo '<h3>List of flights leaving from '.$data['start'].' to '.$data['destination'].'</h3><a href="/eCommerce-Project/Flight">Clear Filter</a>'
                ?>
                
                <?php
                    $trips = $data['trips'];
                    if (empty($trips)) {
                        echo 'no trips found';
                    } else {
                        echo '
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Spots Left</th>
                                        <th scope="col">Leaving From</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Price</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                        ';
                        foreach ($trips as $trip) {
                            echo 
                            '
                                    <tr>
                                        <th scope="row">'.$trip->max.'</th>
                                        <td>'.$trip->start.'</td>
                                        <td>'.$trip->destination.'</td>
                                        <td>'.$trip->price.'$</td>
                                        <td><a href="/eCommerce-Project/Trip/viewTrip/'.$trip->trip_id.'">View</a></td>
                                    </tr>
                            ';
                        }
                        echo
                        '
                                </tbody>
                            </table>
                        ';
                    }
                ?>

                <h2>LOCATION</h2>
                <h5>Google Map representation of an airport nearby.</h5>
                <p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5596.688388680401!2d-73.74456960875895!3d45.462869944127576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc93d7753d8c92b%3A0x1e30a8791014678d!2sMontr%C3%A9al-Pierre%20Elliott%20Trudeau%20International%20Airport!5e0!3m2!1sen!2sca!4v1638127431218!5m2!1sen!2sca"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </p>
            </div>
        </div>

        <div class="rightcolumn ">
            <div class="box ">
                <h3>Follow Travel Tsunami</h3>
                <img src="https://img.icons8.com/fluency/24/000000/instagram-new.png" />
                <img src="https://img.icons8.com/fluency/24/000000/facebook-new.png" />
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

            <div class="box ">
                <h2>Our Flights Reviews</h2>
                <div class="review-container">
                    <p>Terry Arnitage - Customer</p>
                    <p> Good food, great service and smooth flight. All 4 flights were on time and comfortable. Staff
                        friendly and gave excellent service. Will gladly fly with them again.</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="review-container" style="margin-top: 10px;">
                    <p>Mike Hane - Customer</p>
                    <p>I really enjoyed this flight. The flight attendants offered excellent service. There was a good
                        selection of wines. The dinner was good but I would have appreciate a third option for the main
                        course. I particularly enjoyed watching
                        the films, documentaries and TV shows. When I am flying longer routes I always try to book on a
                        plane with Signature Service. It's nice to see they've brought that back. I also enjoyed the AC
                        lounge and have a bite to eat and a
                        glass of wine and some water before my flight. The seats are really comfortable and with the
                        seat facing the window, it feels nicely private. I also appreciated the health protocols
                        followed by the AC staff.</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
            </div>

            <div class="box ">
                <div class="blackfriday-container">
                    <h2>BLACK FRIDAY DEAL</h2>
                    <div class="friday-image " style="height:100px; "></div>
                    <p id="countdown" style="font-size: 20px; text-align: center;"></p>
                    <p>The Black Friday 2021 sale has ended. Mark your calendar for Best Buy Black Friday 2022 on
                        November 25.</p>
                </div>
            </div>
        </div>
    </div>
<?php include APPROOT.'/views/includes/footer.php'; ?>