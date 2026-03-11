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
        docker.image('instrumentisto/rsync-ssh').inside('-u root') {
            sshagent (credentials: ['ssh-prod']) {
                sh 'mkdir -p ~/.ssh'
                sh 'ssh-keyscan -H "localhost" >> ~/.ssh/known_hosts'
                sh 'rsync -rav --delete ./ /tmp/laravel-deploy/ --exclude=.env --exclude=storage --exclude=.git'
            }
        }
    }
}