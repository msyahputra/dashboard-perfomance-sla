Highcharts.chart('pencapaian', {

    chart: {
        styledMode: true
    },

    title: {
        text: 'AGENT VOICE dibawah Pencapaian 90%'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'site', 'sliced'],
        data: [
            ['BOGIE DWI CAHYO', 89, 'Bandung'],
            ['ELANSYAH SURYA RASIDI', 71.5, 'Bandung'],
            ['EGI RUSTIAMAN', 106.4, 'Bandung'],
            ['GIN GIN GUNTARA', 144.0, 'Bandung'],
            ['REGGY BAYU PRATAMA', 176.0, 'Bandung'],
            ['REZA FAHLEVI', 135.6, 'Bandung'],
            ['SAMUEL SETYAJI', 148.5, 'Bandung'],
			['ADE AYU KOMALASARI', 89, 'Semarang'],
            ['ADE YULIANI', 71.5, 'Semarang'],
            ['A.D. DIAN KURNIAWAN', 106.4, 'Semarang'],
            ['GHINA RIZQI ISLAMIATI', 129.2, 'Semarang'],
            ['ALIM MARTA PRIHATIN', 144.0, 'Semarang'],
            ['GREGORIUS FRANJAYA SETYA DEWA', 176.0, 'Semarang'],
            ['TIA INDRIANI', 135.6, 'Semarang'],
            ['KHAIRUL WIRANTO', 148.5, 'Semarang'],
			['KUKUH YULIAN SANTOSO', 148.5, 'Semarang'],
			['ROBERT SETYAWAN', 148.5, 'Semarang'],
			['OCHA BINAR ALIEFFI', 148.5, 'Semarang']
        ],
        showInLegend: true
    }]
});