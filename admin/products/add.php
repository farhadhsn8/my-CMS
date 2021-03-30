<?php
    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
       
           //addmenu 1 func hast ke dar file functions taArif shode ast.
           $folder = "pro-".rand();
        $img = uploader('img' , "../images/products/" , $folder,"product");
        addpro($data , $img);
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
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات محصول </label>
                        <textarea name="frm[textt]" class="form-control ckeditor" rows="8" placeholder="متن توضیحات ... "></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">
                            <option value="0">دسته جدید  </option>
                            <?php
                                $procat = procat();
                                foreach($procat as $i)
                                {
                                    echo "<option value='$i[id]'> $i[title]  </option>"; //har zir menu dar field chid bayad id parent ra bgirad.
                                }
                            ?>
                        </select>
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
