<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Transaction;

class TransactionStatusUpdated extends Notification
{
    use Queueable;

    public $transaction;
    public $status;

    public function __construct(Transaction $transaction, $status)
    {
        $this->transaction = $transaction;
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
        return (new MailMessage)
                    ->subject('Transaction Status Updated')
                    ->greeting('Hello, ' . $notifiable->name)
                    ->line('Your transaction with ID: ' . $this->transaction->id . ' and amount: $' . number_format($this->transaction->amount, 2) . ' has been ' . $this->status)
                    ->action('View Transaction', url('/trader/dashboard'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
