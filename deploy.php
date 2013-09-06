<?php
try{
  $payload = json_decode($_REQUEST['payload']);
  if ($payload->ref === 'refs/heads/master')
  {
  	 $script = dirname(__FILE__) . '/deploy.sh';
     exec($script);
  }
}catch(Exception $e){
  exit(0);
}
?>