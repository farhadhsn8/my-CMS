<?php
ob_start();
session_start();
    function config(){
        $server="localhost";
        $user="root";
        $spassword="";
        $db="CMS";
        $connect=mysqli_connect($server,$user,$spassword,$db,'3308');
        mysqli_set_charset($connect,"utf8");
        mysqli_query($connect,"SET NAME 'utf8' ");
        return $connect;
    }

    function addmenu($data)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO menu_tbl (title , url , status , chid , sort) VALUES ('$data[title]' , '$data[url]','$data[status]','$data[parent]','$data[sort]')";
        mysqli_query($connection , $sql);
    }

    function submenu()
    {
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE chid='0'"; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result;      
    }

    function listmenuadmin()
    {
        $connection=config();
        $sql="SELECT * FROM menu_tbl "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    function selectparentmenu($chid)
    {
        $connection=config();
        $sql="SELECT * FROM menu_tbl where id=$chid";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res['title'];
    }

    function deletemenu($id)
    {
        $connection=config();
        $sql="DELETE FROM menu_tbl where id=$id";
        mysqli_query($connection,$sql);
    }


    function showedit($id)
    {
        $connection=config();
        $sql="SELECT * FROM menu_tbl where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

    function aditmenu($data,$id)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="UPDATE menu_tbl SET title='$data[title]' , url='$data[url]',chid='$data[parent]',sort='$data[sort]',status='$data[status]' WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

    function listmenudefault()
    {
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC"; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }


    function listsubmenudefault($id)
    {
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC"; //chid = 0 haman sargoruh haye menu hastand.
        $ro=mysqli_query($connection,$sql);
        if(mysqli_num_rows($ro) ) // khali nbashad
        {
            while($res=mysqli_fetch_assoc($ro))
            {
                $result[] = $res ; 
            }
            return $result; 
        }
        
    }




//----------------------product_cat-----------------------------------



    function addproductcat($data)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO product_cat (title ,status, sort) VALUES ('$data[title]' , '$data[status]' , '$data[sort]')";
        mysqli_query($connection , $sql);
    }


    function list_product_cat_admin()
    {
        $connection=config();
        $sql="SELECT * FROM product_cat "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }



    function delete_category($id)
    {
        $connection=config();
        $sql="DELETE FROM product_cat where id=$id";
        mysqli_query($connection,$sql);
    }

    function aditcategory($data,$id)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="UPDATE product_cat SET title='$data[title]' , sort='$data[sort]', status='$data[status]' WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

    function showedit_cat($id)
    {
        $connection=config();
        $sql="SELECT * FROM product_cat where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }
    //+++++++++++++++++++++++++++++++++++--------uploader---------++++++++++++++++++++++++++++++++++++
    function uploader($file , $dir , $folder , $name)
    {
        $file = $_FILES[$file];
        if(!file_exists($folder))
        {
            mkdir($dir.$folder);
        }
        

        $filename = $file['name'];
        $array = explode(".",$filename);  
        $ext= end($array);
        $newname= $name . "-" . rand() .".". $ext;
        $from = $file['tmp_name'];
        $to=$dir.$folder."/".$newname;
        echo $to ;
        move_uploaded_file($from,$to);
        return $to;
    }




    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    //----------------------products module ---------------------------------------------------------

    function addpro($data , $img)
    {
        // var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO product_tbl (title , textt , procat , img) VALUES ('$data[title]','$data[textt]','$data[procat]' , '$img')";
        mysqli_query($connection , $sql);
    }

    function procat()
    {
        $connection=config();
        $sql="SELECT * FROM product_cat "; // دسته ها را بر میگرداند
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result;      
    }

    function listproadmin()
    {
        $connection=config();
        $sql="SELECT * FROM product_tbl "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    function select_pro_cat($catid)
    {
        $connection=config();
        $sql="SELECT * FROM product_cat where id=$catid";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res['title'];
    }

    function deletepro($id)
    {
        $connection=config();
        $sql="DELETE FROM product_tbl where id=$id";
        mysqli_query($connection,$sql);
    }


    function show_edit_pro($id)
    {
        $connection=config();
        $sql="SELECT * FROM product_tbl where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

    function aditpro($data,$id ,$img,$oldpic)
    {
        //var_dump($data);die;
        if($_FILES[$img]['name'] != '') //aagr upload shode bood
        {
            $pic = uploader($img , "../images/products/" , $data['title'] , "product");
        }
        else
        {
            $pic = $oldpic;
        }
        $connection=config();
        $sql="UPDATE product_tbl SET title='$data[title]' , textt='$data[textt]',procat='$data[procat]' , img = '$pic' WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

    function listprodefault()
    {
        $connection=config();
        $sql="SELECT * FROM product_tbl"; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }


    //====================================================================
    //------------------------------news category---------------------------------------


    function addnewscat($data)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO news_cat (title) VALUES ('$data[title]')";
        mysqli_query($connection , $sql);
    }


    function list_news_cat_admin()
    {
        $connection=config();
        $sql="SELECT * FROM news_cat "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }


    

    


    function delete_newscategory($id)
    {
        $connection=config();
        $sql="DELETE FROM news_cat where id=$id";
        mysqli_query($connection,$sql);
    }

    function edit_news_category($data,$id)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="UPDATE news_cat SET title='$data[title]' WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

    function showedit_news_cat($id)
    {
        $connection=config();
        $sql="SELECT * FROM news_cat where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//------------------------------news-----------------------------------
function addnews($data , $img)
    {
        // var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO news_tbl (title , text , news_cat , img ,date) VALUES ('$data[title]','$data[text]','$data[news_cat]' , '$img' , '$data[date]')";
        mysqli_query($connection , $sql);
    }

    function newscat()
    {
        $connection=config();
        $sql="SELECT * FROM news_cat "; // دسته ها را بر میگرداند
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result;      
    }

    function listnewsadmin()
    {
        $connection=config();
        $sql="SELECT * FROM news_tbl "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    function select_news_cat($catid)
    {
        $connection=config();
        $sql="SELECT * FROM news_cat where id=$catid";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res['title'];
    }

    function deletenews($id)
    {
        $connection=config();
        $sql="DELETE FROM news_tbl where id=$id";
        mysqli_query($connection,$sql);
    }


    function show_edit_news($id)
    {
        $connection=config();
        $sql="SELECT * FROM news_tbl where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

    function aditnews($data,$id ,$img,$oldpic)
    {
        //var_dump($data);die;
        if($_FILES[$img]['name'] != '') //aagr upload shode bood
        {
            $pic = uploader($img , "../images/news/" , $data['title'] , "news");
        }
        else
        {
            $pic = $oldpic;
        }
        $connection=config();
        $sql="UPDATE news_tbl SET title='$data[title]' , text='$data[text]',news_cat='$data[news_cat]' , img = '$pic' ,date='$data[date]' WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

    function listnewsdefault()
    {
        $connection=config();
        $sql="SELECT * FROM news_tbl"; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    //----------------------------contact---------------------------------

    function addcontact($data )
    {
        // var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO contacts_tbl (name , subject ,text , email) VALUES ('$data[name]','$data[subject]','$data[text]','$data[email]')";
        mysqli_query($connection , $sql);
    }

    

    function listcontactadmin()
    {
        $connection=config();
        $sql="SELECT * FROM contacts_tbl "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    // function select_news_cat($catid)
    // {
    //     $connection=config();
    //     $sql="SELECT * FROM news_cat where id=$catid";
    //     $row=mysqli_query($connection,$sql);
    //     $res=mysqli_fetch_assoc($row);
    //     return $res['title'];
    // }

    function deletecomment($id)
    {
        $connection=config();
        $sql="DELETE FROM contacts_tbl where id=$id";
        mysqli_query($connection,$sql);
    }


    function detail_contact($id)
    {
        $connection=config();
        $sql="SELECT * FROM contacts_tbl where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

   //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   //-----------------------------settings---------------------------------
   


function settings()
{
    $connection=config();
    $sql="SELECT * FROM settings_tbl "; 
    $row=mysqli_query($connection,$sql);//while nmikhad chon setting 1 row darad
    $res=mysqli_fetch_assoc($row);
    return $res; 
}

function editsettings($data)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="UPDATE settings_tbl SET title='$data[title]' , description='$data[description]'";//chid='$data[parent]',sort='$data[sort]',status='$data[status]' WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

 //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//-----------------------------widgets---------------------------------
   
function add_widget($data , $img)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO widget_tbl (title , img , text) VALUES ('$data[title]' , '$img','$data[text]')";
        mysqli_query($connection , $sql);
    }

    // function newscat()
    // {
    //     $connection=config();
    //     $sql="SELECT * FROM news_cat "; // دسته ها را بر میگرداند
    //     $row=mysqli_query($connection,$sql);
    //     while($res=mysqli_fetch_assoc($row))
    //     {
    //         $result[] = $res ; 
    //     }
    //     return $result;      
    // }

    function list_widget_admin()
    {
        $connection=config();
        $sql="SELECT * FROM widget_tbl "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    // function select_news_cat($catid)
    // {
    //     $connection=config();
    //     $sql="SELECT * FROM news_cat where id=$catid";
    //     $row=mysqli_query($connection,$sql);
    //     $res=mysqli_fetch_assoc($row);
    //     return $res['title'];
    // }

    function deletewidget($id)
    {
        $connection=config();
        $sql="DELETE FROM widget_tbl where id=$id";
        mysqli_query($connection,$sql);
    }


    function show_edit_widget($id)
    {
        $connection=config();
        $sql="SELECT * FROM widget_tbl where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

    function edit_widget($data,$id ,$img,$oldpic)
    {
        //var_dump($data);die;
        if($_FILES[$img]['name'] != '') //aagr upload shode bood
        {
            $pic = uploader($img , "../images/widget/" , $data['title'] , "widget");
        }
        else
        {
            $pic = $oldpic;
        }
        $connection=config();
        $sql="UPDATE widget_tbl SET title='$data[title]' , text='$data[text]' , img = '$pic'  WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

    function list_widget_default()
    {
        $connection=config();
        $sql="SELECT * FROM widget_tbl"; 
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    //+++++++++++++++++++++++++++++++++++++++++++++++++++
    //---------------------page--------------------------

    function add_page($data )
    {
        // var_dump($data);die;
        $connection=config();
        $sql="INSERT INTO page_tbl (title , keywords , description , body ) VALUES ('$data[title]','$data[keywords]','$data[description]' ,  '$data[body]')";
        mysqli_query($connection , $sql);
    }

    // function newscat()
    // {
    //     $connection=config();
    //     $sql="SELECT * FROM news_cat "; // دسته ها را بر میگرداند
    //     $row=mysqli_query($connection,$sql);
    //     while($res=mysqli_fetch_assoc($row))
    //     {
    //         $result[] = $res ; 
    //     }
    //     return $result;      
    // }

    function list_page_admin()
    {
        $connection=config();
        $sql="SELECT * FROM page_tbl "; //chid = 0 haman sargoruh haye menu hastand.
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row))
        {
            $result[] = $res ; 
        }
        return $result; 
    }

    // function select_news_cat($catid)
    // {
    //     $connection=config();
    //     $sql="SELECT * FROM news_cat where id=$catid";
    //     $row=mysqli_query($connection,$sql);
    //     $res=mysqli_fetch_assoc($row);
    //     return $res['title'];
    // }

    function delete_page($id)
    {
        $connection=config();
        $sql="DELETE FROM page_tbl where id=$id";
        mysqli_query($connection,$sql);
    }


    function show_edit_page($id)
    {
        $connection=config();
        $sql="SELECT * FROM page_tbl where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

    function edit_page($data,$id)
    {
        //var_dump($data);die;
        $connection=config();
        $sql="UPDATE page_tbl SET title='$data[title]' , description='$data[description]' ,keywords='$data[keywords]' ,body='$data[body]' WHERE id='$id' ";//chid='$data[parent]',sort='$data[sort]',status='$data[status]' WHERE id='$id' ";
        mysqli_query($connection , $sql);
    }

    function detail_page($id)
    {
        $connection=config();
        $sql="SELECT * FROM page_tbl where id=$id";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }

   //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   //---------------------uploadder------------------------------

   function add_file($data , $img)
   {
       // var_dump($data);die;
       $connection=config();
       $sql="INSERT INTO uploader_tbl (title ,img) VALUES ('$data[title]', '$img' )";
       mysqli_query($connection , $sql);
   }


   function file_uploader($file)
   {
       $file = $_FILES[$file];
       
       

       $filename = $file['name'];
       $array = explode(".",$filename);  
       $ext= end($array);
       $newname= "file" . "-" . rand() .".". $ext;
       $from = $file['tmp_name'];
       $to="uploader/upload"."/".$newname;
       echo $to ;
       move_uploaded_file($from,$to);
       return $to;
   }
//    function newscat()
//    {
//        $connection=config();
//        $sql="SELECT * FROM news_cat "; // دسته ها را بر میگرداند
//        $row=mysqli_query($connection,$sql);
//        while($res=mysqli_fetch_assoc($row))
//        {
//            $result[] = $res ; 
//        }
//        return $result;      
//    }

   function list_file()
   {
       $connection=config();
       $sql="SELECT * FROM uploader_tbl "; //chid = 0 haman sargoruh haye menu hastand.
       $row=mysqli_query($connection,$sql);
       while($res=mysqli_fetch_assoc($row))
       {
           $result[] = $res ; 
       }
       return $result; 
   }

//    function select_news_cat($catid)
//    {
//        $connection=config();
//        $sql="SELECT * FROM news_cat where id=$catid";
//        $row=mysqli_query($connection,$sql);
//        $res=mysqli_fetch_assoc($row);
//        return $res['title'];
//    }

   function delete_file($id)
   {
       $connection=config();
       $sql="DELETE FROM uploader_tbl where id=$id";
       mysqli_query($connection,$sql);
   }


//    function show_edit_news($id)
//    {
//        $connection=config();
//        $sql="SELECT * FROM news_tbl where id=$id";
//        $row=mysqli_query($connection,$sql);
//        $res=mysqli_fetch_assoc($row);
//        return $res;
//    }

//    function aditnews($data,$id ,$img,$oldpic)
//    {
//        //var_dump($data);die;
//        if($_FILES[$img]['name'] != '') //aagr upload shode bood
//        {
//            $pic = uploader($img , "../images/news/" , $data['title'] , "news");
//        }
//        else
//        {
//            $pic = $oldpic;
//        }
//        $connection=config();
//        $sql="UPDATE news_tbl SET title='$data[title]' , text='$data[text]',news_cat='$data[news_cat]' , img = '$pic' ,date='$data[date]' WHERE id='$id' ";
//        mysqli_query($connection , $sql);
//    }

//    function listnewsdefault()
//    {
//        $connection=config();
//        $sql="SELECT * FROM news_tbl"; //chid = 0 haman sargoruh haye menu hastand.
//        $row=mysqli_query($connection,$sql);
//        while($res=mysqli_fetch_assoc($row))
//        {
//            $result[] = $res ; 
//        }
//        return $result; 
//    }






