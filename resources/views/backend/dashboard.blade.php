@extends('backend.layouts.app')
@section('content')
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
      <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      <a class="navbar-brand me-1 me-sm-3" href="../index.html">
        <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
      </a>
      <ul class="navbar-nav align-items-center d-none d-lg-block">
        <li class="nav-item">
          <div class="search-box" data-list='{"valueNames":["title"]}'>
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
            <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
              <div class="scrollbar list py-3" style="max-height: 24rem;">
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="../app/events/event-detail.html">
                  <div class="d-flex align-items-center">
                    <span class="fas fa-circle me-2 text-300 fs--2"></span>
                    <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                  </div>
                </a>
                <a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="../app/e-commerce/customers.html">
                  <div class="d-flex align-items-center">
                    <span class="fas fa-circle me-2 text-300 fs--2"></span>
                    <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                  </div>
                </a>
                <hr class="text-200 dark__text-900" />
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-0" href="../app/e-commerce/customers.html">
                  <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                    <div class="flex-1 fs--1 title">All customers list</div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-1 fs-0" href="../app/events/event-detail.html">
                  <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                    <div class="flex-1 fs--1 title">Latest events in current month</div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-1 fs-0" href="../app/e-commerce/product/product-grid.html">
                  <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                    <div class="flex-1 fs--1 title">Most popular products</div>
                  </div>
                </a>
                <hr class="text-200 dark__text-900" />
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                  <div class="d-flex align-items-center">
                    <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="../assets/img/products/3-thumb.png" alt="" /></div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">iPhone</h6>
                      <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-2" href="#!">
                  <div class="d-flex align-items-center">
                    <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/icons/zip.png" alt="" /></div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Falcon v1.8.2</h6>
                      <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                    </div>
                  </div>
                </a>
                <hr class="text-200 dark__text-900" />
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="../pages/user/profile.html">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-l status-online me-2">
                      <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Anna Karinina</h6>
                      <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-2" href="../pages/user/profile.html">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-l me-2">
                      <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Antony Hopkins</h6>
                      <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-2" href="../pages/user/profile.html">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-l me-2">
                      <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Emma Watson</h6>
                      <p class="fs--2 mb-0 d-flex">Google</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="text-center mt-n3">
                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item px-2">
          <div class="theme-control-toggle fa-icon-wait"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
        </li>
        <li class="nav-item d-none d-sm-block">
          <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
            <div class="card card-notification shadow-none">
              <div class="card-header">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <h6 class="card-header-title mb-0">Notifications</h6>
                  </div>
                  <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                </div>
              </div>
              <div class="scrollbar-overlay" style="max-height:19rem">
                <div class="list-group list-group-flush fw-normal fs--1">
                  <div class="list-group-title border-bottom">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                        <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-title border-bottom">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-footer text-center border-top"><a class="card-link d-block" href="../app/social/notifications.html">View all</a></div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown px-1">
          <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
              <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
            </svg></a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
            <div class="card shadow-none">
              <div class="scrollbar-overlay nine-dots-dropdown">
                <div class="card-body px-3">
                  <div class="row text-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../pages/user/profile.html" target="_blank">
                        <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" /></div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                      </a></div>
                    <div class="col-12">
                      <hr class="my-3 mx-n3 bg-200" />
                    </div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../app/events/event-detail.html" target="_blank">
                        <div class="avatar avatar-2xl">
                          <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-2">E</span></div>
                        </div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                      </a></div>
                    <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
            <div class="bg-white dark__bg-1000 rounded-2 py-2">
              <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#!">Set status</a>
              <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp; account</a>
              <a class="dropdown-item" href="#!">Feedback</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../pages/user/settings.html">Settings</a>
              <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
      <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      <a class="navbar-brand me-1 me-sm-3" href="../index.html">
        <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
      </a>
      <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
              <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
              <div class="card navbar-card-app shadow-none dark__bg-1000">
                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                  <div class="row">
                    <div class="col-6 col-md-4">
                      <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../app/kanban.html">Kanban</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/followers.html">Followers</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/quick-links.html">Quick links</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/reports.html">Reports</a>
                      </div>
                    </div>
                    <div class="col-6 col-md-4">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/trainer-profile.html">Trainer profile</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../app/events/event-list.html">Event list</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../app/email/compose.html">Compose</a>
                      </div>
                    </div>
                    <div class="col-6 col-md-4">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/invoice.html">Invoice</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
              <div class="card navbar-card-pages shadow-none dark__bg-1000">
                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/lock-screen.html">Lock screen</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/lock-screen.html">Lock screen</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/lock-screen.html">Lock screen</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../demo/combo-nav.html">Combo nav</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/landing.html">Landing</a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/settings.html">Settings</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-alt.html">Pricing alt</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/500.html">500</a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/faq/faq-accordion.html">Faq accordion</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../index-2.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
              <div class="card navbar-card-components shadow-none dark__bg-1000">
                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/material-icons.html">Material icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/leaflet-map.html">Leaflet map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/breadcrumbs.html">Breadcrumbs</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/bootstrap.html">Bootstrap carousel</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/list-group.html">List group</a></div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/top-navbar.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/figures.html">Figures</a></div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/spinners.html">Spinners</a></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/floating-labels.html">Floating labels</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/validation.html">Validation</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/basic-tables.html">Basic tables</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/advance-tables.html">Advance tables</a>
                        <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/bulk-select.html">Bulk select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/pie-charts.html">Pie charts</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/plyr.html">Plyr</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/grid.html">Grid</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column pt-xxl-1">
                        <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/how-to-use.html">How to use</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/bootstrap-icons.html">Bootstrap icons</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
              <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../changelog.html">Changelog</a></div>
            </div>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item px-2">
          <div class="theme-control-toggle fa-icon-wait"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
        </li>
        <li class="nav-item d-none d-sm-block">
          <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
            <div class="card card-notification shadow-none">
              <div class="card-header">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <h6 class="card-header-title mb-0">Notifications</h6>
                  </div>
                  <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                </div>
              </div>
              <div class="scrollbar-overlay" style="max-height:19rem">
                <div class="list-group list-group-flush fw-normal fs--1">
                  <div class="list-group-title border-bottom">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                        <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-title border-bottom">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-footer text-center border-top"><a class="card-link d-block" href="../app/social/notifications.html">View all</a></div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown px-1">
          <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
              <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
            </svg></a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
            <div class="card shadow-none">
              <div class="scrollbar-overlay nine-dots-dropdown">
                <div class="card-body px-3">
                  <div class="row text-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../pages/user/profile.html" target="_blank">
                        <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" /></div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                      </a></div>
                    <div class="col-12">
                      <hr class="my-3 mx-n3 bg-200" />
                    </div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                      </a></div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../app/events/event-detail.html" target="_blank">
                        <div class="avatar avatar-2xl">
                          <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-2">E</span></div>
                        </div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                      </a></div>
                    <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
            <div class="bg-white dark__bg-1000 rounded-2 py-2">
              <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#!">Set status</a>
              <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp; account</a>
              <a class="dropdown-item" href="#!">Feedback</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../pages/user/settings.html">Settings</a>
              <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
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
    <div class="row g-3 mb-3">
      <div class="col-xxl-6 col-lg-12">
        <div class="card h-100">
          <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-3.png);"></div>
          <!--/.bg-holder-->
          <div class="card-header z-1">
            <h5 class="text-primary">Welcome to Falcon! </h5>
            <h6 class="text-600">Here are some quick links for you to start </h6>
          </div>
          <div class="card-body z-1">
            <div class="row g-2 h-100 align-items-end">
              <div class="col-sm-6 col-md-5">
                <div class="d-flex position-relative">
                  <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-chess-rook text-primary"></span></div>
                  <div class="flex-1"><a class="stretched-link text-800" href="#!">
                      <h6 class="mb-0">General</h6>
                    </a>
                    <p class="mb-0 fs--2 text-500">Customize with a few clicks</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-5">
                <div class="d-flex position-relative">
                  <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-crown text-warning"></span></div>
                  <div class="flex-1"><a class="stretched-link text-800" href="#!">
                      <h6 class="mb-0">Upgrade to pro</h6>
                    </a>
                    <p class="mb-0 fs--2 text-500">Try Pro for 14 days free! </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-5">
                <div class="d-flex position-relative">
                  <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-video text-success"></span></div>
                  <div class="flex-1"><a class="stretched-link text-800" href="#!">
                      <h6 class="mb-0">Create a meeting</h6>
                    </a>
                    <p class="mb-0 fs--2 text-500">Manage and update your meetings</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-5">
                <div class="d-flex position-relative">
                  <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-user text-info"></span></div>
                  <div class="flex-1"><a class="stretched-link text-800" href="#!">
                      <h6 class="mb-0">Members activity</h6>
                    </a>
                    <p class="mb-0 fs--2 text-500">Monitor activity and supervise</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-md-6">
        <div class="card h-100">
          <div class="card-header d-flex flex-between-center">
            <h5 class="mb-0">Team Progress</h5><a class="btn btn-link btn-sm px-0" href="#!">Report<span class="fas fa-chevron-right ms-1 fs--2"> </span></a>
          </div>
          <div class="card-body">
            <p class="fs--1 text-600">See team members' time worked, <br /> activity levels, and progress</p>
            <div class="progress mb-3 rounded-pill" style="height: 6px;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 75%"></div>
            </div>
            <p class="mb-0 text-primary">75% completed</p>
            <p class="mb-0 fs--2 text-500">Jan 1st to 30th</p>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-md-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col">
                <p class="mb-1 fs--2 text-500">Upcoming schedule</p>
                <h5 class="text-primary fs-0">Falcon discussion</h5>
              </div>
              <div class="col-auto">
                <div class="bg-primary-subtle px-3 py-3 rounded-circle text-center" style="width:60px;height:60px;">
                  <h5 class="text-primary mb-0 d-flex flex-column mt-n1"><span>09</span><small class="text-primary fs--2 lh-1">MAR</small></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body d-flex align-items-end">
            <div class="row g-3 justify-content-between">
              <div class="col-10 mt-0">
                <p class="fs--1 text-600 mb-0">The very first general meeting for planning Falcon’s design and development roadmap</p>
              </div>
              <div class="col-auto"><button class="btn btn-success w-100 fs--1" type="button"><span class="fas fa-video me-2"></span>Join meeting</button></div>
              <div class="col-auto ps-0">
                <div class="avatar-group avatar-group-dense">
                  <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                    <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                  </div>
                  <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                    <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />
                  </div>
                  <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                  </div>
                  <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                    <div class="avatar-name rounded-circle "><span>+50</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-3 mb-3">
      <div class="col-xxl-6 col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="row g-3 mb-3">
              <div class="col-sm-6">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-1.png);"></div>
                  <!--/.bg-holder-->
                  <div class="card-body position-relative">
                    <h6>Customers<span class="badge badge-subtle-warning rounded-pill ms-2">-0.23%</span></h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="../app/e-commerce/customers.html">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-2.png);"></div>
                  <!--/.bg-holder-->
                  <div class="card-body position-relative">
                    <h6>Orders<span class="badge badge-subtle-info rounded-pill ms-2">0.0%</span></h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="../app/e-commerce/orders/order-list.html">All orders<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row flex-between-center g-card">
                  <div class="col-auto">
                    <h6 class="mb-0">Report for this week</h6>
                  </div>
                  <div class="col-auto d-flex">
                    <div class="btn btn-sm btn-text d-flex align-items-center p-0 me-3 shadow-none" id="echart-bar-report-for-this-week-option-1"><span class="fas fa-circle text-primary fs--2 me-1"></span><span class="text">This Week </span></div>
                    <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none" id="echart-bar-report-for-this-week-option-2"><span class="fas fa-circle text-300 fs--2 me-1"></span><span class="text">Last Week</span></div>
                  </div>
                </div>
              </div>
              <div class="card-body py-0">
                <!-- Find the JS file for the following chart at: src/js/charts/echarts/report-for-this-week.js-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                <div class="echart-bar-report-for-this-week" data-echart-responsive="true" data-chart="{&quot;option1&quot;:&quot;echart-bar-report-for-this-week-option-1&quot;,&quot;option2&quot;:&quot;echart-bar-report-for-this-week-option-2&quot;}"> </div>
              </div>
              <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">See all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-lg-6 order-xxl-1">
        <div class="card h-100">
          <div class="card-header bg-light d-flex flex-between-center">
            <h5 class="mb-0">Project Locations</h5>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Move</a><a class="dropdown-item" href="#!">Resize</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
              </div>
            </div>
          </div>
          <div class="card-body h-100 p-0">
            <div class="h-100 bg-white" id="map" style="min-height: 300px;"></div>
          </div>
          <div class="card-footer bg-light">
            <div class="row justify-content-between">
              <div class="col-auto"><select class="form-select form-select-sm">
                  <option value="week" selected="selected">Last 7 days</option>
                  <option value="month">Last month</option>
                  <option value="year">Last year</option>
                </select></div>
              <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="d-none d-sm-inline-block me-1">Location</span>overview<span class="fa fa-chevron-right ms-1 fs--1"></span></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-lg-6">
        <div class="card h-100">
          <div class="card-header d-flex flex-between-center">
            <h6 class="mb-0">Project Statistics</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-project-statistics" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-project-statistics"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row mb-2">
              <div class="col-6 border-end border-200">
                <h4 class="mb-0">5,432</h4>
                <p class="fs--1 text-600 mb-0">Total Work Hours</p>
              </div>
              <div class="col-3 border-end text-center border-200">
                <h4 class="fs-0 mb-0">13</h4>
                <p class="fs--1 text-600 mb-0">Projects</p>
              </div>
              <div class="col-3 text-center">
                <h4 class="fs-0 mb-0">7</h4>
                <p class="fs--1 text-600 mb-0">Ongoing</p>
              </div>
            </div>
            <div class="progress-stacked overflow-visible mt-4 rounded-3" style="height: 6px;">
              <div class="progress" role="progressbar" style="width: 25%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="overflow-visible progress-bar bg-progress-gradient border-end border-white border-2 rounded-end rounded-pill"><span class="mt-n4 text-900 fw-bold">25%</span></div>
              </div>
              <div class="progress" role="progressbar" style="width: 45%; height: 6px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                <div class="overflow-visible progress-bar bg-secondary border-end border-white border-2"><span class="mt-n4 text-900 fw-bold">45%</span></div>
              </div>
              <div class="progress" role="progressbar" style="width: 15%; height: 6px;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                <div class="overflow-visible progress-bar bg-warning border-end border-white border-2"><span class="mt-n4 text-900 fw-bold">15%</span></div>
              </div>
              <div class="progress" role="progressbar" style="width: 15%; height: 6px;" aria-valuenow="15" aria-valuemin="15" aria-valuemax="100">
                <div class="overflow-visible progress-bar bg-info rounded-start rounded-pill"><span class="mt-n4 text-900 fw-bold">15%</span></div>
              </div>
            </div>
            <p class="fs--1 mb-2 mt-3">Assignees in Sprint</p>
            <div class="avatar-group avatar-group-dense mb-3">
              <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
              </div>
              <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />
              </div>
              <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
              </div>
              <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />
              </div>
              <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />
              </div>
              <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                <div class="avatar-name rounded-circle "><span>+50</span></div>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <h6>Project </h6>
              <h6>Team</h6>
            </div>
            <div class="d-flex flex-between-center rounded-3 bg-light p-3 mb-2"><a href="#!">
                <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-primary"></span>Organizing UI</h6>
              </a><a class="fs--2 text-600 mb-0" href="#!">ThemeWagon</a></div>
            <div class="d-flex flex-between-center rounded-3 bg-light p-3 mb-2"><a href="#!">
                <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-warning"></span>Create Mobile View</h6>
              </a><a class="fs--2 text-600 mb-0" href="#!">Mailbluster</a></div>
            <div class="d-flex flex-between-center rounded-3 bg-light p-3 mb-2"><a href="#!">
                <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-secondary"></span>Create Landing Pages</h6>
              </a><a class="fs--2 text-600 mb-0" href="#!">BlackBOx</a></div>
            <div class="d-flex flex-between-center rounded-3 bg-light p-3"><a href="#!">
                <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-info"></span>Front end issues</h6>
              </a><a class="fs--2 text-600 mb-0" href="#!">Falcon Team</a></div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-lg-6 order-xxl-1">
        <div class="card h-100">
          <div class="card-header">
            <h6 class="mb-0">Recent Activity</h6>
          </div>
          <div class="card-body scrollbar recent-activity-body-height ps-2">
            <div class="row g-3 timeline timeline-primary timeline-past pb-x1">
              <div class="col-auto ps-4 ms-2">
                <div class="ps-2">
                  <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-envelope"></span></div>
                </div>
              </div>
              <div class="col">
                <div class="row gx-0 border-bottom pb-x1">
                  <div class="col">
                    <h6 class="text-800 mb-1">Antony Hopkins sent an Email</h6>
                    <p class="fs--1 text-600 mb-0">Got an email for previous year sale report</p>
                  </div>
                  <div class="col-auto">
                    <p class="fs--2 text-500 mb-0">2m ago</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-3 timeline timeline-primary timeline-past pb-x1">
              <div class="col-auto ps-4 ms-2">
                <div class="ps-2">
                  <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-archive"></span></div>
                </div>
              </div>
              <div class="col">
                <div class="row gx-0 border-bottom pb-x1">
                  <div class="col">
                    <h6 class="text-800 mb-1">Emma archived a board</h6>
                    <p class="fs--1 text-600 mb-0">A finished project's board is archived recently</p>
                  </div>
                  <div class="col-auto">
                    <p class="fs--2 text-500 mb-0">26m ago</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-3 timeline timeline-primary timeline-current pb-x1">
              <div class="col-auto ps-4 ms-2">
                <div class="ps-2">
                  <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-code"></span></div>
                </div>
              </div>
              <div class="col">
                <div class="row gx-0 border-bottom pb-x1">
                  <div class="col">
                    <h6 class="text-800 mb-1">Falcon v3.0.0 released with new features</h6>
                    <p class="fs--1 text-600 mb-0">Falcon new version is released successfully with new Dashboards</p>
                  </div>
                  <div class="col-auto">
                    <p class="fs--2 text-500 mb-0">1h ago</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-3 timeline timeline-primary  pb-x1">
              <div class="col-auto ps-4 ms-2">
                <div class="ps-2">
                  <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-code-branch"></span></div>
                </div>
              </div>
              <div class="col">
                <div class="row gx-0 border-bottom pb-x1">
                  <div class="col">
                    <h6 class="text-800 mb-1">Rowan shared a link to the board</h6>
                    <p class="fs--1 text-600 mb-0">A link is shared with attachments</p>
                  </div>
                  <div class="col-auto">
                    <p class="fs--2 text-500 mb-0">3h ago</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-3 timeline timeline-primary">
              <div class="col-auto ps-4 ms-2">
                <div class="ps-2">
                  <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary far fa-file-code"></span></div>
                </div>
              </div>
              <div class="col">
                <div class="row gx-0">
                  <div class="col">
                    <h6 class="text-800 mb-1">Anna updated a file</h6>
                    <p class="fs--1 text-600 mb-0">Fixed some bugs and spelling errors on this update</p>
                  </div>
                  <div class="col-auto">
                    <p class="fs--2 text-500 mb-0">4h ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-lg-6 order-xxl-3">
        <div class="card h-100">
          <div class="card-header bg-light py-2 d-flex flex-between-center">
            <h6 class="mb-0">Members Activity</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-members-activity" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-members-activity"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
          <div class="card-body members-activity scrollbar-overlay">
            <div class="row g-2 mb-4">
              <div class="col-12 d-flex align-items-center">
                <div class="avatar avatar-xl rounded-circle">
                  <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />
                </div>
                <h6 class="mb-0 ps-2">Chandler Bing</h6>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-1.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-danger">20%</div>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-2.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-primary">67%</div>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-3.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-success">89%</div>
              </div>
            </div>
            <div class="row g-2 mb-4">
              <div class="col-12 d-flex align-items-center">
                <div class="avatar avatar-xl rounded-circle">
                  <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />
                </div>
                <h6 class="mb-0 ps-2">Jared Dunn</h6>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-4.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-success">20%</div>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-5.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-danger">67%</div>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-6.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-primary">89%</div>
              </div>
            </div>
            <div class="row g-2 mb-4">
              <div class="col-12 d-flex align-items-center">
                <div class="avatar avatar-xl rounded-circle">
                  <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                </div>
                <h6 class="mb-0 ps-2">Monica Geller</h6>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-7.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-danger">20%</div>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-8.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-success">67%</div>
              </div>
              <div class="col-4 position-relative"><img class="w-100" src="../assets/img/management/activity-9.png" alt="..." />
                <div class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-subtle-primary">89%</div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">See all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
        </div>
      </div>
      <div class="col-xxl-8 order-xxl-2">
        <div class="card h-100">
          <div class="card-body p-0">
            <div class="scrollbar">
              <table class="table table-dashboard mb-0 table-borderless fs--1 border-200 overflow-hidden rounded-3 table-member-info">
                <thead class="bg-light">
                  <tr class="text-900">
                    <th>Member info</th>
                    <th class="text-center">Attendance</th>
                    <th class="text-center">Today</th>
                    <th class="text-end">This Week</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-bottom border-200">
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-2xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Gavin Belson</a></h6>
                          <p class="text-500 fs--2 mb-0">CRM dashboard design</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-warning">Late</small></td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-danger">12%</small>
                      <p class="fs--2 mb-0">1h:52m</p>
                    </td>
                    <td class="align-middle">
                      <div class="row g-2 justify-content-end">
                        <div class="col-auto"><small class="badge fw-semi-bold rounded-pill badge-subtle-primary">68%</small>
                          <p class="fs--2 mb-0">1h:52m</p>
                        </div>
                        <div class="col-auto mt-auto">
                          <div class="mb-1" data-echarts='{"tooltip":{"show":false},"series":[{"data":[15,22,28,20,20,35]}]}'></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="border-bottom border-200">
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-2xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/9.jpg" alt="" />
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Rsuss Hanneman</a></h6>
                          <p class="text-500 fs--2 mb-0">Smart Learning Management</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-success">intime</small></td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-success">86%</small>
                      <p class="fs--2 mb-0">1h:52m</p>
                    </td>
                    <td class="align-middle">
                      <div class="row g-2 justify-content-end">
                        <div class="col-auto"><small class="badge fw-semi-bold rounded-pill badge-subtle-warning">45%</small>
                          <p class="fs--2 mb-0">1h:52m</p>
                        </div>
                        <div class="col-auto mt-auto">
                          <div class="mb-1" data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,20,40,18,20,35]}]}'></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="border-bottom border-200">
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-2xl status-away">
                          <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Peter Gregory</a></h6>
                          <p class="text-500 fs--2 mb-0">Graduate Network</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-success">intime</small></td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-success">97%</small>
                      <p class="fs--2 mb-0">1h:52m</p>
                    </td>
                    <td class="align-middle">
                      <div class="row g-2 justify-content-end">
                        <div class="col-auto"><small class="badge fw-semi-bold rounded-pill badge-subtle-primary">60%</small>
                          <p class="fs--2 mb-0">1h:52m</p>
                        </div>
                        <div class="col-auto mt-auto">
                          <div class="mb-1" data-echarts='{"tooltip":{"show":false},"series":[{"data":[20,22,18,30,20,35]}]}'></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="border-bottom border-200">
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-2xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/avatar.png" alt="" />
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Jian-Yang</a></h6>
                          <p class="text-500 fs--2 mb-0">Quality testing</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-success">intime</small></td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-warning">34%</small>
                      <p class="fs--2 mb-0">1h:52m</p>
                    </td>
                    <td class="align-middle">
                      <div class="row g-2 justify-content-end">
                        <div class="col-auto"><small class="badge fw-semi-bold rounded-pill badge-subtle-success">80%</small>
                          <p class="fs--2 mb-0">1h:52m</p>
                        </div>
                        <div class="col-auto mt-auto">
                          <div class="mb-1" data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,22,18,20,20,35]}]}'></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="border-bottom border-200">
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-2xl status-do-not-disturb">
                          <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Laurie Bream</a></h6>
                          <p class="text-500 fs--2 mb-0">Accounts</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-warning">Late</small></td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-primary">12%</small>
                      <p class="fs--2 mb-0">1h:52m</p>
                    </td>
                    <td class="align-middle">
                      <div class="row g-2 justify-content-end">
                        <div class="col-auto"><small class="badge fw-semi-bold rounded-pill badge-subtle-danger">68%</small>
                          <p class="fs--2 mb-0">1h:52m</p>
                        </div>
                        <div class="col-auto mt-auto">
                          <div class="mb-1" data-echarts='{"tooltip":{"show":false},"series":[{"data":[20,22,18,20,20,35]}]}'></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-2xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/25.jpg" alt="" />
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Fionna Mayer</a></h6>
                          <p class="text-500 fs--2 mb-0">SAAS dashboard design</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-danger">Absent</small></td>
                    <td class="align-middle text-center"><small class="badge fw-semi-bold rounded-pill badge-subtle-primary">12%</small>
                      <p class="fs--2 mb-0">1h:52m</p>
                    </td>
                    <td class="align-middle">
                      <div class="row g-2 justify-content-end">
                        <div class="col-auto"><small class="badge fw-semi-bold rounded-pill badge-subtle-success">68%</small>
                          <p class="fs--2 mb-0">1h:52m</p>
                        </div>
                        <div class="col-auto mt-auto">
                          <div class="mb-1" data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,22,18,30,20,35]}]}'></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer bg-light py-2">
            <div class="row flex-between-center">
              <div class="col-auto"><select class="form-select form-select-sm">
                  <option>Last 7 days</option>
                  <option>Last Month</option>
                  <option>Last Year</option>
                </select></div>
              <div class="col-auto"><a class="btn btn-sm btn-link px-0 fw-medium" href="#!">View All<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 order-xxl-3">
        <div class="card" id="runningProjectTable" data-list='{"valueNames":["projects","worked","time","date"]}'>
          <div class="card-header">
            <h6 class="mb-0">Running Projects</h6>
          </div>
          <div class="card-body p-0">
            <div class="scrollbar">
              <table class="table mb-0 table-borderless fs--2 border-200 overflow-hidden table-running-project">
                <thead class="bg-light">
                  <tr class="text-800">
                    <th class="sort" data-sort="projects">Projects</th>
                    <th class="sort" data-sort="time">Progress</th>
                    <th class="sort text-center" data-sort="worked"> Worked</th>
                    <th class="sort text-center" data-sort="date">Due Date</th>
                    <th class="text-end">Members</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xl">
                          <div class="avatar-name rounded-circle text-primary bg-primary-subtle fs-0"><span>C</span></div>
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">CRM dashboard design</a></h6>
                          <p class="text-500 fs--2 mb-0">Falcon</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress rounded-3 worked" style="height: 6px;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 50%"></div>
                      </div>
                    </td>
                    <td class="align-middle text-center time">
                      <p class="fs--1 mb-0 fw-semi-bold">12h:50m:00s</p>
                    </td>
                    <td class="align-middle text-center date">
                      <p class="fs--1 mb-0 fw-semi-bold">01/02/22</p>
                    </td>
                    <td>
                      <div class="avatar-group justify-content-end">
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <div class="avatar-name rounded-circle "><span>+2</span></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xl">
                          <div class="avatar-name rounded-circle text-success bg-success-subtle fs-0"><span>U</span></div>
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">UI/UX Redesign</a></h6>
                          <p class="text-500 fs--2 mb-0">Themewagon</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress rounded-3 worked" style="height: 6px;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 70%"></div>
                      </div>
                    </td>
                    <td class="align-middle text-center time">
                      <p class="fs--1 mb-0 fw-semi-bold">11h:50m:00s</p>
                    </td>
                    <td class="align-middle text-center date">
                      <p class="fs--1 mb-0 fw-semi-bold">04/02/22</p>
                    </td>
                    <td>
                      <div class="avatar-group justify-content-end">
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <div class="avatar-name rounded-circle "><span>+5</span></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xl">
                          <div class="avatar-name rounded-circle text-info bg-info-subtle fs-0"><span>F</span></div>
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">F.A.Q Section</a></h6>
                          <p class="text-500 fs--2 mb-0">Mailbluster</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress rounded-3 worked" style="height: 6px;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 60%"></div>
                      </div>
                    </td>
                    <td class="align-middle text-center time">
                      <p class="fs--1 mb-0 fw-semi-bold">3h:30m:50s</p>
                    </td>
                    <td class="align-middle text-center date">
                      <p class="fs--1 mb-0 fw-semi-bold">01/02/22</p>
                    </td>
                    <td>
                      <div class="avatar-group justify-content-end">
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xl">
                          <div class="avatar-name rounded-circle text-warning bg-warning-subtle fs-0"><span>D</span></div>
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Drip Campaign Feature</a></h6>
                          <p class="text-500 fs--2 mb-0">Themewagon</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress rounded-3 worked" style="height: 6px;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 80%"></div>
                      </div>
                    </td>
                    <td class="align-middle text-center time">
                      <p class="fs--1 mb-0 fw-semi-bold">12h:20m:00s</p>
                    </td>
                    <td class="align-middle text-center date">
                      <p class="fs--1 mb-0 fw-semi-bold">22/03/22</p>
                    </td>
                    <td>
                      <div class="avatar-group justify-content-end">
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <div class="avatar-name rounded-circle "><span>+2</span></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xl">
                          <div class="avatar-name rounded-circle text-danger bg-danger-subtle fs-0"><span>S</span></div>
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Studio Recording</a></h6>
                          <p class="text-500 fs--2 mb-0">Mailbluster Marketing</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress rounded-3 worked" style="height: 6px;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 40%"></div>
                      </div>
                    </td>
                    <td class="align-middle text-center time">
                      <p class="fs--1 mb-0 fw-semi-bold">11h:10m:00s</p>
                    </td>
                    <td class="align-middle text-center date">
                      <p class="fs--1 mb-0 fw-semi-bold">28/02/22</p>
                    </td>
                    <td>
                      <div class="avatar-group justify-content-end">
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xl">
                          <div class="avatar-name rounded-circle text-success bg-success-subtle fs-0"><span>P</span></div>
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Project Managenemt</a></h6>
                          <p class="text-500 fs--2 mb-0">Themewagon</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress rounded-3 worked" style="height: 6px;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 50%"></div>
                      </div>
                    </td>
                    <td class="align-middle text-center time">
                      <p class="fs--1 mb-0 fw-semi-bold">12h:30m:30s</p>
                    </td>
                    <td class="align-middle text-center date">
                      <p class="fs--1 mb-0 fw-semi-bold">08/01/22</p>
                    </td>
                    <td>
                      <div class="avatar-group justify-content-end">
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/25.jpg" alt="" />
                        </div>
                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                          <img class="rounded-circle" src="../assets/img/team/18.jpg" alt="" />
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer bg-light py-0 text-center"><a class="btn btn-sm btn-link py-2" href="#!">Show All Projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
        </div>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-xxl-8">
        <div class="card overflow-hidden h-100">
          <div class="card-body p-0 management-calendar">
            <div class="row g-3">
              <div class="col-md-7">
                <div class="p-x1">
                  <div class="d-flex justify-content-between">
                    <div class="order-md-1"><button class="btn btn-sm border me-1 shadow-sm" type="button" data-event="prev" data-bs-toggle="tooltip" title="Previous"><span class="fas fa-chevron-left"></span></button><button class="btn btn-sm text-secondary border px-sm-4 shadow-sm" type="button" data-event="today">Today</button><button class="btn btn-sm border ms-1 shadow-sm" type="button" data-event="next" data-bs-toggle="tooltip" title="Next"><span class="fas fa-chevron-right"></span></button></div><button class="btn btn-sm text-primary border order-md-0 shadow-none" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>New Schedule</button>
                  </div>
                </div><!-- Find the JS file for the following calendar at: src/js/calendar/management-calendar.js-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                <div class="calendar-outline px-3" id="managementAppCalendar" data-calendar-option='{"title":"management-calendar-title","day":"management-calendar-day","events":"management-calendar-events"}'></div>
              </div>
              <div class="col-md-5 bg-light pt-3">
                <div class="px-3">
                  <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2" id="management-calendar-title"></h4>
                  <p class="text-500 mb-0" id="management-calendar-day"></p>
                  <ul class="list-unstyled mt-3 scrollbar management-calendar-events" id="management-calendar-events"></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4">
        <div class="card h-100">
          <div class="card-header">
            <h6 class="mb-0">To Do List</h6>
          </div>
          <div class="card-body p-0">
            <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-x1 border-200 todo-list-item">
              <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-primary" type="checkbox" id="checkbox-todo-0" /><label class="form-check-label mb-0 p-3" for="checkbox-todo-0">Design a facebook ad</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"></span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-x1 border-200 todo-list-item">
              <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-secondary" type="checkbox" id="checkbox-todo-1" /><label class="form-check-label mb-0 p-3" for="checkbox-todo-1">Analyze Data</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"></span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-x1 border-200 todo-list-item">
              <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-success" type="checkbox" id="checkbox-todo-2" /><label class="form-check-label mb-0 p-3" for="checkbox-todo-2">Youtube campaign</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"></span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-2" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-x1 border-200 todo-list-item">
              <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-warning" type="checkbox" id="checkbox-todo-3" /><label class="form-check-label mb-0 p-3" for="checkbox-todo-3">Assign 10 employee</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"></span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-3" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-x1 border-200 todo-list-item">
              <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-danger" type="checkbox" id="checkbox-todo-4" /><label class="form-check-label mb-0 p-3" for="checkbox-todo-4">Meeting at 12</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"></span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-4" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-x1 border-200 todo-list-item border-bottom">
              <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-info" type="checkbox" id="checkbox-todo-5" /><label class="form-check-label mb-0 p-3" for="checkbox-todo-5">Meeting at 10</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button><button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"></span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-5" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!"><span class="fas fa-plus me-1 fs--2"></span>Add New Task</a></div>
        </div>
      </div>
    </div>

@endsection
