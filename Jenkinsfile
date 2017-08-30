#!groovy

node {
  
  checkout scm

  // Build jobs from branches with '/' have the '/' URL-encoded
  def sanitisedBranchName = (env.BRANCH_NAME).replace("/", "%2F")
  slackSend color: "#439FE0", message: "Job: '${env.BRANCH_NAME}' with build id: '${env.BUILD_ID}' starting. "
  switch (env.BRANCH_NAME) {

    case "develop":
      build "../wcp-core/${sanitisedBranchName}"
      break

    default:
      echo "Not triggering origin build for ${env.BRANCH_NAME}"

  }
  slackSend color: "#439FE0", message: "Job: '${env.BRANCH_NAME}' with build id: '${env.BUILD_ID}' now complete. "
}
