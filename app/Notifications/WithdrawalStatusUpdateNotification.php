<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalStatusUpdateNotification extends Notification
{
    use Queueable;

    protected $withdrawal;
    protected $status;

    /**
     * Create a new notification instance.
     */
    public function __construct($withdrawal, $status)
    {
        $this->withdrawal = $withdrawal;
        $this->status = $status;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $statusMessage = $this->status === 'approved' ? 'approved' : 'rejected';
        return (new MailMessage)
                ->subject('Withdrawal Request ' . ucfirst($statusMessage))
                ->greeting('Hello ' . $notifiable->name . ',')
                ->line('Your withdrawal request for $' . number_format($this->withdrawal->amount, 2) . ' has been ' . $statusMessage . '.')
                ->line('If you have any questions, please contact support.')
                ->action('View Your Withdrawals', url('/trader/dashboard'))
                ->line('Thank you for using our platform!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'amount' => $this->withdrawal->amount,
            'status' => $this->status,
        ];
    }
}
