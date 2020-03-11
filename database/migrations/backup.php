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
        Schema::create('kissht_customer_segmentation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_reference_number',20)->nullable();
            $table->enum('kyc_status',['COMPLETE','INCOMPLETE']);
            $table->enum('koino_status',['ELIGIBLE' ,' INITIATE' ,'CA ','ONGOING',' DELINQUENT','ELIGIBLE_FOR_REPEAT','NOT_ELIGIBLE_FOR_REPEAT','NOT_ELIGIBLE']);
            $table->decimal('koino_txn_amount',10,2);
            $table->enum('quickloan_txn_status',['INITIATE','CA','NOT_ELIGIBLE',
                'ELIGIBLE','ONGOING_NOT_ELIGIBLE_FOR_REPEAT','ONGOING_ELIGIBLE_FOR_REPEAT']);
            $table->decimal('quickloan_txn_amount',10,2);
            $table->string('quickloan_txn_merchant_name');
            $table->enum('ca_txn_bucket',['DOCS_ONLY','PAYMENT_ONLY','NACH_ONLY','NONE']);
            $table->integer('days_in_ca')->nullable();
           $table->enum('payment_status',['UPCOMING','DUE_TODAY','PAST_DUE',
            'FUTURE','NONE']);
            $table->integer('dpd_days');
            $table->enum('ongoing_loan',['KOINO','NON_KOINO','MMT','MULTI']);
            $table->enum('collection_messaging_campaign',['LEGAL','CIBIL','  REPEAT','NONE']);
            $table->enum('collection_payment_campaign',['SNOOZE','DUES_WAVIER','EMI_HOLIDAY','SETTLEMENT','RESTRUCTING','MULTI']);
            $table->integer('upcoming_payment_amount');
            $table->integer('due_payment_amount');
            $table->integer('future_payment_amount');
            $table->enum('language_preference',['ENGLISH','HINDI','MARATHI','GUJARATI','TAMIL','TELUGU','KANNADA','BENGALI','ODIA','MALAYALAM','PUNJABI','ASSAMESE','URDU']);
            $table->enum('delinquent_status',['STANDARD','RESOLVED','DELINQUENT']);
            $table->enum('mmt_line_application_status',['ACTIVE','ELIGIBLE','SUSPENDED','REJECTED'];
            $table->enum('mmt_kyc_status',['COMPLETE','INCOMPLETE']);
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
        Schema::dropIfExists('kissht_customer_segmentation');
    }
}
