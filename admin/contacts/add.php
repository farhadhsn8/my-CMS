<?php
    if(isset($_POST['btn']))
    {
        $data = $_POST['frm'];
       
           //addmenu 1 func hast ke dar file functions taArif shode ast.
           $folder = "news-".rand();
        $img = uploader('img' , "../images/news/" , $folder,"news");
        addnews($data , $img);
    }
?>

<h1 class="pageLables">افزودن خبر جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان خبر را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">تاریخ خبر</label>
                        <input type="date" name="frm[date]" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات خبر </label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="8" placeholder="متن خبر ... "></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[news_cat]">
                            
                            <?php
                                $newscat = newscat();
                                foreach($newscat as $i)
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
