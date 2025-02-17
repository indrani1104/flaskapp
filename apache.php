<VirtualHost *:80>
    ServerName <EC2_PUBLIC_IP>

    WSGIScriptAlias / /var/www/html/flaskapp.wsgi
    <Directory /home/ubuntu>
        Options FollowSymLinks
        AllowOverride None
        Require all granted
    </Directory>
</VirtualHost>
