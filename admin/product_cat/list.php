    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست دسته بندی محصولات
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> عنوان دسته بندی</th>
                        <th> ترتیب</th>
                        <th> وضعیت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $listproduct = list_product_cat_admin();
                            foreach($listproduct as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[title]"; ?></td>
                            
                           
                            <td><?php echo "$i[sort]"; ?></td>
                            <td>
                                <?php if(!$i['status']){echo "<span class='btn btn-danger'> غیر فعال</span>";}
                                      else{echo "<span class='btn btn-success'> فعال</span>";}  ?>
                            </td>
                            <td><a href="dashbord.php?m=product_cat&p=edit&id=<?php echo $i['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                            <td><a  href="dashbord.php?m=product_cat&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
