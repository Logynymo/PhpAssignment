<?php
	$siteroot = '/Phpopgave';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body> 
	<div id="nav">
        <ul>
            <li><a href="<?php echo $siteroot; ?>/Dashboard.php"><span>Dashboard</span></a></li>
            <li><a href="<?php echo $siteroot; ?>/Posts.php"><span>Posts</span></a></li>
            <li class="dropdown"><a href="#"><span>Users</span></a>
                <ul>
                    <li><a href="<?php echo $siteroot; ?>../Users/Joshua_Hibbert.php"><span>Joshua Hibbert</span></a></li>
                    <li><a href="<?php echo $siteroot; ?>../Users/Kyle_Bragger.php"><span>Kyle Bragger</span></a></li>
                    <li><a href="<?php echo $siteroot; ?>../Users/Jack_Rugile.php"><span>Jack Rugile</span></a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Settings</span></a>
                <ul>
                    <li><a href="<?php echo $siteroot; ?>../Settings-menu/General.php"><span>General</span></a></li>
                    <li><a href="<?php echo $siteroot; ?>../Settings-menu/SEO.php"><span>SEO</span></a></li>
                    <li><a href="<?php echo $siteroot; ?>../Settings-menu/Style.php"><span>Style</span></a></li>
                    <li><a href="<?php echo $siteroot; ?>../Settings-menu/Plugins.php"><span>Plugins</span></a></li>
                    <li><a href="<?php echo $siteroot; ?>../Settings-menu/Security.php"><span>Security</span></a></li>
                </ul>
            </li>
            <li><a href="<?php echo $siteroot; ?>../View-Site.php"><span>View Site</span></a></li>
        </ul>
    </div>
</body>
</html>