import './bootstrap';

import Alpine from 'alpinejs';



window.Alpine = Alpine;

// alpine
Alpine.data('data', () => ({
    dark: false,
    isSideMenuOpen: false,
    isNotificationsMenuOpen: false,
    isProfileMenuOpen: false,
    isPagesMenuOpen: false,
    isModalOpen: false,
    trapCleanup: null,

    init() {
        this.dark = this.getThemeFromLocalStorage();
    },

    getThemeFromLocalStorage() {
        if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'));
        }
        return (!!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
    },

    setThemeToLocalStorage(value) {
        window.localStorage.setItem('dark', value);
    },

    toggleTheme() {
        this.dark = !this.dark;
        this.setThemeToLocalStorage(this.dark);
    },

    toggleSideMenu() {
        this.isSideMenuOpen = !this.isSideMenuOpen;
    },

    closeSideMenu() {
        this.isSideMenuOpen = false;
    },

    toggleNotificationsMenu() {
        this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
    },

    closeNotificationsMenu() {
        this.isNotificationsMenuOpen = false;
    },

    toggleProfileMenu() {
        this.isProfileMenuOpen = !this.isProfileMenuOpen;
    },

    closeProfileMenu() {
        this.isProfileMenuOpen = false;
    },

    togglePagesMenu() {
        this.isPagesMenuOpen = !this.isPagesMenuOpen;
    },

    openModal() {
        this.isModalOpen = true;
        this.trapCleanup = focusTrap(document.querySelector('#modal'));
    },

    closeModal() {
        this.isModalOpen = false;
        if (this.trapCleanup) {
            this.trapCleanup();
        }
    },
}));
// Alpine.data('data', function () {
//     function getThemeFromLocalStorage() {
//         // if user already changed the theme, use it
//         if (window.localStorage.getItem('dark')) {
//             return JSON.parse(window.localStorage.getItem('dark'))
//         }
//
//         // else return their preferences
//         return (!!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches)
//     }
//
//     function setThemeToLocalStorage(value) {
//         window.localStorage.setItem('dark', value)
//     }
//
//     return {
//         dark: getThemeFromLocalStorage(),
//         toggleTheme() {
//             this.dark = !this.dark
//             setThemeToLocalStorage(this.dark)
//         },
//         isSideMenuOpen: false,
//         toggleSideMenu() {
//             this.isSideMenuOpen = !this.isSideMenuOpen
//         },
//         closeSideMenu() {
//             this.isSideMenuOpen = false
//         },
//         isNotificationsMenuOpen: false,
//         toggleNotificationsMenu() {
//             this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
//         },
//         closeNotificationsMenu() {
//             this.isNotificationsMenuOpen = false
//         },
//         isProfileMenuOpen: false,
//         toggleProfileMenu() {
//             this.isProfileMenuOpen = !this.isProfileMenuOpen
//             console.log(this.isProfileMenuOpen)
//         },
//         closeProfileMenu() {
//             this.isProfileMenuOpen = false
//         },
//         isPagesMenuOpen: false, togglePagesMenu() {
//             this.isPagesMenuOpen = !this.isPagesMenuOpen
//         },
//         // Modal
//         isModalOpen: false,
//         trapCleanup: null, openModal() {
//             this.isModalOpen = true
//             this.trapCleanup = focusTrap(document.querySelector('#modal'))
//         },
//         closeModal() {
//             this.isModalOpen = false
//             this.trapCleanup()
//         },
//     }
// })

Alpine.start();

