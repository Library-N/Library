let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
// Random data for chart (weekly for January)
const labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
const data = {
    labels: labels,
    datasets: [{
        label: 'Total Books',
        data: [1200, 1210, 1225, 1240],
        backgroundColor: '#FF6384',
    }, {
        label: 'Total Members',
        data: [300, 310, 315, 320],
        backgroundColor: '#36A2EB',
    }, {
        label: 'Active Loans',
        data: [40, 45, 50, 55],
        backgroundColor: '#FFCE56',
    }, {
        label: 'Late Returns',
        data: [5, 3, 7, 2],
        backgroundColor: '#4BC0C0',
    }]
};

// Calculate percentage increase from last month
const lastMonthData = {
    totalBooks: 1200,
    totalMembers: 310,
    activeLoans: 50,
    lateReturns: 5
};

// Update cards with percentage increase
document.addEventListener('DOMContentLoaded', function () {
    const totalBooksElement = document.getElementById('totalBooksCard');
    const totalBooksIncrease = ((data.datasets[0].data[data.datasets[0].data.length - 1] - lastMonthData
        .totalBooks) / lastMonthData.totalBooks * 100).toFixed(1);
    totalBooksElement.lastElementChild.textContent = `${totalBooksIncrease}% from last month`;

    const totalMembersElement = document.getElementById('totalMembersCard');
    const totalMembersIncrease = ((data.datasets[1].data[data.datasets[1].data.length - 1] -
        lastMonthData.totalMembers) / lastMonthData.totalMembers * 100).toFixed(1);
    totalMembersElement.lastElementChild.textContent = `${totalMembersIncrease}% from last month`;

    const activeLoansElement = document.getElementById('activeLoansCard');
    const activeLoansIncrease = ((data.datasets[2].data[data.datasets[2].data.length - 1] -
        lastMonthData.activeLoans) / lastMonthData.activeLoans * 100).toFixed(1);
    activeLoansElement.lastElementChild.textContent = `${activeLoansIncrease}% from last month`;

    const lateReturnsElement = document.getElementById('lateReturnsCard');
    const lateReturnsIncrease = ((data.datasets[3].data[data.datasets[3].data.length - 1] -
        lastMonthData.lateReturns) / lastMonthData.lateReturns * 100).toFixed(1);
    lateReturnsElement.lastElementChild.textContent = `${lateReturnsIncrease}% from last month`;
});

// Chart configuration
const config = {
    type: 'bar',
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Library Statistics Overview (January)'
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Week'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Count'
                }
            }
        }
    }
};

// Render chart
window.onload = function () {
    var ctx = document.getElementById('januaryOverviewChart').getContext('2d');
    new Chart(ctx, config);
};
