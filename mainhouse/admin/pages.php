<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: login.php");
}
?>

<?php
include 'config/config.php';
if(isset($_POST['submit']))
{
    $pagestype = $_GET['type'];
    $pagedetails=$_POST['pgedetails'];
    $page_change = "UPDATE `page` SET `detail`='$pagedetails' WHERE type = '$pagestype'";
    $chnge = mysqli_query($conn, $page_change);
    $msg="Page data updated  successfully";
    if($chnge)
    {
        echo "<script>alert('Page data updated  successfully')</script>";
        header("Location:pages.php");
    }
    else{
        echo "<script>alert('Some Error Occured')</script>";
    }
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
            /* height: 100vh; */
            height: 165vh;
        }

        .col-xl-3 {
            margin-bottom: 40px;
            ;
        }

        .col-sm-12 {
            margin-left: 10px;
            margin-top: 75px;
        }

        .row {
            width: 100%;
            margin-left: 1px;
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
                        <h3 class="page-title">Pages</h3>
                        <p></p>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard / Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row" style="margin-top: -68px;">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pages</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <h5 class="card-title">About Us </h5>
                                <!-- <div class="form-group row" style="margin-bottom: 20px;">
                                    <label class="col-lg-2 col-form-label">Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="title" required=""
                                            fdprocessedid="z5prdr">
                                    </div>
                                </div> -->
                                <form action="" method="post">
                                <div class="form-group row" style="margin-bottom: 20px;">
                                    <label class="col-lg-2 col-form-label">Select Page</label>
									<div class="col-sm-8">
											<select name="menu1" onchange="MM_jumpMenu('parent',this,0)" fdprocessedid="hjooc" id="selct">
                                                <option value="" selected="selected" class="form-control">***Select One***</option>
                                                <option value="pages.php?type=Terms">Terms and Condition</option>
                                                <option value="pages.php?type=policy">Privacy and Policy</option>
                                                <option value="pages.php?type=service">Our Services</option> 
                                                <option value="pages.php?type=cookies">Cookies</option>
                                                <option value="pages.php?type=about">About Us</option>
                                            </select>
									</div>
								</div>
                                <!-- <div class="form-group row" style="margin-bottom: 20px;">
                                    <label class="col-lg-2 col-form-label">Image</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="aimage" type="file" required="">
                                    </div>
                                </div> -->
                                <div class="form-group row" style="margin-bottom: 20px;">
                                    <label class="col-lg-2 col-form-label">Selected Page</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="title" required=""
                                            fdprocessedid="z5prdr"  disabled value="<?php
                                    switch($_GET['type'])
                                    {
                                        case "Terms" :
                                            echo "Terms and Conditions";
                                            break;
                                        
                                        case "policy" :
                                            echo "Privacy And Policy";
                                            break;
                                        
                                        case "service" :
                                            echo "About US";
                                            break;
                                    
                                        case "cookies" :
                                            echo "Cookies";
                                            break;
                                                                    
                                        default :
                                            echo "";
                                            break;
                                    
                                    }
                                    ?>">
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom: 20px;">
                                    <label class="col-lg-2 col-form-label">Content</label>
                                    <main style="width: 75%;">
                                        <textarea id="editor" name="pgedetails">
                                        <?php 
$pagetype=$_GET['type'];
$sql = "SELECT `detail` FROM `page` WHERE type='$pagetype'";
	$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0)
{
foreach($query as $result)
{		
	echo $result['detail'];
}}
?>
                                        </textarea>

                                    </main>
                                </div>
                                <div class="form-group row" style="margin-bottom: 20px;">
                                   <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 240px;width: 100px;">Submit
                                   </button>
                                </div>
                                </form>
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