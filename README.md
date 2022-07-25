# simple_app_web

<p>
Pour le bon fonctionnement de l'application il faut mettre un fichier .htaccess comme ci-dessous pour rediriger les requêtes pour le bon fonctionnement du routing ! 
</p>

```
RewriteEngine On 
RewriteBase /  
RewriteCond %{REQUEST_FILENAME} !-d  
RewriteCond %{REQUEST_FILENAME} !-f  

RewriteRule ^.*$ /simple_app_web/index.php [QSA,L] 
```

<p>Pour utiliser l'api : </p>
<ul>
  <li>http://localhost/form </li>
  <li>http://localhost/message</li>
  <li>http://localhost/message/?id=[id]</li>
</ul>
<p>Mon dossier de git est comme ceci : </p>
<ul>
  <li>http://localhost/simple_app_web</li>
</ul>
<p>Le .htaccess est ici :</p>
<ul>
  <li>http://localhost/.htaccess</li>
</ul>
