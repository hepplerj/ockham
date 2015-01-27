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
  system "echo 'Staging to stage.cesta.stanford.edu...'"
end

desc "Deploy site with rsync"
task :rsync do
  puts "\n Deploying site with rsync..."

  ssh_port      = "22"
  ssh_user      = "jason@74.207.249.200"
  rsync_delete  = false
  rsync_options = "--checksum --stats -avz -e"
  public_dir    = "_site"
  document_root = "/var/www/cestadev/"

  exclude = ""
  if File.exists?('./rsync-exclude')
    exclude = "--exclude-from '#{File.expand_path('./rsync-exclude')}'"
  end

  ok_failed system ("rsync #{rsync_options} 'ssh -p #{ssh_port}' #{exclude} #{"--delete" unless rsync_delete == false} #{public_dir}/ #{ssh_user}:#{document_root}")

end

def ok_failed(condition)
  if (condition)
    puts "OK"
  else
    puts "FAILED"
  end
end
