  <?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['idlivraison'])){
  $LivraisonC=new LivraisonC();
    $result=$LivraisonC->recupererlivraison($_GET['idlivraison']);

if (isset($_POST['modifier'])){
  $Livraison=new Livraison($_POST['idlivraison'],$_POST['nbr'],$_POST['adressel'],$_POST['numfacture'],$_POST['idlivreur'],$_POST['message']);
  $LivraisonC->modifierlivraison($Livraison,$_POST['idlivraison']);
  header('Location:page-invoice1.php');
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
	  <link href="modifierlivraisonstyle.css" rel="stylesheet" media="all" type="text/css">
	   <link href="ajouterlivraisonstyle.css" rel="stylesheet" media="all" type="text/css">
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Blank Page - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Snack-Fit</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">thouraya mazlout</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
		  
        
       
       
          
	  <ul class="treeview-menu">
           
      </ul>
    </aside>
    <main class="app-content"> 
		
		 <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>modify delivery details</h3>
		<br>
		<br>
		<br>
		<br>
		<br>
		
      
		
		
		
		
		
		
		

    <?php
	foreach($result as $row){
		$idlivraison=$row['idlivraison'];
		$adressel=$row['adressel'];
		$num=$row['phonenumber'];
		$numfacture=$row['numfacture'];
		$idlivreur=$row['idlivreur'];
		$message=$row['message'];
?>
		<div class="form-style-5">	
<form method="POST"> <center>
<table>

<tr>
<td><h2 class="jarabni">idlivraison</h2></td>
<td><input class="put" type="number" disabled name="idlivraison" value="<?PHP echo $idlivraison ?>"></td>
</tr>
	<tr>
<td><h2 class="jarabni">numTel</h2></td>
<td><input class="put" type="number" required name="nbr" value="<?PHP echo $num ?>"></td>
</tr>
<tr>
	
	<td><h2 class="jarabni">adressel</h2></td>
<td><input class="put" type="text" required name="adressel" value="<?PHP echo $adressel ?>"></td>
</tr>
<tr>
	<td><h2 class="jarabni">cammand ID </h2></td>
<td><input class="put" type="number" required name="numfacture" value="<?PHP echo $numfacture ?>"></td>
</tr>
<tr>
	<td><h2 class="jarabni">idlivreur</h2></td>
<td><input type="number" class="put" required name="idlivreur" value="<?PHP echo $idlivreur ?>"></td>
</tr>
<tr>
	<td><h2 class="jarabni">message</h2></td>
<td><input class="put" type="text" required name="message" value="<?PHP echo $message ?>"></td>
</tr>
<tr>
<td><input class="put" type="submit" name="modifier" value="return" onClick="page-invoice1.php" ></td>
<td><input class="put" type="submit" name="modifier" value="update"></td>
</tr>
<tr>
<td></td>
<td><input  class="put" type="hidden" name="idlivraison" value="<?PHP echo $_GET['idlivraison'];?>"></td>
</tr>
	
</table> </center>
</form>
		</div>
<?PHP
	}
}
?>

		
		
		
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>