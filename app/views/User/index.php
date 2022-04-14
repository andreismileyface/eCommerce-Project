<?php include APPROOT.'/views/includes/header.php'; ?>
<div class="container">
    <div class="row justify-content-right">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
                <img src="https://raw.githubusercontent.com/twbs/icons/main/icons/person-fill.svg" alt="...">
                <div class="card-body p-1-9 p-xl-5">
                    <div class="mb-4">
                        <h3 class="h4 mb-0">
                            <input name="first_name" type="text"  readonly class="form-control-plaintext" id="first_name" placeholder="Name" require value="<?php echo $data['users']->first_name ?>">
                            </h3>
                        <h3 class="h4 mb-0">
                            <input name="last_name" type="text"  readonly class="form-control-plaintext" id="last_name" placeholder="City" require value="<?php echo $data['users']->last_name ?>">
                        </h3>
                            <h3 class="h4 mb-0">
                            <input name="email" type="text"  readonly class="form-control-plaintext" id="email" placeholder="Phone" require value="<?php echo $data['users']->email ?>">
                        </h3>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <?php
                        if ($data["user"] == $_SESSION['user_id']) {?>
                            <p class="text-left">Password change click <a href="/eCommerce-Project/User/password/">Here</a></p>
                            <p class="text-left">Email change click <a href="/eCommerce-Project/User/email/">Here</a></p>
                            <p class="text-left">Information change click <?php echo "<a href=/eCommerce-Project/User/updateInfo/".$_SESSION['user_id']."> Here</a>"?></p>
                            <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ps-lg-1-6 ps-xl-5">
                <div class="mb-5 wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="h1 mb-0 text-primary">About Me</h2>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>

                <h2>Trips Information</h2>
                <table  class="table table-bordered">
                     <tr>
                        <td>Start</td> 
                        <td>Destination</td>
                        <td>Date</td>
                        <td>Price</td>
                        <td colspan="3" class="text-center"> Modifications</td>
                    </tr>
                <?php
                    foreach($data["trips"] as $trip){
                    echo"<tr>";
                    echo"<td>$trip->start</td>";
                    echo"<td>$trip->destination</td>";
                    echo"<td>$trip->date</td>";
                    echo"<td>$trip->price</td>";
                    echo"<td>
                    <a href='/eCommerce-Project/Trip/edit/$trip->trip_id'> Update</a>
                    </td>";
                    echo"<td>
                    <a href='/eCommerce-Project/Trip/delete/$trip->trip_id'> Delete</a>
                    </td>";
                    echo"</tr>";
                }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include APPROOT.'/views/includes/footer.php'; ?>