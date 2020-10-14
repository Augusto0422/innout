<?php 
if($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
}
?> 
<?php if($message): ?>
    <div class="alert alert-danger my-1" role="alert">
        <?=$message['message']?>
    </div>
<?php endif ?>