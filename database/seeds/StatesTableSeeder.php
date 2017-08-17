<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //load the CSV document from a file path
        $file = resource_path('masterTables\states.csv');
    	$csvReader = Reader::createFromPath($file);
    	$header = $csvReader->fetchOne();

    	$nbInsert = $csvReader->each(function($row, $rowOffset){
    		// return false if there is no data
    		if (empty($row)) return false;
    		if ($rowOffset == 0) return true;
    		return DB::table('states')->insert(array('state_code' => $row[0], 'state' => $row[1],));
    	});
    }
}
