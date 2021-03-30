<?php
$id=$_GET['id'];

$result = show_edit_page($id);

    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
        edit_page($data , $id);
        
        header("location:dashbord.php?m=page&p=list");

    }
?>

<h1 class="pageLables">افزودن صفحه جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن صفحه جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان صفحه</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات کلیدی صفحه</label>
                        <input type="text" name="frm[keywords]" class="form-control" value="<?php echo $result['keywords']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> توضیحات صفحه</label>
                        <input type="text" name="frm[description]" class="form-control" value="<?php echo $result['description']; ?>">
                    </div>

                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">محتوای صفحه </label>
                        <textarea name="frm[body]" class="form-control ckeditor" rows="12" ><?php echo $result['body']; ?></textarea>
                    </div>
                    <br>
                    
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
