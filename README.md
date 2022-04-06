# starlight
## aide de jeu jdr

Site propulsé par Laravel
### Objectifs
Système de rapports, comme un blog (ou presque), avec catégories, thèmes (tags) et commentaires.
authentification requise et niveau d'authentification.
Le niveau libère le caviardage du texte ;)

Chaque agent authentifié écrit ses rapports de mission
Pour le Mj il existe une substitution d'authentification qui lui permet d'écrire à divers niveau d'auth.
Par défaut un rapport est écrit au niveau d'authentification/caviardage de son auteur.
Le MJ peut compléter des rapports d'autres agents en se substiuant. Ces ajouts sont alors caviardés au niveau d'authentification du MJ substitué.
