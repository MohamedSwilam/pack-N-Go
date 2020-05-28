
import Vue from 'vue'
import Router from 'vue-router'
import store from './store/store';
import axios from "./http/axios/index.js"

Vue.use(Router);

const router = new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    scrollBehavior () {
        return { x: 0, y: 0 }
    },
    routes: [

        {
    // =============================================================================
    // MAIN LAYOUT ROUTES
    // =============================================================================
            path: '',
            component: () => import('./layouts/main/Main.vue'),
            children: [
        // =============================================================================
        // Theme Routes
        // =============================================================================
                {
                  path: '/dashboard',
                  name: 'home',
                  beforeEnter: guard,
                  component: () => import('./views/Home.vue'),
                  meta: {
                      breadcrumb: [
                          { title: 'Home', url: '/dashboard', i18n: 'Home', active: true },
                      ],
                      pageTitle: 'Home',
                      pageTitle_i18n: 'Home'
                  }
                },
                {
                    path: '/dashboard/package',
                    name: 'package',
                    component: () => import('./views/package/browse.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Package', active: true, i18n: 'Package' },
                        ],
                        pageTitle: 'Package',
                        pageTitle_i18n: 'Package',
                        permission: 'browse-employee'
                    }
                },
                {
                    path: '/dashboard/package/create',
                    name: 'create-package',
                    component: () => import('./views/package/create.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Package', i18n: 'Package' },
                            { title: 'Create', active: true },
                        ],
                        pageTitle: 'Create Package',
                        pageTitle_i18n: 'Package',
                        permission: 'create-employee'
                    }
                },
                {
                    path: '/dashboard/blog',
                    name: 'blog',
                    component: () => import('./views/blog/browse.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Blog', active: true, i18n: 'Blog' },
                        ],
                        pageTitle: 'Blog',
                        pageTitle_i18n: 'Blog'
                    }
                },
                {
                    path: '/dashboard/insurance',
                    name: 'insurance',
                    component: () => import('./views/insurance/browse.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Insurance', active: true, i18n: 'Blog' },
                        ],
                        pageTitle: 'Insurance',
                        pageTitle_i18n: 'Insurance'
                    }
                },
                {
                    path: '/dashboard/visa',
                    name: 'visa',
                    component: () => import('./views/visa/browse.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Visa', active: true, i18n: 'Visa' },
                        ],
                        pageTitle: 'Visa',
                        pageTitle_i18n: 'Visa',
                        permission: 'browse-visa'
                    }
                },
                {
                    path: '/dashboard/visa/create',
                    name: 'add-visa',
                    component: () => import('./views/visa/create.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Visa', url: '/dashboard/visa', i18n: 'Visa' },
                            { title: 'Add Visa', active: true, i18n: 'AddVisa' },
                        ],
                        pageTitle: 'Add Visa',
                        pageTitle_i18n: 'AddVisa',
                        permission: 'create-visa'
                    }
                },
                {
                    path: '/dashboard/visa/:id',
                    name: 'view-visa',
                    component: () => import('./views/visa/view.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Visa', url: '/dashboard/visa', i18n: 'Visa' },
                            { title: 'Visa', active: true, i18n: 'VisaProfile' },
                        ],
                        pageTitle: 'Edit Visa',
                        pageTitle_i18n: 'editVisa',
                        permission: 'view-visa'
                    }
                },
                {
                    path: '/dashboard/blog/create',
                    name: 'add-blog',
                    component: () => import('./views/blog/create.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Blog', url: '/dashboard/blog', i18n: 'Blog' },
                            { title: 'Create', active: true, i18n: 'Blog' },
                        ],
                        pageTitle: 'Add Blog',
                        pageTitle_i18n: 'AddBlog',
                        permission: 'create-post'
                    }
                },
                {
                    path: '/dashboard/employee',
                    name: 'employee',
                    component: () => import('./views/employee/browse.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Employee', active: true, i18n: 'Employee' },
                        ],
                        pageTitle: 'Employee',
                        pageTitle_i18n: 'Employee',
                        permission: 'browse-employee'
                    }
                },
                {
                    path: '/dashboard/employee/create',
                    name: 'add-employee',
                    component: () => import('./views/employee/create.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Employee', url: '/dashboard/employee', i18n: 'Employee' },
                            { title: 'Add Employee', active: true, i18n: 'AddEmployee' },
                        ],
                        pageTitle: 'Add Employee',
                        pageTitle_i18n: 'AddEmployee',
                        permission: 'create-employee'
                    }
                },
                {
                    path: '/dashboard/employee/:id',
                    name: 'view-employee',
                    component: () => import('./views/employee/view.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Employee', url: '/dashboard/employee', i18n: 'Employee' },
                            { title: 'Profile', active: true, i18n: 'EmployeeProfile' },
                        ],
                        pageTitle: 'Edit Employee',
                        pageTitle_i18n: 'editEmployee',
                        permission: 'view-employee'
                    }
                },
                {
                    path: '/dashboard/employee/:id/edit',
                    name: 'edit-employee',
                    component: () => import('./views/employee/edit.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Employee', url: '/dashboard/employee', i18n: 'Employee' },
                            { title: 'Edit Employee', active: true, i18n: 'editEmployee' },
                        ],
                        pageTitle: 'Edit Employee',
                        pageTitle_i18n: 'editEmployee',
                        permission: 'edit-employee'
                    }
                },
                {
                    path: '/dashboard/client',
                    name: 'client',
                    component: () => import('./views/client/browse.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Client', active: true, i18n: 'client' },
                        ],
                        pageTitle: 'Client',
                        pageTitle_i18n: 'Client',
                        permission: 'browse-booking'
                    }
                },{
                    path: '/dashboard/contact-us',
                    name: 'contact-us',
                    component: () => import('./views/contactUs/browse.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard', i18n: 'Home' },
                            { title: 'Contact Us', active: true, i18n: 'Contact Us' },
                        ],
                        pageTitle: 'Contact Us',
                        pageTitle_i18n: 'Contact Us',
                        permission: 'browse-contact-us'
                    }
                },
                {
                    path: '/dashboard/settings/role',
                    name: 'role',
                    component: () => import('./views/settings/Role/Roles.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard'},
                            { title: 'Settings'},
                            { title: 'Roles', active: true}
                        ],
                        pageTitle: "Roles",
                        permission: 'view-role'
                    }
                },
                {
                    path: '/dashboard/settings/role/create',
                    name: 'create-role',
                    component: () => import('./views/settings/Role/Create.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard'},
                            { title: 'Settings'},
                            { title: 'Roles', url: '/dashboard/settings/role'},
                            { title: 'Create Role', active: true}
                        ],
                        pageTitle: "Create Role",
                        permission: 'create-role'
                    }
                },
                {
                    path: '/dashboard/settings/role/:id',
                    name: 'view-role',
                    component: () => import('./views/settings/Role/View.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard'},
                            { title: 'Settings'},
                            { title: 'Roles', url: '/dashboard/settings/role'},
                            { title: 'Role Information', active: true}
                        ],
                        pageTitle: "Role Information",
                        permission: 'view-role'
                    }
                },
                {
                    path: '/dashboard/settings/role/edit/:id',
                    name: 'edit-role',
                    component: () => import('./views/settings/Role/Edit.vue'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard'},
                            { title: 'Settings'},
                            { title: 'Roles', url: '/dashboard/settings/role'},
                            { title: 'Edit Role', active: true}
                        ],
                        pageTitle: "Edit Role",
                        permission: 'edit-role'
                    }
                },
                {
                    path: '/dashboard/profile',
                    name: 'profile',
                    component: () => import('./views/profile/profile'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard'},
                            { title: 'Profile', active: true}
                        ],
                        pageTitle: "Profile"
                    }
                },
                {
                    path: '/dashboard/background',
                    name: 'background',
                    component: () => import('./views/background/create'),
                    beforeEnter: guard,
                    meta: {
                        breadcrumb: [
                            { title: 'Home', url: '/dashboard'},
                            { title: 'Background', active: true}
                        ],
                        pageTitle: "Background"
                    }
                },

            ],
        },
    // =============================================================================
    // FULL PAGE LAYOUTS
    // =============================================================================
        {
            path: '',
            component: () => import('@/layouts/full-page/FullPage.vue'),
            children: [
        // =============================================================================
        // PAGES
        // =============================================================================
                {
                    path: '/dashboard/login',
                    name: 'pageLogin',
                    component: () => import('./views/pages/Login.vue')
                },
                {
                    path: '/dashboard/error-403',
                    name: 'pageError403',
                    component: () => import('./views/pages/NotAuthorized.vue')
                },
                {
                    path: '/dashboard/error-404',
                    name: 'pageError404',
                    component: () => import('./views/pages/Error404.vue')
                },
            ]
        },
        // Redirect to 404 page, if no match found
        {
            path: '*',
            redirect: '/pages/error-404'
        }
    ],
});

router.afterEach(() => {
  // Remove initial loading
  const appLoading = document.getElementById('loading-bg')
    if (appLoading) {
        appLoading.style.display = "none";
    }
});

function can(permission) {
    let hasPermission = false;
    store.state.auth.AppActiveUser.roles[0].permissions.forEach((userPermission) => {
        if(userPermission.name === permission){
            hasPermission = true;
        }
    });
    return hasPermission;
}

function guard(to, from, next) {
    if (store.state.auth.accessToken) {
        axios.defaults.headers.common['Authorization'] = `Bearer ${store.state.auth.accessToken.accessToken}`;
        if (new Date(Date.now()) < new Date(store.state.auth.accessToken.token.expires_at)){
            to.meta.permission===undefined||can(to.meta.permission)?next():next('/dashboard/error-403');
        } else {
            next('/dashboard/login');
        }
    } else {
        next('/dashboard/login');
    }
}

export default router
