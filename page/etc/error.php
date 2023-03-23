<?php

// S O L U T I O N S

$solution_start = '<li>'; $solution_end = '</li>';

$solution1 = $solution_start.$txt['solutions']['sol1']['part1'].' <a href="https://'.$_SERVER["HTTP_HOST"].'" title="'.$_SERVER["HTTP_HOST"].'">'.$txt['solutions']['sol1']['part2'].'</a>'.$solution_end;
$solution2 = $solution_start.$txt['solutions']['sol2'].': <a href="mailto:admin@'.$_SERVER["HTTP_HOST"].'">admin@'.$_SERVER["HTTP_HOST"].'</a>'.$solution_end;
$solution3 = $solution_start.$txt['solutions']['sol3'].$solution_end;
$solution4 = $solution_start.$txt['solutions']['sol4'].$solution_end;
$solution5 = $solution_start.$txt['solutions']['sol5'].$solution_end;
$solution6 = $solution_start.$txt['solutions']['sol6'].$solution_end;

if ($errorcode == '000') {
	$solutionsTitleDisplay = 'style="display: none;"';
} else {
	$solutionsTitleDisplay = '';
}



// C O N D I T I O N S

/**/if ($errorcode == '000') {
	$errorname = 'Unknown';
	$title = '';
	$solutions = '';
	$showDisclaimer = true;
}
elseif ($errorcode == '400') {
	$errorname = 'Bad Request';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution5;
	$showDisclaimer = true;
}
elseif ($errorcode == '401') {
	$errorname = 'Unauthorized';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution4;
	$showDisclaimer = true;
}
elseif ($errorcode == '403') {
	$errorname = 'Forbidden';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution5;
}
elseif ($errorcode == '404') {
	$errorname = 'Not Found';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution5;
	$showDisclaimer = true;
}
elseif ($errorcode == '406') {
	$errorname = 'Not Acceptable';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution2;
	$showDisclaimer = false;
}
elseif ($errorcode == '410') {
	$errorname = 'Gone';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution5;
	$showDisclaimer = true;
}
elseif ($errorcode == '415') {
	$errorname = 'Unsupported Media Type';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution3.$solution4;
	$showDisclaimer = false;
}
elseif ($errorcode == '418') {
	$errorname = 'I\'m a teapot';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution18.$solution1;
	$showDisclaimer = false;
}
elseif ($errorcode == '500') {
	$errorname = 'Internal Server Error';
	$title = $txt['titles']['err'.$errorcode];
	$solutions = $solution1.$solution2.$solution5;
	$showDisclaimer = true;
}



// D I S C L A I M E R

if ($showDisclaimer == true) {
	$disclaimer = '<p>'.$txt['disclaimer']['part1'].'<br />'.$txt['disclaimer']['part2'].': <a href="mailto:admin@'.$_SERVER["HTTP_HOST"].'">admin@'.$_SERVER["HTTP_HOST"].'</a></p><br />';
} else {
	$disclaimer = '';
}



// H A N D L E R

if ($errorcode !== '000') {
  header("HTTP/1.1 ".$errorcode." ".$errorname);
}


?>



<script type="text/javascript">window.onpopstate=()=>{window.location.reload();}</script>
<h1>ERROR <?=$errorcode?></h1>
<h2><?=$title?></h2>
<h3 <?=$solutionsTitleDisplay?>><?=$txt['solutions']['header']?>:</h3>
<ul>
	<?=$solutions?>
</ul>
<?=$disclaimer?>
