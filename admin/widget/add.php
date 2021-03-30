<?php
    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
       
           //addmenu 1 func hast ke dar file functions taArif shode ast.
           $folder = "widget-".rand();
        $img = uploader('img' , "../images/widget/" , $folder,"widget");
        add_widget($data , $img);
    }
?>

<h1 class="pageLables">افزودن ویجت جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن ویجت جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان ویجت</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان ویجت را وارد کنید">
                    </div>

                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات ویجت </label>
                        <textarea name="frm[text]" id="editor1" class="form-control ckeditor" rows="8" placeholder="متن ویجت ... "></textarea>
                        
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
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
