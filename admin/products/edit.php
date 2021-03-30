<?php
$id=$_GET['id'];

$result = show_edit_pro($id);

    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
        //addmenu($data);   //addmenu 1 func hast ke dar file functions taArif shode ast.
        $oldpic =   $result['img']; ;
        aditpro($data,$id,'img', $oldpic);
        header("location:dashbord.php?m=products&p=list");

    }
?>

<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات محصول </label>
                        <textarea name="frm[textt]" class="form-control ckeditor" rows="8"><?php echo $result['textt']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">
                            <option value="0">دسته جدید  </option>
                            <?php
                                $procat = procat();
                                foreach($procat as $i)
                                {
                                    echo "<option value='$i[id]' ";
                                    if($result['procat']==$i['id'])
                                    {
                                        echo "selected";
                                    }
                                    echo "> $i[title]  </option>"; //har zir menu dar field chid bayad id parent ra bgirad.
                                }
                            ?>
                        </select>
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
