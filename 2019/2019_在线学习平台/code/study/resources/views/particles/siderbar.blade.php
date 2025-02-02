<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ $user->avatar  }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $user->name  }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>{{ $user->sign  }} </a>
            </div>
        </div>
        <!-- search form -->
        {{--//搜索框--}}
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">主菜单</li>
            <!-- <li class=" treeview {{active_class(if_route('stu.home'))}} ">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>仪表盘</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{active_class(if_route('stu.home'))}}"><a href="/home"><i class="fa fa-circle-o"></i> 首页</a></li>
                </ul>
            </li> -->
            <li class="treeview {{active_class(if_route('classes.index')|| if_route('classes.create') || if_route('classes.join') || if_route('classes.my') )}}">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>班级系统</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ active_class(if_route('classes.index')) }}"><a href="{{route('classes.index')}}"><i class="fa fa-circle-o"></i> 全部 班级</a></li>
                    <li class="{{ active_class(if_route('classes.create')) }}"><a href="{{route('classes.create')}}"><i class="fa fa-circle-o"></i> 创建 班级</a></li>
                    <li class="{{ active_class(if_route('classes.join')) }}"><a href="{{route('classes.join')}}"><i class="fa fa-circle-o"></i> 我的班级</a></li>
                    <li class="{{ active_class(if_route('classes.my')) }}"><a href="{{route('classes.my')}}"><i class="fa fa-circle-o"></i> 我创建的班级</a></li>
                </ul>
            </li>
            <li class="treeview {{active_class(if_route('users.index')  || if_route('users.edit') || if_route('users.show') ||if_route('users.search'))}}">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>用户管理系统</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{active_class(if_route('users.search'))}}"><a href="{{route('users.search')}}"><i class="fa fa-circle-o"></i> 用户搜索</a></li>
                    <li class="{{active_class(if_route('users.index'))}}"><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> 我的信息</a></li>
                    <li class="{{active_class(if_route('users.edit'))}}"><a href="{{route('users.edit',$user->id)}}"><i class="fa fa-circle-o"></i> 信息编辑</a></li>
                </ul>
            </li>
            <li class="treeview {{active_class(if_route('messages.index'))}}">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>消息系统</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=" {{active_class(if_route('messages.index'))}}"><a href="{{route('messages.index')}}"><i class="fa fa-circle-o"></i> 消息通知</a></li>
                </ul>
            </li>
            <li class="treeview  {{active_class(if_route('files.index') || if_route('classfile.index'))}}">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>文件管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=" {{active_class(if_route('classfile.index'))}}"><a href="{{route('classfile.index')}}"><i class="fa fa-circle-o"></i> 班级文件</a></li>
                    <li class=" {{active_class(if_route('files.index'))}}"><a href="{{route('files.index')}}"><i class="fa fa-circle-o"></i> 我的文件</a></li>
                </ul>
            </li>
            @role(config('code.role'))
            <li class="treeview {{active_class(if_route('classes.verify') || if_route('classes.getagree')||if_route('classes.getdisagree'))  }}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>班级审批</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{active_class(if_route('classes.verify'))  }}"><a href="{{route('classes.verify')}}"><i class="fa fa-circle-o"></i> 班级审批</a></li>
                    <li class="{{active_class(if_route('classes.getagree'))  }}"><a href="{{route('classes.getagree')}}"><i class="fa fa-circle-o"></i> 通过的班级</a></li>
                    <li class="{{active_class(if_route('classes.getdisagree'))  }}"><a href="{{route('classes.getdisagree')}}"><i class="fa fa-circle-o"></i> 未通过的班级</a></li>
                </ul>
            </li>
            @endrole
            <li class="header">LABELS</li>
            @role(config('code.role'))
            <li><a href="/admin/users"><i class="fa fa-circle-o text-danger"></i> <span>后台管理</span></a></li>
            @endrole
            <!-- <li class="@yield('error')"><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告</span></a></li> -->
            <li><a href="/home"><i class="fa fa-circle-o text-aqua"></i> <span>返回首页</span></a></li>
        </ul>
    </section>
</aside>
