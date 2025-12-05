 /* Chart JS */
    const labels = [
        "Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 7","Day 8",
        "Day 9","Day 10","Day 11","Day 12","Day 13","Day 14","Day 15","Day 16",
    ];

    const weights = [
        43.0, 43.0, null,null,null,null,null,null,
        null,null,null,null,null,null,null,null,
    ];

    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ကိုယ်အလေးချိန် (kg)',
                data: weights,
                backgroundColor: 'rgba(75,192,192,0.7)',
                borderColor: 'rgba(75,192,192,1)',
                borderWidth: 1,
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { suggestedMin: 35, suggestedMax: 60 }
            }
        }
    });

    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: ['မနက်စာ', 'နေ့လယ်စာ', 'ညစာ'],
            datasets: [{
                data: [1, 1, 1],
                backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    /* See more rows */
    let visibleCount = 5;
    const rows = document.querySelectorAll('.diet-log-row');
    const seeMoreBtn = document.getElementById('seeMoreBtn');

    seeMoreBtn.addEventListener('click', () => {
        const next = visibleCount + 5;
        for (let i = visibleCount; i < next && i < rows.length; i++) {
            rows[i].style.display = 'table-row';
        }
        visibleCount = next;
        if (visibleCount >= rows.length) {
            seeMoreBtn.style.display = 'none';
        }
    });

    if (rows.length <= 5) seeMoreBtn.style.display = 'none';