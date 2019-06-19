# SPH web-app gestion des adhérants par sessions
L'objectif de cette web-app est d'apporter dans une vue très simple et fonctionnelle pour pouvoir inscrire à des sessions et suivre les adhérants d'une assocation

#############################
V1.0 - juillet 2019
#############################

# Gestion multi-users 
Vous pouvez générer plusieurs utilisateurs avec mot de passe (encrypté).

# Gestion multi-comptes
Le logiciel ne vous bride pas à l'utilisation d'un seul compte. Vous pouvez bien entendu en générer autant que voulu.

# Gestion des adhérants
Vous pouvez inscrire des personnes afin de suivre leurs règlements et les sessions

# Gestion des sessions
L'objectif principal de cette web-app est de pouvoir créer des sessions pour y enregistrer des participants

#############################

# Installer la web-app
Vous devez disposer d'un serveur apache et d'une base de données.
Pensez à copier le fichier class/default-spdo.class.php et modifier son contenu pour se connecter à votre base de données.
Il vous est fortement recommandé d'importer le script de base nommé spe.sql situé dans le dossier scripts.
Une fois importé, vous pourrez accéder à votre web-app et vous authentifier grâce au premier compte utilisateur instancié. Celui-ci n'est pas supprimable tout comme le premier compte créé.

# Identifiants
Avec l'import de base, vous disposez d'un compte admin qui utilise le password admin


#############################

# Sources
Cette application a été conçue par Arnaud SAINT-PATRICE en 2019
Cette web-app minimaliste open-source est inspiré du code de l'ERP Dolibarr.
Si vous désirez un ERP complet et gratuit : http://www.dolibarr.fr

# sph
