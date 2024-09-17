<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalRequestNotification extends Notification
{
    use Queueable;

    protected $withdrawal;

    /**
     * Create a new notification instance.
     */
    public function __construct($withdrawal)
    {
        $this->withdrawal = $withdrawal;
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
        return (new MailMessage)
                ->subject('Withdrawal Request Submitted')
                ->greeting('Hello ' . $notifiable->name . ',')
                ->line('Your withdrawal request for $' . number_format($this->withdrawal->amount, 2) . ' via ' . strtoupper($this->withdrawal->method) . ' has been submitted.')
                ->line('We will notify you once it is reviewed by us.')
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
            'method' => $this->withdrawal->method,
        ];
    }
}
