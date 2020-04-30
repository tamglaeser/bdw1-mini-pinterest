# Projet Final BDW1 : Application mini-Pinterest

Une page web pour photos organisées en catégories. On se pourrait connecter soit comme utilisateur soit comme administrateur. Tous les deux puevent supprimer,
modifier, et ajouter des photos; l'utilisateur peut également cacher ses photos et voir son compte et l'administrateur peut voir les
statistiques de tous les utilisateurs ainsi que ajouter une categorie. On peut aussi voir les details des photos. Enfin, c'est tout
basé sur une base de données avec une tableau Photo(<ins>photoId</ins>, nomFich, description, &#35;catId, &#35;utilId, statut), une tableau 
Categorie(<ins>catId</ins>, nomCat), une tableau administrateur(<ins>adminId</ins>, adminPseudo, adminMdp) et une tableau utilisateur(<ins>utilId</ins>, utilPseudo, utilMdp, etat).

Vous pouvez trouver notre présentation [ici](https://docs.google.com/presentation/d/1CnX2UKTs0m4WMiUYSfFnOpbxuXEd_v2zn0E4gZPTQQc/edit?usp=sharing).

## Pour Commencer

Cliquer sur ce lien pour retrouver [notre page web](https://bdw1.univ-lyon1.fr/p1926029/BDW1-ProjetFinale/bdw1_projet/index.php). Lorsqu'il demande le sign-in,
c'est le suivant:
- username: p1926029
- mot de passe: ef5d0c  
 

On n'a pas besoin de conditions préalables.

## Environnement et Workflow

- **forge.univ-lyon1.fr**
  - Git serveur
- **bdw1.univ-lyon1.fr**
  - Web serveur
    - port: 443 -- default pour HTTPS
  - Base de données
    - port: 3306 -- default pour MariaDB/MySQL
    - *phpMyAdmin* - pour réaliser et acéder la base de données
- **Local**
  - *PhpStorm* - JetBrains IDE, pour écrire le programme
  - *FileZilla* - un moyen de transmettre notre fichiers sur le serveur de l'université, de local à bdw1.univ-lyon1.fr  
- **Local >> bdw1.univ-lyon1.fr**
  - *Bash* - language d'Unix de shell et commande pour transmettre notre fichiers du local sur git et sur le serveur de l'université
    - *SSH* - connexion de l'host local a bdw1.univ-lyon1.fr
    - *Git* - local et sur bdw1.univ-lyon1.fr pour faire git clone, push, et pull de et à forge.univ-lyon1.fr



## Auteurs

**Tullia Glaeser** -- *l'Université de Claude Bernard Lyon 1, Tulane University* -- Base de données et Programmation WEB: A -- printemps 2020  
**Marine Masingarbe** -- *l'Université de Claude Bernard Lyon 1* -- Base de données et Programmation WEB: A -- printemps 2020