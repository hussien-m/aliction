            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">القائمة الرئيسية</li>
                            <li class="mm-active">
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="ti-home"></i>
                                    <span>الرئيسية</span>
                                </a>
                            </li>

                            <li class="mm-active">
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="dripicons-graph-bar"></i>
                                    <span>إحصائيات عامة</span>
                                </a>
                            </li>

                            <li class="menu-title">لوحة التحكم</li>
                            <li class="mm-active">
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-gear"></i>

                                    <span>الادارة</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.settings') }}"><i class="dripicons-gear"></i>اعدادات عامة</a></li>
                                    <li><a href="{{ route("admin.header.index") }}"><i class="dripicons-user-id"></i> الهيدر</a></li>
                                    <li><a href="{{ route("admin.client-service.index") }}"><i class="dripicons-user-group"></i> خدمة العملاء</a></li>
                                    <li><a href="{{ route("admin.helpdesk.index") }}"><i class="dripicons-user-group"></i>مركز المساعدة</a></li>
                                    <li><a href="{{ route("admin.faq.index") }}"><i class="dripicons-web"></i>الاسئلة الشائعة</a></li>
                                    <li><a href="{{ route("admin.price.index") }}"><i class="dripicons-vibrate"></i>الاسعار</a></li>
                                    <li><a href="{{ route("admin.extra.index") }}"><i class="dripicons-vibrate"></i>مميزات الخطط</a></li>
                                    <li><a href="{{ route("admin.features.index") }}"><i class="dripicons-star"></i>المميزات</a></li>
                                    <li><a href="{{ route("admin.say.index") }}"><i class="dripicons-star"></i>أقوال العملاء</a></li>
                                    <li><a href="{{ route("admin.page.index") }}"><i class="dripicons-document"></i>الصفحات</a></li>
                                </ul>
                            </li>
                            <li class="mm-active">
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-gear"></i>

                                    <span>المدونة</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.category.index') }}"><i class="dripicons-list"></i> التصنيفات </a></li>
                                    <li><a href="{{ route('admin.post.index') }}"><i class="dripicons-graph-bar"></i> المواضيع </a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
