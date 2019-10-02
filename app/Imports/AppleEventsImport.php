<?php

namespace App\Imports;

use App\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class AppleEventsImport extends DefaultValueBinder implements WithCustomValueBinder, ToModel, WithHeadingRow
{

    public function parseDate($date){
        return Date::excelToDateTimeObject($date);
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {


        Log::info($row);

            $event = new Event([
                'status' => "APPROVED",
                'title' => $row["activity_title"],
                'slug' => str_slug($row["activity_title"]),
                'organizer' => $row["name_of_organisation"],
                'description' => $row["description"],
                'organizer_type' => $row["type_of_organisation"],
                'activity_type' => $row["activity_type"],
                'location' => $row["address"],
                'event_url' => $row["organiser_website"],
                'user_email' => "",
                'creator_id' => $row["creator_id"],
                'country_iso' => $row["country"],
                'picture' => "apple/small/" . $row["image_path"],
                'picture_detail' => "apple/large/" . $row["image_path_detail"],
                "pub_date" => now(),
                "created" => now(),
                "updated" => now(),
                "codeweek_for_all_participation_code" => "cw19-apple-eu",
                "start_date" => $this->parseDate($row['start_date']),
                "end_date" => $this->parseDate($row['end_date']),
                "geoposition" => $row["latitude"] . "," . $row["longitude"],
                "longitude" => $row["longitude"],
                "latitude" => $row["latitude"]
            ]);

            $event->save();

            $event->audiences()->attach(explode(",", $row["audience_comma_separated_ids"]));
            $event->themes()->attach(explode(",", $row["theme_comma_separated_ids"]));

            return $event;

    }


}
