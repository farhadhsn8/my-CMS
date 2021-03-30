<?php
$id=$_GET['id'];

$result = detail_contact($id);

    
?>

<h1 class="pageLables">
    <?php
        echo "عنوان : ". $result['subject'];
    ?>
</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
            <?php
        echo "اسم"." : ".$result['name'];
    ?>
            </header>
            <div class="panel-body">
            <p>

                        <?php
                    echo $result['text'];
                ?>
            </p>  
            <h6><?php
        echo "ایمیل : ".$result['email'];
    ?></h6>  

            </div>
        </section>
    </div>
</div>
