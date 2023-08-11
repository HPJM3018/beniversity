<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(request()->routeIs('training.store')){
            $imageRule = 'image|required';
        }elseif(request()->routeIs('training.update')){
            $imageRule = 'image|sometimes';
        }
        return [
            'titre'=>'required',
            'description'=>'required',
            'lieu'=>'required',
            'image'=>$imageRule
        ];
    }
    protected function prepareForValidation(){
        if($this->image == null){
            $this->request->remove('image');
        }
    }
}
