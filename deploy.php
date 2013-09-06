<?php
$output = shell_exec('git help');
echo "<pre>$output</pre>";

try{
  //$payload = json_decode($_REQUEST['payload']);
  //if ($payload->ref === 'refs/heads/master')
  //{
  	 //$script = dirname(__FILE__) . '/deploy.sh';
  	 //mail('toxabes@gmail.com', 'Test', $script);
  	 //echo $script;
     //exec($script);
  //}
}catch(Exception $e){
    // echo $e->getMessage();
}
?>