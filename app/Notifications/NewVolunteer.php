<?php

namespace App\Notifications;

use App\Models\Register;
use App\Models\Volunteer;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

class NewVolunteer extends Notification implements ShouldBroadcast, ShouldQueue
{
    use Queueable;

    protected $volunteer;
    /**
     * Create a new event instance.
     */
    public function __construct(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
    }

    public function via(object $notifiable): array
    {
        return ['database', 'mail', 'broadcast'];
    }

    public function toDatabase(object $notifiable)
    {
        return [
            'volunteer_id'  => $this->volunteer->id,
            'first_name'    => $this->volunteer->first_name,
            'last_name'     => $this->volunteer->last_name,
            'email'         => $this->volunteer->email,
            'phone_number'  => $this->volunteer->phone_number,
            'event'         => $this->volunteer->events()->first()->title,
        ];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/admin/volunteers/'.$this->volunteer->id);

        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('New volunteer in the list:')
                    ->line($this->volunteer->first_name)
                    ->line("volunteered at: {$this->volunteer->created_at}")
                    ->action('View the volunteer', $url)
                    ->line('This is nice, so time to work!');
    }


    public function toBroadcast(object $notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            'notification_type'     => 'NewVolunteer',
            'volunteer_id'          => $this->volunteer->id,
            'volunteer_first_name'  => $this->volunteer->first_name,
            'volunteer_last_name'   => $this->volunteer->last_name,
            'volunteer_event'       => $this->volunteer->events()->first()->title,
        ]);
    }

}
