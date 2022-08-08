<?php
namespace App\Services\Teacher;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;

class StoreService{
    protected $data;

    public function __construct(array $data)
    {
        $this->data;
    }

    public function run()
    {
        try{
            DB::transaction(function(){
                $user = $this->storeUser();
                return $this->storeTeacher($user);
            });
        }
        catch(Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }

    private function storeUser() : User
    {
        $data = $this->data;
        $user_data = Arr::only($data, ['fullname', 'email', 'image']);
        $user_data['password'] = Hash::make('password');
        return User::create($user_data);
    }

    private function storeTeacher($user) : Teacher
    {
        $data = $this->data;
        $teacher_data = Arr::only($data, ['bio', 'staff_id']);
        return $user->teacher()->create($teacher_data);
    }
}