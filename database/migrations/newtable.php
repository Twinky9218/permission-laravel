<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_attributes', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('user_reference_number',20);
            $table->enum('kyc_status',['COMPLETE','INCOMPLETE']);
            $table->timestamps();         
            $table->enum('koino_status',['ELIGIBLE' ,'INITIATE' ,'CA','ONGOING','DELINQUENT','ELIGIBLE_FOR_REPEAT',
            'NOT_ELIGIBLE_FOR_REPEAT','NOT_ELIGIBLE']);
            $table->double('latest_koino_txn_amount',10,2);
            $table->enum('quickloan_status',['INITIATE','CA','NOT_ELIGIBLE','ELIGIBLE','ONGOING_NOT_ELIGIBLE_FOR_REPEAT',
            'ONGOING_ELIGIBLE_FOR_REPEAT','DELINQUENT']);
            $table->double('latest_quickloan_txn_amount',10,2);
            $table->string('latest_quickloan_txn_merchant_name');
            $table->enum('latest_quickloan_txn_bucket',['DOC_PENDING','DOC_REWORK','PAYMENT_PENDING','NACH_PENDING','AGREEMENT_PENDING','INFO_PENDING','WAITING_FOR_APPROVAL']);
            $table->integer('latest_quickloan_days_in_ca')->nullable();
            $table->enum('payment_status',['UPCOMING','DUE_TODAY','FUTURE','NONE']);
            $table->integer('dpd_days');
            $table->double('upcoming_payment_amount',10,2);
            $table->double('due_payment_amount',10,2);
            $table->double('koino_payment_due',10,2);
            $table->double('mmt_payment_due',10,2);
            $table->double('quickloan_payment_due',10,2);
            $table->double('future_payment_amount',10,2);
            $table->enum('collection_messaging_campaign',['LEGAL','CIBIL','REPEAT','LEGAL++',
                'CIBIL++','LEGAL V2','LOW POS/LOW DUES','FIELD AGENT ALLOCATION','NONE']);
            $table->enum('collection_payment_campaign',['SNOOZE','DUES_WAVIER','EMI_HOLIDAY',
                'SETTLEMENT','RESTRUCTING','MULTI','NONE']);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_attributes', function (Blueprint $table) {
            //
        });
    }
}
