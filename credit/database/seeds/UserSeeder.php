<?php

use App\UserCreditScore;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user1 = \App\User::create(['first_name' =>'System','last_name'=>'Admin','email'=>'admin@admin.com','phone'=>'0704522671','dob'=>'16/11/1993','address'=>'Juja','gender'=>'Male','id_number'=>30156964,'password'=>\Illuminate\Support\Facades\Hash::make("password")]);
         \App\UserLoanDetail::create(['is_employed'=>1,'salary'=>200000,'company_name'=>'XYZ LTD','company_phone'=>100,'employer_name'=>'Moses','first_next_of_kin_name'=>'James','first_next_of_kin_phone'=>'0712345678','first_next_of_kin_ralationship'=>'Relative','second_next_of_kin_name'=>'Winnie','second_next_of_kin_phone'=>'0798765437','second_next_of_kin_ralationship'=>'Parents','user_id'=>$user1->id,'credit_score_id'=>\App\CreditScore::where('points',3)->first()->id]);
        UserCreditScore::create(['user_id'=>$user1->id,'credit_score_id'=>\App\CreditScore::where('points',3)->first()->id]);
         $user2 = \App\User::create(['first_name' =>'John','last_name'=>'Doe','email'=>'johndoe@gmail.com','phone'=>'0714536008','dob'=>'16/11/1990','address'=>'Eldoret','gender'=>'Female','id_number'=>29156964,'password'=>\Illuminate\Support\Facades\Hash::make("password")]);
         \App\UserLoanDetail::create(['is_employed'=>0,'other_income'=>15000,'first_next_of_kin_name'=>'William','first_next_of_kin_phone'=>'0712345674','first_next_of_kin_ralationship'=>'Friend','second_next_of_kin_name'=>'Timothy','second_next_of_kin_phone'=>'0798765600','second_next_of_kin_ralationship'=>'Couple','user_id'=>$user2->id,'credit_score_id'=>\App\CreditScore::where('points',3)->first()->id]);
        UserCreditScore::create(['user_id'=>$user2->id,'credit_score_id'=>\App\CreditScore::where('points',3)->first()->id]);
    }
}
