     <div class="row">
        <div class="col-lg-12">
            <section class="panel">آ
                <header class="panel-heading">
                                لیست فایل ها اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> عنوان فایل </th>
                        
                        <th> تصویر محصول </th>
                        <th> آدرس تصویر </th>
                        
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $list = list_file();
                            foreach($list as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[title]"; ?></td>
                            
                            <td><img width="60" src="<?php echo $i['img'];?>" alt=""></td>
                            <td>admin/<?php echo $i['img'];?></td>
                            <td><a  href="dashbord.php?m=uploader&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
