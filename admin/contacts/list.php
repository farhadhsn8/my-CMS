     <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست اخبار اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> نام </th>
                        <th>ایمیل  </th>
                        <th>  موضوع </th>
                        <th>نمایش </th>
                        <th>مشاهده پیغام</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $list = listcontactadmin();
                            foreach($list as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[name]"; ?></td>
                            <td><?php echo "$i[email]"; ?></td>
                            <td><?php echo "$i[subject]"; ?></td>
                            
                                                    
                            <td><a  href="dashbord.php?m=contacts&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                            <td><a  href="dashbord.php?m=contacts&p=detail&id=<?php echo $i['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-show "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
