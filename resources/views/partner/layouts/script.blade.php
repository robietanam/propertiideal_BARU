<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    const data = {
        labels: [
            'Food & beverages',
            'Groceries',
            'Gaming',
            'Trip & holiday',
        ],
        datasets: [{
            label: 'Total Expenses',
            data: [148, 150, 130, 170],
            backgroundColor: [
                '#3B82F6',
                '#10B981',
                '#6366F1',
                '#F59E0B'
            ]
        }]
    };

    const config = {
        type: 'polarArea',
        data: data,
        options: {
            plugins: {
                legend: {
                    position: 'bottom',
                },
            }
        }
    };

    const chart = new Chart(ctx, config);
</script>
