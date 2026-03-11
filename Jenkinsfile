node {
    checkout scm

    // Build
    stage("Build"){
        docker.image('composer:2.6').inside('-u root') {
            sh 'composer install --ignore-platform-reqs'
        }
    }

    // Testing
    stage("Test"){
        docker.image('ubuntu').inside('-u root') {
            sh 'echo "Ini adalah test"'
        }
    }

    // Deploy
    stage("Deploy"){
        docker.image('ubuntu').inside('-u root') {
            sh 'mkdir -p /tmp/laravel-deploy'
            sh 'cp -r . /tmp/laravel-deploy/'
            sh 'echo "Deploy berhasil ke /tmp/laravel-deploy"'
        }
    }
}