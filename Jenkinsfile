pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'composer install'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
        stage('Unit Test') {
            steps {
                sh 'echo Test laravel project'
                sh './vendor/bin/phpunit'
            }
        }
    }
}
