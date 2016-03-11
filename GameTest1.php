<?php
print "Vamos jogar uma partida de acertar o numero? (s/n)";
$ac = trim(fgets(STDIN));
while ($ac != 's' && $ac != 'n'){
	print "Entrada invalida. Digite novamente: ";
	$ac = trim(fgets(STDIN));
}

if ($ac = 's'){
print "Digite um numero inteiro ente 1 e 100: ";
$n = trim(fgets(STDIN));
$al = rand(1,100);
while ($n != $al){
	if ($n > $al){
		print "O numero que você digitou é maior. Tente novamente: ";
	    $n = trim(fgets(STDIN));
	}	
	else{
		print "O numero que você digitou é menor. Tente novamente: ";
	    $n = trim(fgets(STDIN));
	}
}
print "Você acertou. Parábens!!!!";
}
else{
	print "Talvez um proxama vez jogamos. ^^ ";
	break;
}
?>