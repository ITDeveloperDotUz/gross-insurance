@extends('admin.layouts.app')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-2">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-eye"> </i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Договора</h4>
                            <h3>142</h3>
                            <p>Не завершено 15</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-usd" ></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Поступлении</h4>
                            <h3>150</h3>
                            <p>265 000 000 сум</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-3">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-usd"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Полисы</h4>
                            <h3>145</h3>
                            <p>Бракован 7</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-4">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Клиенты</h4>
                            <h3>129</h3>
                            <p>Other hand, we denounce</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //market-->
            <div class="neu-grid-parent col-fr-1">
                <div class="neu-grid-child-1fr">
                    <div class="agile-last-grid">
                        <!--notification start-->
                        <header class="panel-heading">
                            Notification
                        </header>
                        <div class="notify-w3ls">
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                        <li class="pull-right notification-time">1 min ago</li>
                                    </ul>
                                    <p>
                                        Urgent meeting for next proposal
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                                        <li class="pull-right notification-time">7 Hours Ago</li>
                                    </ul>
                                    <p>
                                        Very cool photo jack
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-success ">
                                <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender">You have 5 message unread</li>
                                        <li class="pull-right notification-time">1 min ago</li>
                                    </ul>
                                    <p>
                                        <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-warning ">
                                <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                                        <li class="pull-right notification-time">5 Days Ago</li>
                                    </ul>
                                    <p>
                                        Next 5 July Thursday is the last day
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                        <li class="pull-right notification-time">1 min ago</li>
                                    </ul>
                                    <p>
                                        Urgent meeting for next proposal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--notification end-->
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- tasks -->
            <div class="neu-grid-parent col-fr-2">
                <div class="neu-grid-child">
                    <div class="agile-last-grid">
                        <div class="area-grids-heading">
                            <h3>Monthly</h3>
                        </div>
                        <div id="graph7"></div>
                        <script>
                            // This crosses a DST boundary in the UK.
                            Morris.Area({
                                element: 'graph7',
                                data: [
                                    {x: '2013-03-30 22:00:00', y: 3, z: 3},
                                    {x: '2013-03-31 00:00:00', y: 2, z: 0},
                                    {x: '2013-03-31 02:00:00', y: 0, z: 2},
                                    {x: '2013-03-31 04:00:00', y: 4, z: 4}
                                ],
                                xkey: 'x',
                                ykeys: ['y', 'z'],
                                labels: ['Y', 'Z']
                            });
                        </script>

                    </div>
                </div>
                <div class="neu-grid-child">
                    <div class="agile-last-grid">
                        <div class="area-grids-heading">
                            <h3>Daily</h3>
                        </div>
                        <div id="graph8"></div>
                        <script>
                            /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                            var day_data = [
                                {"period": "2016-10-01", "licensed": 3407, "sorned": 660},
                                {"period": "2016-09-30", "licensed": 3351, "sorned": 629},
                                {"period": "2016-09-29", "licensed": 3269, "sorned": 618},
                                {"period": "2016-09-20", "licensed": 3246, "sorned": 661},
                                {"period": "2016-09-19", "licensed": 3257, "sorned": 667},
                                {"period": "2016-09-18", "licensed": 3248, "sorned": 627},
                                {"period": "2016-09-17", "licensed": 3171, "sorned": 660},
                                {"period": "2016-09-16", "licensed": 3171, "sorned": 676},
                                {"period": "2016-09-15", "licensed": 3201, "sorned": 656},
                                {"period": "2016-09-10", "licensed": 3215, "sorned": 622}
                            ];
                            Morris.Bar({
                                element: 'graph8',
                                data: day_data,
                                xkey: 'period',
                                ykeys: ['licensed', 'sorned'],
                                labels: ['Licensed', 'SORN'],
                                xLabelAngle: 60
                            });
                        </script>
                    </div>
                </div>
                <div class="neu-grid-child">
                    <div class="agile-last-grid">
                        <div class="area-grids-heading">
                            <h3>Yearly</h3>
                        </div>
                        <div id="graph9"></div>
                        <script>
                            var day_data = [
                                {"elapsed": "I", "value": 34},
                                {"elapsed": "II", "value": 24},
                                {"elapsed": "III", "value": 3},
                                {"elapsed": "IV", "value": 12},
                                {"elapsed": "V", "value": 13},
                                {"elapsed": "VI", "value": 22},
                                {"elapsed": "VII", "value": 5},
                                {"elapsed": "VIII", "value": 26},
                                {"elapsed": "IX", "value": 12},
                                {"elapsed": "X", "value": 19}
                            ];
                            Morris.Line({
                                element: 'graph9',
                                data: day_data,
                                xkey: 'elapsed',
                                ykeys: ['value'],
                                labels: ['value'],
                                parseTime: false
                            });
                        </script>

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //tasks -->
            <div class="agileits-w3layouts-stats">
                <div class="col-md-4 stats-info widget">
                    <div class="stats-info-agileits">
                        <div class="stats-title">
                            <h4 class="title">Browser Stats</h4>
                        </div>
                        <div class="stats-body">
                            <ul class="list-unstyled">
                                <li>GoogleChrome <span class="pull-right">85%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar green" style="width:85%;"></div>
                                    </div>
                                </li>
                                <li>Firefox <span class="pull-right">35%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar yellow" style="width:35%;"></div>
                                    </div>
                                </li>
                                <li>Internet Explorer <span class="pull-right">78%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar red" style="width:78%;"></div>
                                    </div>
                                </li>
                                <li>Safari <span class="pull-right">50%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar blue" style="width:50%;"></div>
                                    </div>
                                </li>
                                <li>Opera <span class="pull-right">80%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar light-blue" style="width:80%;"></div>
                                    </div>
                                </li>
                                <li class="last">Others <span class="pull-right">60%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar orange" style="width:60%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>PRODUCT</th>
                                <th>STATUS</th>
                                <th>PROGRESS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-success">In progress</span></td>
                                <td><h5>85% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Aliquam</td>
                                <td><span class="label label-warning">New</span></td>
                                <td><h5>35% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-danger">Overdue</span></td>
                                <td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Aliquam</td>
                                <td><span class="label label-info">Out of stock</span></td>
                                <td><h5>100% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-success">In progress</span></td>
                                <td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Aliquam</td>
                                <td><span class="label label-warning">New</span></td>
                                <td><h5>38% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2019 NeuwDesign Admin <a href="https://www.newsite.uz">Разработчик - NewSite.uz</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
@endsection
