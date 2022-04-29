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
        </div>
    </div>
<?php include APPROOT.'/views/includes/footer.php'; ?>