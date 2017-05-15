node {
    // Define a path to the drupal apps
    drupalPath = "/www/afs/"

    // Define the app name to be used
    appName = "burner"  

     stage('dev') {
        steps {
            def path = drupalPath + "dev/" + appName
            echo path
        }
    }
    stage('qa') {
         steps {
             def path = drupalPath + "qa/" + appName
            echo path
        }
    }
}
