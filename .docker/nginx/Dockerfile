FROM nginx:1.25.4-alpine

COPY nginx.conf  /etc/nginx/
COPY templates /etc/nginx/templates/
RUN echo "upstream php-upstream { server weatherapi-app:9000; }" > /etc/nginx/conf.d/upstream.conf

EXPOSE 80
EXPOSE 443