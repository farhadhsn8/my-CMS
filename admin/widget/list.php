     <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست  ویجت ها اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> عنوان ویجت</th>
                        <th> تصویر ویجت </th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $list = list_widget_admin();
                            foreach($list as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[title]"; ?></td>
                            
                            <td><img width="60" src="<?php echo $i['img'];?>" alt=""></td>
                            <td><a href="dashbord.php?m=widget&p=edit&id=<?php echo $i['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                            <td><a  href="dashbord.php?m=widget&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
