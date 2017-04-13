<div class="panel-body items-display">
    <div class="charts-container">
        <div id="chartContainer-visitors" style="height: 300px; width: 100%;"></div>
        <div id="chartContainer-mostbuy" style="height: 300px; width: 100%;"></div>
    </div>
    <script type="text/javascript">
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer-visitors",
                {

                    title:{
                        text: "Number of visitors - last 10 days"
                    },
                    data: [
                        {
                            type: "line",

                            dataPoints: [
                                { x: new Date(2017, 2, 25), y: 450 },
                                { x: new Date(2017, 2, 26), y: 414 },
                                { x: new Date(2017, 2, 27), y: 520 },
                                { x: new Date(2017, 2, 28), y: 460 },
                                { x: new Date(2017, 3, 1), y: 450 },
                                { x: new Date(2017, 3, 2), y: 500 },
                                { x: new Date(2017, 3, 3), y: 480 },
                                { x: new Date(2017, 3, 4), y: 480 },
                                { x: new Date(2017, 3, 5), y: 410 },
                                { x: new Date(2017, 3, 6), y: 500 },
                                { x: new Date(2017, 3, 7), y: 480 },
                                { x: new Date(2017, 3, 8), y: 510 }
                            ]
                        }
                    ]
                });

            var chart2 = new CanvasJS.Chart("chartContainer-mostbuy",
                {
                    title: {
                        text: "Most bought"
                    },
                    axisY: {
                        stripLines: [{
                            showOnTop: true
                        }
                        ]
                    },

                    data: [
                        {
                            type: "bar",

                            dataPoints: [
                                { x: 10, y: 5017, label: "Xiaomi Mi5" },
                                { x: 20, y: 2000, label: "Drone i8H RC Quadcopter" },
                                { x: 30, y: 1682, label: "Xiaomi Mi5" },
                                { x: 40, y: 4580, label: "Drone i8H RC Quadcopter" },
                                { x: 50, y: 2350, label: "Xiaomi Mi5" },
                                { x: 60, y: 5200, label: "Drone i8H RC Quadcopter" },
                                { x: 70, y: 3800, label: "Xiaomi Mi5" },
                                { x: 80, y: 7571, label: "Drone i8H RC Quadcopter" }
                            ]
                        }
                    ]
                });

            chart.render();
            chart2.render();
        }
    </script>

</div>