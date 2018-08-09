
server {


    server_name testing.com   www.testing.com;


    access_log /var/log/nginx/testing.com.access.log rt_cache; 
    error_log /var/log/nginx/testing.com.error.log;


    root /var/www/testing.com/htdocs;
    
    

    index index.php index.html index.htm;


    include common/php.conf;      
    include common/wpcommon.conf;
    include common/locations.conf;
    include /var/www/testing.com/conf/nginx/*.conf;
}
