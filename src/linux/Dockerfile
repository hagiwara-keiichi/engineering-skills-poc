# reference https://www.wakuwakubank.com/posts/270-docker-build-image/
# イメージビルド docker image build -t xxxx/xxxx:latest .
# コンテナ起動 docker container run -it centos:7 /bin/bash
FROM centos:7
  
RUN echo "now building..."
RUN yum -y install httpd
RUN sed -i '/#ServerName/a ServerName www.example.com:80' /etc/httpd/conf/httpd.conf

ADD ./index.html /var/www/html/

EXPOSE 80
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]