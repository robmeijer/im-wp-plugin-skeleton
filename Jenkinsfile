#!groovy

def sanitisedBranchName = (env.BRANCH_NAME).replace("/", "%2F")
switch (env.BRANCH_NAME) {

  case "develop":
    build "../wcp-core/${sanitisedBranchName}"
    break

  default:
    echo "Not triggering origin build for ${env.BRANCH_NAME}"

}
