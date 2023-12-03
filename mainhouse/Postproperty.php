<?php
    session_start();
    include 'config/config.php';
    if(isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL']==true){
        $currentUser = $_SESSION['SESSION_EMAIL'];
        $data = "SELECT * FROM users WHERE email = '$currentUser'";
        $gotResults = mysqli_query($conn,$data);
        $user = mysqli_fetch_array($gotResults);   
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/css/postproperty.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>-->
    </head>

<body>
    <div class="container">
        <header>Registration</header>

        <form method="post" action="#" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" name="full_name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="dob" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" name="prop_email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" name="prop_number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter your ccupation" name="occupation" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Property Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Property name</label>
                            <input type="text" placeholder="Enter Property Name" name="p_name" required>
                        </div>

                        <div class="input-field">
                            <label>Property price</label>
                            <input type="number" placeholder="Enter property price" name="p_price" required>
                        </div>

                        <div class="input-field">
                            <label>Offer Type</label>
                            <select name="offer_type" required>
                                <option disabled selected>Select type</option>
                                <option value="Sale">Sale</option>
                                <option value="Resale">Resale</option>
                                <option value="Rent">Rent</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Property Type</label>
                            <select name="p_type" required>
                                <option disabled selected>Select Property type</option>
                                <option value="1">Appartment</option>
                                <option value="2">Home</option>
                                <option value="3">Flat</option>
                                <option value="4">Villa</option>
                                <option value="5">Shop</option>
                                <option value="6">TownHouse</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Furnished status</label>
                            <select name="furnished_status" required>
                                <option disabled selected>Select Status</option>
                                <option value="Furnished">Furnished</option>
                                <option value="Semi-Furnished">Semi-Furnished</option>
                                <option value="Un-Furnished">Un-Furnished</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>How many BHK</label>
                            <select name="bhk" required>
                                <option disabled selected>Select BHK</option>
                                <option value="1BHK">1BHK</option>
                                <option value="2BHK">2BHK</option>
                                <option value="3BHK">3BHK</option>
                                <option value="4BHK">4BHK</option>
                                <option value="5BHK">5BHK</option>
                                <option value="None">None</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Total Room</label>
                            <input type="number" placeholder="No of Rooms" name="p_room" required>
                        </div>

                        <div class="input-field">
                            <label>How many Bedrooms</label>
                            <select name="p_bedroom" required>
                                <option disabled selected>Select Bedrooms</option>
                                <option value="1">1Bedrooms</option>
                                <option value="2">2Bedrooms</option>
                                <option value="3">3Bedrooms</option>
                                <option value="4">4Bedrooms</option>
                                <option value="5">5Bedrooms</option>
                                <option value="6">6Bedrooms</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>How many Bathrooms</label>
                            <select name="p_bathroom" required>
                                <option disabled selected>Select Bathrooms</option>
                                <option value="1">1Bathroom</option>
                                <option value="2">2Bathroom</option>
                                <option value="3">3Bathroom</option>
                                <option value="4">4Bathroom</option>
                                <option value="5">5Bathroom</option>
                                <option value="6">6Bathroom</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>How many Balconys</label>
                            <select name="p_balcony" required>
                                <option disabled selected>Select Balconys</option>
                                <option value="1">1Balconys</option>
                                <option value="2">2Balconys</option>
                                <option value="3">3Balconys</option>
                                <option value="4">4Balconys</option>
                                <option value="5">5Balconys</option>
                                <option value="6">6Balconys</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>how many kitchen</label>
                            <input type="number" placeholder="No of Kitchen" name="p_kitchen" required>
                        </div>

                        <div class="input-field">
                            <label>Carpet area</label>
                            <input type="number" placeholder="How many Squarefits?" name="p_carpet" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Living Room</label>
                            <input type="number" placeholder="No of living room" name="p_living" required>
                        </div>

                        <div class="input-field">
                            <label>property age</label>
                            <input type="text" placeholder="Enter property age" name="p_age" required>
                        </div>

                        <div class="input-field">
                            <label>Total floors</label>
                            <input type="text" placeholder="Enter Total floors" name="p_floor" required>
                        </div>
                    </div>


                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Property address</label>
                            <input type="text" placeholder="Permanent or Temporary" name="p_address" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" name="p_state" required>
                        </div>

                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter your city" name="p_city" required>
                        </div>

                        <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Enter your country" name="p_country" required>
                        </div>

                        <div class="input-field" style="width: 800px;">
                            <label>Property description</label>
                            <textarea name="p_description" maxlength="1000" class="input" cols="20" rows="8"
                                placeholder="write about property..." style="width: 800px;
                                padding: 0 15px;
                                border-radius: 5px;
                                border: 1px solid #aaa;
                                margin: 10px 0;" required></textarea>
                        </div>

                        <div class="checkbox" style="margin-top: 8px;">
                            <label>Aminities</label>
                            <div class="box" style="margin: 5px 0;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="camera"/>
                                    <label class="form-check-label" for="flexCheckDefault">Surveillance cameras</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="elevator"/>
                                    <label class="form-check-label" for="flexCheckDefault">Elevator</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="airconditioner"/>
                                    <label class="form-check-label" for="flexCheckDefault">Air Conditioner</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="wifi"/>
                                    <label class="form-check-label" for="flexCheckDefault">Wifi</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="pool"/>
                                    <label class="form-check-label" for="flexCheckDefault">Pool</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="gym"/>
                                    <label class="form-check-label" for="flexCheckDefault">Gym</label>
                                </div>
                            </div>
                            <div class="box" style="margin-left: 609px; margin-top: -136px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="balcony"/>
                                    <label class="form-check-label" for="flexCheckDefault">Balcony</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="parks"/>
                                    <label class="form-check-label" for="flexCheckDefault">Parks</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="clubhouse"/>
                                    <label class="form-check-label" for="flexCheckDefault">Clubhouse</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="dogpark"/>
                                    <label class="form-check-label" for="flexCheckDefault">Dog Park</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="garage"/>
                                    <label class="form-check-label" for="flexCheckDefault">Garage</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-field" style="margin-top: 20px;">
                            <label>image 01</label>
                            <input type="file" name="image_01" required style="padding: 0.4rem;">
                        </div>
                        <div class="input-field" style="margin-top: 20px;">
                            <label>image 02</label>
                            <input type="file" name="image_02" required style="padding: 0.4rem;">
                        </div>
                        <div class="input-field" style="margin-top: 20px;">
                            <label>image 03</label>
                            <input type="file" name="image_03" required style="padding: 0.4rem;">
                        </div>
                        <div class="input-field">
                            <label>image 04</label>
                            <input type="file" name="image_04" required style="padding: 0.4rem;">
                        </div>
                        <div class="input-field">
                            <label>image 05</label>
                            <input type="file" name="image_05" required style="padding: 0.4rem;">
                        </div>
                        <div class="input-field">
                            <label>Is Featured?</label>
                            <select name="p_available" required>
                                <option disabled selected>Select...</option>
                                <option value="1">Available</option>
                                <option value="0">Not Available</option>
                            </select>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        <button type="submit" class="sumbit" name="post_property">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--<script src="script.js"></script>-->
    <script>
        const form = document.querySelector("form"),
            nextBtn = form.querySelector(".nextBtn"),
            backBtn = form.querySelector(".backBtn"),
            allInput = form.querySelectorAll(".first input");


        nextBtn.addEventListener("click", () => {
            allInput.forEach(input => {
                if (input.value != "") {
                    form.classList.add('secActive');
                } else {
                    form.classList.remove('secActive');
                }
            })
        })

        backBtn.addEventListener("click", () => form.classList.remove('secActive'));

    </script>

<script src="assets/js/sweetalert.min.js"></script>
</body>

</html>


<?php
if(isset($_POST['post_property']))
{
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $prop_email = $_POST['prop_email'];
    $prop_number = $_POST['prop_number'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];

    $pers_detail = "INSERT INTO `post_personal`(`Full_name`, `DOB`, `Person_Email`, `mobileno`, `gender`, `occupation`) VALUES ('$full_name','$dob','$prop_email','$prop_number','$gender','$occupation')";
    $add_persdetail = mysqli_query($conn, $pers_detail);

    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $offer_type = $_POST['offer_type'];
    $p_type = $_POST['p_type'];
    $furnished_status = $_POST['furnished_status'];
    $bhk = $_POST['bhk'];
    $p_bedroom = $_POST['p_bedroom'];
    $p_bathroom = $_POST['p_bathroom'];
    $p_balcony = $_POST['p_balcony'];
    $p_kitchen = $_POST['p_kitchen'];
    $p_carpet = $_POST['p_carpet'];
    $p_room = $_POST['p_room'];
    $p_living = $_POST['p_living'];
    $p_age = $_POST['p_age'];
    $p_floor = $_POST['p_floor'];
    $p_address = $_POST['p_address'];
    $p_state = $_POST['p_state'];
    $p_city = $_POST['p_city'];
    $p_country = $_POST['p_country'];
    $p_description = $_POST['p_description'];
    $p_available = $_POST['p_available'];

    $_SESSION['p_name']=$AdminName;

    if(isset($_POST['camera'])){
        $camera = $_POST['camera'];
     }else{
        $camera = '0';
    }

    if(isset($_POST['elevator'])){
        $elevator = $_POST['elevator'];
     }else{
        $elevator = '0';
    }

    if(isset($_POST['airconditioner'])){
        $airconditioner = $_POST['airconditioner'];
     }else{
        $airconditioner = '0';
    }

    if(isset($_POST['wifi'])){
        $wifi = $_POST['wifi'];
     }else{
        $wifi = '0';
    }

    if(isset($_POST['pool'])){
        $pool = $_POST['pool'];
     }else{
        $pool = '0';
    }

    if(isset($_POST['gym'])){
        $gym = $_POST['gym'];
     }else{
        $gym = '0';
    }

    if(isset($_POST['balcony'])){
        $balcony = $_POST['balcony'];
     }else{
        $balcony = '0';
    }

    if(isset($_POST['parks'])){
        $parks = $_POST['parks'];
     }else{
        $parks = '0';
    }

    if(isset($_POST['clubhouse'])){
        $clubhouse = $_POST['clubhouse'];
     }else{
        $clubhouse = '0';
    }

    if(isset($_POST['dogpark'])){
        $dogpark = $_POST['dogpark'];
     }else{
        $dogpark = '0';
    }

    if(isset($_POST['garage'])){
        $garage = $_POST['garage'];
     }else{
        $garage = '0';
    }

    

    $image_02 = $_FILES['image_02']['name'];

    $extension = substr($image_02,strlen($image_02)-4,strlen($image_02));
    $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    $imgnewfile2=md5($image_02).$extension;
    move_uploaded_file($_FILES["image_02"]["tmp_name"],"houselistImage/".$imgnewfile2);
    }


    $image_03 = $_FILES['image_03']['name'];

    $extension = substr($image_03,strlen($image_03)-4,strlen($image_03));
    $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    $imgnewfile3=md5($image_03).$extension;
    move_uploaded_file($_FILES["image_03"]["tmp_name"],"houselistImage/".$imgnewfile3);
    }

    $image_04 = $_FILES['image_04']['name'];

    $extension = substr($image_04,strlen($image_04)-4,strlen($image_04));
    // allowed extensions
    $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    $imgnewfile4=md5($image_04).$extension;
    move_uploaded_file($_FILES["image_04"]["tmp_name"],"houselistImage/".$imgnewfile4);
    }


    $image_05 = $_FILES['image_05']['name'];

    $extension = substr($image_05,strlen($image_05)-4,strlen($image_05));
    $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    $imgnewfile5=md5($image_05).$extension;
    move_uploaded_file($_FILES["image_05"]["tmp_name"],"houselistImage/".$imgnewfile5);
    }

    $image_01 = $_FILES['image_01']['name'];
    // get the image extension
    $extension = substr($image_01,strlen($image_01)-4,strlen($image_01));
    // allowed extensions
    $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    //rename the image file
    $imgnewfile1=md5($image_01).$extension;
    // Code for move image into directory
    move_uploaded_file($_FILES["image_01"]["tmp_name"],"houselistImage/".$imgnewfile1);
    // Query for insertion data into database
    // $query=mysqli_query($con,"insert into tblimages(Image) values('$imgnewfile1')");
        $postData = "INSERT INTO `tbl_houses`(`pname`, `pimg1`, `pimg2`, `pimg3`, `pimg4`, `pimg5`, `furnish_status`, `BHK`, `description`, `ptype`, `price`, `availabilty`, `Sqft`, `btype`, `plocation`, `country`, `state`, `city`, `floorno`, `pAge`, `totalroom`, `Bedrooms`, `LivingRoom`, `Kitchen`, `Bathroom`, `cameras`, `wifi`, `gym`, `pool`, `elevator`, `airconditioner`, `balcony`, `parks`, `clubhouse`, `dogpark`, `garage`) VALUES ('$p_name','$imgnewfile1','$imgnewfile2','$imgnewfile3','$imgnewfile4','$imgnewfile5','$furnished_status','$bhk','$p_description','$p_type','$p_price','$p_available','$p_carpet','$offer_type','$p_address','$p_country','$p_state','$p_city','$p_floor','$p_age','$p_room','$p_bedroom','$p_living','$p_kitchen','$p_bathroom','$camera','$wifi','$gym','$pool','$elevator','$airconditioner','$balcony','$parks','$clubhouse','$dogpark','$garage')";
        $add_property = mysqli_query($conn, $postData);
    
    if($add_property)
    {
    // echo "<script>alert('Data inserted successfully');</script>";
    echo '<script type="text/javascript">swal("Your Property has been posted.","Data inserted successfully","success")</script>';
    header("Location: index.php");
    }
    else
    {
    // echo "<script>alert('Data not inserted');</script>";
    echo '<script type="text/javascript">swal("Your Property has not been posted.","Data not inserted","success")</script>';
    }
    }


    
}

?>