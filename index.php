<?php
set_time_limit(15);
use \danog\MadelineProto\API;
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
} 
include 'madeline.php';

$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>'xxx_ID_xxx','api_hash'=> 'xxx_HASH_xxx']];
$MadelineProto = new API('LampStack.session',$settings);
$MadelineProto->async(true);
$MadelineProto->loop(function() use ($MadelineProto){
    
    yield $MadelineProto->start();
    
    if(!isset($_REQUEST['peer']) or !isset($_REQUEST['type']) or ($_REQUEST['type'] === 'search' and !isset($_REQUEST['q']))){
        echo 'You need to enter all inputs. (see https://github.com/LampStack/TelegramSearchEngine';
        return;
    }
    
    try{
    $get_full_info = yield $MadelineProto->get_full_info($_REQUEST['peer']);
    }catch ( \Throwable $e ) {
        echo $e->getMessage();
        return;
    }
    switch($_REQUEST['type']){
        case 'search' :
            try{
            $searchGlobal = yield $MadelineProto->messages->search([
            'peer' => $_REQUEST['peer'],
            'q' => $_REQUEST['q'],
            'limit' => 10 ,
            'min_id' => 0 ,
            'max_id' => 0 ,
            'min_date' => 0 ,
            'max_date' => 0 ,
            'offset_id' => 0 ,
            'add_offset' => 0 ,
            'filter' => ['_' => 'inputMessagesFilterEmpty'],
            ])['messages'];
            }catch ( \Throwable $e ) {
            echo $e->getMessage();
            return;
            }
            echo json_encode(($searchGlobal),true);
            
        default :
            echo json_encode(($get_full_info),true);
    }

    @unlink('error_log');
    return;
}
);
