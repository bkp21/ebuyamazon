<script>
    $(function () {
        $("select[name='priority'] option[value='<?=$ticket['priority'];?>']").attr('selected', 'selected');
        $("select[name='status'] option[value='<?=$ticket['status'];?>']").attr('selected', 'selected');
    });
</script>

<link rel="stylesheet" href="<?=base_url()?>template/back/css/ticket-style.css">
<link rel="stylesheet" href="<?=base_url()?>template/back/css/checkbox.css">
<link rel="stylesheet" href="<?=base_url()?>template/back/css/fileinput.min.css">

<div class="panel-body ticket-body">
    <div class="col-md-12 bg-lite-white padding-30-30">
        <div class="row">
            <div class="col-md-4">
                <!-- TICKET INFO -->
                <div class="ticket-info bg-white clearfix">
                    <!-- SECTION HEADER -->
                    <h3 class="section-header pull-left">Ticket Info</h3>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><?=translate('by')?></td>

                            <?php if ($ticket['claimed_by'] == 'user') : ?>
                                <td><?php echo "{$ticket->user['username']} {$ticket->user['surname']}"?></td>
                            <?php else: ?>
                                <td><?php echo "{$ticket->vendor['name']}"?></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td><?=translate('email')?></td>
                            <td><?=$ticket[$ticket['claimed_by']]['email']?></td>
                        </tr>
                        <tr>
                            <td><?=translate('problem_is')?></td>
                            <td>
                                <?php if ($ticket['claim'] == 1): ?>
                                    Haven't received it yet.
                                <?php elseif ($ticket['claim'] == 2): ?>
                                    Does not match the product.
                                <?php elseif ($ticket['claim'] == 3): ?>
                                    Haven't received payment yet.
                                <?php elseif ($ticket['claim'] == 4): ?>
                                    Need to cancel a transaction.
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?=translate('want')?></td>
                            <td>
                                <?php if ($ticket['want'] == 1): ?>
                                    Product
                                <?php elseif ($ticket['claim'] == 2): ?>
                                    Refund
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?=translate('product_id')?></td>
                            <td><?=$ticket['product']->product_id?></td>
                        </tr>
                        <tr>
                            <td><?=translate('product_name')?></td>
                            <td><?=$ticket['product']->title?></td>
                        </tr>
                        <tr>
                            <td><?=translate('status')?></td>
                            <td>
                                <?php if ($ticket['status'] == 1): ?>
                                    <?=translate('closed')?>
                                <?php elseif ($ticket['status'] == 2): ?>
                                    <?=translate('on_hold')?>
                                <?php elseif ($ticket['status'] == 3): ?>
                                    <?=translate('pending_vendor')?>
                                <?php elseif ($ticket['status'] == 4): ?>
                                    <?=translate('pending_buyer')?>
                                <?php elseif ($ticket['status'] == 5): ?>
                                    <?=translate('pending_support_manager')?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?=translate('created_on')?></td>
                            <td><?=get_date($ticket['created_at'])?></td>
                        </tr>
                        <tr>
                            <td><?=translate('last_update')?></td>
                            <td><?=get_date($ticket['updated_at'])?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>	<!-- TICKET INFO END -->
            </div>	<!-- END COL -->


            <div class="col-md-8">
                <!-- TESTE -->
                <div class="teste bg-white clearfix">
                    <!-- SECTION HEADER -->
                    <h3 class="section-header"><?=$ticket['title']?></h3>
                    <!-- TESTE AVATAR -->
                    <img class="pull-left" src="<?=base_url();?>template/back/img/ticket/teste-avatar.png" alt="teste avatar">

                    <span><?=$ticket['description']?></span>

                    <?php if ($ticket['filename']): ?>
                        <div class="col-md-6">
                            <div class="row">
                                <a class="admin-uploaded-file uploaded-file bg-white clearfix" href="#">
                                    <i class="fa fa-file-o pull-left" aria-hidden="true"></i>
                                    <span style="margin-top: 0" class="file-name">><?=basename($ticket['filename'])?></span>
                                    <span style="margin-top: 0"class="file-size"><?=get_filesize($ticket['filename'])?></span>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>	<!-- TESTE END -->

                <?php if ($ticket['replies']): ?>
                    <!-- TICKET REPLIES -->
                    <div class="ticket-replies bg-white clearfix">
                        <!-- SECTION HEADER -->
                        <h3 class="section-header"><?=translate('ticket_replies')?></h3>

                        <?php foreach ($ticket['replies'] as $reply): ?>
                            <?php if ($ticket['claimed_by'] != $reply['replied_by']): ?>
                                <!-- ADMIN UPLOADED FILE -->
                                <div class="admin-reply clearfix">
                                    <!-- ADMIN AVATAR -->
                                    <div class="admin-avatar pull-left">
                                        <img src="<?=base_url();?>template/back/img/ticket/admin-avatar.png" alt="admin avatar">
                                        <!-- ADMIN NAME -->
                                        <?php if ($reply['replied_by'] == 'user'): ?>
                                            <span class="admin-name text-center">
                                                <?="{$reply['user']['username']} {$reply['user']['surname']}"?>
                                            </span>
                                        <?php else: ?>
                                            <span class="admin-name text-center">
                                                <?php if ($reply['replied_by'] == 'admin'): ?>
                                                    <?=$reply['admin']['name']?>
                                                <?php else: ?>
                                                    <?=$reply['vendor']['name']?>
                                                <?php endif; ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>	<!-- ADMIN AVATAR END -->

                                    <!-- ADMIN REPLY TEXT -->
                                    <div class="admin-text">
                                        <!-- REPLY TEXT -->
                                        <span class="admin-text-reply">
                                            <?=$reply['message']?>

                                            <?php if ($reply['filename']) : ?>
                                                <!-- UPLOADED FILE -->
                                                <a class="admin-uploaded-file uploaded-file bg-white clearfix"
                                                   href="<?=base_url() . $reply['filename']?>" download>
                                                    <i class="fa fa-file-o pull-left" aria-hidden="true"></i>
                                                    <span class="file-name"><?=basename($reply['filename'])?></span>
                                                    <span class="file-size"><?=get_filesize($reply['filename'])?></span>
                                                </a>
                                            <?php endif; ?>
                                        </span>

                                        <!-- ADMIN REPLY DATE -->
                                        <span class="admin-reply-date pull-right"><?=get_date($reply['created_at'])?></span>
                                    </div>	<!-- ADMIN REPLY TEXT END -->
                                </div>	<!-- ADMIN UPLOADED FILE END -->
                            <?php else: ?>
                                <!-- GUEST UPLOADED FILE -->
                                <div class="guest-reply text-right clearfix">
                                    <!-- GUEST AVATAR -->
                                    <div class="guest-avatar pull-right">
                                        <img src="<?=base_url();?>template/back/img/ticket/guest-avatar.png" alt="guest avatar">
                                        <!-- GUEST NAME -->
                                        <?php if ($reply['replied_by'] == 'user'): ?>
                                            <span class="guest-name text-center">
                                                <?="{$reply['user']['username']} {$reply['user']['surname']}"?>
                                            </span>
                                        <?php else: ?>
                                            <span class="guest-name text-center">
                                                <?php if ($reply['replied_by'] == 'admin'): ?>
                                                    <?=$reply['admin']['name']?>
                                                <?php else: ?>
                                                    <?=$reply['vendor']['name']?>
                                                <?php endif; ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>	<!-- GUEST AVATAR END -->

                                    <!-- GUEST REPLY TEXT -->
                                    <div class="guest-text">
                                        <!-- REPLY TEXT -->
                                        <span class="guest-text-reply">
                                            <?=$reply['message']?>

                                            <?php if ($reply['filename']) : ?>
                                                <!-- UPLOADED FILE -->
                                                <a class="admin-uploaded-file uploaded-file bg-white clearfix" href="#">
                                                    <i class="fa fa-file-o pull-left" aria-hidden="true"></i>
                                                    <span class="file-name"><?=basename($reply['filename'])?></span>
                                                    <span class="file-size"><?=get_filesize($reply['filename'])?></span>
                                                </a>
                                            <?php endif; ?>
                                        </span>
                                        <!-- GUEST REPLY DATE -->
                                        <span class="guest-reply-date pull-left"><?=get_date($reply['created_at'])?></span>
                                    </div>	<!-- GUEST REPLY TEXT END -->
                                </div>	<!-- GUEST UPLOADED FILE END -->
                            <?php endif;?>
                        <?php endforeach; ?>

                    </div>	<!-- TICKET REPLIES END -->
                <?php endif; ?>

                <!-- NEW REPLY -->
                <div class="new-reply bg-white clearfix">
                    <!-- SECTION HEADER -->
                    <?php
                        echo form_open(base_url() . 'index.php/admin/tickets/reply/' . $ticket['ticket_id'], [
                            'class' => 'form-horizontal',
                            'method' => 'post',
                            'id' => 'ticket_reply'
                        ]);
                    ?>
                        <div class="col-md-12">
                            <h3 class="section-header"><?=translate('new_reply')?></h3>
                            <div class="form-group">
                                <textarea name="message" class="form-control required" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- FILE UPLOADER -->
                            <div class="clearfix">
                                <div class="form-group">
                                    <input id="file-upload" type="file" class="file" data-overwrite-initial="false" name="reply_file">
                                </div>
                            </div>	<!-- FILE UPLOADER END -->
                        </div> <!-- COL END -->

                        <div class="col-md-1"></div>

                        <div class="col-md-5">
                            <!-- SELECT OPTION AND SUBMIT -->
                            <div class="form-group">
                                <!-- CHANGE PRIORITY -->
                                <label for="priority"><?=translate('change_priority')?>:</label>
                                <select name="priority" onchange="(this.value)"
                                        class="demo-chosen-select required" data-placeholder="Choose a priority"
                                        tabindex="-1">
                                    <option value="1"><?=translate('low')?></option>
                                    <option value="2"><?=translate('medium')?></option>
                                    <option value="3"><?=translate('high')?></option>
                                </select>
                                <br>

                                <!-- CHANGE PRIORITY -->
                                <label for="priority"><?=translate('change_status')?>:</label>
                                <select name="status" onchange="(this.value)"
                                        class="demo-chosen-select required" data-placeholder="Choose a priority"
                                        tabindex="-1">
                                    <option value="1"><?=translate('closed')?></option>
                                    <option value="2"><?=translate('on_hold')?></option>
                                    <option value="3"><?=translate('pending_vendor')?></option>
                                    <option value="4"><?=translate('pending_buyer')?></option>
                                    <option value="5"><?=translate('pending_support_manager')?></option>
                                </select>

                                <div class="clearfix"></div>

                                <!-- SUBMIT BUTTON -->
                                <button class="submit btn btn-primary pull-right" type="button"
                                    onclick="back_button('hide');
                                        form_submit(
                                            'ticket_reply',
                                            '<?=translate('successfully_submitted!');?>'
                                        );"
                                ><?=translate('submit_reply')?></button>
                            </div>	<!-- FORM GROUP -->
                        </div>	<!-- COL END -->
                    </form>
                </div>	<!-- NEW REPLY END -->
            </div>	<!-- COL END -->
        </div>	<!-- ROW END -->
    </div>	<!-- COL END -->
</div>

<script src="<?=base_url()?>template/back/js/fileinput.js"></script>

<script>
    $('.demo-chosen-select').chosen();

    $("#file-upload").fileinput({
        allowedFileExtensions : ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'zip'],
        overwriteInitial: false,
        maxFileSize: 5120,
        maxFilesNum: 1,
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });

    $('button[title="Upload selected files"]').hide();
</script>
