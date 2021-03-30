<?php
$id=$_GET['id'];

$result = show_edit_widget($id);

    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
        //addmenu($data);   //addmenu 1 func hast ke dar file functions taArif shode ast.
        $oldpic =   $result['img']; ;
        edit_widget($data,$id,'img', $oldpic);
        header("location:dashbord.php?m=widget&p=list");

    }
?>

<h1 class="pageLables">افزودن  ویجت جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن  ویجت جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان  ویجت</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $result['title']; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات  ویجت </label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="8"><?php echo $result['text']; ?></textarea>
                    </div>
                    
                    <br>
                   
                    <div class="form-group">
                        <label for="exampleInputFile"> ویرایش تصویر</label>
                        <br>
                        <br>
                        <input type="file" name="img" id="exampleInputFile3">
                        <img src="<?php echo $result['img']; ?>" width="60">
                    </div>
                    <br>
                    
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
