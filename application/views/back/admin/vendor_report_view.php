<link rel="stylesheet" href="<?=base_url()?>template/back/css/ticket-style.css">

<div class="panel-body ticket-body">
    <div class="col-md-12 bg-lite-white padding-30-30">
        <div class="row">
            <div class="col-md-4">
                <!-- TICKET INFO -->
                <div class="ticket-info bg-white clearfix">
                    <!-- SECTION HEADER -->
                    <h3 class="section-header pull-left"><?=translate('report_info')?></h3>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><?=translate('by')?></td>
                            <td>
                                <?="{$report->user['username']} {$report->user['surname']}"?>
                            </td>
                        </tr>
                        <tr>
                            <td><?=translate('created_on')?></td>
                            <td><?=get_date($report['created_at'])?></td>
                        </tr>
                        <tr>
                            <td><?=translate('last_update')?></td>
                            <td><?=get_date($report['updated_at'])?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>	<!-- TICKET INFO END -->
            </div>	<!-- END COL -->


            <div class="col-md-8">
                <!-- TESTE -->
                <div class="teste bg-white clearfix">
                    <!-- SECTION HEADER -->
                    <h3 class="section-header"><?=$report['title']?></h3>
                    <!-- TESTE AVATAR -->
                    <img class="pull-left" src="<?=base_url();?>template/back/img/ticket/teste-avatar.png" alt="teste avatar">

                    <span><?=$report['description']?></span>
                </div>	<!-- TESTE END -->
            </div>	<!-- COL END -->
        </div>	<!-- ROW END -->
    </div>	<!-- COL END -->
</div>
