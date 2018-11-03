<?php
function action()
{
 $array = array(
        "abbat",
        "tire sur",
        "descend",
        "blesse mortellement",
        "vise par accident",
        "perfore",
        "crible de balles"
        );
echo $array[mt_rand(0,count($array)-1)];

}
function cible()
{
 $array = array(
	"un vieu",
	"un écolier",
	"un randonneur",
	"une automobile",
	"un cycliste",
	"un groupe de hippies",
	"le chien d'un promeneur",
	"la maire de la ville",
	"un autre chasseur"
	);
echo $array[mt_rand(0,count($array)-1)];
}

function animal()
{
 $array = array(
	" faisant",
	"e galinette cendrée",
	" cerf",
	" chevreuil",
	" sanglier",
	"e biche",
	);
	echo$array[mt_rand(0,count($array)-1)];
}


echo "Un chasseur " ;
action();
echo ' ';
cible();
echo ", en pensant viser un";
animal();

?>
