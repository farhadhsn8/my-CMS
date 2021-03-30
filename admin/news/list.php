     <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست اخبار اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> عنوان خبر</th>
                        <th>دسته بندی خبر</th>
                        <th> تصویر محصول </th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $listnews = listnewsadmin();
                            foreach($listnews as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[title]"; ?></td>
                            <td>
                                <?php
                                    $w = select_news_cat($i['news_cat']);
                                    echo $w;
                                ?>  
                            </td>
                            <td><img width="60" src="<?php echo $i['img'];?>" alt=""></td>
                            <td><a href="dashbord.php?m=news&p=edit&id=<?php echo $i['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                            <td><a  href="dashbord.php?m=news&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
