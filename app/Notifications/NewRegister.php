<?php

namespace App\Notifications;

use App\Models\Register;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

class NewRegister extends Notification implements ShouldBroadcast, ShouldQueue
{
    use Queueable;

    protected $register;
    /**
     * Create a new event instance.
     */
    public function __construct(Register $register)
    {
        $this->register = $register;
    }

    public function via(object $notifiable): array
    {
        return ['database', 'mail', 'broadcast'];
    }

    public function toDatabase(object $notifiable)
    {
        return [
            'register_id'   => $this->register->id,
            'first_name'    => $this->register->first_name,
            'last_name'     => $this->register->last_name,
            'email'         => $this->register->email,
            'phone_number'  => $this->register->phone_number,
            'event'         => $this->register->events()->first()->title,
        ];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/admin/registers/'.$this->register->id);

        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('New register in the list:')
                    ->line($this->register->first_name)
                    ->line("registered at: {$this->register->created_at}")
                    ->action('View the register', $url)
                    ->line('This is nice, so time to work!');
    }


    public function toBroadcast(object $notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            'notification_type' => 'NewRegister',
            'register_id' => $this->register->id,
            'register_first_name' => $this->register->first_name,
            'register_last_name' => $this->register->last_name,
            'register_event' => $this->register->events()->first()->title,
        ]);
    }

}
