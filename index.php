<?php
 //session_start();
            //Establish connection with the database
            $user = 'root';
            $password = 'root';
            $db = 'covid_us';
            $host = 'localhost';
            
            $conn = new mysqli($host, $user, $password, $db);

            if (mysqli_connect_error()) {
                echo "error connect";
                die("Database connection failed: " . mysqli_connect_error());
               
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='index.css'/>
    <title>Dashboard Covid-19</title>
</head>
<body>
    <header>
        <h1>BE ON TOP OF Covid-19</h1>
        <h2>Novel Coronavirus Dashboard in the USA by state </h2>
        <h5>updates every 30 minutes</h5>
    </header>
    <span><h2>Total</h2></span>
    <div id="total">
    <?php
      $sql_total = mysqli_query($conn,"SELECT * FROM total");
      echo "<table class='tbstyle' >
      <tr>
            <th>Cases</th>
            <th>Deaths</th>
      </tr>";
        while($row = $sql_total ->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $row['cases']."</td>";
                echo "<td>" . $row['deaths']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    
            
     ?>   
    </div>
    <div id="choose" class="custom">
        Choose states you want to see
    </div> 
    <div id="field" style="display:none" >   
    <fieldset >
        <form action="" method="post">
        <input type="submit" name="save" value="save" class="custom">
   <table>
       <tr>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
       </tr>
       <tr>
           <td><input type="checkbox" id="AL" name="st[]" value="Alabama"> <label for="AL">Alabama</label></td>
           <td><input type="checkbox" id="AK" name="st[]" value="Alaska"> <label for="AK">Alaska</label></td>
           <td><input type="checkbox" id="AZ" name="st[]" value="Arizona"> <label for="AZ">Arizona</label></td>
           <td><input type="checkbox" id="AR" name="st[]" value="Arkansas"> <label for="AR">Arkansas</label>
           </td>
       </tr>
       <tr>
           <td><input type="checkbox" id="CA" name="st[]" value="California"> <label for="CA">California</label></td>
           <td><input type="checkbox" id="CO" name="st[]" value="Colorado"> <label for="CO">Colorado</label></td>
           <td><input type="checkbox" id="CT" name="st[]" value="Connecticut"> <label for="CT">Connecticut</label></td>
           <td><input type="checkbox" id="DE" name="st[]" value="Delaware"> <label for="DE">Delaware</label></td>
       </tr>
       <tr>
            <td><input type="checkbox" id="DC" name="st[]" value="District Of Columbia"> <label for="DC">District Of Columbia</label></td>
            <td><input type="checkbox" id="FL" name="st[]" value="Florida"> <label for="FL">Florida</label></td>
            <td><input type="checkbox" id="GA" name="st[]" value="Georgia"> <label for="GA">Georgia</label></td>
            <td><input type="checkbox" id="HI" name="st[]" value="Hawaii"> <label for="HI">Hawaii</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="ID" name="st[]" value="Idaho"> <label for="ID">Idaho</label></td>
            <td><input type="checkbox" id="IL" name="st[]" value="Illinois"> <label for="IL">Illinois</label></td>
            <td><input type="checkbox" id="IN" name="st[]" value="Indiana"> <label for="IN">Indiana</label></td>
            <td><input type="checkbox" id="IA" name="st[]" value="Iowa"> <label for="IA">Iowa</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="KS" name="st[]" value="Kansas"> <label for="KS">Kansas</label></td>
            <td><input type="checkbox" id="KY" name="st[]" value="Kentuky"> <label for="KY">Kentuky</label></td>
            <td><input type="checkbox" id="LA" name="st[]" value="Louisiana"> <label for="LA">Louisiana</label></td>
            <td><input type="checkbox" id="ME" name="st[]" value="Maine"> <label for="ME">Maine</label>
            </td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="MD" name="st[]" value="Maryland"> <label for="MD">Maryland</label></td>
            <td><input type="checkbox" id="MA" name="st[]" value="Massachusetts"> <label for="MA">Massachusetts</label></td>
            <td><input type="checkbox" id="MI" name="st[]" value="Michigan"> <label for="MI">Michigan</label></td>
            <td><input type="checkbox" id="MN" name="st[]" value="Minnesota"><label for="MN">Minnesota</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="MS" name="st[]" value="Mississippi"> <label for="MS">Mississippi </label></td>
            <td><input type="checkbox" id="MO" name="st[]" value="Missouri"> <label for="MO">Missouri</label></td>
            <td><input type="checkbox" id="MT" name="st[]" value="Montana"> <label for="MT">Montana</label></td>
            <td><input type="checkbox" id="NE" name="st[]" value="Nebraska"> <label for="NE">Nebraska</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="NV" name="st[]" value="Nevada"> <label for="NV">Nevada</label></td>
            <td><input type="checkbox" id="NC" name="st[]" value="North Carolina"> <label for="NC">North Carolina</label></td>
            <td><input type="checkbox" id="NM" name="st[]" value="New Mexico"> <label for="NM">New Mexico</label></td>
            <td><input type="checkbox" id="OH" name="st[]" value="Ohio"> <label for="OH">Ohio</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="NJ" name="st[]" value="New Jersey"> <label for="NJ">New Jersey</label></td>
            <td><input type="checkbox" id="NY" name="st[]" value="New York"> <label for="NY">New York (County data available)</label></td>
            <td><input type="checkbox" id="NH" name="st[]" value="New Hampshire"> <label for="NH">New Hampshire </label></td>
            <td><input type="checkbox" id="ND" name="st[]" value="North Dakota"> <label for="ND">North Dakota</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="OK" name="st[]" value="Oklahoma"> <label for="OK">Oklahoma</label></td>
            <td><input type="checkbox" id="OR" name="st[]" value="Oregon"> <label for="OR">Oregon</label></td>
            <td><input type="checkbox" id="PA" name="st[]" value="Pennsylvania"> <label for="PA">Pennsylvania</label></td>
            <td><input type="checkbox" id="RI" name="st[]" value="Rhode Island"> <label for="RI">Rhode Island</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="SC" name="st[]" value="South Carolina"> <label for="SC">South Carolina</label></td>
            <td><input type="checkbox" id="SD" name="st[]" value="South Dakota"> <label for="SD">South Dakota</label></td>
            <td><input type="checkbox" id="TN" name="st[]" value="Tennessee"> <label for="TN">Tennessee</label></td>
            <td><input type="checkbox" id="TX" name="st[]" value="Texas"> <label for="TX">Texas</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="UT" name="st[]" value="Utah"> <label for="UT">Utah</label></td>
            <td><input type="checkbox" id="VT" name="st[]" value="Vermont"> <label for="VT">Vermont</label></td>
            <td><input type="checkbox" id="VA" name="st[]" value="Virginia"> <label for="VA">Virginia</label></td>
            <td><input type="checkbox" id="WA" name="st[]" value="Washington"> <label for="WA">Washington</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="WV" name="st[]" value="West Virginia"> <label for="WV">West Virginia</label></td>
            <td> <input type="checkbox" id="WI" name="st[]" value="Wisconsin"> <label for="WI">Wisconsin</label></td>
            <td><input type="checkbox" id="WY" name="st[]" value="Wyoming"> <label for="WY">Wyoming</label></td>
            <td><input type="checkbox" id="VG" name="st[]" value="Virgin Islands"> <label for="VG">Virgin Islands</label></td>
    </tr>
    <tr>    
            <td><input type="checkbox" id="GU" name="st[]" value="Guam"> <label for="GU">Guam</label></td>
            <td><input type="checkbox" id="PR" name="st[]" value="Puerto Rico"> <label for="PR">Puerto Rico</label></td>
            <td><input type="checkbox" id="MW" name="st[]" value="Northern Marina Islands"> <label for="MW">Northern Marina Islands</label></td>
            <td></td>
    </tr>

   </table>
  
</form> 
</fieldset>

    </div>  
    <div id="states">      
    <span><h2>States</h2></span>
    <table class = 'tbstyle' >
        <tr>
            <th>State</th>
            <th><a href="?order=cases">Confirmed Cases</a></th>
            <th><a href="?order=cd">New Cases</a></th>
            <th><a href="?order=deaths">Confirmed Deaths</a></th>
            <th><a href="?order=dd">New Deaths</a></th>
        </tr>
    
            <?php
           
            $ip=$_SERVER['REMOTE_ADDR'];

            if(isset($_POST['save'])){
                $delet = mysqli_query($conn,"DELETE FROM custom WHERE ip_addr = '$ip'");
                
                if(!empty($_POST["st"])){
                    $array = $_POST["st"];
                    foreach($array as $item){
                        $query = mysqli_query($conn,"INSERT INTO custom (ip_addr, state_pick) VALUES('$ip','$item')");
                    }
                } 
            }
            
            $custom_query = mysqli_query($conn,"SELECT * FROM custom WHERE ip_addr = '$ip'");
            $custom_row_num = mysqli_num_rows($custom_query);
            //echo $custom_row_num;
            if($custom_row_num >0){
        
                $sql = "SELECT states.state_name, states.cases, states.deaths, states.cases - states_delta.cases_delta AS cd, states.deaths - states_delta.deaths_delta AS dd FROM states LEFT JOIN states_delta ON (states.state_name = states_delta.state_name) INNER JOIN custom ON (states.state_name = custom.state_pick) ORDER BY ";
            }else{
            
                $sql = "SELECT states.state_name, states.cases, states.deaths, states.cases - states_delta.cases_delta AS cd, states.deaths - states_delta.deaths_delta AS dd FROM states LEFT JOIN states_delta ON (states.state_name = states_delta.state_name) ORDER BY ";
            
            }
            $sort_types = array('cases', 'cd', 'deaths', 'dd');
            $sort = 'cases';
            if (isset($_GET['order']) && in_array($_GET['order'], $sort_types)) {
                     $sort = $_GET['order'];
                        }
            
            $sql_sort = mysqli_query($conn, $sql.$sort." DESC");
                        
            $row_nums=mysqli_num_rows($sql_sort); 

            if($row_nums>0){
                
                while($row = $sql_sort->fetch_assoc()){
                    if($row['state_name'] == 'New York'){
                    echo "<tr>";
                        echo "<td><a href='county.php'>" . $row['state_name']."</a></td>";
                        echo "<td>" . $row['cases']."</td>";
                        echo "<td>" . $row['cd']."</td>";
                        echo "<td>" . $row['deaths']."</td>";
                        echo "<td>" . $row ['dd']."</td>";
                    echo "</tr>";
                    continue;     
                    }
                    echo "<tr>";
                            echo "<td>" . $row['state_name']."</td>";
                            echo "<td>" . $row['cases']."</td>";
                            echo "<td>" . $row['cd']."</td>";
                            echo "<td>" . $row['deaths']."</td>";
                            echo "<td>" . $row ['dd']."</td>";
                    echo "</tr>"; 
                }
                //echo "</table>";
            }


            ?>
    </table>    
    </div>
</body>
 
 <script>
     var b = document.getElementById("choose");


b.onclick = function() {
    var f = document.getElementById("field");
    if (f.style.display === "none") {
        f.style.display = "block";
      } else {
        f.style.display = "none";
      }

};
 </script>
</html>