<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head/>
    </head>
    <body>
    <div
      x-data="setup()"
      x-init="$refs.loading.classList.add('hidden'); setColors(color);"
      :class="{ 'dark': isDark}"
      @resize.window="watchScreen()"
    >
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">

        <x-partials.sidebarnav/>
        
        <div class="flex flex-1 h-screen overflow-y-scroll">
          <!-- Main content -->
    <main class="flex-1">
      <header class="flex items-center justify-between p-4">
        <div class="flex items-center space-x-4 md:space-x-0">
          <!-- Sidebar button -->
          <button
            @click="isSidebarOpen = true; $nextTick(() => { $refs.sidebar.focus() })"
            class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 md:hidden hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:ring"
          >
            <span class="sr-only">Open main manu</span>
            <span aria-hidden="true">
              <svg
                x-show="!isSidebarOpen"
                class="w-8 h-8"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
              <svg
                x-show="isSidebarOpen"
                class="w-8 h-8"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </span>
          </button>
          <h1 class="text-2xl font-medium">Oaks</h1>
        </div>
        <div class="space-x-2">
          <!-- Toggle dark theme button -->
          <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
            <div
              class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-lighter"
            ></div>
            <div
              class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm"
              :class="{ 'translate-x-0 -translate-y-px  bg-white text-primary-dark': !isDark, 'translate-x-6 text-primary-100 bg-primary-darker': isDark }"
            >
              <svg
                x-show="!isDark"
                class="w-4 h-4"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                />
              </svg>
              <svg
                x-show="isDark"
                class="w-4 h-4"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                />
              </svg>
            </div>
          </button>
          <!-- Search panel button -->
          <button
            @click="openSearchPanel"
            class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:ring"
          >
            <span class="sr-only">Open search panel</span>
            <span aria-hidden="true">
              <svg
                class="w-8 h-8"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                />
              </svg>
            </span>
          </button>
  
          <!-- User panel button -->
          <button
            @click="openUserPanel"
            class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 xl:hidden hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:ring"
          >
            <span class="sr-only">Open user panel</span>
            <span aria-hidden="true">
              <svg
                class="w-8 h-8"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                />
              </svg>
            </span>
          </button>
        </div>
      </header>
                {{ $slot }}
              </main>
        <!-- User panel -->
        <x-partials.userpanel/>
        </div>
        <!-- Settings Panel -->
        <x-partials.settingspanel/>

        <script>
            const setup = () => {
              const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                  return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
              }
      
              const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
              }
      
              const getColor = () => {
                if (window.localStorage.getItem('color')) {
                  return window.localStorage.getItem('color')
                }
                return 'cyan'
              }
      
              const setColors = (color) => {
                const root = document.documentElement
                root.style.setProperty('--color-primary', `var(--color-${color})`)
                root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
                root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
                root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
                root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
                root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
                root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
                this.selectedColor = color
                window.localStorage.setItem('color', color)
              }
      
              return {
                loading: true,
                isDark: getTheme(),
                color: getColor(),
                selectedColor: 'cyan',
                toggleTheme() {
                  this.isDark = !this.isDark
                  setTheme(this.isDark)
                },
                setLightTheme() {
                  this.isDark = false
                  setTheme(this.isDark)
                },
                setDarkTheme() {
                  this.isDark = true
                  setTheme(this.isDark)
                },
                setColors,
                watchScreen() {
                  if (window.innerWidth <= 768) {
                    this.isSidebarOpen = false
                    this.isUserPanelOpen = false
                  } else if (window.innerWidth >= 768 && window.innerWidth < 1280) {
                    this.isSidebarOpen = true
                    this.isUserPanelOpen = false
                  } else if (window.innerWidth >= 1280) {
                    this.isSidebarOpen = true
                    this.isUserPanelOpen = true
                  }
                },
                isSidebarOpen: window.innerWidth >= 768 ? true : false,
                toggleSidbarMenu() {
                  this.isSidebarOpen = !this.isSidebarOpen
                },
                isUserPanelOpen: window.innerWidth >= 1280 ? true : false,
                openUserPanel() {
                  this.isUserPanelOpen = true
                  this.$nextTick(() => {
                    this.$refs.userPanel.focus()
                  })
                },
                isSettingsPanelOpen: false,
                openSettingsPanel() {
                  this.isSettingsPanelOpen = true
                  this.$nextTick(() => {
                    this.$refs.settingsPanel.focus()
                  })
                },
                isNotificationsPanelOpen: false,
                openNotificationsPanel() {
                  this.isNotificationsPanelOpen = true
                  this.$nextTick(() => {
                    this.$refs.notificationsPanel.focus()
                  })
                },
                isSearchPanelOpen: false,
                openSearchPanel() {
                  this.isSearchPanelOpen = true
                  this.$nextTick(() => {
                    this.$refs.searchInput.focus()
                  })
                },
              }
            }
          </script>
                
                
            
        @stack('modals')
        @livewireScripts


    </div>
       
    
    </body>
</html>
