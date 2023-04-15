<?php

use Illuminate\Support\Facades\DB;
use App\Models\pregnantreports\PregnantReport;
use App\Models\maternitypatients\MaternityPatient;

function sendReport($phoneNumber, $problem){
    $user = MaternityPatient::where('phone_number', $phoneNumber)
            ->first(['id', 'first_name', 'middle_name', 'last_name']);

    if ($user) {
        $id = $user->id;
        $username = $user->fullname;

        $maternity_pregnant = DB::table('maternity_pregnant')
                ->where('maternity_patient_id', $id)
                ->orderBy('id', 'desc')
                ->first(['id']);

        if ($maternity_pregnant) {
            $maternity_pregnant_Id = $maternity_pregnant->id;

            $report = new PregnantReport();
            $report->maternity_pregnant_id = $maternity_pregnant_Id;
            $report->issue = "Maumivu ya mgongo";
            $report->is_attended = 0;
            $report->save();

            $response  = "END Pole kwa tatizo hilo ".$username." \n";
            $response .= "Taarifa zako zimetufikia maumivu yaki zidi fika hospitali yoyote karibu na wewe\n";

        } else {
            $response  = "END Pole kwa tatizo hilo ".$username." \n";
            $response .= "Taarifa fika kituo cha afya chochote kuhakiki taarifa zako\n";
        }

    } else {
        $response  = "END Samahani system haikutambui \n";
    }

    return $response;
}