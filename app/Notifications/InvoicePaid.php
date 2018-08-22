<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class InvoicePaid extends Notification
{
    use Queueable;
    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

  
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data' =>[
    
            'user' =>$this->data
            ]
          
           
        ]);
    }
    
     
    public function toDatabase($notifiable)
    {
        return ([
            [
    
            'user' =>$this->data
            ]
          
           
        ]);
    }
    
    

}
