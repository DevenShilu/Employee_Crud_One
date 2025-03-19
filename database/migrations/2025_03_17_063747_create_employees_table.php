<?php
// use Illuminate\app\http\model\Employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            //personal details
            $table->id();
            $table->string('image-url')->nullable();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('spouse-name')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('alt-phone')->nullable();
            $table->string('gender');

            // children details
            $table->string('is-children')->nullable();

            $table->string('adhar-address');
            $table->string('adhar-address2');
            $table->string('adhar-address3')->nullable();
            $table->string('adhar-taluka');
            $table->string('adhar-pincode');
            $table->string('adhar-district');
            $table->string('adhar-state');

            $table->string('is-current-address-same-as-adhar');
            $table->string('current-address')->nullable();
            $table->string('current-address2')->nullable();
            $table->string('current-address3')->nullable();
            $table->string('current-taluka')->nullable();
            $table->string('current-pincode')->nullable();
            $table->string('current-district')->nullable();
            $table->string('current-state')->nullable();

            $table->string('religion');
            $table->date('dob');

            $table->string('reff-by')->nullable();
            $table->string('reff-with-relation')->nullable();
            $table->string('genesys-code')->nullable();

            $table->string('highest-qualification')->nullable();
            $table->string('marital-status')->nullable();
            $table->string('blood-group')->nullable();
            $table->integer('adhar-number')->nullable();
            $table->integer('pan-number')->nullable();

            // contact details
            $table->string('emergency-contact-phone')->nullable();
            $table->string('emergency-contact-name')->nullable();
            $table->string('emergency-contact-relation')->nullable();

            // bank details
            $table->string("account-holder-name")->nullable();
            $table->string('bank-name')->nullable();
            $table->string('account-number')->nullable();
            $table->string('ifsc-code')->nullable();
            $table->string('branch-name')->nullable();

         //education details in Education table

         //employment details
           $table->string('base-site-name');
            $table->string('current-site-name')->nullable();
            $table->string('site-city');
           //employee id is above
           $table->string('machine-id')->autoIncrement();
           $table->string('department');
           $table->string('designation');
           $table->strring('reporting-manager-name');
           $table->string("rewiewer-name");
           $table->string('pay-by');
           $table->string('sallary-template')->nullable();
           $table->string('sallary-cycle')->nullable();
           $table->float('sallary-per-anum');
           $table->string('payment-mode')->nullable();
           $table->string('gradding')->nullable();
           $table->string('week-off')->nullable();
           $table->string('incentive-catagoery')->nullable();
           $table->string('pf-eligible')->nullable();
           $table->string('pf-number')->nullable();
           $table->string('UAN-number')->nullable();
           $table->string('esic-number')->nullable();
           $table->string("bonus-eligible")->nullable();
           $table->string('shft-time');
           $table->time('lunch-start-time')->nullable();
           $table->time('lunch-end-time')->nullable();
           $table->string('vendor')->nullable();
           $table->string('brand')->nullable();
           $table->string('division')->nullable();

          // joining & probation details
          $table->date('joining-date');
          $table->string('probation-period');
          $table->date('probation-date');
          $table->date('probation-confirm-date');
          $table->string('probation-confirmation')->nullable();

          //asset details
          $table->string('asset-allocation-status')->nullable();
          $table->string('id-card-given-status')->nullable();
          $table->string('uniform-given-status')->nullable();
          $table->string('mobile-application-given-status')->nullable();
          $table->string('application-id')->nullable();
          $table->string('application-password')->nullable();
          $table->string('block-unblock-status')->nullable();
          $table->string('email-varify-status')->nullable();


          //allowances & benifits
          $table->string('edu-allowances')->nullable();
          $table->string('life-insurance-allowances')->nullable();
          $table->float('expence-limit')->nullable();
          $table->float('special-allowance')->nullable();

          //resignation & termination details
            $table->date('resignation-period')->nullable();
            $table->date('terminatin-status')->nullable();
            $table->date('blacklist-status')->nullable();

            $table->date('resignation-date')->nullable();
            $table->date('last-working-date')->nullable();
            $table->date('resignation-confirm-date')->nullable();
            $table->string('resignation-status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
