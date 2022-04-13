<?php include APPROOT.'/views/includes/header.php'; ?>

<div class="container" style="min-height: 60vh;">

<?php
if ($data["user"] != $_SESSION['user_id']) {?>
    
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
    <br>
    <br>

    <div class="container" style="min-height: 60vh;">
  <h2>Personnal Information</h2>

  <form class="px-4 py-3" method="post" action="">
    <div class="form-group">
    <label for="firstnameinput">First Name</label>
        <input name="first_name" type="text"  readonly class="form-control-plaintext" id="first_name" placeholder="Name" require value="<?php echo $data['users']->first_name ?>">
    </div>
    <div class="form-group">
        <label for="lastnameinput">Last Name</label>
        <input name="last_name" type="text"  readonly class="form-control-plaintext" id="last_name" placeholder="City" require value="<?php echo $data['users']->last_name ?>">
    </div>
    <div class="form-group">
        <label for="emailinput">Email</label>
        <input name="email" type="text"  readonly class="form-control-plaintext" id="email" placeholder="Phone" require value="<?php echo $data['users']->email ?>">
    </div> 
  </form>
</div>
 <?php } else { ?>
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
    <br>
    <br>

    <div class="container" style="min-height: 60vh;">
  <h2>Personnal Information</h2>

  <form class="px-4 py-3" method="post" action="">
    <div class="form-group">
    <label for="firstnameinput">First Name</label>
        <input name="first_name" type="text"  readonly class="form-control-plaintext" id="first_name" placeholder="Name" require value="<?php echo $data['users']->first_name ?>">
    </div>
    <div class="form-group">
        <label for="lastnameinput">Last Name</label>
        <input name="last_name" type="text"  readonly class="form-control-plaintext" id="last_name" placeholder="City" require value="<?php echo $data['users']->last_name ?>">
    </div>
    <div class="form-group">
        <label for="emailinput">Email</label>
        <input name="email" type="text"  readonly class="form-control-plaintext" id="email" placeholder="Phone" require value="<?php echo $data['users']->email ?>">
    </div> 
  </form>
</div>

    <p class="text-center">Password change click <a href="/eCommerce-Project/User/password/">Here</a></p>
    <p class="text-center">Email change click <a href="/eCommerce-Project/User/email/">Here</a></p>
    <p class="text-center">Profile information change click <?php echo "<a href=/eCommerce-Project/User/updateInfo/".$_SESSION['user_id']."> Here</a>"?></p>

 <?php } ?>

        </div>
<?php include APPROOT.'/views/includes/footer.php'; ?>