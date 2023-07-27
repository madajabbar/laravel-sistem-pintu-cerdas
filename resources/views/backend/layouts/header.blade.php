<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="header-top-left">
                <div class="avatar avatar-md2">
                    <a href="{{route('dashboard.index')}}" class="h3 text-primary">
                        <img src="{{ 'logo.png' }}" alt="Logo" />
                    </a>
                    <div class="text-primary">
                        <h3>Sipunggur</h3>
                    </div>
                </div>
            </div>
            <div class="header-top-right">
                <div class="dropdown">
                    <a href="#" id="topbarUserDropdown"
                        class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2">
                            <img src="{{ 'dist/assets/images/faces/1.jpg' }}" alt="Avatar" />
                        </div>
                        <div class="text">
                            <h6 class="user-dropdown-name">
                                John Ducky
                            </h6>
                            <p class="user-dropdown-status text-sm text-muted">
                                Member
                            </p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                        <li>
                            <a class="dropdown-item" href="#">My Account</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-login.html">Logout</a>
                        </li>
                    </ul>
                </div>

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <ul>
                <li class="menu-item">
                    <a href="{{route('dashboard.index')}}" class="menu-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-item has-sub">
                    <a href="{{route('node.index')}}" class="menu-link">
                        <i class="bi bi-stack"></i>
                        <span>Node</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item">
                                    <a href="component-alert.html" class="submenu-link">Alert</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-badge.html" class="submenu-link">Badge</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-breadcrumb.html" class="submenu-link">Breadcrumb</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-button.html" class="submenu-link">Button</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-card.html" class="submenu-link">Card</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-carousel.html" class="submenu-link">Carousel</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-collapse.html" class="submenu-link">Collapse</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-dropdown.html" class="submenu-link">Dropdown</a>
                                </li>
                            </ul>

                            <ul class="submenu-group">
                                <li class="submenu-item">
                                    <a href="component-list-group.html" class="submenu-link">List
                                        Group</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-modal.html" class="submenu-link">Modal</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-navs.html" class="submenu-link">Navs</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-pagination.html" class="submenu-link">Pagination</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-progress.html" class="submenu-link">Progress</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-spinner.html" class="submenu-link">Spinner</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="component-tooltip.html" class="submenu-link">Tooltip</a>
                                </li>

                                <li class="submenu-item has-sub">
                                    <a href="#" class="submenu-link">Extra Components</a>

                                    <!-- 3 Level Submenu -->
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item">
                                            <a href="extra-component-avatar.html" class="subsubmenu-link">Avatar</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="extra-component-sweetalert.html" class="subsubmenu-link">Sweet
                                                Alert</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="extra-component-toastify.html"
                                                class="subsubmenu-link">Toastify</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="extra-component-rating.html" class="subsubmenu-link">Rating</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="extra-component-divider.html" class="subsubmenu-link">Divider</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu-item active has-sub">
                    <a href="{{route('sensor.index')}}" class="menu-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Sensor</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item">
                                    <a href="layout-default.html" class="submenu-link">Default Layout</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="layout-vertical-1-column.html" class="submenu-link">1
                                        Column</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="layout-vertical-navbar.html" class="submenu-link">Vertical
                                        Navbar</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="layout-rtl.html" class="submenu-link">RTL Layout</a>
                                </li>

                                <li class="submenu-item active">
                                    <a href="layout-horizontal.html" class="submenu-link">Horizontal
                                        Menu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu-item has-sub">
                    <a href="{{route('relay.index')}}" class="menu-link">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Relay</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item has-sub">
                                    <a href="#" class="submenu-link">Form Elements</a>

                                    <!-- 3 Level Submenu -->
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item">
                                            <a href="form-element-input.html" class="subsubmenu-link">Input</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-element-input-group.html" class="subsubmenu-link">Input
                                                Group</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-element-select.html" class="subsubmenu-link">Select</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-element-radio.html" class="subsubmenu-link">Radio</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-element-checkbox.html" class="subsubmenu-link">Checkbox</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-element-textarea.html" class="subsubmenu-link">Textarea</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="submenu-item">
                                    <a href="form-layout.html" class="submenu-link">Form Layout</a>
                                </li>

                                <li class="submenu-item has-sub">
                                    <a href="#" class="submenu-link">Form Validation</a>

                                    <!-- 3 Level Submenu -->
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item">
                                            <a href="form-validation-parsley.html" class="subsubmenu-link">Parsley</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="submenu-item has-sub">
                                    <a href="#" class="submenu-link">Form Editor</a>

                                    <!-- 3 Level Submenu -->
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item">
                                            <a href="form-editor-quill.html" class="subsubmenu-link">Quill</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-editor-ckeditor.html" class="subsubmenu-link">CKEditor</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-editor-summernote.html"
                                                class="subsubmenu-link">Summernote</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="form-editor-tinymce.html" class="subsubmenu-link">TinyMCE</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <i class="bi bi-table"></i>
                        <span>User</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item">
                                    <a href="table.html" class="submenu-link">Table</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="table-datatable.html" class="submenu-link">Datatable</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="table-datatable-jquery.html" class="submenu-link">Datatable
                                        (jQuery)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu-item has-sub">
                    <a href="{{route('log.index')}}" class="menu-link">
                        <i class="bi bi-plus-square-fill"></i>
                        <span>Log</span>
                    </a>
                    <div class="submenu">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item has-sub">
                                    <a href="#" class="submenu-link">Widgets</a>

                                    <!-- 3 Level Submenu -->
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item">
                                            <a href="ui-widgets-chatbox.html" class="subsubmenu-link">Chatbox</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="ui-widgets-pricing.html" class="subsubmenu-link">Pricing</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="ui-widgets-todolist.html" class="subsubmenu-link">To-do List</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="submenu-item has-sub">
                                    <a href="#" class="submenu-link">Icons</a>

                                    <!-- 3 Level Submenu -->
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item">
                                            <a href="ui-icons-bootstrap-icons.html" class="subsubmenu-link">Bootstrap
                                                Icons
                                            </a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="ui-icons-fontawesome.html"
                                                class="subsubmenu-link">Fontawesome</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="ui-icons-dripicons.html" class="subsubmenu-link">Dripicons</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="submenu-item has-sub">
                                    <a href="#" class="submenu-link">Charts</a>

                                    <!-- 3 Level Submenu -->
                                    <ul class="subsubmenu">
                                        <li class="subsubmenu-item">
                                            <a href="ui-chart-chartjs.html" class="subsubmenu-link">ChartJS</a>
                                        </li>

                                        <li class="subsubmenu-item">
                                            <a href="ui-chart-apexcharts.html" class="subsubmenu-link">Apexcharts</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
