<?

/*
  Webhook for deploying Github updates to AFS
*/

error_reporting(E_ALL);
ini_set('display_errors', '1');

$output = shell_exec('cd /afs/ir/users/j/h/jheppler/web/cesta && git pull');
$build = shell_exec('cd ~/jheppler/web/cesta && jekyll build > dev/null&')

echo $output;
echo $build;

?>
