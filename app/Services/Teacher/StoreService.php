<?php
namespace App\Services\Teacher;

use Exception;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Traits\UploadImageTrait;
use App\Enums\UserRoles;

class StoreService{
    protected $data;
    use UploadImageTrait;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function run()
    {
        try{
            DB::transaction(function(){
                $user = $this->storeUser();
                dd($user);
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
        $user_data = Arr::only($data, ['fullname', 'email']);
        $user_data['image'] = $this->uploadUserImage();
        $user_data['password'] = Hash::make('password');
        $user_data['user_role'] = UserRoles::TEACHER;
        return User::create($user_data);
    }

    private function storeTeacher($user) : Teacher
    {
        $data = $this->data;
        $teacher_data = Arr::only($data, ['bio', 'staff_id']);
        return $user->teacher()->create($teacher_data);
    }

    private function uploadUserImage() : string{
        return $this->uploadImage('image', 'public/teachers/images/');
    }
}