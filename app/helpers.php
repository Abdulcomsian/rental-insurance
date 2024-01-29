<?php
// saving candidate profile picture 
function saveFile($filePath, $newFile, $oldFile = null,$fileName=null)
{
    try {
       
        $public_path = public_path($filePath);
        File::isDirectory($public_path) or File::makeDirectory($public_path, 0777, true, true);
        if ($oldFile) {
            @unlink($oldFile);
        }
        if($fileName)
        {
            $filename = $fileName . '.' .$newFile->getClientOriginalExtension();
        }else{
            $filename = time() . rand(10000, 99999) . '.' .$newFile->getClientOriginalExtension();
        }
        $newFile->move($public_path, $filename);
        return $filePath . $filename;
    } catch (\Exception $exception) {
        return null;
    }
}

// service file  path
function  serviceFilePath($serviceId = null)
{
    if ($serviceId) {
        $path = 'uploads/services/'.$serviceId.'/';
    } else {
        $path  = 'uploads/services/'; 
    }
    return $path;
}
