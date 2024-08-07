/**
 * dashboard
 * @type {{charts(): void}}
 */
const Dashboard = {
    data: null,
    getCharts: function() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "/admin/charts",
                method: 'GET',
                success: function(response) {
                    if (response.success) {
                        this.data = response;
                        resolve(this.data);
                    } else {
                        reject('Request was not successful');
                    }
                }.bind(this),
                error: function(xhr) {
                    console.log(xhr);
                    reject('An error occurred');
                }
            });
        });
    },
    charts(data) {
        // Weekly sales chart
        const ctx1 = document.getElementById("Chart1").getContext("2d");
        console.log(data);
        const chart1 = new Chart(ctx1, {
            type: "line",
            data: {
                // Last 7 dates formated to day/month
                labels: data['labels'],
                datasets: [
                    {
                        label: "",
                        backgroundColor: "transparent",
                        borderColor: "#9B8338",
                        // Last 7 days sales data
                        data: data['label_data'],
                        pointBackgroundColor: "transparent",
                        pointHoverBackgroundColor: "#9B8338",
                        pointBorderColor: "transparent",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 5,
                        borderWidth: 5,
                        pointRadius: 8,
                        pointHoverRadius: 8,
                        cubicInterpolationMode: "monotone",
                    },
                ],
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            labelColor: function (context) {
                                return {
                                    backgroundColor: "#ffffff",
                                    color: "#171717"
                                };
                            },
                        },
                        intersect: false,
                        backgroundColor: "#f9f9f9",
                        title: {
                            fontFamily: "Plus Jakarta Sans",
                            color: "#8F92A1",
                            fontSize: 12,
                        },
                        body: {
                            fontFamily: "Plus Jakarta Sans",
                            color: "#171717",
                            fontStyle: "bold",
                            fontSize: 16,
                        },
                        multiKeyBackground: "transparent",
                        displayColors: false,
                        padding: {
                            x: 30,
                            y: 10,
                        },
                        bodyAlign: "center",
                        titleAlign: "center",
                        titleColor: "#8F92A1",
                        bodyColor: "#171717",
                        bodyFont: {
                            family: "Plus Jakarta Sans",
                            size: "16",
                            weight: "bold",
                        },
                    },
                    legend: {
                        display: false,
                    },
                },
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: false,
                },
                scales: {
                    y: {
                        grid: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 500,
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    },
                },
            },
        });
        // weekly sales chart end
    },
    init: async function() {
        try {
            const chartData = await this.getCharts();
            this.charts(chartData);
        } catch (error) {
            console.error('Failed to initialize charts:', error);
        }
    }
}

// show charts
Dashboard.init();
