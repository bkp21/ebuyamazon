$(function() {
    var chart;

    $('#salesbyorder a').on('click', function(e) {
        e.preventDefault();

        $(this).parent().parent().find('li').removeClass('active');

        $(this).parent().addClass('active');

        $.ajax({
            type: 'get',
            url: deliveryStatusUrl + '/' + $(this).attr('href'),
            dataType: 'json',
            success: function(data) {
                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'salesbyorder-chart',
                        type: 'pie',
                        width: 460
                    },
                    credits: {
                        enabled: false
                    },
                    exporting: {
                        enabled: false
                    },
                    title: {
                        text: ''
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'Net Percentage',
                        data: data['delivery_status']
                    }]
                });
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });

    });

    $('#salesbyorder .active a').trigger('click');

    $('#sales a').on('click', function(e) {
        e.preventDefault();

        $(this).parent().parent().find('li').removeClass('active');

        $(this).parent().addClass('active');

        $.ajax({
            type: 'get',
            url: orderVsSalesUrl + '/' + $(this).attr('href'),
            dataType: 'json',
            success: function(json) {
                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'sales-chart',
                        type: 'line',
                        width:460
                    },
                    title: {
                        text: 'No. of completed orders & sales'
                    },

                    credits: {
                        enabled: false
                    },
                    exporting: {
                        enabled: false
                    },
                    xAxis: {
                        categories: json['xaxis'],
                        crosshair: true
                    },
                    yAxis: [{ // Primary yAxis
                        labels: {
                            //format: '{value}°C',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        },
                        title: {
                            text: 'Orders',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        }
                    }, { // Secondary yAxis
                        title: {
                            text: 'Sales',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        labels: {
                            //format: '{value} mm',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        opposite: true
                    }],
                    tooltip: {
                        shared: true
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'left',
                        x: 80,
                        verticalAlign: 'top',
                        y: 40,
                        floating: true,
                        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                    },
                    series: [
                        json['order'], json['sales']
                    ]
                });
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });

    });

    $('#sales .active a').trigger('click');

    $('#transaction a').on('click', function(e) {
        e.preventDefault();

        $(this).parent().parent().find('li').removeClass('active');

        $(this).parent().addClass('active');

        $.ajax({
            type: 'get',
            url: salesAnalyticsUrl + '/' + $(this).attr('href'),
            dataType: 'json',
            success: function(json) {

                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'transaction-chart',
                        type: 'column',
                        width:950
                    },
                    credits: {
                        enabled: false
                    },
                    exporting: {
                        enabled: false
                    },
                    title: {
                        text: 'Sales by Month'
                    },
                    xAxis: {
                        categories: json['xaxis']
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Amount'
                        },
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [json['order']]
                });
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });

    });

    $('#transaction .active a').trigger('click');
});
