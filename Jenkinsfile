node {
    // Define a path to the drupal apps
    drupalPath = "/www/afs/"

    // Define the app name to be used
    appName = "burner"

    // Defining dev & qa paths for build
    devPath = drupalPath + "dev/" + appName
    qaPath = drupalPath + "qa/" + appName

    stage('dev') {
        echo devPath
        sh 'cd $devPath && git pull upstream master'
    }
    stage('qa') {
        /* Run some 
           tests here */
        def mergeDev = "git pull $devPath master"
        sh mergeDev
        echo qaPath
    }
    stage('prod') {
    
    }
}
