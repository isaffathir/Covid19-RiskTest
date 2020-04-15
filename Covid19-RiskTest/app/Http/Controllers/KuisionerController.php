<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_question;

use Redirect;

class KuisionerController extends Controller
{
    function kusionerList(){
        $data["users"] = User_question::orderBy('id', 'desc')->get();

        return view('formKuisioner.kuisioner')->with($data);
        
    }
    function kuisionerForm(){
        return view('formKuisioner.form');
    }
    function kuisionerFormSubmit(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $profession = $request->input('profession');
        $email = $request->input('email');

        if($name == "" || $age == "" || $profession == "" || $email == ""){
            $status = "failed";
            $message = 'Input blank text !!!';

            return redirect('/form')->with($status, $message);
        }else{
            $status = "";
            $message = "";

            $yes_answer = 0;
            $no_answer = 0;

            if($request->input('Q1') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q2') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q3') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q4') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q5') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q6') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q7') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q8') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q9') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q10') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q11') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q12') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q13') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q14') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q15') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q16') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q17') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q18') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q19') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q20') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            if($request->input('Q21') === "Ya"){
                $yes_answer += 1;
            }else{
                $no_answer += 1;
            }
            $user = new User_question();
            $user->name = $name;
            $user->age = $age;
            $user->profession = $profession;
            $user->email= $email;
            $user->yes_answer = $yes_answer;
            $user->no_answer= $no_answer;
            if ($user->save()){
                $status = "success";
                $message = 'Data successfully saved !!!';

                return redirect('/kuisioner')->with($status, $message);
            }else{
                $status = "failed";
                $message = 'Data unsuccessfully saved !!!';

                return redirect('/form')->with($status, $message);
            }
        }
    }
}
