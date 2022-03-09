<?php

namespace App\Traits;

use Exception;

//use Image ;

trait UploadTrait
{
    public function uploadFile($file, $directory = 'unknown'): string
    {
        $name = time() . rand(1000000, 9999999) . '.' . $file->getClientOriginalExtension();
        $file->move( public_path(). '/storage/images/' . $directory , $name);
        return $name;
    }

    // check if request has file with this name inside this request delete the $row file with that name
    public function checkFile($name , $request , $row){
        if($request->hasFile($name)){
            $path = parse_url($row->$name);
            if(file_exists(public_path($path['path']))){
                $this->deleteFile([$row->$name]);
            }
        }
    }
    public function deleteFile($files = [])
    {
        try{

        foreach($files as $file_name){
            $imageOriginalName = array_slice( explode('/' , $file_name) , -1)[0];
           // return $imageOriginalName;
            if ( $imageOriginalName !== 'default-user.jpg' && $imageOriginalName !== 'default.jpg'){
                $path = parse_url($file_name);
                if ($file_name && file_exists(public_path($path['path']))) {
                    unlink(public_path($path['path']));
                }
            }

        }
        }catch(Exception $e){}
    }

    public function uploadPdf($file, $directory = 'unknown'): string
    {
        $name = time() . rand(1000000, 9999999) . '.' . $file->getClientOriginalExtension();
        $file->move( public_path(). '/storage/pdf/' . $directory , $name);
        return $name;
    }

}
