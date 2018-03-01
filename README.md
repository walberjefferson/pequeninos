# Configurações do projeto #

### Instalar as depedências via NPM ###
- Use o comando: ```$ npm install``` para instalar as dependências contidas no package.json.

### CSS ###
\- As alterações referentes a aplicação devem ser feitas no arquivo: assets/css/styles.css, o qual será minificado para o destino: assets/css/styles.min.css.
\- Já os plugins usados são compactados e salvos no arquivo assets/css/biblioteca.min.css.

#### Minificar o CSS ####
\- Para minificar use o comando: ```$ grunt bower cssmin  ```.



### Javascript ###
\- As alterações referentes a aplicação devem ser feitas no arquivo: assets/js/scripts.css, o qual será minificado para o destino: assets/js/scripts.min.js
\- Já os plugins usados são compactados e salvos no arquivo assets/js/biblioteca.min.js

#### Minificar o JS ####
\- Para minificar use o comando: ```$ grunt bower uglify ```.

