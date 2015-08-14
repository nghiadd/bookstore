<?php
function upload($field_name = 'image')
{
	/*
    * Khai báo đường dẫn chưa file upload
    */
    $path       = '../../store';
    
    /*
    * Những dạng file được phép upload
    */
    $allowed = array('jpg', 'png', 'gif');
    
    /*
    * Nhận tên file tạm được lưu trong thư mục tạm (tmp) thông qua biến $_FILES
    */
    $filename   = $_FILES[$field_name]['tmp_name'];

    /*
    * Nhận tên file thực thông qua biến $_FILES
    */
    $realname   = $_FILES[$field_name]['name'];

    /*
    * Tách tên file để lấy phần mở rộng và tên
    */
    $explode_realname   = explode('.', $realname);
    $extension          = array_pop($explode_realname);
    $name               = implode('.', $explode_realname);
    
    /*
    * Kiểm tra dạng file có được phép upload hay không?
    */
    if(!in_array($extension, $allowed))
    {
        return false;
    }
    
    /*
    * Kiểm tra kích thước file
    */
	/*
    if($_FILES[$field_name]['size'] > 1000000)
    {
        return false;
    }
    */
    /*
    * Kiểm tra sự tồn tại của file trên thư mục upload
    */
    $i = 1;
    $newname = $realname;
    while($i <= 100)
    {
        if(is_file($path.'/'.$newname))
        {
            $newname = $name.$i.'-'.time().'.'.$extension;
            $i++;
        }
        else
        {
            break;
        }
    }
    
    $realname = $newname;
    
    /*
    * Thực hiện di chuyển file trong tmp qua thư mục upload do mình khai báo
    */
    move_uploaded_file($filename, $path.'/'.$realname);
	
	/*
	* Trả về tên file được upload
	*/
    return $realname;
}
?>