ssh_user = "lenni.info" # for rsync deployment
remote_root = "www/blog/wp-content/themes/newsies" # for rsync deployment

desc "deploys the theme"
task :deploy do
    puts "*** Deploying the theme ***"
    system("rsync -r --exclude=.git* . #{ssh_user}:#{remote_root}")
end

desc "deploys the theme"
task :zip do
    puts "*** Creating zip file ***"
    system("git archive --format zip --output `pwd`/newsies.zip master")
end


