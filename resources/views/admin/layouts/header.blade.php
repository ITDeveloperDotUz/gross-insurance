<!--header start-->
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="{{ url('/') }}" class="logo">
            G<span>ROSS</span>
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-success">8</span>
                </a>
                <ul class="dropdown-menu extended tasks-bar">
                    <li>
                        <p class="">У вас 8 новых задач</p>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Исправить договор 1101/97/0555</h5>
                                    <p>Запрос не прикреплен</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Исправить договор 1101/97/0557</h5>
                                    <p>Другой полис</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Исправить договор 1101/97/0565</h5>
                                    <p>Некорректный запрос</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Исправить договор 1101/97/0572</h5>
                                    <p>Неверный период</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                            </div>
                        </a>
                    </li>

                    <li class="external">
                        <a href="#">Посмотреть все</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-important">2</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p class="red">У вас 2 новых сообщений</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="images/3.png"></span>
                            <span class="subject">
                                <span class="from">Имя Фамилия</span>
                                <span class="time">5 мин назад</span>
                                </span>
                            <span class="message">
                                Создайте акт.
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="images/1.png"></span>
                            <span class="subject">
                                <span class="from">Имя Фамилия</span>
                                <span class="time">1 час назад</span>
                                </span>
                            <span class="message">
                                    Отправьте отчет.
                            </span>
                        </a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="#">See all messages</a>--}}
                    {{--</li>--}}
                </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning"></span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>Новостей пока нет</p>
                    </li>
                    {{--<li>--}}
                        {{--<div class="alert alert-info clearfix">--}}
                            {{--<span class="alert-icon"><i class="fa fa-bolt"></i></span>--}}
                            {{--<div class="noti-info">--}}
                                {{--<a href="#"> Server #1 overloaded.</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="alert alert-danger clearfix">--}}
                            {{--<span class="alert-icon"><i class="fa fa-bolt"></i></span>--}}
                            {{--<div class="noti-info">--}}
                                {{--<a href="#"> Server #2 overloaded.</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="alert alert-success clearfix">--}}
                            {{--<span class="alert-icon"><i class="fa fa-bolt"></i></span>--}}
                            {{--<div class="noti-info">--}}
                                {{--<a href="#"> Server #3 overloaded.</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                </ul>
            </li>
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Поиск">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown user-area">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="username">{{ __('user.'.Auth::user()->role) .' '. Auth::user()->name }}</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase"></i>Профиль</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> Настройкир</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-key"></i> {{ __('auth.logout') }}</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--header end-->

