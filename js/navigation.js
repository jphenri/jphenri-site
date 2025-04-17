/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
;(() => {
  const menuToggle = document.getElementById("menu-toggle")
  const mobileMenu = document.getElementById("mobile-menu")

  if (!menuToggle || !mobileMenu) {
    return
  }

  menuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("active")
    menuToggle.setAttribute("aria-expanded", mobileMenu.classList.contains("active"))
  })

  // Close the mobile menu when clicking outside
  document.addEventListener("click", (event) => {
    if (
      !menuToggle.contains(event.target) &&
      !mobileMenu.contains(event.target) &&
      mobileMenu.classList.contains("active")
    ) {
      mobileMenu.classList.remove("active")
      menuToggle.setAttribute("aria-expanded", "false")
    }
  })

  // Close the mobile menu when the window is resized
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768 && mobileMenu.classList.contains("active")) {
      mobileMenu.classList.remove("active")
      menuToggle.setAttribute("aria-expanded", "false")
    }
  })
})()
