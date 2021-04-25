FROM ubuntu:20.04

# Utilities
RUN dpkg --add-architecture i386 && \
  apt-get update -y && \
  DEBIAN_FRONTEND="noninteractive" apt-get install -y apt-transport-https software-properties-common build-essential unzip curl git vim apache2 php libapache2-mod-php php-mysql php-dev php-xml php-curl php-soap php-mbstring php-gd php-intl php-xsl php-pear python-dev wget java-common --no-install-recommends

# Change image time zone
ENV TZ 'America/Sao_Paulo'
RUN echo $TZ > /etc/timezone && \
  apt-get update && apt-get install -y tzdata && \
  rm /etc/localtime && \
  ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
  dpkg-reconfigure -f noninteractive tzdata && \
  apt-get clean

# Composer PHP
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
  php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
  php composer-setup.php --install-dir=/usr/bin --filename=composer

# NodeJS
RUN curl -sL https://deb.nodesource.com/setup_15.x | bash - && \
  apt-get update && \
  apt-get -y install nodejs --no-install-recommends && \
  rm -r /var/lib/apt/lists/*

# Virtualhost
RUN a2enmod rewrite
RUN a2enmod proxy_html
COPY ./VirtualHost.conf /etc/apache2/sites-available/000-default.conf

# Volume
RUN mkdir /var/www/html/tools
RUN mkdir /var/www/html/tools/plutool
VOLUME ["/var/www/html/tools/plutool"]
WORKDIR /var/www/html/tools/plutool
COPY . .
