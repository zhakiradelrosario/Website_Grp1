<?php
include("vconfig.php");
if(isset($_POST['input'])){

    $input = $_POST['input'];

    //$query = "SELECT * FROM visits WHERE `Date` LIKE '{$input}%' OR `Full Name` LIKE '{$input}%' LIMIT 10";

    $query = "SELECT * FROM visits WHERE `Date` LIKE '{$input}%' OR `Full Name` LIKE '{$input}%' OR `nationality` LIKE '{$input}%' OR `age` LIKE '{$input}%' OR `Email` LIKE '{$input}%' LIMIT 10";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){?>

    <table class="table table=bordered table-striped mt-4">
       <thead>
        <tr>
            <th>Date</th>
            <th>Fullname</th>
            <th>Nationality</th>
            <th>Age</th>
            <th>Email</th> 
        </tr>
       </thead>

       <tbody>
     <!--Para ma fetch 'yong  data-->
        <?php
        while($row = mysqli_fetch_assoc($result)){
            
            $date = $row['Date'];
            $fullname = $row['Full Name'];
            $nationality = $row['Nationality'];
            $age = $row['Age'];
            $email = $row['Email'];

            ?>

            <tr>
                <td><?php echo $date;?></td>
                <td><?php echo $fullname;?></td>
                <td><?php echo $nationality;?></td>
                <td><?php echo $age;?></td>
                <td><?php echo $email;?></td>     
            </tr>

            <?php
        }
        ?>
       </tbody>
    </table>

    <?php

    }else{
        echo "<h4 class = 'text-danger text-center mt-3'>Not available</h4>";
    }
}
?>