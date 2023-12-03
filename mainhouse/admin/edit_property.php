<?php
session_start();
// error_reporting(0);
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: login.php");
}
?>

<?php
if(isset($_POST['edit_property']))
{
    include("config/config.php");
	$pid = $_GET['id'];

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
	$status = $_POST['status'];
	$map = $_POST['map'];


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
        $postData = "UPDATE `tbl_houses` SET `pname`='$p_name',`pimg1`='$image_01',`pimg2`='$image_02',`pimg3`='$image_03',`pimg4`='$image_04',`pimg5`='$image_05',`furnish_status`='$furnished_status',`BHK`='$bhk',
		`description`='$p_description', `location_url`='$map',`pcapacity`='',`ptype`='$p_type',`price`='$p_price',`availabilty`='$status',`Sqft`='$p_carpet',
		`btype`='$offer_type',`plocation`='$p_address',`country`='$p_country',`state`='$p_state',`city`='$p_city',`floorno`='$p_floor',
		`pAge`='$p_age',`totalroom`='$p_room',`Bedrooms`='$p_bedroom',`LivingRoom`='$p_living',`Kitchen`='$p_kitchen',
		`Bathroom`='$p_bathroom',`cameras`='$camera',`wifi`='$wifi',`gym`='$gym',`pool`='$pool',`elevator`='$elevator',`airconditioner`='$airconditioner',
		`balcony`='$balcony',`parks`='$parks',`clubhouse`='$clubhouse',`dogpark`='$dogpark',`garage`='$garage' WHERE t_Id = $pid";
        $add_property = mysqli_query($conn, $postData);
    
    if($add_property==true)
    {
    $msg="<p class='alert alert-success'>Your Property has been updated.</p>";
	header("Location:view_property.php?msg=$msg");
    }
    else
    {
        $msg="<p class='alert alert-warning'>Your Property has not been updated.</p>";
        header("Location:view_property.php?msg=$msg");
    }
    }
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/navbar-menu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">

    <!-- Text Area -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="assets/js/texteditor.js"></script>

    <script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

    <style>
        .dash-widget-header {
            align-items: center;
            display: flex;
            margin-bottom: 15px;
        }

        .dash-widget-icon {
            align-items: center;
            border-radius: 4px;
            color: #fff;
            display: inline-flex;
            font-size: 1.875rem;
            height: 50px;
            justify-content: center;
            line-height: 48px;
            text-align: center;
            width: 50px;
        }

        .container-fluid {
            background: #E4E9F7;
            height: auto;
        }

        .col-xl-3 {
            margin-bottom: 40px;
        }

        .col-sm-12 {
            margin-left: 10px;
            margin-top: 75px;
        }

        .row {
            width: 100%;
            margin-left: 1px;
			margin-bottom: 15px;
        }

        #mak {
            font-size: 25px;
        }

        #example_wrapper {
            padding: 1.5rem;
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #eaeaea;
        }

        .card-title {
            font-size: 21px;
        }
        #selct{
            height: 37px;
    border-radius: 8px;
    text-align: center;
    width: 200px;
        }
    </style>
</head>

<body>
    <?php include 'includes/sidebar.php'; ?>
    <?php include 'includes/header.php'; ?>

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Edit Property</h3>
                        <p></p>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard / Edit Property</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row" style="margin-top: -68px;">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Property</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- <h5 class="card-title">About Us </h5> -->
								<?php
								include("config/config.php");
								$pid = $_REQUEST['id'];
								$query=mysqli_query($conn,"SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE t_Id ='$pid'");
								if (mysqli_num_rows($query) > 0) {
									while ($row = mysqli_fetch_assoc($query)) {
										?>
                                <form method="post" action="#" enctype="multipart/form-data">
                                <div class="card-body">
									<h5 class="card-title">Property Detail</h5>
																											
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_name" required="" placeholder="Enter Title" fdprocessedid="k7ne2i" value="<?php echo $row['pname']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<main style="width: 75%;">
														<textarea id="editor" name="p_description">
														</textarea>
													</main>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="p_type" fdprocessedid="o0hrjq">
															<option value="">Select Type</option>
															<option value="1">Apartment</option>
															<option value="3">Flat</option>
															<option value="5">Shop</option>
															<option value="2">Home</option>
															<option value="4">Villa</option>
															<option value="6">TownHouse</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="offer_type" fdprocessedid="kuzocn">
															<option value="">Select Status</option>
															<option value="Rent">Rent</option>
															<option value="Sale">Sale</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bathroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_bathroom" required="" placeholder="Enter Bathroom (only no 1 to 10)" fdprocessedid="xpnjs7" value="<?php echo $row['Bathroom']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kitchen</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_kitchen" required="" placeholder="Enter Kitchen (only no 1 to 10)" fdprocessedid="t8q39v" value="<?php echo $row['Kitchen']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Furnished Status</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="furnished_status" fdprocessedid="kuzocn">
															<option value="">Select Status</option>
															<option value="Furnished">Furnished</option>
															<option value="Semi-Furnished">Semi-Furnished</option>
															<option value="Un-Furnished">Un-Furnished</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Room</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_room" required="" placeholder="Enter Total Room" fdprocessedid="t8q39v" value="<?php echo $row['totalroom']; ?>">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="bhk" fdprocessedid="xtsdpg">
															<option value="">Select BHK</option>
															<option value="1 BHK">1 BHK</option>
															<option value="2 BHK">2 BHK</option>
															<option value="3 BHK">3 BHK</option>
															<option value="4 BHK">4 BHK</option>
															<option value="5 BHK">5 BHK</option>
															<option value="1,2 BHK">1,2 BHK</option>
															<option value="2,3 BHK">2,3 BHK</option>
															<option value="2,3,4 BHK">2,3,4 BHK</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bedroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_bedroom" required="" placeholder="Enter Bedroom  (only no 1 to 10)" fdprocessedid="l5big" value="<?php echo $row['Bedrooms']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Balcony</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_balcony" required="" placeholder="Enter Balcony  (only no 1 to 10)" fdprocessedid="m2p9v" value="<?php //echo $row['Kitchen1']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hall</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_living" required="" placeholder="Enter Hall  (only no 1 to 10)" fdprocessedid="sz1qyq" value="<?php echo $row['LivingRoom']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Age</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_age" required="" placeholder="Enter Property Age" fdprocessedid="sz1qyq" value="<?php echo $row['pAge']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Enter Map Link</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="map" placeholder="Enter Map Embedded Link" fdprocessedid="sz1qyq">
													</div>
												</div>
												
											</div>
										</div>
										<h4 class="card-title">Price &amp; Location</h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="floor" fdprocessedid="3aulzj">
															<option value="">Select Floor</option>
															<option value="1st Floor">1st Floor</option>
															<option value="2nd Floor">2nd Floor</option>
															<option value="3rd Floor">3rd Floor</option>
															<option value="4th Floor">4th Floor</option>
															<option value="5th Floor">5th Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_price" required="" placeholder="Enter Price" fdprocessedid="a15s1" value="<?php echo $row['price']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_address" required="" placeholder="Enter Address" fdprocessedid="6pkyz9" value="<?php echo $row['plocation']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_city" required="" placeholder="Enter City" fdprocessedid="h02pk6" value="<?php echo $row['city']; ?>">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="p_floor" fdprocessedid="jd416f">
															<option value="">Select Floor</option>
															<option value="1 Floor">1 Floor</option>
															<option value="2 Floor">2 Floor</option>
															<option value="3 Floor">3 Floor</option>
															<option value="4 Floor">4 Floor</option>
															<option value="5 Floor">5 Floor</option>
															<option value="6 Floor">6 Floor</option>
															<option value="7 Floor">7 Floor</option>
															<option value="8 Floor">8 Floor</option>
															<option value="9 Floor">9 Floor</option>
															<option value="10 Floor">10 Floor</option>
															<option value="11 Floor">11 Floor</option>
															<option value="12 Floor">12 Floor</option>
															<option value="13 Floor">13 Floor</option>
															<option value="14 Floor">14 Floor</option>
															<option value="15 Floor">15 Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_carpet" required="" placeholder="Enter Area Size (in sqft)" fdprocessedid="fiv14i" value="<?php echo $row['Sqft']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_state" required="" placeholder="Enter State" fdprocessedid="mk98h5" value="<?php echo $row['state']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Country</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_country" required="" placeholder="Enter Country" fdprocessedid="6pkyz9" value="<?php echo $row['country']; ?>">
													</div>
												</div>
												
											</div>
										</div>
										
										<h4 class="card-title">Animities</h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<?php if($row['cameras'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="camera" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Surveillance cameras
														</label>
													</div>
													<?php } else { ?>
														<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="camera">
														<label class="form-check-label" for="flexCheckDefault">
															Surveillance cameras
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['elevator'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="elevator" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Elevator
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="elevator">
														<label class="form-check-label" for="flexCheckDefault">
															Elevator
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['airconditioner'] == 1)
												{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="airconditioner" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Air Conditioner
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="airconditioner">
														<label class="form-check-label" for="flexCheckDefault">
															Air Conditioner
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['wifi'] == 1)
												{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="wifi" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Wifi
														</label>
													</div>
													<?php } else { ?>
														<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="wifi">
														<label class="form-check-label" for="flexCheckDefault">
															Wifi
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
													<?php if($row['pool'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="pool" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Pool
														</label>
													</div>
													<?php } else { ?>
														<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="pool">
														<label class="form-check-label" for="flexCheckDefault">
															Pool
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['gym'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="gym" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Gym
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="gym">
														<label class="form-check-label" for="flexCheckDefault">
															Gym
														</label>
													</div>
													<?php } ?>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
												<?php if($row['balcony'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="balcony" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Balcony
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="balcony">
														<label class="form-check-label" for="flexCheckDefault">
															Balcony
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['parks'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="parks" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Parks
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="parks">
														<label class="form-check-label" for="flexCheckDefault">
															Parks
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['clubhouse'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="clubhouse" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Clubhouse
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="clubhouse">
														<label class="form-check-label" for="flexCheckDefault">
															Clubhouse
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['dogpark'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="dogpark" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Dog Park
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="dogpark">
														<label class="form-check-label" for="flexCheckDefault">
															Dog Park
														</label>
													</div>
													<?php } ?>
												</div>
												<div class="form-group row">
												<?php if($row['garage'] == 1)
													{?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="garage" checked>
														<label class="form-check-label" for="flexCheckDefault">
															Garage
														</label>
													</div>
													<?php } else { ?>
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="garage">
														<label class="form-check-label" for="flexCheckDefault">
															Garage
														</label>
													</div>
													<?php } ?>
												</div>
											</div>
										</div>
										
										<!-- <div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<main style="width: 75%;">
                                        		<textarea id="editor" name="pgedetails">
                                                </textarea>
                                            </main>
										</div> -->
												
										<h4 class="card-title">Image &amp; Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_01" type="file" required="">
														<img src="../houselistImage/<?php echo $row['pimg1']; ?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_03" type="file" required="">
														<img src="../houselistImage/<?php echo $row['pimg3']; ?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 5</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_05" type="file" required="">
														<img src="../houselistImage/<?php echo $row['pimg5']; ?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="status" fdprocessedid="pwc9ie">
															<option value="">Select Status</option>
															<option value="Available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_02" type="file" required="">
														<img src="../houselistImage/<?php echo $row['pimg2']; ?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_04" type="file" required="">
														<img src="../houselistImage/<?php echo $row['pimg4']; ?>" alt="pimage" height="150" width="180">
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="isFeatured" fdprocessedid="p7whje">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
								</div>
                                            
                                <div class="form-group row" style="margin-bottom: 20px;">
                                   <button type="submit" name="edit_property" class="btn btn-primary" style="margin-left: 240px;width: 100px;">Submit
                                   </button>
                                </div>
                                </form>
								<?php
									}
								}
								?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>














    <script src="https://kit.fontawesome.com/3f1538d59e.js" crossorigin="anonymous"></script>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>

</body>

</html>