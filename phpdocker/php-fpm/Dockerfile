FROM phpdockerio/php:8.3-fpm
WORKDIR "/application"

ARG UNAME=www-data
ARG UGROUP=www-data
ARG UID=1000
ARG GID=1001
RUN usermod  --uid $UID $UNAME
RUN groupmod --gid $GID $UGROUP



RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        git \
        php8.3-redis \
        php8.3-gd \ 
        php8.3-intl \ 
        php8.3-pcov \
        php8.3-redis \ 
        php8.3-xdebug \ 
        php8.3-yaml \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*