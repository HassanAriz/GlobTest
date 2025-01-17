# GlobTest

## Réponses

### Question 1

La fonction foo() analyse différents tableaux contenant chacun un intervalle entre deux entiers. La fonction ordonne les intervalles dans l'ordre croissant, elle fusionne aussi les intervalles qui se chevauchent ainsi que les doublons.

### Question 2

- La fonction [foo()](https://github.com/HassanAriz/GlobTest/blob/main/globtest.php) a été codée en php 7.2 dans le fichier [globtest.php](https://github.com/HassanAriz/GlobTest/blob/main/globtest.php)
- La fonction est appelée dans la fonction [fooTest()](https://github.com/HassanAriz/GlobTest/blob/main/globtest.php) avec plusieurs jeux de test
- La fonction [displayFoo()](https://github.com/HassanAriz/GlobTest/blob/main/globtest.php) affiche la suite de résultats de la fonction [fooTest()](https://github.com/HassanAriz/GlobTest/blob/main/globtest.php)
- Les résultats de l'appel de la fonction sont affichés à la fin du fichier [globaltest.php](https://github.com/HassanAriz/GlobTest/blob/main/globtest.php) et une [capture d'écran](https://github.com/HassanAriz/GlobTest/blob/main/Screenhot_displayFoo.png) affiche l'appel de la fonction sur navigateur.

### Question 3


- Temps de réflexion ≃ 45 min
- Temps de documentation ≃ 25 min
- Temps de codage ≃ 30 min
#### Temps total: 1h40



## Enoncé

[Echo](https://www.instagram.com/globalisecho/?hl=fr), mascotte de l'équipe de [Globalis](https://www.globalis-ms.com/), a découvert une fonction `foo()` bien mystérieuse. Hélas, il n'a pas accès au code. Curieux et grand amateur de [rétro-ingénierie](https://fr.wikipedia.org/wiki/R%C3%A9tro-ing%C3%A9nierie), Echo s'est amusé à appeler cette fonction, en injectant des données en entrée et en récoltant les sorties. Le comportement de la fonction `foo()` est le suivant :

|  Appel     |  Sortie     |
| ---   |:-:    |
| `foo([[0, 3], [6, 10]])` | `[[0, 3], [6, 10]]` |
| `foo([[0, 5], [3, 10]])` | `[[0, 10]]` |
| `foo([[0, 5], [2, 4]])` | `[[0, 5]]` |
| `foo([[7, 8], [3, 6], [2, 4]])` | `[[2, 6], [7, 8]]` |
| `foo([[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]])` | `[[1, 10], [15, 20]]` |

Le challenge, si vous l'acceptez, serait d'aider Echo à comprendre ce que fait cette fonction et à la recoder. Vous êtes partant ? ;)

### Question 1

Expliquez, en quelques lignes, ce que fait cette fonction.

### Question 2

Codez cette fonction.
Merci de fournir un fichier contenant :

- la fonction, 
- l'appel de la fonction, avec un jeu de test en entrée,
- l'affichage du résultat en sortie.

### Question 3

Précisez en combien de temps vous avez implémenté cette fonction.

## Merci

Par avance, un grand merci pour le temps que vous consacrerez à ce challenge, en espérant vous voir rejoindre très prochainement [nos équipes](https://www.globalis-ms.com/jobs/) ;) 
