<?php
namespace App\Services\Student;

use Exception;
use App\Models\User;
use App\Models\Student;
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
                return $this->storeStudent($user);
            });
        }
        catch(Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }

    private function storeUser() : User
    {
        $data = $this->data;
        $user_data = Arr::only($data, ['fullname']);
        $user_data['email'] = $data['reg_no'].'@school.com';
        $user_data['image'] = $this->uploadUserImage();
        $user_data['password'] = Hash::make('password');
        $user_data['user_role'] = UserRoles::STUDENT;
        return User::create($user_data);
    }

    private function storeStudent($user) : Student
    {
        $data = $this->data;
        $student_data = Arr::only($data, ['reg_no']);
        $student = $user->student()->create($student_data);
        $this->storeFormStudent($student);
        return $student;
    }

    private function storeFormStudent($student)
    {
        $data = $this->data;
        $form_student_data = Arr::only($data, ['form_id']);
        return $student->form_student()->create($form_student_data);
    }

    private function uploadUserImage() : string{
        return $this->uploadImage('image', 'public/students/images/');
    }
}