pipeline {
    agent any
    stages {
        stage("Tag and Push") {
            when { branch 'master' }
            environment { 
                GIT_TAG = "jenkins-$BUILD_NUMBER"
            }
            steps {
                sh('''
                    git config user.name 'Shivachaithanya26'
                    git config user.email 'shivachaithanya961@gmail.com'
                    git tag -a \$GIT_TAG -m "[Jenkins CI] New Tag"
                ''')
                
                sshagent(['my-ssh-credentials-id']) {
                    sh("""
                        #!/usr/bin/env bash
                        set +x
                        export GIT_SSH_COMMAND="ssh -oStrictHostKeyChecking=no"
                        git push origin \$GIT_TAG
                     """)
                }
            }
        }
    }
}
