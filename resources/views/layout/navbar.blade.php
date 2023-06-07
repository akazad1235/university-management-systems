@section('navbar1')
    {{-- Double Top Nav --}}
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav"
        style="display: none;">
        <div class="w-100">
            {{-- Top nav --}}
            <div class="d-flex flex-between-center">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="/">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                            width="40" /><span class="font-sans-serif">AMPSD</span></div>
                </a>

                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item px-2">
                        <div class="theme-control-toggle fa-icon-wait"><input
                                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                type="checkbox" data-theme-control="theme" value="dark" /><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                                    class="fas fa-sun fs-0"></span></label><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                                    class="fas fa-moon fs-0"></span></label>
                        </div>
                    </li>

                    <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="{{ asset('assets/img/team/3-thumb.png') }}"
                                    alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item" href="pages/user/profile.html">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <hr class="my-2 d-none d-lg-block" />
            {{-- under top nav --}}
            <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
                <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            id="dashboards">Dashboard</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                            aria-labelledby="dashboards">
                            <div class="bg-white dark__bg-1000 rounded-3 py-2">
                                <a class="dropdown-item link-600 fw-medium" href="/">Project</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- Vertical Nav --}}
    <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
        <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
                document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
        </script>
        <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
                <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="/">
                <div class="d-flex align-items-center py-3"><img class="me-2"
                        src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                        width="40" /><span class="font-sans-serif">AMPSD</span></div>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
                <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                    <li class="nav-item">
                        <!-- parent pages-->
                        <a class="nav-link dropdown-indicator" href="#dashboard" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fas fa-chart-pie"></span></span><span
                                    class="nav-link-text ps-1">Dashboard</span></div>
                        </a>
                        <ul class="nav collapse show" id="dashboard">
                            <li class="nav-item"><a class="nav-link active" href="/">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-dark">Project</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <!-- parent pages-->
                        <a class="nav-link dropdown-indicator" href="#dashboard" role="button"
                           data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fas fa-chart-pie"></span></span><span
                                    class="nav-link-text ps-1">UI Management</span></div>
                        </a>
                        <ul class="nav collapse show" id="dashboard">
                            <li class="nav-item"><a class="nav-link active" href="/">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-dark">Login</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Only top navbar --}}
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="/">
            <div class="d-flex align-items-center"><img class="me-2"
                    src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                    width="40" /><span class="font-sans-serif">AMPSD</span></div>
        </a>
        <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        id="dashboards">Dashboard</a>
                    <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                        aria-labelledby="dashboards">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                                href="/">Project</a>

                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item px-2">
                <div class="theme-control-toggle fa-icon-wait"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                        data-theme-control="theme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                            class="fas fa-sun fs-0"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                            class="fas fa-moon fs-0"></span></label></div>
            </li>

            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{ asset('assets/img/team/3-thumb.png') }}" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                    aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item" href="pages/user/profile.html">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
@endsection


@section('navbar2')
    {{-- Vertical top navbar --}}
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="/">
            <div class="d-flex align-items-center"><img class="me-2"
                    src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                    width="40" /><span class="font-sans-serif">AMPSD</span></div>
        </a>

        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item px-2">
                <div class="demo">
                    <div>
                        <table class="lang">
                            <tr>
                                <td class="tdlang" onclick="langChange('en')">
                                    <span id="en" class="button_lang {{ session()->get('locale') == 'en' ? 'current_lang' : '' }}">EN</span>
                                </td>
                                {{-- <td class="tdlang"><span id="cn" class="button_lang">中文</span></td> --}}
                                <td class="tdlang {{ session()->get('locale') !== 'en' ? 'current_lang' : '' }}" onclick="langChange('jpn')"><span id="jp" class="button_lang">日本語</span></td>
                            </tr>
                        </table>
                        {{-- <div class="translation english" id="translate">
                            The text here will change
                        </div> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item px-2">
                <div class="theme-control-toggle fa-icon-wait"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                        data-theme-control="theme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                            class="fas fa-sun fs-0"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                            class="fas fa-moon fs-0"></span></label>
                </div>
            </li>


            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{ asset('assets/img/team/3-thumb.png') }}" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                    aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">

                        <a class="dropdown-item" href="pages/user/profile.html">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    {{-- Combo top Nav --}}
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
        data-move-target="#navbarVerticalNav" data-navbar-top="combo">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="/">
            <div class="d-flex align-items-center"><img class="me-2"
                    src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">AMPSD</span></div>
        </a>
        <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        id="dashboards">Dashboard</a>
                    <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                        aria-labelledby="dashboards">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2">
                            <a class="dropdown-item link-600 fw-medium" href="/">Project</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item px-2">
                <div class="theme-control-toggle fa-icon-wait"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                        data-theme-control="theme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                            class="fas fa-sun fs-0"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                            class="fas fa-moon fs-0"></span></label>
                </div>
            </li>

            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{ asset('assets/img/team/3-thumb.png') }}" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                    aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item" href="pages/user/profile.html">Profile </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var navbarPosition = localStorage.getItem('navbarPosition');
        var navbarVertical = document.querySelector('.navbar-vertical');
        var navbarTopVertical = document.querySelector('.content .navbar-top');
        var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
        var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
        var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

        if (localStorage.getItem('navbarPosition') === 'double-top') {
            document.documentElement.classList.toggle('double-top-nav-layout');
        }

        if (navbarPosition === 'top') {
            navbarTop.removeAttribute('style');
            navbarTopVertical.remove(navbarTopVertical);
            navbarVertical.remove(navbarVertical);
            navbarTopCombo.remove(navbarTopCombo);
            navbarDoubleTop.remove(navbarDoubleTop);
        } else if (navbarPosition === 'combo') {
            navbarVertical.removeAttribute('style');
            navbarTopCombo.removeAttribute('style');
            navbarTop.remove(navbarTop);
            navbarTopVertical.remove(navbarTopVertical);
            navbarDoubleTop.remove(navbarDoubleTop);
        } else if (navbarPosition === 'double-top') {
            navbarDoubleTop.removeAttribute('style');
            navbarTopVertical.remove(navbarTopVertical);
            navbarVertical.remove(navbarVertical);
            navbarTop.remove(navbarTop);
            navbarTopCombo.remove(navbarTopCombo);
        } else {
            navbarVertical.removeAttribute('style');
            navbarTopVertical.removeAttribute('style');
            navbarTop.remove(navbarTop);
            navbarDoubleTop.remove(navbarDoubleTop);
            navbarTopCombo.remove(navbarTopCombo);
        }
    </script>
{{--    language change --}}
    <script>
        function langChange(type){
            var url = "{{ route('lang.change') }}";
            window.location.href = url + "?lang="+ type;
        }
    </script>
@endsection
