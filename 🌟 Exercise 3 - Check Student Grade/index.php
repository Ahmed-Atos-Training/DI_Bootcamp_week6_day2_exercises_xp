<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
    <?php 
    

$notes = 70;

if ($notes>=60)
{
	$notes = "First Division";
}
else if($notes>=45 && $notes < 59)
{
	$notes = "Second Division";
}
else if($notes>=33 && $notes < 59)
{
	$notes = "Third Division";
}
else
{
	$notes = "Fail";
}

echo "Student notes: $notes";

    ?>
    


 
</body>
</html>