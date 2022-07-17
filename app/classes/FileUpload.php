<?php


namespace App\classes;


class FileUpload
{
    public $name;
    public $email;
    public $phone;
    public $image;
    public $imageName;
    public $imageDirectory;
    public $file;
    public $filePath;
    public $fileContentData;
    public $array;
    public $array1;
    public $array2;

    public function __construct($post = null, $file = null)
    {
        if ($post)
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];
        }

        if ($file)
        {
            $this->image = $file['image'];
        }
    }

    public function saveStudentData()
    {
        $this->imageDirectory = $this->uploadImage();
        $this->writeFile();
        return 'Data saved successfully!';
    }

    public function uploadImage()
    {
        $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }

    public function writeFile()
    {
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContentData = "$this->name, $this->email, $this->phone, $this->imageDirectory$";
        fwrite($this->file, $this->fileContentData);
        fclose($this->file);
    }

    public function getStudentInfo()
    {
        $this->filePath = 'db/db.txt';
        $this->fileContentData = file_get_contents($this->filePath);
        $this->array = explode('$', $this->fileContentData);
        foreach ($this->array as $key => $value)
        {
            $this->array1 = explode(',', $value);

            if ($this->array1[0])
            {
                $this->array2[$key]['name'] = $this->array1[0];
                $this->array2[$key]['email'] = $this->array1[1];
                $this->array2[$key]['phone'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }
        }
        return $this->array2;
    }
}