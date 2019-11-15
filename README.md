## /etc/hosts

127.0.0.1       helloworld.localhost

## /usr/local/etc/httpd/extra/httpd-vhosts.conf

        <VirtualHost *:80>
            DocumentRoot "/Users/k-ozaki/workspace/helloworld/public"
            ServerName helloworld.localhost
            ErrorLog "/usr/local/var/log/httpd/helloworld.localhost-error_log"
            CustomLog "/usr/local/var/log/httpd/helloworld.localhost-access_log" common
            <Directory "/Users/k-ozaki/workspace/helloworld/public">
            AllowOverride All
            Require all granted
            </Directory>
        </VirtualHost>