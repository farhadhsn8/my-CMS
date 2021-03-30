<?php
$setting = settings();

    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
        editsettings($data);
        //addmenu($data);   //addmenu 1 func hast ke dar file functions taArif shode ast.
        header("location:dashbord.php?m=setting&p=edit");

    }
?>

<h1 class="pageLables">ویرایش تنظیمات </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
             ویرایش تنظیمات سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان </label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان  را وارد کنید" value="<?php echo $setting['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control"  value="<?php echo $setting['description']; ?>">
                    </div>
                    
                    
                    
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
