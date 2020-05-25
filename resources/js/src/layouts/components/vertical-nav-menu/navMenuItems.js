
export default [
  {
    url: "/dashboard",
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
        permission: 'browse-booking'
    },
    {
        url: "/dashboard/blog",
        name: "Blog",
        slug: "blog",
        icon: "BookIcon",
        i18n: "Blog"
    },
    {
        url: "/dashboard/insurance",
        name: "Insurance",
        slug: "insurance",
        icon: "ClipboardIcon",
        i18n: "insurance",
        permission: 'browse-insurance'
    },
    {
        url: "/dashboard/visa",
        name: "Visa",
        slug: "visa",
        icon: "CreditCardIcon",
        i18n: "visa",
        permission: 'browse-visa'
    },
    {
        url: "/dashboard/contact-us",
        name: "Contact Us",
        slug: "contactUs",
        icon: "AtSignIcon",
        i18n: "contactUs",
        permission: 'browse-contact-us'
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
