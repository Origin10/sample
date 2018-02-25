<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('這是一封密碼重置郵件，如果是您本人操作，請點擊以下按鈕繼續：')
                    ->action('重置密碼', url(config('app.url').route('password.reset', $this->token, false)))
                    ->line('如果您並沒有執行此操作，您可以選擇忽略此郵件。');
    }
}
