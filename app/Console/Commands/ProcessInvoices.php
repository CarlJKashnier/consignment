<?php

namespace App\Console\Commands;

use App\Jobs\CreateInvoiceForClient;
use App\Models\TransactionLog;
use App\Models\User;
use Illuminate\Console\Command;

class ProcessInvoices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:process-invoices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Nightly invoice processing';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Grab details from the Transaction Table here.
        //This gets a little spicy - how to keep this simple.
        $transactionsToInvoice = TransactionLog::where('billed','=',0)->get();
        $ownerInvoices = [];
        $partnerInvoiuces = [];


        foreach($transactionsToInvoice as $transactionLine){
            $ownerInvoices[$transactionLine->owned_by_client_id][] = $transactionLine;
            $partnerInvoiuces[$transactionLine->client_id][] = $transactionLine;
        }
        foreach($ownerInvoices as $ownerInvoice){
            CreateInvoiceForClient::dispatch();
        }
        foreach($partnerInvoiuces as $partnerInvoiuce){
            CreateInvoiceForClient::dispatch();
        }


    }
}
