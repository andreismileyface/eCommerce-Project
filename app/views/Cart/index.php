<?php include APPROOT.'/views/includes/header.php'; ?>
<link rel="stylesheet" href="public/css/Cart.css">

<div class="box container">
    <?php 
        echo '<h2>Cart List</h2>';
    ?>
    
    <?php $user_id = $_SESSION['user_id'] ?>
    <form method="post" action="/eCommerce-Project/Home/<?php echo $user_id ?>">
    <?php
        $trips = $data['trips'];
        $carts = $data['carts'];

  
        

        $count = 0;
        
       
            echo '
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Transport</th>
                            <th scope="col">Leaving From</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Price</th>
                            <th scope="col">Number of tickets</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
            ';
            foreach ($trips as $trip) {
                echo 
                '
                        <tr>
                            <th scope="row">'.$trip->description.'</th>
                            <td>'.$trip->start.'</td>
                            <td>'.$trip->destination.'</td>
                            <td>'.$trip->price.'$</td>
                            <td>'.$carts[$count]->number.'</td>
                            <td><a href="/eCommerce-Project/Cart/deleteSingle/'.$carts[$count]->cart_id.'"> Delete</a></td>
                        </tr>
                ';
                $count++;

            }
        echo
        '
                </tbody>
            </table>
            
        ';
        
        
    ?>
    <!--<?php //$user_id = $_SESSION['user_id'] ?>
    <form method="post" action="/eCommerce-Project/Cart/deleteCart/<?php //echo $user_id ?>">-->
        
    
    
        <button name="Delete" class="btn btn-primary">Delete All</button>
    
    
    
    
    </form>
</div>


