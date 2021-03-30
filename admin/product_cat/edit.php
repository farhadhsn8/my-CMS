<?php
$id=$_GET['id'];

$result = showedit_cat($id);

    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
        //addmenu($data);   //addmenu 1 func hast ke dar file functions taArif shode ast.
        aditcategory($data,$id);
        header("location:dashbord.php?m=product_cat&p=list");

    }
?>

<h1 class="pageLables">ویرایش دسته بندی </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
             ویرایش دسته بندی <?php echo $result['title']; ?>
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['title']; ?>">
                    </div>
                    
                    
                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" <?php  
                            if($result['status']){echo "checked";}  ?>>فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="0"<?php  
                            if(!$result['status']){echo "checked";}  ?>> غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]" class="form-control" placeholder="ترتیب نمایش" value="<?php echo $result['sort']; ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
