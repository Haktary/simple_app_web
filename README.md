# simple_app_web

<p>
Pour le bon fonctionnement de l'application il faut mettre un fichier .htaccess comme ci-dessous pour rediriger les requêtes pour le bon fonctionnement du routing ! 
</p>

<code>
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^.*$ /simple_app_web/index.php [QSA,L]
</code>

<p>
	http://localhost/form <br/>
	http://localhost/message <br/>
	http://localhost/message/?id=[id] <br/>
	Mon dossier de git est comme ceci : <br/>
	http://localhost/simple_app_web <br>
	Le .htaccess est ici :<br/>
	http://localhost/.htaccess <br/>
</p>

