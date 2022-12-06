FROM php:latest
#create ctf user
RUN useradd -m ctf
#copy app into /app
COPY ./app /app
#set working directory
WORKDIR /app
USER root
#run php server on port 80
CMD ["php", "-S", "0.0.0.0:80"]
#expose port 80
EXPOSE 80