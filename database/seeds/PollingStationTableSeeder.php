<?php

use Illuminate\Database\Seeder;

class PollingStationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('max_execution_time', -1);

        $reader = \Box\Spout\Reader\ReaderFactory::create(\Box\Spout\Common\Type::XLSX);

        $reader->open(base_path('database/seeds/files/polling_stations.xlsx'));

        foreach ($reader->getSheetIterator() as $sheet):
            foreach ($sheet->getRowIterator() as $row):
                if (strlen($row[0]) == 3) {
                    \App\Models\PollingStation::create([
                        'county_code' => $row[0],
                        'constituency_code' => $row[2],
                        'caw_code' => $row[4],
                        'polling_station_code' => $row[9],
                        'polling_station_name' => $row[10]
                    ]);
                }
            endforeach;
        endforeach;
    }
}
