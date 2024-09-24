<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateInvoiceForClient implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    public $isClient;
    public $clientId;
    public $invoiceData;
    public function __construct($isClient, $clientId, $invoiceData)
    {
        ;
        $this->isClient = $isClient;
        $this->clientId = $clientId;
        $this->invoiceData = $invoiceData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //Job Logic here

        //Process based on if is a client or if is partner check $this->isClient == true process the invoices that way, likely just a fancy email template or PDF
        //2 private functions that would control the "render logic" and dispatch emails or storage on the site. ect
    }
}
