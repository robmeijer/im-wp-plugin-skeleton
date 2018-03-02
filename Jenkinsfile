#!groovy

timestamps {
  node {

    checkout scm

    //PHPUnit test+ allure code begins
    try {
      stage('PHPUnit Tests') {
         sh '/usr/local/bin/composer install -o'
         sh './vendor/bin/phpunit'
      }
    } catch (e) {
       currentBuild.result = 'FAILURE'
    } finally {
       //Delete old build Allure report dirs if exits
       if (fileExists('allure-report')) {
          sh 'rm -rf allure-report*'
       }

       // Generate Allure reports and show in the build process
       allure commandline: 'allure_2',
          jdk: '',
          results: [
                [
                  path: 'build/allure-results'
                ]
          ]
    }
    //PHPUnit test+ allure code Ends
  }

  // Build jobs from branches with '/' have the '/' URL-encoded
  def sanitisedBranchName = (env.BRANCH_NAME).replace("/", "%2F")
  switch (env.BRANCH_NAME) {

    case "develop":
      build "../wcp-core/${sanitisedBranchName}"
      break

    default:
      echo "Triggering origin build for ${env.BRANCH_NAME}"
  }
}
