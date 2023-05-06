Getting started
====================

1. Stop all services which have such ports: 3306, 80, 22, 8888, 9998-9999->9998-9999. In my case it were:
- apache2 (sudo service stop apache2) 80
- mysql (sudo service stop mysql) 3306
- sshd (sudo service stop sshd) 22
2. In shopware root folder exec: sudo docker-compose up
3. Go to localhost/admin and set login=admin password=shopware. Go to extension->my extensions. In skeleton plugin configuration choose color and press save.
4. Go to localhost and check color of buttons 'add to shopping cart' in some product category or in product details.
