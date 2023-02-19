FROM node:19-alpine3.16

WORKDIR /var/www/html

EXPOSE 3000

COPY package*.json ./

RUN npm install

COPY . .

CMD ["npm", "run", "dev"]

