Dupliquer le squelette
Avant de l’utiliser comme modèle, vérifiez que tout fonctionne correctement :

Dupliquez le dossier laravel_template pour simuler un nouveau projet :
bash
 cp -r laravel_template my_new_project
Naviguez dans le dossier dupliqué :
bash
 cd my_new_project
Exécutez les commandes suivantes :
Installez les dépendances :
bash
 composer install
Copiez le fichier .env.example en .env :
bash
 cp .env.example .env
Générez une nouvelle clé d'application :
bash
 php artisan key:generate
Configurez la base de données dans le fichier .env, puis migrez les tables :
bash
 php artisan migrate
Lancez le serveur pour vérifier :
bash
 php artisan serve
