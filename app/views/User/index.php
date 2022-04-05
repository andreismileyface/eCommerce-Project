<?php include APPROOT.'/views/includes/header.php'; ?>

<div class="container" style="min-height: 60vh;">

<h2>Personnal Information</h2>
    <table  class="table table-bordered">
        <tr>
        <td>id</td>
            
            <td>destination</td>
            <td>date</td>
            <td>price</td>
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
                <a href='/eCommerce-Project/User/update/$trip->trip_id'> Update</a>
                </td>";
                echo"<td>
                <a href='/eCommerce-Project/User/delete/$trip->trip_id/$trip->user_id'> Delete</a>
                </td>";
                echo"</tr>";

            }
        ?>
    </table>


<?php include APPROOT.'/views/includes/footer.php'; ?>