<?php

namespace App\Jobs;

use App\Mail\LoginLink;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class SendLoginLink implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private User $user;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        //
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {


        $url = URL::temporarySignedRoute(
            name: 'login.store',
            expiration: 3600,
            parameters: [
                'email' => $this->user->email,
            ],
        );

        Mail::to($this->user)
            ->send(
                mailable: new LoginLink(
                    url: $url,
                )
            );
    }
}
