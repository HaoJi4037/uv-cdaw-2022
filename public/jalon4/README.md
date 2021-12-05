Auteurs

JiaQi Gao
Hao Ji

Utilisation

Se connecter au site à l'adresse : http://localhost:8080/catalogue/public/
Se connecter à la BDD à l'adresse : http://localhost:8081/ Username: root Password: root

Vidéo
TODO


Je fais les pages suivant

Controllers: CommentController.php pour ajouter des commentaires listeMediasController.php pour ajouter un film à la liste

public/js: comment.js pour transmettre des informations de commentaire par ajax list.js pour transmettre des informations de liste par ajax

resources/views: welcome.blade.php:
c'est la page d'accueil, dans la barre de navigation, il y a une liste de favoris, une liste d'historique, une déconnexion et une page d'accueil personnelle. Dans la partie inférieure de la page, il peut afficher huit films recommandés, j'ai choisi les huit premiers films de top250. Cliquez sur le bouton pour accéder à la page des détails du film. films.blade.php: Ceci est un modèle pour afficher les détails du film. Il peut afficher l'image du film, l'année, le réalisateur, les acteurs, la durée, etc. Il a trouvé les informations correspondantes dans la base de données <table_media> selon l'imdb_id dans l'url. Il y a deux boutons sur la droite pour ajouter des films à la liste, puis revenez sur cette page. Le button peut ajouter des commentaires.

routes/web.php Chemin configuré, listeMedias, addComment, addToWatchlist, addTolist, films/{imdb_id}.

Le de la barre de navigation ne sont pas utiles pour ce projet, ce sont les pages que j'ai faites pour tester certaines fonctions. J'ai utilisé ces tables dans la base de données: comment, history, list, playlist, table_media, watchlist.

admin/login:Si vous êtes un compte administrateur, veuillez vous connecter en arrière-plan à partir d'ici pour gérer les autres utilisateurs.

admin/index：Il s'agit de la page d'accueil du catalogue principal, où vous pouvez regarder les données du site Web, gérer les utilisateurs et gérer les commentaires des utilisateurs.

admin/user：Voici la liste des utilisateurs, vous pouvez ajouter ou bannir des utilisateurs ici, changer leur statut d'actif à positif, ou supprimer complètement le compte de l'utilisateur que vous choisissez.

VIDEO
URL:   https://youtu.be/z8jUoQUrnCw