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
                {{ $slot }}
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
