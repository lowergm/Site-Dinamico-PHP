# Usar imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copiar os arquivos do projeto para o container
COPY public/ /var/www/html/

# Ativar o módulo de regravação de URL (opcional)
RUN a2enmod rewrite
