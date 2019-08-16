<?php
    $sql = "SELECT * FROM tb_registered";
    $link = DBConnect();
    $regs = $link->query($sql);
    $count = $regs->num_rows;
    $link = null;
?>
<div class="container">
    
    <table class="table table-bordered table-hover col-8">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Identification</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
            foreach($regs as $data){ ?>
            <tr>
                <td><?=$data['n'];?></td>
                <td><?=$data['name'];?></td>
                <td><?=$data['identification'];?></td>
            </tr>
            
           <?php }
        ?>
        </tbody>
        <caption>We had <b><?=$count;?></b> subscriptions in this lottery</caption>
    </table>
</div>
