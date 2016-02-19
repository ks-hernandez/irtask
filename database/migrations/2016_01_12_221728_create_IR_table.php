    <?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateIRTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('Incident_reports', function (Blueprint $table) {

                $table->increments('id');
                $table->string('consumer_name',40);
                $table->date('incident_date');
                $table->integer('site_id');
                $table->date('incident_time');
                $table->string('incident_description',250);
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
            Schema::drop('Incident_reports');
        }
    }
