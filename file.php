<?php
//my first code on Git. This code will calc numbers PI, e and golden ratio

function fact($fact) //factorial
{
        if($fact == 0)
    {
        return 1;
    } //factorial zero is one

 	for($factor = $fact-1; $factor > 1; $factor--)

	{

	$fact *= $factor;

	}

	return $fact;
}

$pi = 0;
$e = 0;

$f = 1;
$w = 0;

for($i = 0; $i < 1000; $i++)
{
	$pi += 2*sqrt(3)*(((-1)**$i)/(3**$i*(2*$i+1)));
	$e += 1/fact($i);
}
for($g = 0; $g < 100; $g++)
{
 $golden = $f+$w;
 $w = $golden-$w;
 $f = $golden;
}
$golden = $golden/$w;
?>