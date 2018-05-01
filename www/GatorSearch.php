<?php
/* Uncomment the next three lines to check errors only */
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// include the database connection and the database data classes
include_once dirname(__FILE__) . '/Database/DBData.php';
$data = new DBData(); // creates an object of class DBData
$search_val = "";
// puts back in search bar the value previosly searched.
if (isset($_POST['query']) && $_POST['query'] != null && $_POST['query'] != "")
{
    $search_val = $_POST['query'];
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="jQuery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
      .trending {
            border-radius: 10px;
            padding: 15px;
          width: 300px;
          text-align: center;
        border-width:5px;
border-style:solid;
border-color:goldenrod;
background: white;
          position: relative;
  top: 50%;
  left: 40%;
          margin: 10px;
        }

        .trending .trends {
            color: #000;
            padding-left: 10px;
            margin-top: 10px;
        }
        .results {
            border-radius: 10px;
            padding: 15px;
        width: 600px;
        border-radius: 10px;
            padding: 15px;
          text-align: center;
        border-width:5px;
border-style:solid;
border-color:goldenrod;
background: white;
          position: relative;
  top: 50%;
  left: 30%;
          margin: 5px;}
        .resultsbox{
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .results .end {
            color: #000;
            padding-left: 10px;
            margin-top: 10px;
        }

        input[type=text] {
position: relative;
  top: 50%;
  left: 40%;
                width: 250px;
            margin-bottom: 50px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('searchicon.jpg');
            background-position: left;
            background-size: contain;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
            width: 300px;
        }


@-webkit-keyframes GatorColor {
    0%{background-position:0% 19%}
    50%{background-position:100% 82%}
    100%{background-position:0% 19%}
}
@-moz-keyframes GatorColor {
    0%{background-position:0% 19%}
    50%{background-position:100% 82%}
    100%{background-position:0% 19%}
}
@-o-keyframes GatorColor {
    0%{background-position:0% 19%}
    50%{background-position:100% 82%}
    100%{background-position:0% 19%}
}
@keyframes GatorColor { 
    0%{background-position:0% 19%}
    50%{background-position:100% 82%}
    100%{background-position:0% 19%}
}
body {margin:0;
    background: linear-gradient(300deg, #2c0074, #f3ae00);
background-size: 400% 400%;

-webkit-animation: GatorColor 13s ease infinite;
-moz-animation: GatorColor 13s ease infinite;
-o-animation: GatorColor 13s ease infinite;
animation: GatorColor 13s ease infinite;}
.w3-btn {width:150px;}
.navbar {
  overflow: hidden;
  position: static;
  width: 1250px;
    height: 100px;
       border: 2px inset azure ;
    border-radius: 8px;
    padding-left: 50px;
    padding-right: 50px;

  
}
    #navbox{
    margin: 30px;
     width: 300px;
    padding: 25px;
        position: relative;

        
    }.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 70px;
  text-decoration: none;
  font-size: 17px;
        height: 80px;
}

.navbar a:hover {
  color: white;
}
.navbar a.active {
  color: white;
}

.navbar .icon {
  display: none;
}


@media screen and (max-width: 600px) {
  .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    bottom:0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}

br {
  margin:2.5em 0;/* FF for instance */
  line-height:5em;/* chrome for instance */
}

<<<<<<< HEAD
.img-fluid{ 
max-width: 8%; }
    .gatorpic{
        width: 8%;
        height: 8%;
    }
=======
    .marginal-screen{
    margin-right: 25%;
    margin-left: 25%;  
        text-align: center;
        border-width:5px;
border-style:solid;
border-color:goldenrod;
background: white;
    }
        .undernav{
            padding-bottom: 200px;
        }
        td {
    padding-right: 50px;
}
         #main{background-image: url('gatorRon.png');
            background-position: left;
            background-size: contain;
            background-repeat: no-repeat;}
>>>>>>> e26bea3abc824ae8da33c36209e43a4cefd3b367


</style>
     <div id="navbox">
<div class="navbar" id="myNavbar">
      <a href="GatorHome.php" id="main"> GatorHealth </a>
          
  <a href="GatorMap.php">Map</a>
  <a href="GatorPharmacy.html">Pharmacy</a>
  <a href="GatorResources.html">Resources</a>
  <a href="GatorSearch.php" class="active">Search</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
    </div> 
</head>
<head>
         
<body class="undernav">

<div class="ui-widget">
    <form method="post">
  
    <input type="text" id="category" name="query" value='<?php echo $search_val; ?>' placeholder="  Search..">

  
</form>
    </div>
    <table>
  <tr>
    <td> <div class="resultsbox">
    
    <div class="results">
        <font size="6" style="color:#000;">Results</font>
        <div class="end">
         <?php
        /**
         * This PHP script is in charge of populating the results div when a string in the search bar matches a text
         * in the database.
         */
        if (isset($_POST['query']) && $_POST['query'] != null and $_POST['query'] != "") {
            // $_POST request was successful
            $search_var = mysqli_real_escape_string($data->get_connection(), $_POST['query']); // scape quotes from str in search
            $query = "SELECT * FROM results WHERE CONCAT(category, '', text, '') LIKE '%$search_var%'";
            $fields = $data->select($query);
            if ($fields)
            {
                while ($attribute = $fields->fetch_assoc())
                {
                    // show results in trending div
                    $category = $attribute['category'];
                    $true_category = mysqli_real_escape_string($data->get_connection(), $category);
                    $text = $attribute['text'];
                    echo $category . '<br>'; // show category field data
                    echo $text . '<br>'; // show text field data
                    echo '<br>';
                    echo '<p>Disclaimer: Our searchbar is populated with data from our database. The information reflected is currently accurate but subject to change. Thanks for testing!</p>';
                    
                    $table = "hot";
                    $field = "count";
                    $where_field = "category";
                    // if the category searched exist in the hot table, update counter (old_value + 1). Otherwise,
                    // insert the category and add 1 to the counter
                    if (!$data->update_increment($table, $field, $where_field, $true_category)) {
                        $data->insert("hot", ['category', 'count'], [$true_category, 1]);
                    }


                }
            }
 
        }
        
        ?>
        </div>
    </div>
    </div></td>
      <td></td>
    <td><div class="trending">
    <font size="5" style="color: #000;">Trending</font>
    <div class="trends">

        <?$trends = "SELECT category FROM hot ORDER BY count DESC LIMIT 9";
    $results = $data->select($trends);
        if ($results->num_rows > 0){
            while($row = $results->fetch_assoc()){
                echo $row["category"]."<br>";
            }
        }?>

    </div>
</div>   
</td>
  </tr>
</table>
 



<script>
    function myFunction() {
        var x = document.getElementById("myNavbar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
   $(function() {
        var availableTags = <?php include('Suggest.php'); ?>;
        $("#category").autocomplete({
            source: availableTags,
            autoFocus:true,
            select: function( event, ui ) { 
        window.location.href = ui.item.value;
    }
        });
    });

</script>
    
</body>


</html>