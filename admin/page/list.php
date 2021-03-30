<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست  ویجت ها اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> عنوان صفحه</th>
                        <th>  کلمات کلیدی </th>
                        <th>آدرس صفحه</th>
                        <th>توصیف صفحه</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $list = list_page_admin();
                            foreach($list as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[title]"; ?></td>
                            <td><?php echo "$i[keywords]"; ?></td>
                            <td>/myprojects/myCMS/page.php?id=<?php echo $i['id']; ?></td>
                            <td><?php echo "$i[description]"; ?></td>
                            <td><a href="dashbord.php?m=page&p=edit&id=<?php echo $i['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                            <td><a  href="dashbord.php?m=page&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>