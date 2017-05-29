# This is the docker file for our
# great webpage
FROM centos:6

MAINTAINER cbroom

RUN yum -y install httpd elinks

ADD mainfile.tar.gz /var/www/html

EXPOSE 80

ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]


