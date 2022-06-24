// Dashboard 1 Morris-chart

// Morris.Area({
//         element: 'morris-area-chart',
//         data: [{
//             period: '2022-06-1',
//             QM_SCORE: 50,
//             PROSES: 80,
//             SIKAP: 20,
//             SOLUSI : 40
//         }, {
//             period: '2022-06-2',
//             QM_SCORE: 130,
//             PROSES: 100,
//             SIKAP: 80,
//             SOLUSI : 50
//         }, {
//             period: '2022-06-3',
//             QM_SCORE: 80,
//             PROSES: 60,
//             SIKAP: 70,
//             SOLUSI : 40
//         }, {
//             period: '2022-06-4',
//             QM_SCORE: 70,
//             PROSES: 200,
//             SIKAP: 140,
//             SOLUSI : 110
//         }, {
//             period: '2022-06-5',
//             QM_SCORE: 180,
//             PROSES: 150,
//             SIKAP: 140,
//             SOLUSI : 120
//         }, {
//             period: '2022-06-6',
//             QM_SCORE: 105,
//             PROSES: 100,
//             SIKAP: 80,
//             SOLUSI : 70
//         },
//          {
//             period: '2022-06-7',
//             QM_SCORE: 250,
//             PROSES: 150,
//             SIKAP: 200,
//             SOLUSI : 170
//         }],
//         xkey: 'period',
//         ykeys: ['QM_SCORE', 'PROSES', 'SIKAP', 'SOLUSI'],
//         labels: ['QM_SCORE', 'PROSES', 'SIKAP', 'SOLUSI'],
//         pointSize: 0,
//         fillOpacity: 0.99,
//         pointStrokeColors:['#006DF0', '#933EC5', '#65b12d', '#66FF0000'],
//         behaveLikeLine: true,
//         gridLineColor: '#e0e0e0',
//         lineWidth:0,
//         hideHover: 'auto',
//         lineColors: ['#006DF0', '#933EC5', '#65b12d', '#66FF0000'],
//         resize: true
        
//     });
	
Morris.Area({
        element: 'extra-area-chart',
        data: [{
            period: '2021-06',
            QM_SCORE: 50,
            PROSES: 80,
            SIKAP: 20,
            SOLUSI : 60
        }, {
            period: '2021-07',
            QM_SCORE: 130,
            PROSES: 100,
            SIKAP: 80,
            SOLUSI : 90
        }, {
            period: '2021-08',
            QM_SCORE: 80,
            PROSES: 60,
            SIKAP: 70,
            SOLUSI : 100
        }, {
            period: '2021-09',
            QM_SCORE: 70,
            PROSES: 200,
            SIKAP: 140,
            SOLUSI : 190
        }, {
            period: '2021-10',
            QM_SCORE: 180,
            PROSES: 150,
            SIKAP: 140,
            SOLUSI : 160
        }, {
            period: '2021-11',
            QM_SCORE: 105,
            PROSES: 100,
            SIKAP: 80,
            SOLUSI : 160
        },
         {
            period: '2021-12',
            QM_SCORE: 250,
            PROSES: 150,
            SIKAP: 200,
            SOLUSI : 170
        }],
        xkey: 'period',
        ykeys: ['QM_SCORE', 'PROSES', 'SIKAP', 'SOLUSI'],
        labels: ['QM_SCORE', 'PROSES', 'SIKAP', 'SOLUSI'],
        pointSize: 4,
        fillOpacity: 0,
        pointStrokeColors:['#006DF0', '#933EC5', '#65b12d', '#FF0000'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['#006DF0', '#933EC5', '#65b12d', '#FF0000'],
        resize: true
        
    });