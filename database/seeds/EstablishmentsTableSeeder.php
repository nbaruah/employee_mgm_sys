<?php

use Illuminate\Database\Seeder;
use App\Establishment;
use League\Csv\Reader;

class EstablishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //load the CSV document from resource path
    	$file = resource_path('masterTables\establishments.csv');
    	$csvReader = Reader::createFromPath($file);
    	//$header = $csvReader->fetchOne();

    	$nbInsert = $csvReader->each(function($row, $rowOffset){
    		// return false if there is no data
    		if (empty($row)) return false;
    		if ($rowOffset == 0) return true;
    		
    		$establishment = new Establishment();
    		$establishment->est_code=$row[0];
    		$establishment->establishment=$row[1];
    		$establishment->save();
    		return true;

    		//return DB::table('establishments')->insert(array('est_code' => $row[0], 'establishment' => $row[1],));
    	});
    }
}
