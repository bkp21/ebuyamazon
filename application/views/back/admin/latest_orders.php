<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('manage_latest_orders');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <!-- LIST -->
                <div class="tab-pane fade active in" id="list">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = '<?= base_url(); ?>'
    var user_type = 'admin';
    var module = 'latest_orders';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
</script>
