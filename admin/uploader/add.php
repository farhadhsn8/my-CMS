<?php
    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
       
           //addmenu 1 func hast ke dar file functions taArif shode ast.
           $folder = "news-".rand();
        $img = file_uploader('img');
        add_file($data , $img);
    }
?>

<h1 class="pageLables">افزودن خبر جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن فایل جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان خبر را وارد کنید">
                    </div>

                    
                    <br>
                   
                    <div class="form-group">
                        <label for="exampleInputFile">انتخاب و افزودن تصویر</label>
                        <br>
                        <br>
                        <input type="file" name="img" id="exampleInputFile3">
                    </div>
                    <br>
                    
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
