<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container-fluid">
    <div class="alert alert-success">
        <strong>Automatic Printing</strong>
        <form class="form" method="post" action="<?= base_url('dashboard/exec');?>">
            <div class="form-inline">
                <input class="form-control" type="text" name="text">
                <button class="btn btn-warning" type="submit">Print</button>
            </form>
        </form>
    </div>
</div>