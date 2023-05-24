# Symfony3-Projet

## Tables :

- Table "Utilisateurs" :
    id (clé primaire)
    nom
    prénom
    email
    mot de passe (crypté)
    date de création
    dernière connexion

Table "Publications" :
    id (clé primaire)
    utilisateur_id (clé étrangère vers la table "Utilisateurs")
    contenu
    date de création

Table "Amis" :
    id (clé primaire)
    utilisateur_id (clé étrangère vers la table "Utilisateurs")
    ami_id (clé étrangère vers la table "Utilisateurs")

Table "Commentaires" :
    id (clé primaire)
    utilisateur_id (clé étrangère vers la table "Utilisateurs")
    publication_id (clé étrangère vers la table "Publications")
    contenu
    date de création

Table "Likes" :
    id (clé primaire)
    utilisateur_id (clé étrangère vers la table "Utilisateurs")
    publication_id (clé étrangère vers la table "Publications")