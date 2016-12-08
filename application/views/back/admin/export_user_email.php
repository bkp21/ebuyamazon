<?php
    echo form_open(base_url() . 'index.php/admin/email_management/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'enctype' => 'multipart/form-data'
    ));
?>
<?php
    $user_list = array();
    foreach ($users_email as $row) {
            $user_list[] = $row['email'];
    }
    $user_list = join(',',$user_list);

?>
    <h4 class="modal-title text-center padd-all"><?php echo translate('export_user_email_addresses');?> </h4>
	<hr style="margin: 10px 0 !important;">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="demo-hor-1">
                        <?php echo translate('please_choose_export_format');?>
                    </label>                
                    <div class="col-sm-6">
                        <select name="export_format" class="form-control" onChange="email_formate(this.value)">
                            <option value="comma_seprated" >Comma-separated emails</option>
                            <option value="per_line">Email address per line</option>
                            <option value="semicolon_seprated">Semicolon-separated emails</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-4 control-label" for="demo-hor-1">
                            <?php echo translate('email');?>
                        </label>
                    <div class="col-sm-6">
                        <textarea id="DES" rows="10" cols="30"  class="form-control"><?php echo $user_list; ?></textarea>
                        <input id="temp_email" type="hidden" value="<?php echo $user_list; ?>"/>
                    </div>
                </div>

            </div>
        </form>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });
    });
    function email_formate(value) {
        var emails = document.getElementById('temp_email').value;
        if (value == "comma_seprated") {
            document.getElementById('DES').value = emails;
        }
        if (value == "per_line") {
            var tmp_eml = emails.replace(new RegExp(",", 'g'), "\n");
            document.getElementById('DES').value = tmp_eml;
        }
        if (value == "semicolon_seprated") {
            var tmp_eml = emails.replace(new RegExp(",", 'g'), ";");
            document.getElementById('DES').value = tmp_eml;
        }
    }
</script>