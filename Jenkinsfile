node {
    // Define a path to the drupal apps
    drupalPath = "/www/afs/"

    // Define the app name to be used
    appName = "burner"  

    stage('dev') {
         def path = drupalPath + "dev/" + appName
         echo path
    }
    stage('qa') {
        def path = drupalPath + "qa/" + appName
        echo path
    }
}
