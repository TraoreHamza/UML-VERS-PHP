# La démarche en modélisation UML

## Déterminer les besoins

Comprendre les attentes des utilisateurs est la première étape. Définir les attentes de manière **profonde** et non simplement aux dires de l'utilisateur.

Cela demande patience, écoute active pour tirer les informations clés et **pertinentes** afin de parvenir à proposer, en second temps, une solution réellement adaptée.

---

## User Stories (US)

Voir le dossier `us` pour les définitions.

---

## Modélisation UML

UML (Unified Modeling Language) est un langage de modélisation d'architecture.

L'objectif est de rendre plus accessible le fonctionnement **global** d'un système (application / fonctionnalité).

---

### Use Case 

Représenté par un rectangle accompagné de bulles qui définissent plusieurs choses :

- Pour le use case "simplifié" : les fonctionnalités principales du système
- Pour le use case "détaillé" : les fonctionnalités du système en détail

Les bulles sont **reliées** à des "Acteurs" dits principaux ou secondaires :

- Principaux : les acteurs qui interagissent avec le système (externe)
- Secondaires : les acteurs qui font **partie** du système (interne)

Dans le use case "détaillé", les bulles peuvent être **reliées** par des flèches avec des **lignes** en pointillés.

Elles **représentent** deux choses : 

- Extends : fonctionnalité disponible mais optionnelle, elle pointe vers la bulle qui la possède.
- Include : fonctionnalité obligatoire, elle part de la bulle qui la possède.

---

### Class 

Représente le schéma de la structure des entités et, par la même occasion, celle de la base de données.

Ce diagramme est un ensemble de rectangles qui contiennent des attributs et des méthodes. On ne représente pas les classes dédiées à un **aspect** de logique (Controllers, Services, Listeners), uniquement les classes représentant des données.

---

### Sequence   06/05/25
### Activity   06/05/25

---

## Algorithmes

Constitués de scénarios issus des Use Cases de l'application (système). Les algorithmes sont utiles pour l'implémentation une fois que l'architecture UML est définie.

Vous pouvez opter pour du pseudo-code ou des algorigrammes pour les définir.

## Implémentation

Traduction des algorithmes en langage informatique (PHP, Python, Ruby, TypeScript...).

---

Si vous souhaitez, je peux aussi vous aider à reformuler certains passages pour plus de clarté ou de style.

---
