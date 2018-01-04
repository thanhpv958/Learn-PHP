<?php
    class UploadFile {

        private $fileName;
        private $fileTmpName;
        private $fileSize;
        private $fileError;
        private $fileExtension;
        private $fileUploadDir;

        public function __construct()
        {
            $fileUpload = $_FILES['fileupload'];
            $this->fileName = $fileUpload['name'];
            $this->fileTmpName  = $fileUpload['tmp_name'];
            $this->fileSize = $fileUpload['size'];

            $this->fileExtension = pathinfo($this->fileName, PATHINFO_EXTENSION);
        }

        public function setExt($arrayExt)
        {
            if(in_array(strtolower($this->fileExtension), $arrayExt) == false)
            {
                $this->fileError[] = 'Phan mo rong ko hop le';
            }
        }

        public function setSize($min, $max)
        {
            if($this->fileSize < $min || $this->fileSize > $max)
            {
                $this->fileError[] = 'Kich thuoc ko phu hop ';
            }
        }

        public function setUploadDir($dir)
        {
            if(!isset($dir))
            {
                $this->fileError[] = "$dir ko ton tai";
            }
            else
            {
                $this->fileUploadDir = $dir;
            }
        }

        public function uploadFile()
        {
            if(count($this->fileError) >0)
            {
                echo '<pre>';
                print_r($this->fileError);
                echo '</pre>';
            }
            else
            {
                $dir = $this->fileUploadDir . time() .$this->fileName;
                move_uploaded_file($this->fileTmpName, $dir );
            }
        }
       
    
    }