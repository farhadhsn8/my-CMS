     <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست منو های اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> عنوان محصول</th>
                        <th>دسته بندی محصول</th>
                        <th> تصویر محصول </th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $listpro = listproadmin();
                            foreach($listpro as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[title]"; ?></td>
                            <td>
                                <?php
                                    $w = select_pro_cat($i['procat']);
                                    echo $w;
                                ?>  
                            </td>
                            <td><img width="60" src="<?php echo $i['img'];?>" alt=""></td>
                            <td><a href="dashbord.php?m=products&p=edit&id=<?php echo $i['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                            <td><a  href="dashbord.php?m=products&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
