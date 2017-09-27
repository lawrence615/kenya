<?php

use Illuminate\Database\Seeder;

class CountyTableSeeder extends Seeder
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

        $reader->open(base_path('database/seeds/files/counties.xlsx'));

        foreach ($reader->getSheetIterator() as $sheet):
            foreach ($sheet->getRowIterator() as $row):
                if (strlen($row[0]) == 3) {
                    \App\Models\County::create([
                        'county_code' => $row[0],
                        'county_name' => $row[1]
                    ]);
                }
            endforeach;
        endforeach;
    }
}
