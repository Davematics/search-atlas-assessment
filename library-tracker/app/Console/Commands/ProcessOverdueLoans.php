<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Loan;
use Illuminate\Support\Facades\Mail;
use App\Mail\OverdueLoanMail;
use Carbon\Carbon;
class ProcessOverdueLoans extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:process-overdue-loans';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Implement a periodic task that runs nightly to check for overdue book loans and sends email notifications to users.
';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today_date = Carbon::today();
        $loans = Loan::whereNull('returned_at')->where('due_at','<', $today_date)->get();
        foreach($loans as $loan){
          Mail::to($loan->user->email)->send(new OverdueLoanMail($loan));
        }

        $this->info('Overdue loan send');
    }
}
