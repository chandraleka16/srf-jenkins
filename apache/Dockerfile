FROM ubuntu
USER root
RUN apt-get update
RUN apt-get install -y
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install apache2 php php-mysql libapache2-mod-php php-cli
RUN dpkg --configure -a
COPY srf/ /var/www/html/

CMD apachectl -D FOREGROUND
