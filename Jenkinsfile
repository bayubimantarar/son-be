pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                // sh 'curl -sS https://getcomposer.org/installer | php'
                // sh 'mv composer.phar /usr/local/bin/composer'
                sh 'composer install'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
        stage('Unit Test') {
            steps {
                sh 'echo unit test'
                sh './vendor/bin/phpunit'
            }
        }
        // stage('Browser Test') {
        //     steps {
        //         sh 'echo browser test'
        //         sh 'php artisan dusk:chrome-driver --all'
        //         sh 'php artisan dusk'
        //     }
        // }
    }
}
