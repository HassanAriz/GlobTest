<?php


/*
	La fonction foo() analyse différents tableaux contenant chacun un intervalle entre deux entiers. 
	La fonction ordonne les intervalles dans l'ordre croissant, 
	elle fusionne aussi les intervalles qui se chevauchent ainsi que les doublons.
*/


function foo(array $interval):array {	

	// Tri des tableaux dans l'ordre croissant par rapport aux premier entier de chaque intervalle
	usort($interval, "usort_callback");

	// Création d'un tableau dans lequel on mettra la liste final des interval
	$interval_list = array();
	
	/* 
		Boucle dans laquelle on parcours chaque élément du tableau mis en entrée.
		L'objectif est de comparer chaque élément du tableau avec le précédent afin de fusionner les 2 intervalles
		si néccessaire.
	*/
	
	foreach($interval as $key=>$actual_interval) {

		
	// Création d'une variable temporaire dans laquelle stocké la valeure du précédent élément initié à l'intervalle [0,0] 
	$last_interval = $last_interval ?? [0,0];

		
		 // On compare les entier de chaque intervalle pour voir si ils se chevauchent. 		
		if($actual_interval[0] <= $last_interval[1]) {

			if($actual_interval[1] > $last_interval[1]) {
				$last_interval[1] = $actual_interval[1];	
			}
			
			// On s'assure d'insérer le dernier intervalle dans le tableau final si on est dans la dernière itération 
				if(!isset($interval[$key+1])) 
				$interval_list[] = $last_interval;
		} else {
		
			//Une fois un intervalle fusionné, on l'ajoute au tableau final.
			$interval_list[] = $last_interval;
			$last_interval = $actual_interval;
			
			// On s'assure d'insérer le dernier intervalle dans le tableau final si on est dans la dernière itération 
	
				if(!isset($interval[$key+1])) 
				$interval_list[] = $actual_interval;
		}
	}
	
	// Suppression de la variable temporaire sauf si elle a fuionné avec un intervalle existant
	if($interval[0][0] != 0)
		array_shift($interval_list);

	return $interval_list;
}

function usort_callback($a, $b) {
    return $a <=> $b;
}

// fonction appelant la fonction foo() avec plusieurs jeux de test

function fooTest():array {

$foo_list = [
	[[0, 3], [6, 10]],
	[[0, 5], [3, 10]],
	[[0, 5], [2, 4]],
	[[7, 8], [3, 6], [2, 4]],
	[[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]],
	
	[[0, 4], [0,4]],
	[[3, 3], [5,5]],
	[[7, 7], [4,10], [111, 112], [10, 112]],
	[[0, 0], [1,3], [2,4], [3,5]],
	[[13, 17], [11,14], [0,7], [9,12], [8,8], [30,40]],
];


	$foo_tab = [];
	foreach($foo_list as $list) {
		$foo_tab[] = foo($list);
		

	}
	
	return $foo_tab;
} 	


// fonction qui affiche la fonction foo() 

function displayFoo(array $tab_list):array {

	foreach($tab_list as $list) {
	
		echo "[";
		foreach($list as $key=>$tab) {
	
			if($key != 0)
			echo ", ";
	
			echo "[";
			print_r($tab[0]); 
			echo ",";
			print_r($tab[1]); 
			echo "]";
	
		}
		echo "],<br>";
	}
}

displayFoo(fooTest()); 
/*

Jeu Test :

	[[0, 3], [6, 10]],
	[[0, 5], [3, 10]],
	[[0, 5], [2, 4]],
	[[7, 8], [3, 6], [2, 4]],
	[[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]],
	
	[[0, 4], [0,4]],
	[[3, 3], [5,5]],
	[[7, 7], [4,10], [111, 112], [10, 112]],
	[[0, 0], [1,3], [2,4], [3,5]],
	[[13, 17], [11,14], [0,7], [9,12], [8,8], [30,40]],
	
	
Résultats affichés:
	
	[[0,3], [6,10]],
	[[0,10]],
	[[0,5]],
	[[2,6], [7,8]],
	[[1,10], [15,20]],
	[[0,4]],
	[[3,3], [5,5]],
	[[4,112]],
	[[0,0], [1,5]],
	[[0,7], [8,8], [9,17], [30,40]],

*/
