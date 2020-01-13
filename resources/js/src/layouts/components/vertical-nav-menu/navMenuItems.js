
export default [
  {
    url: "/",
    name: "Home",
    slug: "home",
    icon: "HomeIcon",
  },
    {
        url: "/dashboard/employee",
        name: "Employee",
        slug: "employee",
        icon: "UserIcon",
        i18n: "Employee",
        permission: 'browse-employee'
    },
    {
        url: "/dashboard/package",
        name: "Package",
        slug: "package",
        icon: "PackageIcon",
        i18n: "Package"
    },
    {
        url: "/dashboard/client",
        name: "Clients",
        slug: "client",
        icon: "UsersIcon",
        i18n: "Employee",
        permission: 'browse-client'
    },
    {
        url: "/dashboard/blog",
        name: "Blog",
        slug: "blog",
        icon: "BookIcon",
        i18n: "Blog"
    },
    {
        name: "Settings",
        icon: "SettingsIcon",
        i18n: "Settings",
        submenu: [
            {
                url: '/dashboard/settings/role',
                name: "Roles & Permissions",
                slug: "role",
                i18n: "Roles",
                permission: "browse-role"
            }
        ]
    },
]
