pipeline {
  agent any
  environment {
    CI = 'true'
  }
  stages {
    stage('Update code') {
       steps {
        script {
          echo 'Fetch data from git and reset the code to mater'
          sh 'git checkout master'
          sh 'git pull origin master'
          sh 'git reset --hard origin/master'
        }
      }
    }
    stage('Build') {
      steps {
        sh 'composer install'
        sh 'npm install'
      }
    }
    stage('Deploy') {
      steps {
        script {
          sh 'docker-compose up -d'
        }
      }
    }
  }
}
