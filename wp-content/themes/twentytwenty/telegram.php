<?php
class Telegram{

    protected $API = '1677253849:AAFHHbqIGcNtQx0yU0WZGNg9KATfoSlYbhU';
    protected $url = 'https://api.telegram.org/bot';
    protected $chatId = '-1001236028469';

    public function send($html){

        $html = "Заявка с сайта \n" . $html;

        $url = $this->url . $this->API.'/sendMessage';

        $data = array(
            'chat_id'=>$this->chatId,
            'text'=> $html
        );
        $options = array(
            'http'=>
                array(
                    'method'=>'POST',
                    'header'=>"Content-Type:application/x-www-form-urlencoded\r\n",
                    'content'=>http_build_query($data),
                ),
        );

        $context = stream_context_create($options);
        $result = file_get_contents($url,false,$context);

    }
}