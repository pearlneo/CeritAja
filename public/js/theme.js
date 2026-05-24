/*==================== DARK LIGHT THEME ====================*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// ambil dari localStorage
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// APPLY SAAT LOAD
if (selectedTheme === 'dark') {
    document.body.classList.add(darkTheme)
} else {
    document.body.classList.remove(darkTheme)
}

if (themeButton && selectedIcon) {
    themeButton.classList[selectedIcon === 'bx-sun' ? 'add' : 'remove'](iconTheme)
}

// TOGGLE
if (themeButton) {
    themeButton.addEventListener('click', () => {
        document.body.classList.toggle(darkTheme)
        themeButton.classList.toggle(iconTheme)

    // simpan state
    const currentTheme = document.body.classList.contains(darkTheme) ? 'dark' : 'light'
    const currentIcon = themeButton.classList.contains(iconTheme) ? 'bx-sun' : 'bx-moon'

    localStorage.setItem('selected-theme', currentTheme)
    localStorage.setItem('selected-icon', currentIcon)
  })
}

// SYNC ANTAR HALAMAN
window.addEventListener('storage', () => {
    const newTheme = localStorage.getItem('selected-theme')
    const newIcon = localStorage.getItem('selected-icon')

    // update theme
    if (newTheme === 'dark') {
        document.body.classList.add(darkTheme)
    } else {
        document.body.classList.remove(darkTheme)
    }

    // update icon
    if (themeButton && newIcon) {
        themeButton.classList[newIcon === 'bx-sun' ? 'add' : 'remove'](iconTheme)
    }
})