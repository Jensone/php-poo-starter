# Premiers pas avec la POO

La programmation orientée objet est basé sur un sytème qu'on appelle : les `classes`.

Ces classes sont comme un moule (de cuisine) pour définir ce que représente quelque chose dans une application. Ce qui signifie que chaque application aura sa propre vision d'une classe qui porterai le même nom que celles que nous avons.

## Les classes

Un classe en PHP, est déclarée avec le mot-clé `class` ou `final class`.
Afin de l'utiliser, il faudra créer un instace d'elle. Pour cela le mot-clé correspondant est `new`.

Exemple -> voir le fichier `Utilisateur.php` pour la déclaration et `index.php` pour l'utilisation.

## Accesseurs et Mutateurs

Lorsque nous définissons des propriétés dans une classe, il est judicieux de mettre en place une structure sécurisée pour intéragir avec. C'est là qu'entre en jeu les `Accesseurs` et `Mutateurs` nommés en anglais `Getters` et `Setters`. Ce sont des fonctions mais dans un classe on les appelle des `méthodes`.

Exemple -> voir le fichier `Utilisateur.php` et `index.php` pour l'utilisation.