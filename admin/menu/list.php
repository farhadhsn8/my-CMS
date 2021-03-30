    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست منو های اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> عنوان منو</th>
                        <th> عنوان سرگروه</th>
                        <th> لینک منو</th>
                        <th> ترتیب</th>
                        <th> وضعیت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $listmenu = listmenuadmin();
                            foreach($listmenu as $i )
                            {

                            
                        ?>
                        <tr>
                            <td><?php echo "$i[title]"; ?></td>
                            <td>
                                <?php
                                if(!$i['chid']) {echo "سرگروه ندارد";}
                                $j = selectparentmenu($i['chid']); echo " $j"; ?>  
                            </td>
                            <td><?php echo "$i[url]"; ?></td>
                            <td><?php echo "$i[sort]"; ?></td>
                            <td>
                                <?php if(!$i['status']){echo "<span class='btn btn-danger'> غیر فعال</span>";}
                                      else{echo "<span class='btn btn-success'> فعال</span>";}  ?>
                            </td>
                            <td><a href="dashbord.php?m=menu&p=edit&id=<?php echo $i['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                            <td><a  href="dashbord.php?m=menu&p=del&id=<?php echo $i['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                           <?php
                           }
                           ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
