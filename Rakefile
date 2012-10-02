ssh_user = "lenni.info" # for rsync deployment
remote_root = "www/blog/wp-content/themes/newsies" # for rsync deployment

task :default => :deploy

desc "deploys the theme"
task :deploy do
    puts "*** Deploying the theme ***"
    system("rsync -rvC . #{ssh_user}:#{remote_root}")
end

desc "zips up the theme"
task :zip do
    puts "*** Creating zip file ***"
    system("git archive --format zip --output `pwd`/newsies.zip master")
end


