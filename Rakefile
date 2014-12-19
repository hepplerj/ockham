require 'rake'
require 'date'
require 'yaml'

task :default => :stage

desc "Build site with Jekyll"
task :build do
  system 'bundle exec jekyll build'
end

desc "Generate and publish site to stage.cesta.stanford.edu."
task :stage => [:build] do
  system "echo 'Staging...'"
end
