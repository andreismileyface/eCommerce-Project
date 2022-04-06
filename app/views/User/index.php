<?php include APPROOT.'/views/includes/header.php'; ?>

<div class="container" style="min-height: 60vh;">

<h2>Personnal Information</h2>
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


<?php include APPROOT.'/views/includes/footer.php'; ?>