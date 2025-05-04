# Apprend l'implémentation UML

## UML

UML est un langage de modélisation d'architecture. Il est utilisé pour décrire les classes, les associations, les attributs, les méthodes, etc.

Tu dois absolument t'en servir avant de commencer à coder la moindre application. Avec l'algorithmie c'est un **indispensable**.

"On ne réfléchit pas à ce que l'on doit faire pendant qu'on fait."

## UML à PHP

Implémente le diagramme UML (en PDF) dans le dossier `src/models` en utilisant le langage PHP.

## Structure

- Ouverture de l'interpréteur PHP
- Déclaration du namespace(1)
- Déclaration de la classe
- Déclaration des attributs
- Déclaration des méthodes (Optionnel pour l'exercice)

1. Le namespace est un identifiant unique pour un ensemble de classes. On l'utilise pour séparer les classes en différents groupes. Ce qui rend possible l'utilisation de classes avec des noms identiques mais de types différents. Néamoins, il sera indispensable d'ajoute un `as` pour définir le nom utilisé dans le code, afin de ne pas avoir de conflits avec les autres classes. 

Exemple :

```php
namespace App\Models;

class MachinChouette {}
```
et 

```php
namespace App\Services;

class MachinChouette {}
```

Usage : 

```php
use App\Models\MachinChouette;
use App\Services\MachinChouette as MachinChouetteService;
```