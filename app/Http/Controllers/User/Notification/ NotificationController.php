<?php

namespace App\Http\Controllers\User\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  NotificationController extends Controller
{
    public function toArray($notifiable)
    {
        return [
            'invoice_id' => $this->invoice->id,
            'amount' => $this->invoice->amount,
        ];
    }
}
