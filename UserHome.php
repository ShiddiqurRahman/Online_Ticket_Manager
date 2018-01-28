<?php

session_start();

if(isset($_SESSION['name']) && !empty($_SESSION['name']))
{
    $name = $_SESSION['name'] ;


    
}



$bus = $_GET['name'];
$_SESSION['bus']=$bus;





include_once ('config.php');

$query1 = mysqli_query($conn, "SELECT * FROM bus WHERE  bus_name='$bus'");
$row = mysqli_fetch_array($query1) or die(mysqli_error());
$_SESSION['dtime']=$row['departure'];








$GLOBALS['a1']=true;
$GLOBALS['a2']=true;
$GLOBALS['a3']=true;
$GLOBALS['a4']=true;
$GLOBALS['a5']=true;
$GLOBALS['a6']=true;
$GLOBALS['a7']=true;
$GLOBALS['a8']=true;
$GLOBALS['a9']=true;
$GLOBALS['a10']=true;
$GLOBALS['a11']=true;
$GLOBALS['a12']=true;
$GLOBALS['a13']=true;
$GLOBALS['a14']=true;
$GLOBALS['a15']=true;
$GLOBALS['a16']=true;
$GLOBALS['a17']=true;
$GLOBALS['a18']=true;
$GLOBALS['a19']=true;
$GLOBALS['a20']=true;
$GLOBALS['a21']=true;
$GLOBALS['a22']=true;
$GLOBALS['a23']=true;
$GLOBALS['a24']=true;


$query = mysqli_query($conn, "SELECT * FROM `" . $bus . "` WHERE  val='true'");
while($os = mysqli_fetch_assoc($query)){

  // print_r($os);
//    echo $os['name'];
    if (in_array("1A", $os)) {
        $GLOBALS['a1'] = false;



    }
    if (in_array("1B", $os)) {
        $GLOBALS['a2'] = false;

    }

    if (in_array("1C", $os)) {
        $GLOBALS['a3'] = false;



    }
    if (in_array("1D", $os)) {
        $GLOBALS['a4'] = false;

    }

    if (in_array("2A", $os)) {
        $GLOBALS['a5'] = false;



    }
    if (in_array("2B", $os)) {
        $GLOBALS['a6'] = false;

    }

    if (in_array("2C", $os)) {
        $GLOBALS['a7'] = false;



    }
    if (in_array("2D", $os)) {
        $GLOBALS['a8'] = false;

    }

    if (in_array("3A", $os)) {
        $GLOBALS['a9'] = false;
        


    }
    if (in_array("3B", $os)) {
        $GLOBALS['a10'] = false;

    }

    if (in_array("3C", $os)) {
        $GLOBALS['a11'] = false;



    }
    if (in_array("3D", $os)) {
        $GLOBALS['a12'] = false;

    }

    if (in_array("4A", $os)) {
        $GLOBALS['a13'] = false;



    }
    if (in_array("4B", $os)) {
        $GLOBALS['a14'] = false;

    }

    if (in_array("4C", $os)) {
        $GLOBALS['a15'] = false;



    }
    if (in_array("4D", $os)) {
        $GLOBALS['a16'] = false;

    }

    if (in_array("5A", $os)) {
        $GLOBALS['a17'] = false;



    }
    if (in_array("5B", $os)) {
        $GLOBALS['a18'] = false;

    }

    if (in_array("5C", $os)) {
        $GLOBALS['a19'] = false;



    }
    if (in_array("5D", $os)) {
        $GLOBALS['a20'] = false;

    }


    if (in_array("6A", $os)) {
        $GLOBALS['a21'] = false;



    }
    if (in_array("6B", $os)) {
        $GLOBALS['a22'] = false;

    }

    if (in_array("6C", $os)) {
        $GLOBALS['a23'] = false;



    }
    if (in_array("6D", $os)) {
        $GLOBALS['a24'] = false;

    }


}








?>


<!doctype html>
<html>
<head>
    <title>  myTicket</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="style1.scss" type="text/css"/>


</head>


<body>
<div class="wrapper">
    <div class ="heading">
         myTicket
    </div>

    <div class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bus.php">Bus</a></li>
            
            <li><a href="movies.php">Movies</a></li>
            <li <?php if(empty($_SESSION['name'])) { ?>
                style="display:none;">
           <?php }?>
                   <a href="logout.php">logout</a></li>

        </ul>
    </div>



    <form method="post" action="booking_info.php">
    <div class="plane">
        <div class="cockpit">
            <h1>Please select a seat</h1>
        </div>
        <div class="exit exit--front fuselage">

        </div>
        <ol class="cabin fuselage">
            <li class="row row--1">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a1===false){?> disabled id="1A"    <?php }?>   id="1A"  value ="1A"  />
                        <label for="1A">1A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a2===false){?> disabled id="1B"    <?php } ?> id="1B" value="1B"  />
                        <label for="1B">1B</label>
                    </li>
                    <li class="seat">
<!--                      <input type="checkbox" name="check_list[]" id="1C" />-->
<!--                      <label for="1C">1C</label>-->
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" --><?php //      ?><!--disabled id="1D" />-->
<!--                        <label for="1D">1D</label>-->
                    </li>

                    <li class="seat">
                        <input type="checkbox" name="check_list[]"  <?php  if($a3===false){?> disabled id="1C"    <?php }?>   id="1C"  value ="1C" />
                        <label for="1C">1C</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" name="check_list[]"  <?php  if($a4===false){?> disabled id="1D"    <?php }?>   id="1D"  value ="1D" />
                       <label for="1D">1D</label>
                    </li>
                </ol>
            </li>
            <li class="row row--2">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a5===false){?> disabled id="2A"    <?php }?>   id="2A"  value ="2A" />
                        <label for="2A">2A</label>
                    </li>
                    <li class="seat">
                       <input type="checkbox" name="check_list[]" <?php  if($a6===false){?> disabled id="2B"    <?php }?>   id="2B"  value ="2B" />
                      <label for="2B">2B</label>
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="2C" />-->
<!--                        <label for="2C">2C</label>-->
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="2D" />-->
<!--                        <label for="2D">2D</label>-->
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a7===false){?> disabled id="2C"    <?php }?>   id="2C"  value ="2C" />
                        <label for="2C">2C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]"  <?php  if($a8===false){?> disabled id="2D"    <?php }?>   id="2D"  value ="2D" />
                        <label for="2D">2D</label>
                    </li>
                </ol>
            </li>
            <li class="row row--3">
                <ol class="seats" type="A">
                   <li class="seat">
                       <input type="checkbox" name="check_list[]"  <?php  if($a9===false){?> disabled id="3A"    <?php }?>   id="3A"  value ="3A" />
                        <label for="3A">3A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a10===false){?> disabled id="3B"    <?php }?>   id="3B"  value ="3B" />
                        <label for="3B">3B</label>
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="3C" />-->
<!--                        <label for="3C">3C</label>-->
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="3D" />-->
<!--                        <label for="3D">3D</label>-->
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a11===false){?> disabled id="3C"    <?php }?>   id="3C"  value ="3C" />
                        <label for="3C">3C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a12===false){?> disabled id="3D"    <?php }?>   id="3D"  value ="3D" />
                        <label for="3D">3D</label>
                    </li>
                </ol>
            </li>
            <li class="row row--4">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a13===false){?> disabled id="4A"    <?php }?>   id="4A"  value ="4A" />
                        <label for="4A">4A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a14===false){?> disabled id="4B"    <?php }?>   id="4B"  value ="4B" />
                        <label for="4B">4B</label>
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="4C" />-->
<!--                        <label for="4C">4C</label>-->
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="4D" />-->
<!--                        <label for="4D">4D</label>-->
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a15===false){?> disabled id="4C"    <?php }?>   id="4C"  value ="4C" />
                        <label for="4C">4C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a16===false){?> disabled id="4D"    <?php }?>   id="4D"  value ="4D" />
                        <label for="4D">4D</label>
                    </li>
                </ol>
            </li>
            <li class="row row--5">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a17===false){?> disabled id="5A"    <?php }?>   id="5A"  value ="5A" />
                        <label for="5A">5A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a18===false){?> disabled id="5B"    <?php }?>   id="5B"  value ="5B"/>
                        <label for="5B">5B</label>
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="5C" />-->
<!--                        <label for="5C">5C</label>-->
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" name="check_list[]" id="5D" />-->
<!--                        <label for="5D">5D</label>-->
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]"  <?php  if($a19===false){?> disabled id="5C"    <?php }?>   id="5C"  value ="5C"/>
                        <label for="5C">5C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="check_list[]" <?php  if($a20===false){?> disabled id="5D"    <?php }?>   id="5D"  value ="5D"/>
                        <label for="5D">5D</label>
                    </li>
                </ol>
            </li>
            <li class="row row--6">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox"  name="check_list[]"  <?php  if($a21===false){?> disabled id="6A"    <?php }?>   id="6A"  value ="6A"/>
                        <label for="6A">6A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox"  name="check_list[]" <?php  if($a22===false){?> disabled id="6B"    <?php }?>   id="6B"  value ="6B"/>
                        <label for="6B">6B</label>
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" id="6C" />-->
<!--                        <label for="6C">6C</label>-->
                    </li>
                    <li class="seat">
<!--                        <input type="checkbox" id="6D" />-->
<!--                        <label for="6D">6D</label>-->
                    </li>
                    <li class="seat">
                        <input type="checkbox"  name="check_list[]"  <?php  if($a23===false){?> disabled id="6C"    <?php }?>   id="6C"  value ="6C"/>
                        <label for="6C">6C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox"  name="check_list[]"  <?php  if($a24===false){?> disabled id="6D"    <?php }?>   id="6D"  value ="6D"/>
                        <label for="6D">6D</label>
                    </li>
                </ol>
            </li>



        </ol>
        <div class="exit exit--back fuselage">
           
        </div >
        <input type="submit" style="float: right" value="continue" name="btn-login" />
    </div>

    </form>

    
    <div class="footer">
        @copyright Shiddiqur Rahman
    </div>
</div>
</body>
</html>