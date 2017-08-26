<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class JudgesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //load the CSV document from resource path
        $file = resource_path('masterTables\judges.csv');
    	$csvReader = Reader::createFromPath($file);
    	//$header = $csvReader->fetchOne();

    	$nbInsert = $csvReader->each(function($row, $rowOffset){
    		// return false if there is no data
    		if (empty($row)) return false;
    		if ($rowOffset == 0) return true;
    		return DB::table('judges')->insert(array('id' => $row[0], 'judge' => $row[1],));
    	});
    }
}
