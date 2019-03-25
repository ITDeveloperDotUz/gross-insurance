<?php

namespace App\Http\Controllers\Contracts;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \PhpOffice\PhpWord\PhpWord;
use \PhpOffice\PhpWord\TemplateProcessor;
use \App\ContractType;
use \App\Http\Controllers\Controller;

class TerminationController extends Controller
{
    public function termination(){

        return view('terminate');
    }

    public function terminate(Request $request){
        $data = $request->input();

        require_once base_path().'\vendor\phpoffice\phpword\bootstrap.php';
        $templateFile = storage_path().'/app/tmp/tmp_termination_contract'. $data['tmpl'] .'.docx';
        if($data['calc_type'] == 0){
            $data['calc_type'] = '2.1.    Страховщик обязуется незаработанную страховую премию в вышеуказанном размере, зачесть в счет будущих договоров страхования заключенных со Страхователем.';
        } else {
            $data['calc_type'] = '2.1.    Страховщик обязуется возвратить Страхователю/Выгодоприобретателю/Заемщику незаработанную страховую премию в вышеуказанном размере в безналичной форме путем перечисления суммы на банковский счет Страхователя/Выгодоприобретателя/Заемщика, в течение 10 (десяти) календарных дней со дня подписания сторонами настоящего Соглашения.';
        }
        $res = self::processTmp(new TemplateProcessor($templateFile), $data);

        $filename = $request->input('contract_date'). ' - ' . $request->input('police') .'.docx';
        $res->saveAs(storage_path().'/app/tmp/'.$filename);
        $file_path = storage_path().'/app/tmp/' . $filename;
        if (file_exists($file_path))
        {
            return Response()->download($file_path, $filename, [
                'Content-Length: '. filesize($file_path)
            ])->deleteFileAfterSend();
        }
    }

    private function processTmp($pr, $data){
        foreach($data as $key => $value){
            $pr->setValue($key, $value);
        }
        return $pr;
    }

    public function ajaxcontract($cCode){
        return ContractType::where('code', $cCode)->get()[0];
    }
}
