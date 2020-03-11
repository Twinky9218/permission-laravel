<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKisshtCustomerSegmentation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kissht__customer__segmentation', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('kyc_status',['Complete','Incomplete']);
            $table->enum('koino_status',['eligible' ,' initiate' ,'ca ',' ongoing',' delinquent',  'eligible_for_repeat',' not_eligible_for_repeat','not_eligible']);
            $table->decimal('koino_txn_amount',10,2);
            $table->enum('quickloan_txn_status',['initiate','ca','not_eligible','eligible','ongoing_not_eligble_for_repeat','ongoing_eligible_for_repeat']);
            $table->decimal('quickloan_txn_amount',10,2);
            $table->string('quickloan_txn_merchant_name');
            $table->enum('ca_txn_bucket',['docs_only','payment_only','    nach_only','null']);
            $table->integer('days_in_ca')->nullable();
            $table->enum('payment_status',['upcoming','due_today','past_due','    future','none']);
            $table->integer('dpd_days');
            $table->enum('ongoing_loan',['koino','non_koino','mmt','multi']);
            $table->enum('collection_messaging_campaign',['legal','cibil','  repeat','none']);
            $table->enum('collection_payment_campaign',['snooze','dues_waiver','emi-holiday','settlement','restructuring','multi']);
            $table->integer('upcoming_payment_amount');
            $table->integer('due_payment_amount');
            $table->integer('future_payment_amount');
            //$table->enum('language_preference');
            $table->enum('delinquent_status',['standard','resolved','    delinquent']);
            //$table->enum('mmt_line_application_status');
            //$table->enum('mmt_kyc_status');
            $table->timestamp('segments_updated_at');
            $table->timestamps(); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('_kissht__customer__segmentation');
    }
}
