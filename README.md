# An application for me to practise Laravel

[I followed this guide](https://itnext.io/laravel-and-vue-creating-a-portfolio-website-with-a-crud-admin-panel-ccc18409d5c2) and tweaked a lot of the code from what I'd learnt at [Rareloop](https://www.rareloop.com/).

## Getting started

1. Install Volker

    ```bash
    composer config --global repositories.volker vcs 'git@github.com:Rareloop/volker.git'

    composer global require rareloop/volker
    ```

2. Start the project

    ```bash
    volker start

    volker up
    ```

3. Migrate the database

    ```bash
    volker enter

    php artisan migrate
    ```

4. Install the node packages and run watch

    ```bash
    npm install

    npm run watch
    ```

5. View the application
[https://laravel-test.volker.test/](https://laravel-test.volker.test/)
